<?php
/**
 * Define an mac address field.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Fields;

use Laramore\Contracts\Field\PatternField;
use Laramore\Traits\Field\ConfigPattern;

class MacAddress extends Char implements PatternField
{
    use ConfigPattern;
}
