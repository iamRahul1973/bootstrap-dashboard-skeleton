<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class FormSelect extends Component
{
    public function __construct(
        public $label,
        public $id,
        public $name,
        public $options,
        public $col = 4,
        public $defaultSelected = null,
        public $error = null
    ) {
        //
    }

    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.form-select');
    }
}
