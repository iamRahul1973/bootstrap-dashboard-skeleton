<?php

namespace IamRahul1973\Skeleton;

use IamRahul1973\Skeleton\Commands\SkeletonCommand;
use IamRahul1973\Skeleton\View\Components\Alert;
use IamRahul1973\Skeleton\View\Components\Card;
use IamRahul1973\Skeleton\View\Components\FullWidthRow;
use IamRahul1973\Skeleton\View\Components\ModalForm;
use IamRahul1973\Skeleton\View\Components\SidebarItem;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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

    public function packageBooted()
    {
        Route::name('admin.')
            ->prefix('admin')
            ->middleware(['web', 'auth', 'role:admin'])
            ->group(function () {
                $this->loadRoutesFrom(base_path('routes/admin.php'));
            });
        
        $this->makeMenuViewPublishable();
    }

    protected function makeMenuViewPublishable()
    {
        $this->publishes([
            $this->package->basePath('/../resources/views/partials/menu-items.blade.php') =>
                base_path("resources/views/vendor/{$this->package->shortName()}/partials/menu-items.blade.php")
        ], "{$this->package->shortName()}-menu-items-views");
    }
}
