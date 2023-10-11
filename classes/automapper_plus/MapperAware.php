<?php

namespace block_apvaardig_digitap\automapper_plus;

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
