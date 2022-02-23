<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;

class SidebarItem extends Component
{
    /**
     * The link, the menuitem should point to.
     *
     * @var string
     */
    public $route;

    /**
     * The Menu item icon
     *
     * @var string
     */
    public $icon;

    /**
     * Menu itemlabel
     *
     * @var string
     */
    public $label;

    /**
     * Route Prefix.
     *
     * To check for the active class. By using this you can add active class for
     * any routes within that prefix. It doesn't need to be the exact route present
     * in the sidebar menu.
     *
     * @var string
     */
    public $prefix;

    /**
     * Sub menus to add
     *
     * @var array
     */
    public $subMenus;

    /**
     * Whether current menu is active or not
     *
     * @var bool
     */
    public $isActive = false;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($prefix, $icon, $label, $route = null, $subMenus = [])
    {
        $this->route = $route;
        $this->prefix = $prefix;
        $this->icon = $icon;
        $this->label = $label;
        $this->subMenus = $subMenus;
        $this->isActive = $this->isActive();
    }

    /**
     * Decide whether the current route is active or not.
     *
     * @return bool
     */
    private function isActive()
    {
        if (request()->route()->getName() === $this->route) {
            return true;
        }

        if (array_key_exists(request()->route()->getName(), $this->subMenus)) {
            return true;
        }

        if ($this->isSingleResourceRoute() && $this->isIndexVariantPresentInSubMenu()) {
            return true;
        }

        return false;
    }

    /**
     * Whether the route is for a single resource. Edit or Show
     *
     * @return bool
     */
    private function isSingleResourceRoute(): bool
    {
        return in_array(Str::afterLast(request()->route()->getName(), '.'), ['edit', 'show']);
    }

    /**
     * Check if current route's index variant is present in
     * in the sub menu array.
     *
     * Ex: if current route is admin.product.show check if
     * admin.product.index is present in sub enu array
     *
     * @return bool
     */
    private function isIndexVariantPresentInSubMenu(): bool
    {
        return Arr::exists($this->subMenus, Str::beforeLast(request()->route()->getName(), '.') . '.index');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.sidebar-item');
    }
}
