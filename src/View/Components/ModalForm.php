<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class ModalForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $id,
        public $title,
        public $action,
        public $method = 'POST',
        public $variant = 'primary',
        public $submitLabel = 'Save Changes'
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.modal-form');
    }
}
