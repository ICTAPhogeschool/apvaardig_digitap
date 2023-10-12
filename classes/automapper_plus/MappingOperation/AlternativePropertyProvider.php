<?php

namespace block_quiz_reporting\automapper_plus\MappingOperation;

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
