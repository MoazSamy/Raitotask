<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Models\Bill;
use App\Models\Items;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function storeBill(){
        // ddd(request()->all());
        $attributes = request()->all();
        $bill = Bill::create([
            'user_id'=>$attributes['user_id'],
            'total'=>$attributes['total'],
        ]);
        foreach ($attributes as $key => $value) {
            if(str_contains($key,'product')){
                $item = new Items;
                $item->product_id=$value;
                $item->quantity=$attributes['quantity_'.$value];
                $item->bill_id=$bill['id'];
                $item->save();
            }
        }

        return redirect ('/billsList');
    }
}
