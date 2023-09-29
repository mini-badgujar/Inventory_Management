<x-layout>
    <center>
        <div class="mb-10 mt-0 text-4xl font-medium leading-tight text-primary text-slate-400">
            Add Product
        </div>
    </center>
    {{-- <x-card class="w-1/2"> --}}

    <form method="POST">
        @csrf
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Product Name*</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" wire:model='name'
                class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="HP laptops">
            @error('name')
                <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description
                &#40;optional&#41;</label>
            <textarea id="description" name="description" wire:model='description'
                class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">{{ old('description') }}</textarea>
            @error('description')
                <div class="text-sm text-red-600">{{ $message }}</div>
            @enderror
        </div>
        <div class="flex space-x-5 justify-between">
            <div class="mb-6 w-full">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Price of Product*</label>
                <input type="number" id="price" name="price" value="{{ old('price') }}" wire:model='price'
                    class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('price')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6 w-full">
                <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Quantity*</label>
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" wire:model='quantity'
                    class="outline-none bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                @error('quantity')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" wire:click.prevent="store"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Add Product</button>
    </form>
    {{-- </x-card> --}}

</x-layout>
