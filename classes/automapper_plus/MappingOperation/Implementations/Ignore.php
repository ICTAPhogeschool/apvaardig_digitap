<?php

namespace quiz_reporting_block\automapper_plus\MappingOperation\Implementations;

use quiz_reporting_block\automapper_plus\Configuration\Options;
use quiz_reporting_block\automapper_plus\MappingOperation\MappingOperationInterface;

/**
 * Class Ignore
 *
 * @package AutoMapperPlus\MappingOperation\Implementations
 */
class Ignore implements MappingOperationInterface
{
    /**
     * @inheritdoc
     */
    public function mapProperty(string $propertyName, $source, $destination): void
    {
        // Don't do anything.
    }

    /**
     * @inheritdoc
     */
    public function setOptions(Options $options): void
    {
        // We don't need any configuration.
    }

}
