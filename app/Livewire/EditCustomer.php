<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{
    public $customer;
    public $name;
    public $email;
    public $phone;

    public function mount(Customer $customer)
    {
        $this->customer = $customer;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function update()
    {
        $val_data = $this->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'phone' => 'required|numeric'
        ],[
            'name.required' => 'The name is required. Please insert your name',
            'name.max' => 'The name can\'t exceed the 50 characters',
            'email.required' => 'The email address is required. Please insert your email address',
            'email.email' => 'The email address has to be valid',
            'phone.numeric' => 'The phone number must contain only numbers',
            'phone.required' => 'The phone is required. Please insert your phone number',
        ]);

        $this->customer->update($val_data);

        session()->flash('message', 'Customer updated successfully.');

        return redirect()->route('index-customer');
    }
}
