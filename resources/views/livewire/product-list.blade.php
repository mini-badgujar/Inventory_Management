<div>
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
                            <a href="{{ route('products.edit', $product->id) }}"
                                class="font-medium text-blue-600 hover:underline">Edit</a>

                            <button wire:click="delete({{ $product->id }})"
                                class="font-medium text-red-600  hover:underline">Remove</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <div class="mt-5">
        {{ $products->links() }}
    </div>

</div>
