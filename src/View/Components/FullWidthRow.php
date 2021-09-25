<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class FullWidthRow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.b5.full-width-row');
    }
}
