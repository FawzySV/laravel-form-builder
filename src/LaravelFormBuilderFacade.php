<?php

namespace Sadeghpm\LaravelFormBuilder;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sadeghpm\LaravelFormBuilder\Skeleton\SkeletonClass
 */
class LaravelFormBuilderFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-form-builder';
    }
}
