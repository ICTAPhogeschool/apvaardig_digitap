<?php

namespace quiz_reporting_block\automapper_plus\MappingOperation;

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
