<?php

namespace block_quiz_reporting\automapper_plus;

/**
 * Interface MapperAware
 *
 * @package AutoMapperPlus
 */
interface MapperAware
{
    /**
     * @param AutoMapperInterface $mapper
     */
    public function setMapper(AutoMapperInterface $mapper): void;
}
