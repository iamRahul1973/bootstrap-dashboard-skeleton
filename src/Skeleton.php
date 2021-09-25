<?php

namespace IamRahul1973\Skeleton;

use Illuminate\Support\Str;

class Skeleton
{
    public static function getPageTitleFromRoute()
    {
        $exploded = explode('.', request()->route()->getName());

        return Str::title($exploded[1]);
    }

    public static function getBreadcrumbItemsFromRoute()
    {
        $exploded = explode('.', request()->route()->getName());
        array_shift($exploded);

        return $exploded;
    }
}
