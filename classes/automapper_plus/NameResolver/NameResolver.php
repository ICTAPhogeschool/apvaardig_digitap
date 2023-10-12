<?php

namespace quiz_reporting_block\automapper_plus\NameResolver;

use quiz_reporting_block\automapper_plus\Configuration\Options;
use quiz_reporting_block\automapper_plus\MappingOperation\AlternativePropertyProvider;
use quiz_reporting_block\automapper_plus\MappingOperation\MappingOperationInterface;
use quiz_reporting_block\automapper_plus\NameConverter\NameConverter;

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
