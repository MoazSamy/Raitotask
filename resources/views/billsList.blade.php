<x-layout>
    <link rel="stylesheet" href="/tables.css">
    <table class="mt-10">
        <thead>
            <td>
                <span>Bill ID</span>
            </td>
            <td>
                <span>Created at</span>
            </td>
            <td>
                <span>User</span>
            </td>
            <td>
                <span>Products</span>
            </td>
            <td>
                <span>Total</span>
            </td>
        </thead>
        <tbody>
            @foreach ($bills as $bill)
            <tr>
                <td>
                    {{$bill->id}}
                </td>
                <td>
                    {{$bill->created_at}}
                </td>
                <td>
                    {{$bill->user->name}}
                </td>
                <td>
                    <ul>
                        @foreach ($items = $bill->items as $item)
                            <li>{{$item->product->name}} x {{$item->quantity}}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    {{$bill->total}} <span> LE</span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>