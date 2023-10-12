<?php

namespace quiz_reporting_block\automapper_plus\MappingOperation;

use quiz_reporting_block\automapper_plus\AutoMapperInterface;

/**
 * Trait MapperAwareTrait
 *
 * @package AutoMapperPlus\MappingOperation
 */
trait MapperAwareTrait
{
    /**
     * @var AutoMapperInterface
     */
    protected $mapper;

    /**
     * @param AutoMapperInterface $mapper
     */
    public function setMapper(AutoMapperInterface $mapper): void
    {
        $this->mapper = $mapper;
    }
}
