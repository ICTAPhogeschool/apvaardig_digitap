<?php

namespace block_quiz_reporting\automapper_plus\MappingOperation;

use block_quiz_reporting\automapper_plus\AutoMapperInterface;

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
