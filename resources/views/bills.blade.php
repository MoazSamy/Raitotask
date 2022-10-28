<x-layout>
    <main class="my-8">
        <form method="POST" action="/bills/add">
            @csrf
            <div class="container px-6 mx-auto">
                <div class="flex justify-center my-6">
                    <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                        <livewire:bill-list/>
                    </div>
                </div>
            </div>
        </form>
    </main>
</x-layout>