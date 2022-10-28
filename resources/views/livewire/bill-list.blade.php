<div>
    <h3 class="text-3xl text-bold text-center">
        
       Total {{ Bill::getTotalQuantity()}} Bill 
    </h3>
    <div class="flex-1">
        <table class="w-full text-sm lg:text-base" cellspacing="0">
          <thead>
            <tr class="h-12 uppercase">
              <th class="text-center">Name</th>
              <th class="pl-5 text-center lg:text-center lg:pl-0">
                <span class="lg:hidden" title="Quantity">Qtd</span>
                <span class="hidden lg:inline">Quantity</span>
              </th>
              <th class="hidden text-center md:table-cell"> Price </th>
              <th class="hidden text-center md:table-cell"> Remove </th>
            </tr>
          </thead>
          <tbody>
              @foreach ($billItems as $item)
 
            <tr>
              <td>
                <p  for="product" class="mb-2 md:ml-4 text-center">{{ $item['name'] }}</p> 
                <input 
                hidden="true" 
                name={{"product_".$item['id']}}
                id="product_id"
                value=
                {{$item['id']}}
                >
              </td>
              <td class="justify-center mt-6 md:flex">
                <div class="h-10 w-28">
                  <div class="relative flex flex-row w-full h-8">
                    <livewire:bill-update :item="$item" :key="$item['id']"/>
                  </div>
                </div>
              </td>
              <td class="hidden text-center md:table-cell">
                <span class="text-sm font-medium lg:text-base">
                    ${{ $item['price'] }}
                </span>
              </td>
              <td class="hidden text-center md:table-cell">
                  <a href="#" class="px-4 py-2 text-white bg-red-600" wire:click.prevent="removeBill('{{$item['id']}}')">x</a>    
              </td>
            </tr>
            @endforeach
             
          </tbody>
        </table>
        <div>
         Total: ${{ Bill::getTotal() }}
         <input hidden="true" name="total" id="total" value={{ Bill::getTotal() }}>
        </div>
        <div>
          <div>
            <p>User :</p>
          </div>
          <select name="user_id" id="user_id">
            @foreach($users as $user)
            <option id={{$user->id}} value={{$user->id}}>
                {{$user->name}}
            </option>
            @endforeach
          </select>
        </div>
        <div class="mt-5">
            <a href="#" class="px-6 py-2 text-red-800 bg-red-300" wire:click.prevent="clearAllBill">Remove All Bill</a>
        </div>
        <button class="mt-5 px-6 py-2 text-black-800 bg-blue-300" type="submit">Add bill</button>

      </div>
</div>