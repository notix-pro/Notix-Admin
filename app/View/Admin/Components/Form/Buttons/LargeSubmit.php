<?php

namespace App\View\Admin\Components\Form\Buttons;

use Illuminate\View\Component;

class LargeSubmit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.buttons.large-submit');
    }
}
