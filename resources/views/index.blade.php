<x-layout>


    <center>
        <div class="mb-10 mt-0 text-5xl font-medium leading-tight text-primary text-slate-100">
            Inventory Management
        </div>
    </center>
    <x-card>
        @if ($message = Session::get('success'))
            <div class="mb-5 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
                role="alert" x-data="{ open: true }" x-show="open">
                <strong class="font-bold">SUCCESS </strong>
                <span class="block sm:inline">{{ $message }}</span>
                <button x-on:click="open = false">
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-green-500" role="button"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path
                                d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z" />
                        </svg>
                    </span>
                </button>
            </div>
        @endif

        <div>
            @livewire('product-list')
        </div>

    </x-card>
</x-layout>
