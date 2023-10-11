<?php

namespace block_apvaardig_digitap\automapper_plus\PropertyAccessor;

/**
 * Interface PropertyWriterInterface
 *
 * @package AutoMapperPlus\PropertyAccessor
 */
interface PropertyWriterInterface
{
    /**
     * @param $object
     * @param string $propertyName
     * @param $value
     */
    public function setProperty($object, string $propertyName, $value): void;
}
