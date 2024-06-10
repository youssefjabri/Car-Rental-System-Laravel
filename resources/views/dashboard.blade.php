@extends('layouts.app')

@section('contents')
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
            <div class="text-gray-700 bg-white hover:bg-gray-700 cursor-pointer hover:text-white rounded shadow p-4">
                <h2 class="font-bold text-xl">Utilisateurs</h2>
                <p class="text-3xl mt-2">{{ $userCount }}</p>
            </div>
            <div class="text-gray-700 bg-white hover:bg-gray-700 cursor-pointer hover:text-white rounded shadow p-4">
                <h2 class="font-bold text-xl">Voitures en location</h2>
                <p class="text-3xl mt-2">{{ $carCount }}</p>
            </div>
            <div class="text-gray-700 bg-white hover:bg-gray-700 cursor-pointer hover:text-white rounded shadow p-4">
                <h2 class="font-bold text-xl">Nouvelles inscriptions</h2>
                <p class="text-3xl mt-2">{{ $newRegistrations }}</p>
            </div>
        </div>
    </div>

@endsection
