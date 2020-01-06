@extends('admin.layouts.app')

@section('title','admin panel')

@section('content')

	<div class="flex">

		<div class="w-1/5 h-64 border-r border-indigo-800 m-4">
			<h1 class="inline-block text-gray-800 text-lg font-semibold border-b border-orange-600">Operations</h1>
		</div>

		<div class="w-full p-4">
			<h1 class="inline-block text-gray-800 text-lg font-semibold border-b border-orange-600">{{ $section->title }}</h1>
			
			@foreach($section->subsections as $sec)

			<div class="w-full mt-4 font-semibold text-white">
				<header class="flex justify-between items-center rounded-t-lg shadow-md bg-indigo-800 text-lg">
					<h2 class="p-4">{{ $sec->title }}</h2>
					<button class="p-4">
						<fi icon="arrow-right" size="lg" class="hidden"></fi>
						<fi icon="arrow-down" size="lg"></fi>
					</button>
				</header>
				<main class="p-4 bg-gray-100">
					<ul>
						@foreach($sec->subsections as $subsec)
						
						<li class="p-2 rounded-lg hover:bg-gray-300 mb-1">
							<div class="flex justify-between items-center">
								<a href="#" class="text-gray-900">{{ $subsec->title }}</a> 
								<span class="px-3 rounded-full bg-orange-600 text-gray-100">{{ $subsec->subsections->count() }}</span>
							</div>
						</li>

						@endforeach
					</ul>
				</main>
			</div>

			@endforeach
		</div>
		
	</div>

@endsection

@push('modals')
	<!-- @include('admin.modals.section-edit') -->
@endpush