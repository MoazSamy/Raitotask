<div>
    <input wire:model="quantity"
           type="number" min="1"
           wire:change="updateBill" class="text-center bg-gray-100"
           name={{"quantity_".$billItems['id']}}>
</div>
