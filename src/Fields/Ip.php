<?php
/**
 * Define an IP field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Fields;

class Ip extends Char
{
    /**
     * All patterns defined for this field.
     *
     * @var array
     */
    protected $patterns;

    /**
     * Return the pattern to match.
     *
     * @return string
     */
    public function getPattern(): string
    {
        return $this->patterns['ip'];
    }

    /**
     * Return all pattern flags
     *
     * @return mixed
     */
    public function getPatternFlags()
    {
        return $this->patterns['flags'];
    }
}
