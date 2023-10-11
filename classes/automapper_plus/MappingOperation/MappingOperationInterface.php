<?php

namespace block_apvaardig_digitap\automapper_plus\MappingOperation;

use block_apvaardig_digitap\automapper_plus\Configuration\Options;

/**
 * Interface MappingOperationInterface
 *
 * @package AutoMapperPlus\MappingOperation
 */
interface MappingOperationInterface
{
    /**
     * @param string $propertyName
     * @param $source
     * @param $destination
     * @return void
     */
    public function mapProperty(string $propertyName, $source, $destination): void;

    /**
     * @param Options $options
     */
    public function setOptions(Options $options): void;
}
