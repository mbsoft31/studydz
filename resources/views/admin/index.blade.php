@extends('admin.layouts.app')

@section('title','admin panel')

@section('content')

	<div class="flex">

		<div class="w-1/5 h-64 border-r border-indigo-800 m-4">
			<h1 class="inline-block text-gray-800 text-lg font-semibold border-b border-orange-600">Operations</h1>
		</div>

		<div class="w-full p-4">

			<h1 class="inline-block text-gray-800 text-lg font-semibold border-b border-orange-600">Sections</h1>

			<div class="mt-6">

				@foreach($sections as $section)
				<div class="mb-2">
					<div class="p-4 bg-indigo-800 rounded-t-lg">

						<p class="font-semibold text-lg text-gray-100">{{ $section->title }}</p>

						<p class="text-gray-300">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi qui, fugit nisi! Delectus possimus, a, et maiores veniam deserunt itaque cum veritatis ratione dolorem quas ullam molestias deleniti architecto consequatur!</p>

					</div>
					@if($section->has('subsections'))
					<div class="bg-indigo-100">
						<div class="flex items-center justify-between px-4 py-2 border-b border-gray-400">
							<p class="font-semibold text-md text-gray-900">Sub sections</p>
							<button class="p-2 rounded-lg text-teal-600 hover:bg-teal-600 hover:text-white">
								<fi icon="plus" size="lg"></fi>
								<span class="ml-2">New Section</span>
							</button>
						</div>
						<ul class="py-2">
							@forelse($section->subsections as $subsection)
							<li class="hover:bg-indigo-200">
								<div class="group flex items-center justify-between px-4">
									<a class="py-2" href="#">{{ $subsection->title }}</a>
									<div class="">
										<button type="button" class="px-2 py-2  text-green-600 group-hover:visible invisible">
											<fi icon="pen" size="lg"></fi>
										</button>
										<button type="button" class="px-2 py-2  text-red-600 group-hover:visible invisible">
											<fi icon="trash" size="lg"></fi>
										</button>
									</div>
								</div>
							</li>
							@empty
							@endforelse
						</ul>
					</div>
					@endif
				</div>
				@endforeach
			</div>

		</div>
		
	</div>

@endsection

@push('modals')
	<!-- @include('admin.modals.section-edit') -->
@endpush