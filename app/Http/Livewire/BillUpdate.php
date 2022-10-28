<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BillUpdate extends Component
{
    public $billItems = [];
    public $quantity = 1;

    public function mount($item)
    {
        $this->billItems = $item;

        $this->quantity = $item['quantity'];
    }

    public function updateBill()
    {
        \Bill::update($this->billItems['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ]
        ]);

        $this->emit('billUpdated');
    }

    public function render()
    {
        return view('livewire.bill-update');
    }
}