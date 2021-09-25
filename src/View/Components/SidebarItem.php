<?php

namespace IamRahul1973\Skeleton\View\Components;

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
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $prefix, $icon, $label, $subMenus = [])
    {
        $this->route = $route;
        $this->prefix = $prefix;
        $this->icon = $icon;
        $this->label = $label;
        $this->subMenus = $subMenus;
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
