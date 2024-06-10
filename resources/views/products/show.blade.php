@extends('layouts.app')
@section('contents')
    <div class="py-3 flex flex-col gap-4">
        <h1 class="mb-0 text-xl font-semibold text-center">Voiture de détails</h1>
        <div class="w-full max-w-sm p-4 mx-auto bg-white border border-gray-200 rounded-lg shadow sm:p-8 ">
            <h5 class="mb-4 text-xl font-medium text-gray-800">Détails Voiture</h5>
            <ul role="list" class="space-y-5 my-7">
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->title }}
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-tag"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->price }}
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-gas-pump"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->product_code }}
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-tag"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->description }}
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-clock"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->created_at }}
                    </span>
                </li>
                <li class="flex items-center">
                    <span class="text-gray-800">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                        {{ $product->updated_at }}
                    </span>
                </li>
            </ul>
        </div>
    </div>
@endsection
