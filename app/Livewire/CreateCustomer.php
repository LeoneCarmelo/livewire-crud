<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Symfony\Component\Finder\Iterator\CustomFilterIterator;

class CreateCustomer extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';

    public function render()
    {
        return view('livewire.create-customer');
    }

    public function save()
    {
        $val_data = $this->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|numeric|unique:customers'
        ],[
            'name.required' => 'The name is required. Please insert your name',
            'name.max' => 'The name can\'t exceed the 50 characters',
            'email.required' => 'The email address is required. Please insert your email address',
            'email.email' => 'The email address has to be valid',
            'phone.numeric' => 'The phone number must contain only numbers',
            'phone.required' => 'The phone is required. Please insert your phone number',
        ]);

        Customer::create($val_data);

        session()->flash('message', 'Customer created successfully.');

        return redirect()->route('welcome');
    }

}
