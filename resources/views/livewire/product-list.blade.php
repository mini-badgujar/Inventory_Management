<div>
    @if ($add)
        <div>
            @include('livewire.create-products')
        </div>
    @elseif ($update)
        <div>
            @include('livewire.update-products')
        </div>
    @else
        <div class="flex space-x-4 items-center justify-between mb-5">
            <div class="w-full">
                <div>
                    <div class="relative">
                        <input id="search" autocomplete="off" wire:model="searchTerm"
                            class=" outline-none block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  "
                            placeholder="Search Product Name..." required>

                        <button type="submit" x-on:click="$wire.set('SubmitSearchTerm', 'searchTerm') "
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 ">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </button>

                    </div>
                    </form>
                </div>
            </div>
            <div class="w-52 mt-2">

                <button
                    class="w-52 text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"
                    wire:click="display_add()">
                    Add Products
                </button>
            </div>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-slate-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Product name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Quantity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr class="bg-white border-b hover:bg-gray-50">

                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $product->name }}
                            </th>
                            <td class="px-6 py-4">
                                Rs. {{ $product->price }}/-
                            </td>
                            <td class="px-6 py-4">
                                {{ $product->quantity }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-5">
                                <button wire:click="display_edit({{ $product->id }})"
                                    class="font-medium text-blue-600 hover:underline">Edit</button>

                                <button wire:click="delete({{ $product->id }})"
                                    class="font-medium text-red-600  hover:underline">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>

        @if (!$searchTerm)
            <div class="mt-5">
                {{ $products->links() }}
            </div>
        @endif
    @endif

</div>
