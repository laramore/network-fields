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

use Laramore\Contracts\Field\IpField;
use Laramore\Traits\Field\ConfigPattern;

class Ipv4 extends Char implements IpField
{
    use ConfigPattern;
}
