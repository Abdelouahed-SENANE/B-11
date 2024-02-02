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
                <div>
                    <ul class="flex items-center">
                        <li class="mx-2">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="mx-2">
                            <a href="{{ url('/recipes') }}">Recipes</a>
                        </li><li class="mx-2">
                            <a href="{{ url('/create') }}">New recipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
