<!doctype html>
<html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'DZ Academy') }} | @yield('title')
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        <main>
            <div class="flex min-h-screen">
                <div id="right-side" class="relative w-3/5 bg-cover" style="background-image: url('/images/img1.jpg')">
                  <div class="absolute inset-0 bg-indigo-900 opacity-75"></div>
                  <div class="py-4 px-6 absolute inset-0">
                    <header class="text-gray-200">
                      <fi icon="drafting-compass" size="3x"></fi>
                      <span class="inline-block ml-2 font-semibold text-3xl">StudyDZ</span>
                    </header>
                    <main class="my-16 p-32 text-gray-200">
                      <h2 class="mb-16 font-semibold text-3xl text-center">Discover the most resourcefull educational platform in Algeria</h2>
                      <p class="text-sm text-center font-semibold"></p>
                    </main>
                  </div>
                </div>
                <div class="w-2/5 py-4 px-6 bg-gray-200">

                  <header class="flex justify-end">
                    <button class="px-3 py-2 text-xs font-semibold border rounded-l-full border-gray-900 hover:bg-indigo-900 hover:text-gray-200 bg-indigo-900 text-gray-200">SIGN UP</button>
                    <button class="px-3 py-2 text-xs text-gray-900 font-semibold border rounded-r-full border-gray-900 hover:bg-indigo-900 hover:text-gray-200">LOG IN</button>
                  </header>

                  <main id="form" class="mt-16 p-4">
                    @yield('content')
                  </main>
                </div>
            </div>
        </main>

    </div>
</body>
</html>
