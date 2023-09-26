<x-layout>
    <x-card class="w-1/2">
        <form method="POST" action="{{ route('products.store') }}">

            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name*</label>
                <input type="text" id="name"
                    class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="HP laptops" required>
            </div>
            <div class="mb-6">
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
                <textarea id="description"
                    class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
            </div>
            <div class="flex space-x-5 justify-between">
                <div class="mb-6 w-full">
                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price of Product*</label>
                    <input type="number" id="price" placeholder=""
                        class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
                <div class="mb-6 w-full">
                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Quantity*</label>
                    <input type="number" id="quantity"
                        class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Add Product</button>
        </form>
    </x-card>
</x-layout>
