<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public $id,
        public $title,
        public $variant = 'primary',
        public $hideCloseBtn = false,
        public $hideConfirmBtn = false,
        public $closeBtnLabel = 'Close',
        public $ConfirmBtnLabel = 'Confirm'
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
        return view('bootstrap-dashboard-skeleton::components.modal');
    }
}
