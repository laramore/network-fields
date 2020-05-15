<?php
/**
 * Define an IP v4 field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Fields;

use Laramore\Contracts\Field\PatternField;

class Ipv4 extends Char implements PatternField
{
    /**
     * Return the pattern to match.
     *
     * @return string
     */
    public function getPattern(): string
    {
        return $this->getConfig('pattern');
    }

    /**
     * Return all pattern flags
     *
     * @return mixed
     */
    public function getPatternFlags()
    {
        return null;
    }
}
