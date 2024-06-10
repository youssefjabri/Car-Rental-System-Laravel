@extends('layouts.app')

@section('contents')
    <div class="py-3 flex flex-col gap-4">
        <h1 class="mb-0 text-xl font-semibold text-center">Modifier Voiture</h1>
        <div class="w-full px-4 mx-auto max-w-2xl">
            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-2 sm:grid-cols-2 sm:gap-4">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-1 text-sm font-medium text-gray-900">
                            Nom Voitures:
                        </label>
                        <input type="text" name="title" id="name" value="{{ $product->title }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required>
                    </div>
                    <div>
                        <label for="category" class="block mb-1 text-sm font-medium text-gray-900">Carburant:</label>
                        <select id="category" name="product_code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option>Sélectionnez le carburant</option>
                            <option value="Diesel" {{ $product->product_code == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                            <option value="Essence" {{ $product->product_code == 'Essence' ? 'selected' : '' }}>Essence</option>
                            <option value="Hybrid" {{ $product->product_code == 'Hybrid' ? 'selected' : '' }}>Hybrid</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label for="price" class="block mb-1 text-sm font-medium text-gray-900">Prix:</label>
                        <input type="number" name="price" id="price" value="{{ $product->price }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-1 text-sm font-medium text-gray-900">Description:</label>
                        <textarea id="description" name="description" rows="6"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 focus:ring-blue-500 focus:border-blue-500">{{ $product->description }}</textarea>
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-gray-700 bg-yellow-400 hover:bg-yellow-500 rounded focus:ring-4 focus:ring-blue-200">
                    Modifier les Données
                </button>
            </form>
        </div>
    </div>
@endsection