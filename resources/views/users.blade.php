<x-layout>
    <link rel="stylesheet" href="/tables.css">
    <table class="mt-10">
        <tr>
            <td>
                <p>ID</p>
            </td>
            <td>
                <p>Address</p>
            </td>
            <td>
                <p>Email</p>
            </td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{$user -> name}}
                </td>
                <td>
                    {{$user -> address}}
                </td>
                <td>
                    {{$user -> email}}
                </td>
            </tr>
        @endforeach
    </table>
</x-layout>
