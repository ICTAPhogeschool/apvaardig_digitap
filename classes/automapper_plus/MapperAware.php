<?php

namespace quiz_reporting_block\automapper_plus;

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
