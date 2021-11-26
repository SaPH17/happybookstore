<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config("app.name", "Laravel") }}</title>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body>
        <nav class="bg-gray-800 fixed top-0 left-0 right-0">
            <div class="mx-auto px-10">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex-1 flex items-stretch justify-start">
                        <a class=" flex-shrink-0 flex items-center text-white text-xl cursor-pointer"
                            href="/home">
                            <i class="fas fa-book mr-2"></i>
                            HappyBookStore
                        </a>
                        <div class="ml-10">
                            <div class="flex space-x-4">
                                <a
                                    href="/home"
                                    class="hover:bg-gray-700 hover:text-white text-gray-300 px-3 py-2 rounded-md text-sm font-medium">
                                    Home
                                </a>
                                <div x-data="{ isOpen: false }" class="relative">
                                    <a @click="isOpen = !isOpen" class="text-gray-300 cursor-pointer hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium flex">Category
                                        <svg
                                            class="-mr-1 ml-2 h-5 w-5"
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20"
                                            fill="currentColor"
                                            aria-hidden="true">
                                            <path
                                                fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </a>
                                    <div  x-show="isOpen"
                                        x-transition:enter="transition ease-out duration-100 transform"
                                        x-transition:enter-start="opacity-0 scale-95"
                                        x-transition:enter-end="opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75 transform"
                                        x-transition:leave-start="opacity-100 scale-100"
                                        x-transition:leave-end="opacity-0 scale-95"
                                        class="origin-top-left absolute p-2 left-0 mt-2 w-56 rounded-md shadow-lg bg-gray-700 ring-1 ring-black ring-opacity-5">
                                        <div class="py-1">     
                                            @foreach (App\Models\Category::all() as $category)
                                                <a href="/category/{{$category->id}}" class="rounded-md text-gray-300 hover:text-white block px-4 py-2 text-sm hover:bg-gray-600">{{$category->category}}</a>
                                            @endforeach                                        
                                        </div>
                                    </div>
                                </div>
                                <a href="/contact" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md
                                        text-sm font-medium">
                                    Contact
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="min-h-screen bg-gray-800 px-10 pt-16 pb-10 flex flex-col">
            <div class="text-gray-300 text-3xl font-bold mb-4 flex ">
                @yield('title')
            </div>
            <div class="flex items-start">
                <div class="bg-gray-900 min-w-3/4 mr-8 rounded-xl p-4 shadow-xl border border-gray-700">
                    @yield('content')
                </div>
                <div class="bg-gray-900 rounded-xl py-3 px-4 flex-grow sticky top-16 min-w-1/6 shadow-xl border border-gray-700">
                    <div class="text-gray-300 text-lg font-bold">
                        Category
                    </div>
                    <div class="mt-2">
                        @foreach (App\Models\Category::all() as $category)
                            <a  href="/category/{{$category->id}}" class="rounded-md flex space-x-6 text-gray-300 hover:text-white px-4 py-2 text-sm hover:bg-gray-700">
                                <div class="flex items-center w-10">
                                    {!!$icons[$category->id-1]!!}
                                </div>
                                {{$category->category}}
                            </a>
                        @endforeach   
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
