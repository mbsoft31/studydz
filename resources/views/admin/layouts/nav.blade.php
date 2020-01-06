<div class="flex justify-between items-center py-4 bg-indigo-900">
  <div class="flex items-center flex-shrink-0 ml-10 cursor-pointer">
    <button type="button" class="text-gray-200 m-2" @click="side = !side">
      <fi icon="bars" size="lg"></fi>
    </button>
    <fi icon="drafting-compass" size="2x" class="text-red-600 mx-2"></fi>
    <span class="text-3xl text-blue-200 font-semibold">StudyDZ</span>
  </div>
  <i class="fas fa-bars fa-2x visible md:invisible mr-10 md:mr-0 text-blue-200 cursor-pointer"></i>
  <ul class="hidden md:flex overflow-x-hidden mr-10 font-semibold">
    <li class="mr-6 p-1 cursor-pointer">
      <button type="button" class="text-white font-semibold hover:text-blue-300" @click="notification = !notification">
        <fi icon="bell" size="lg"></fi>
        notification
      </button>
    </li>
    <li class="mr-6 p-1">
      <a class="text-white hover:text-blue-300" onclick="document.querySelector('#logout').submit()">logout</a>
      <form class="hidden" id='logout' action="{{ route('logout') }}" method="post">
        @csrf
      </form>
    </li>
  </ul>
</div>