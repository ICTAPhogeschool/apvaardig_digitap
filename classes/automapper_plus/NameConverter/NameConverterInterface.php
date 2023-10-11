<?php

namespace block_apvaardig_digitap\automapper_plus\NameConverter;

use block_apvaardig_digitap\automapper_plus\NameConverter\NamingConvention\NamingConventionInterface;

/**
 * Interface NameResolverInterface
 *
 * @package AutoMapperPlus\NameResolver
 */
interface NameConverterInterface
{
    /**
     * @param NamingConventionInterface $sourceNamingConvention
     * @param NamingConventionInterface $targetNamingConvention
     * @param string $source
     * @return string
     */
    public static function convert(
        NamingConventionInterface $sourceNamingConvention,
        NamingConventionInterface $targetNamingConvention,
        string $source
    ): string;
}
