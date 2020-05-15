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
    protected $secured = false;

    /**
     * Create a new field with basic options.
     * The constructor is protected so the field is created writing left to right.
     * ex: Text::field()->maxLength(255) insteadof (new Text)->maxLength(255).
     *
     * Secure option is defined with config file.
     *
     * @param array|null $options
     */
    protected function __construct(array $options=null)
    {
        parent::__construct($options);

        $this->secured = $this->getConfig('secured');
    }

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
