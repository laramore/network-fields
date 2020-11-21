<?php
/**
 * Define a https field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Fields;

class Https extends Url
{
    /**
     * Return the protocol pattern.
     *
     * @return string
     */
    public function getProtocolPattern(): string
    {
        return $this->getConfig('patterns.protocol');
    }

    /**
     * Return the pattern to match.
     *
     * @return string
     */
    public function getPattern(): string
    {
        return $this->getConfig('patterns.uri');
    }
}
