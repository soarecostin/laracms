<?php

namespace Soarecostin\Laracms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Soarecostin\Laracms\Skeleton\SkeletonClass
 */
class LaracmsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laracms';
    }
}
