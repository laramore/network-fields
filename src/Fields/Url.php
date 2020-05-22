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
        return $this->getConfig($this->secured ? 'patterns.secured_protocol' : 'patterns.protocol');
    }

    /**
     * Return the pattern to match.
     *
     * @return string
     */
    public function getPattern(): string
    {
        return $this->getConfig($this->secured ? 'patterns.secured_uri' : 'patterns.uri');
    }
}
