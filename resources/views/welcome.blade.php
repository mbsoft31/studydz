@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div id="home-page">

    <div class="w-full p-6 bg-blue-100">
        <div class="w-48 mx-auto pt-6 border-b-2 border-orange-500 text-center text-2xl text-blue-700">OUR SERVICES</div>
            <div class="p-2 text-center text-lg text-gray-700">We offer the best educational resources online in Algeria.</div>
            <div class="flex justify-center flex-wrap p-10">

            <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                <div class="flex items-center w-48 h-20 bg-orange-500">
                    <fi icon="baby" size="3x" class="mx-auto text-white"></fi>
                </div>
                <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Primary Education</p>
                <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-orange-300 text-center cursor-pointer">
                    <fi icon="chevron-right" class="mt-2 text-orange-500"></fi>
                </div>
            </div>

            <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                <div class="flex items-center w-48 h-20 bg-green-500">
                    <fi icon="child" size="3x" class="mx-auto text-white"></fi>
                </div>
                <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Middle Education</p>
                <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-green-300 text-center cursor-pointer">
                    <fi icon="chevron-right" class="mt-2 text-green-500"></fi>
                </div>
            </div>

            <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                <div class="flex items-center w-48 h-20 bg-yellow-500">
                    <fi icon="male" size="3x" class="mx-auto text-white"></fi>
                </div>
                <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Secondary Education</p>
                <p class="p-2 text-sm text-gray-700">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ac est massa.</p>
                <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-yellow-300 text-center cursor-pointer">
                    <fi icon="chevron-right" class="mt-2 text-yellow-500"></fi>
                </div>
            </div>

            <div class="relative w-48 h-64 m-5 bg-white shadow-lg">
                <div class="flex items-center w-48 h-20 bg-teal-500">
                    <fi icon="user-clock" size="3x" class="mx-auto text-white"></fi>
                </div>
                <p class="mx-2 py-2 border-b-2 text-center text-gray-700 font-semibold uppercase">Higher Education</p>
                <p class="p-2 text-sm text-gray-700">Comming soon ...</p>
                <div class="absolute right-0 bottom-0 w-8 h-8 bg-gray-300 hover:bg-teal-300 text-center cursor-pointer">
                    <fi icon="chevron-right" class="mt-2 text-teal-500"></fi>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
