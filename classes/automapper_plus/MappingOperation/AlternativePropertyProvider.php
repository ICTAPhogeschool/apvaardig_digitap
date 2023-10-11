<?php

namespace block_apvaardig_digitap\automapper_plus\MappingOperation;

/**
 * Interface AlternativePropertyProvider
 *
 * @package AutoMapperPlus\MappingOperation
 */
interface AlternativePropertyProvider
{
    /**
     * @return string
     */
    public function getAlternativePropertyName(): string;
}
