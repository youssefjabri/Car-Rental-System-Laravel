@extends('layouts.app')

@section('contents')
    <div class="py-3 flex flex-col gap-4">
        <h1 class="mb-0 text-xl font-semibold text-center">Profile</h1>
        <div class="w-full px-4 mx-auto max-w-2xl">
            <form method="POST" enctype="multipart/form-data" id="profile_setup_frm"
                action="{{ route('profile') }}">
                @csrf
                @method('PUT')
                <div class="grid gap-2 sm:grid-cols-2 sm:gap-4">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-1 text-sm font-medium text-gray-900 ">
                            Nom Utilisateur:
                        </label>
                        <input type="text" name="title" id="name" value="{{ auth()->user()->name }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-900 ">
                            Adresse E-mail:
                        </label>
                        <input type="email" name="email" id="email" value="{{ auth()->user()->email }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone" class="block mb-1 text-sm font-medium text-gray-900 ">
                            Numéro de Téléphone:
                        </label>
                        <input type="text" name="phone" id="phone" value="{{ auth()->user()->phone }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="address" class="block mb-1 text-sm font-medium text-gray-900 ">
                            Adresse:
                        </label>
                        <input type="text" name="address" id="address" value="{{ auth()->user()->address }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                            required="">
                    </div>
                </div>
                <button type="submit"
                    class="inline-flex items-center shadow px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-blue-500 hover:bg-blue-700 rounded focus:ring-4 focus:ring-blue-200">
                    Enregistrer les Modifications
                </button>
            </form>
        </div>
    </div>
@endsection
