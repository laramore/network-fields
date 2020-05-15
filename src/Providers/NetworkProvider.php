<?php
/**
 * Add network fields.
 *
 * @author Samy Nastuzzi <samy@nastuzzi.fr>
 *
 * @copyright Copyright (c) 2020
 * @license MIT
 */

namespace Laramore\Providers;

use Illuminate\Support\ServiceProvider;
use Laramore\Traits\Provider\MergesConfig;

class NetworkProvider extends ServiceProvider
{
    use MergesConfig;

    /**
     * Prepare all configs and default types and fields.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__."/../../config/field.php", "field",
        );

        $this->mergeConfigFrom(
            __DIR__."/../../config/type.php", "type",
        );
    }
}