<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Alert extends Component
{
    public $type;
    public $message;

    /**
     * Create the component instance.
     */
    public function __construct(
        string $type,
        string $message
    ) {
        $this->message = $message;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.alert');
    }
}
