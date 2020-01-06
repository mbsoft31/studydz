<div class="absolute inset-0 min-h-screen">

	<div class="absolute inset-0 z-0 bg-gray-900 opacity-50">
		
	</div>

	<div class="absolute inset-0 z-10">

		<button type="button" class="cursor-pointer absolute top-0 right-0 p-4 text-gray-200">
			<fi icon="times" size="lg"></fi>
		</button>

		<div class="mx-auto p-4 my-16 bg-white w-1/3 shadow-lg rounded-lg">
			<div class="text-lg text-green-600">
				<fi icon="pen"></fi>
				<span class="ml-1 font-semibold">Edit Section</span>
			</div>

			<hr class="w-1/2 my-4">

			<form action="">
				<div class="flex flex-col mb-4">
					<label class="mb-1 text-gray-500 font-semibold text-gray-800" for="title">Title</label>
					<input class="px-2 py-1 appearance-none text-base text-gray-800 bg-transparent border-b border-gray-500" type="text" id="title" name="title">
				</div>

				<div class="flex flex-col mb-4">
					<label class="mb-1 text-gray-500 font-semibold text-gray-800" for="name">Name</label>
					<input class="px-2 py-1 appearance-none text-base text-gray-800 bg-transparent border-b border-gray-500" type="text" id="name" name="name">
				</div>

				<div class="flex flex-col mb-4">
					<label class="mb-1 text-gray-500 font-semibold text-gray-800" for="description">Description</label>
					<textarea class="px-2 py-1 appearance-none text-base text-gray-800 bg-transparent border-b border-gray-500" id="description" name="description"></textarea>
				</div>

				<div class="flex justify-end items-center mt-8 mb-4">
					<button class="px-4 py-1 pb-2 rounded-lg font-semibold text-gray-800 hover:bg-gray-600 hover:text-gray-100">Cancel</button>
					<button class="ml-2 px-4 py-1 pb-2 rounded-lg font-semibold bg-green-600 text-gray-100 hover:bg-green-700">Save changes</button>
				</div>

			</form>

		</div>

	</div>
	

</div>