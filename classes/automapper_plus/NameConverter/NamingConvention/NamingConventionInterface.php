<?php

namespace block_quiz_reporting\automapper_plus\NameConverter\NamingConvention;

/**
 * Interface NamingConventionInterface
 *
 * @package AutoMapperPlus\NameConverter\NamingConvention
 */
interface NamingConventionInterface
{
    /**
     * @param string $name
     * @return string[]
     */
    public function toParts(string $name): array;

    /**
     * @param string[] $parts
     * @return string
     */
    public function fromParts(array $parts): string;
}
