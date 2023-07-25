<?php

namespace App\View\Components\Dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VehicleTable extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $vehicle)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.vehicle-table');
    }
}
