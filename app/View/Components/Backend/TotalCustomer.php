<?php

namespace App\View\Components\Backend;

use App\Models\Customer;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TotalCustomer extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $totalCustomerCount = Customer::where('deleted', 0)
            ->count();
        return view('components.backend.total-customer', compact('totalCustomerCount'));
    }
}
