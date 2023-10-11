<?php

namespace block_apvaardig_digitap\automapper_plus\MappingOperation\Implementations;

use block_apvaardig_digitap\automapper_plus\MappingOperation\ContextAwareOperation;
use block_apvaardig_digitap\automapper_plus\MappingOperation\ContextAwareTrait;
use block_apvaardig_digitap\automapper_plus\MappingOperation\DefaultMappingOperation;
use block_apvaardig_digitap\automapper_plus\MappingOperation\MapperAwareOperation;
use block_apvaardig_digitap\automapper_plus\MappingOperation\MapperAwareTrait;

/**
 * Class MapTo.
 *
 * Allows a property to be mapped itself.
 *
 * @package AutoMapperPlus\MappingOperation\Implementations
 */
class MapTo extends DefaultMappingOperation implements
    MapperAwareOperation,
    ContextAwareOperation
{
    use MapperAwareTrait;
    use ContextAwareTrait;

    /**
     * @var string
     */
    private $destinationClass;

    /**
     * @var bool
     */
    private $sourceIsObjectArray;

    /**
     * @var array
     */
    private $ownContext = [];

    /**
     * MapTo constructor.
     *
     * @param string $destinationClass
     * @param bool $sourceIsObjectArray
     *   Indicates whether or not an array as source value should be treated as
     *   a collection of elements, or as an array representing an object.
     * @param array
     *   $context Optional context that will be merged with the parent's
     *   context.
     */
    public function __construct(
        string $destinationClass,
        bool $sourceIsObjectArray = false,
        array $context = []
    ) {
        $this->destinationClass = $destinationClass;
        $this->sourceIsObjectArray = $sourceIsObjectArray;
        $this->ownContext = $context;
    }

    /**
     * @return string
     */
    public function getDestinationClass(): string
    {
        return $this->destinationClass;
    }

    /**
     * @inheritdoc
     */
    protected function getSourceValue($source, string $propertyName)
    {
        $value = $this->propertyReader->getProperty(
            $source,
            $this->getSourcePropertyName($propertyName)
        );

        $context = array_merge($this->context, $this->ownContext);

        return $this->sourceIsObjectArray || !$this->isCollection($value)
            ? $this->mapper->map($value, $this->destinationClass, $context)
            : $this->mapper->mapMultiple($value, $this->destinationClass, $context);
    }

    /**
     * @param $variable
     * @return bool
     */
    private function isCollection($variable): bool
    {
        return \is_array($variable) || $variable instanceof \Traversable;
    }
}
