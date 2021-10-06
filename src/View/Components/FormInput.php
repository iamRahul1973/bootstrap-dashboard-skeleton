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
        public $error = null,
        public $textareaRows = 4,
    ) {
        //
    }

    public function render()
    {
        $view = match ($this->type) {
            'textarea' => 'form-textarea',
            default => 'form-input',
        };
        return view('bootstrap-dashboard-skeleton::components.' . $view);
    }
}
