<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer;

class IndexCustomer extends Component
{
    public $customers;

    public function mount()
    {
        $this->customers = Customer::orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.index-customer', ['customers' => $this->customers]);
    }
     
    public function deleteCustomer(Customer $customer){
            $customer->delete();
            session()->flash('message', 'Customer deleted successfully.');
            return $this->redirect('/customer/index');
     }
}
