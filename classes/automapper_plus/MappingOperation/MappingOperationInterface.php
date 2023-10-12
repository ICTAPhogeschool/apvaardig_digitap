<?php

namespace quiz_reporting_block\automapper_plus\MappingOperation;

use quiz_reporting_block\automapper_plus\Configuration\Options;

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
