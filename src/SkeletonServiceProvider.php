<?php

namespace IamRahul1973\Skeleton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use IamRahul1973\Skeleton\Commands\SkeletonCommand;
use IamRahul1973\Skeleton\View\Components\Alert;
use IamRahul1973\Skeleton\View\Components\Card;
use IamRahul1973\Skeleton\View\Components\FullWidthRow;
use IamRahul1973\Skeleton\View\Components\ModalForm;
use IamRahul1973\Skeleton\View\Components\SidebarItem;

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
            ->hasViews()
            ->hasViewComponent('bdskeleton', Alert::class)
            ->hasViewComponent('bdskeleton', Card::class)
            ->hasViewComponent('bdskeleton', FullWidthRow::class)
            ->hasViewComponent('bdskeleton', ModalForm::class)
            ->hasViewComponent('bdskeleton', SidebarItem::class)
            ->hasAssets()
            ->hasCommand(SkeletonCommand::class);
    }
}
