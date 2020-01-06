@extends('auth.auth')

@section('content')
	<h2 class="mb-4 text-3xl font-normal text-center text-gray-800">Login into your account</h2>
	@auth
	<h2 class="mb-4 text-3xl font-normal text-center text-gray-800">bitch you're in!</h2>
	@endauth
    <form action="{{ route('login') }}" method="POST">
    	@csrf
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="username">Username</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="text" id="username" name="email">
	    </div>
	    <div class="flex flex-col mb-4">
	      <label class="mb-1 text-gray-500 font-semibold text-gray-800" for="password">Password</label>
	      <input class="px-2 py-2 appearance-none text-lg text-gray-800 bg-transparent border-b border-gray-500" type="password" name="password" id="password">
	    </div>
	    <div class="flex flex-col mb-4">
	      <label for="remember" class="flex items-center text-gray-800">
	        <input class="" type="checkbox" id="remember">
	        <span class="ml-2 text-sm text-semibold">Remember me</span>
	      </label>
	    </div>
	    <div class="flex items-center mb-4">
	      <button class="px-4 py-2 bg-indigo-800 text-gray-200 hover:bg-indigo-900 hover:text-white rounded-full font-semibold">LOG IN</button>
	      <a class="ml-4 underline text-indigo-700 hover:text-indigo-900" href="/admin/auth/register">I am not a member yet</a>
	    </div>
	</form>
@endsection
