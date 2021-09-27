<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    public $title;
    public $status;
    public $hasStatus;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $title, $status = null)
    {
        $this->title = $title;
        $this->status = $status;
        $this->hasStatus = ($status !== null);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.card');
    }
}
