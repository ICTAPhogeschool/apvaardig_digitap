<?php

namespace block_apvaardig_digitap\automapper_plus\MappingOperation\Implementations;

use block_apvaardig_digitap\automapper_plus\Configuration\Options;
use block_apvaardig_digitap\automapper_plus\MappingOperation\MappingOperationInterface;

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
