<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{
    public function __construct(
        public $label,
        public $id,
        public $name,
        public $type = 'text',
        public $col = 4,
        public $defaultValue = '',
        public $error = null
    ) {
        //
    }

    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.form-input');
    }
}
