@extends('layouts.app')
@section('contents')
    <div class="py-3 flex flex-col gap-4">
        <h1 class="text-xl font-semibold text-center">Liste des Voitures</h1>
        @if (Session::has('success'))
            <div class="border font-normal text-green-600 text-center border-green-500 bg-green-300 rounded p-2.5">
                {{ Session::get('success') }}
            </div>
        @endif
        <div>
            <div class="relative overflow-x-auto shadow-md sm:rounded">
                <table class="w-full text-sm shadow text-left rtl:text-right text-white">
                    <thead class="text bg-gray-800">
                        <tr>
                            <th class="font-normal px-6 py-3">#</th>
                            <th class="font-normal px-6 py-3">Titre</th>
                            <th class="font-normal px-6 py-3">Prix</th>
                            <th class="font-normal px-6 py-3">Carburant</th>
                            <th class="font-normal px-6 py-3">Description</th>
                            <th class="font-normal px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($product->count() > 0)
                            @foreach ($product as $rs)
                                <tr class=" border-b hover:bg-gray-200 cursor-pointer ">
                                    <td class="px-6 py-4 font-normal text-black whitespace-nowrap">
                                        {{ $loop->iteration }}</td>
                                    <td class="text-gray-700 font-normal px-6 py-2">{{ Str::limit($rs->title, 10) }}</td>
                                    <td class="text-gray-700 font-normal px-6 py-2">{{ $rs->price }}</td>
                                    <td class="text-gray-700 font-normal px-6 py-2">{{ $rs->product_code }}</td>
                                    <td class="text-gray-700 font-normal px-6 py-2">{{ Str::limit($rs->description, 40) }}
                                    </td>
                                    <td class=" px-6 py-2">
                                        <div class="flex gap-2" role="group">
                                            <a href="{{ route('products.show', $rs->id) }}" type="button"
                                                class="bg-green-500 hover:bg-green-600 shadow flex gap-2 items-center text-white font-normal px-3 py-2 rounded">
                                                <i class="fa-solid fa-circle-info"></i>
                                                <span>
                                                    Détail
                                                </span>
                                            </a>
                                            <a href="{{ route('products.edit', $rs->id) }}" type="button"
                                                class="bg-yellow-400 hover:bg-yellow-500 shadow px-3 text-gray-800 font-normal  py-2 rounded">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                                <span>
                                                    Modifier
                                                </span>
                                            </a>
                                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST"
                                                type="button" class="" onsubmit="return confirm('Delete?')">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="bg-red-600 hover:bg-red-700 shadow px-3 font-normal text-white py-2 rounded">
                                                    <i class="fa-solid fa-trash"></i>
                                                    <span>
                                                        Supprimer
                                                    </span>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">Car not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <a href="{{ route('products.create') }}"
            class="bg-blue-600 shadow flex items-center text-center gap-2 justify-center text-sm w-[220px] text-center hover:bg-blue-700 shadow px-3 font-normal text-white py-2 rounded">
            <i class="fa-solid fa-plus"></i>
            <span>
                Ajouter une Nouvelle Voiture
            </span>
        </a>
    </div>
@endsection
