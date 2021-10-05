<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class Button extends Component
{
    public function __construct(
        public $variant = 'primary',
        public $type = 'submit',
        public $size = 'sm',
        public $col = '12'
    ) {
        //
    }

    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.button');
    }
}
