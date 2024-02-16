<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (@isset($specialities))
                <a href="{{ route('specialities.create') }}"
                    class="flex items-center justify-center w-72 m-auto px-2 py-2 bg-green-500 text-white font-bold rounded-lg hover:bg-white hover:text-green-600 transition-colors duration-500 transform hover:scale-105 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 rotate-0 transition-transform duration-500 transform hover:rotate-45" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Add Speciality
                </a>
                <div class="grid grid-cols-3 gap-5 ">
                    @foreach ($specialities as $speciality)
                        <div class="relative">
                            <div
                                class="flex flex-wrap bg-white text-black dark:bg-gray-800 overflow-hidden hover:bg-green-500 transition-colors duration-500 transform hover:scale-105 shadow-lg shadow-white sm:rounded-lg cursor-pointer">
                                <div class="p-6 text-gray-900 dark:text-gray-100 font-bold text-2xl hover:text-white">
                                    <p>{{ $speciality->name }}</p>
                                </div>
                                <div class="absolute top-0 right-0 mt-2 mr-2">
                                    <a href="{{ route('specialities.edit', $speciality) }}"
                                        class="text-gray-500 hover:text-white flex flex-col justify-center items-center ">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-10 w-10 rotate-0 transition-transform duration-500 transform hover:rotate-45"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0zM12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                        </svg>
                                        <p class="font-bold">Edit</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="bg-white dark:bg-gray-800 overflow-hidden w-1/3 shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100 ">
                        <p>You are logged in </p>
                    </div>
                </div>
            @endif


        </div>
    </div>
</x-app-layout>
