<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class FormRadio extends Component
{
    public function __construct(
        public $label,
        public $id,
        public $name,
        public $options,
        public $col = 4,
        public $defaultChecked = null,
        public $error = null
    ) {
        //
    }

    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.form-radio');
    }
}
