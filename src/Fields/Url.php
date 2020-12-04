<?php
/**
 * Define an url field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Fields;

class Url extends Uri
{
    protected $secured;

    /**
     * Return the protocol pattern.
     *
     * @return string
     */
    public function getProtocolPattern(): string
    {
        return $this->patterns[$this->secured ? 'secured_protocol' : 'protocol'];
    }

    /**
     * Return the pattern to match.
     *
     * @return string
     */
    public function getPattern(): string
    {
        return $this->patterns[$this->secured ? 'secured_uri' : 'uri'];
    }
}
