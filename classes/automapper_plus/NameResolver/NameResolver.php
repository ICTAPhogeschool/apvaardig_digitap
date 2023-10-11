<?php

namespace block_apvaardig_digitap\automapper_plus\NameResolver;

use block_apvaardig_digitap\automapper_plus\Configuration\Options;
use block_apvaardig_digitap\automapper_plus\MappingOperation\AlternativePropertyProvider;
use block_apvaardig_digitap\automapper_plus\MappingOperation\MappingOperationInterface;
use block_apvaardig_digitap\automapper_plus\NameConverter\NameConverter;

/**
 * Class NameResolver
 *
 * @package AutoMapperPlus\NameResolver
 */
class NameResolver implements NameResolverInterface
{
    /**
     * @inheritdoc
     */
    public function getSourcePropertyName(
        string $targetPropertyName,
        MappingOperationInterface $operation,
        Options $options
    ): string {
        if ($operation instanceof AlternativePropertyProvider) {
            return $operation->getAlternativePropertyName();
        }

        if (!$options->shouldConvertName()) {
            return $targetPropertyName;
        }

        return NameConverter::convert(
            $options->getDestinationMemberNamingConvention(),
            $options->getSourceMemberNamingConvention(),
            $targetPropertyName
        );
    }
}
