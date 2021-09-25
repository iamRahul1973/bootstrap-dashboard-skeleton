<?php

namespace IamRahul1973\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IamRahul1973\Skeleton\Skeleton
 */
class SkeletonFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bootstrap-dashboard-skeleton';
    }
}
