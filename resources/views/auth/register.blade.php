@extends('auth.auth')

@section('content')
	<h2 class="mb-4 text-3xl font-normal text-center text-gray-800">Sign up for free</h2>
    <form action="{{ route('register') }}" method="POST">
    	@csrf
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="username">Username</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="text" id="username" name="name">
	    </div>
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="email">E-mail</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="email" id="email" name="email">
	    </div>
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="password">Password</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="password" id="password" name="password">
	    </div>
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="password-confirm">Password confirmation</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="password" id="password-confirm" name="password_confirmation">
	    </div>
	    <div class="flex mb-4">
	      <label for="agreement" class="flex items-center">
	        <input class="" type="checkbox" id="agreement">
	        <span class="ml-2 text-sm text-semibold">I agree to all statements included in</span>
	      </label>
	      <a href="#" class="ml-1 underline text-sm text-indigo-700 hover:text-indigo-900"> terms of services</a>
	    </div>
	    <div class="flex items-center mb-4">
	      <button class="px-4 py-3 bg-orange-600 rounded-full font-semibold">SIGN UP</button>
	      <a class="ml-4 underline text-indigo-700 hover:text-indigo-900" href="/admin/auth/login">I am already a member</a>
	    </div>
    </form>
@endsection
