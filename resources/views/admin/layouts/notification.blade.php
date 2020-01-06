<aside class="absolute inset-y-0 right-0 z-10 shadow-lg min-h-screen w-64 bg-indigo-800 text-gray-100" v-if="notification">
	
	<div class="relative">
		<button class="absolute top-0 right-0 p-4" @click="notification = false">
			<fi icon="times" size="lg"></fi>
		</button>
	</div>

</aside>