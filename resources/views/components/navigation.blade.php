<header class="">
    <nav class="py-5 bg-transparent relative z-20">
        <div class="container mx-auto w-[80%]">
            <div class="flex items-center justify-between">
                <div>
                    <a href="/">
                        <h2 class="text-2xl font-bold   text-orange-500">
                            Cooking
                        </h2>
                    </a>

                </div>
                <div class=" lg:hidden">
                    <button id="toggle_menu">
                        <i class="fa-solid fa-burger text-2xl hover:text-orange-500 transition-colors duration-200 ease-linear
                        "></i>
                    </button>
                </div>
                <div class="absolute z-20 bg-orange-500  lg:bg-transparent  left-0 h-0 w-full
                overflow-hidden
                transition-all
                duration-300
                ease-in-out
                top-full
                 lg:relative lg:h-auto lg:w-full"
                     id="navbar">
                    <div class=" mx-auto w-[80%] lg:w-auto lg:mx-0">
                        <ul class=" flex flex-col lg:flex-row lg:flex-1 p-5 lg:p-0  lg:justify-end">
                            <li class="my-2 mx-2">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="my-2 mx-2">
                                <a href="{{ url('/recipes') }}">Recipes</a>
                            </li><li class="my-2 mx-2">
                                <a href="{{ url('/create') }}">New recipe</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </nav>
</header>
