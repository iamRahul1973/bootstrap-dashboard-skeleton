<?php

namespace IamRahul1973\Skeleton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IamRahul1973\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('bootstrap-dashboard-skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_bootstrap-dashboard-skeleton_table')
            ->hasCommand(SkeletonCommand::class);
    }
}
