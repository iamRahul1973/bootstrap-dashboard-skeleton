<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class ModalForm extends Component
{
    public $modalId;
    public $modalTitle;
    public $formAction;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modalId, $modalTitle, $formAction, $method = 'POST')
    {
        $this->modalId = $modalId;
        $this->modalTitle = $modalTitle;
        $this->formAction = $formAction;
        $this->method = $method;
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
