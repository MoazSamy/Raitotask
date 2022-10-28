<?php
  
  namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
  
  
  class BillList extends Component
  {
      protected $listeners = ['billUpdated' => '$refresh'];
      public $billItems = [];
  
      public function removeBill($id)
      {
        \Bill::remove($id);

        session()->flash('success', 'Item has removed !');
      }
  
      public function clearAllBill()
      {
        \Bill::clear();

        session()->flash('success', 'All Item Bill Clear Successfully !');
      }
  
      public function render()
      {
        $this->billItems = \Bill::getContent()->toArray();
        $this->users = User::all();
        return view('livewire.bill-list');
      }
  }
