<?php

namespace block_apvaardig_digitap\automapper_plus\NameResolver;

use block_apvaardig_digitap\automapper_plus\Configuration\Options;
use block_apvaardig_digitap\automapper_plus\MappingOperation\MappingOperationInterface;

/**
 * Interface NameResolverInterface
 *
 * @package AutoMapperPlus\NameResolver
 */
interface NameResolverInterface
{
    /**
     * When given a target property, will return the expected name of the source
     * property.
     *
     * For example, when using naming conventions, this should resolve
     * `snake_case` to `snakeCase`. Or when using `FromProperty`, this should
     * return the name defined in `FromProperty`.
     *
     * @param string $targetPropertyName
     *   The property we're mapping to.
     * @param MappingOperationInterface $operation
     *   Needed to check if an alternative property is defined.
     * @param Options $options
     * @return string
     */
    public function getSourcePropertyName(
        string $targetPropertyName,
        MappingOperationInterface $operation,
        Options $options
    ): string;
}
