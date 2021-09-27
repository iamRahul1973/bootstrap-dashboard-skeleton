<?php

namespace IamRahul1973\Skeleton\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $class;
    public $message;
    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class = 'info', $message = null, $icon = null)
    {
        $this->class = $class;
        $this->message = ($message !== null) ? $message : $this->getMsg2Print();
        $this->icon = ($icon !== null) ? $icon : $this->getIcon2Use();
    }

    private function getMsg2Print()
    {
        switch ($this->class) {
            case 'success':
                $message = 'Changes Saved Successfully !';

                break;
            case 'danger':
                $message = 'Someting Went Wrong !';

                break;
            default:
                $message = 'This is a test Message !';

                break;
        }

        return $message;
    }

    private function getIcon2Use()
    {
        switch ($this->class) {
            case 'success':
                $icon = 'check-circle-fill';

                break;
            case 'danger':
                $icon = 'exclamation-triangle';

                break;
            default:
                $icon = 'exclamation-circle-fill';

                break;
        }

        return $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('bootstrap-dashboard-skeleton::components.alert');
    }
}
