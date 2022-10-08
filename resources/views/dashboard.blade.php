<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <a href="http://127.0.0.1:8000/admin/blog/create" class="w3-btn w3-black">  Blog </a>
                <a href="http://127.0.0.1:8000/admin/category/create" class="w3-btn w3-blue">Category</a>
                <a href="http://127.0.0.1:8000/admin/blog/table" class="w3-btn w3-green">Blog View</a>
                <a href="http://127.0.0.1:8000/admin/category/table" class="w3-btn w3-red">Category View</a>
             </a>
            </div>
        </div>
    </div>
</x-app-layout>
