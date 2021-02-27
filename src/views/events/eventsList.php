<!-- Unicons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@3.0.6/css/line.css">

<div class="grid mx-20">
    <p class="text-center mb-5">
        Badge templates can found at
        <a href="https://tailwindcomponents.com/component/labelbadges" class="font-bold" target="_blank">
            here
        </a>
    </p>

    <p class="text-center font-bold mb-10">
        Also card icons required Unicons (npm i @iconscout/unicons)
    </p>

    <!-- Question Listing Item Card -->
    <div class="bg-white rounded-lg shadow-sm hover:shadow-lg duration-500 px-2 sm:px-6 md:px-2 py-4 my-6">
        <div class="grid grid-cols-12 gap-3">
            <!-- Meta Column -->
            <div class="col-span-0 sm:col-span-2 text-center hidden sm:block">
                <!-- Vote Counts -->
                <div class="grid grid-rows-2">
                    <div class="inline-block font-medium text-xl">
                        21
                    </div>

                    <div class="inline-block font-medium text-sm">
                        Votes
                    </div>
                </div>

                <!-- Answer Counts -->
                <a href="#" class="grid grid-rows-2 mx-auto mb-3 py-1 w-4/5 2lg:w-3/5 rounded-md bg-green-400">
                    <div class="inline-block font-medium text-2xl text-white">
                        12
                    </div>

                    <div class="inline-block font-medium text-white mx-1 text-sm lg:text-md">
                        Answers
                    </div>
                </a>

                <!-- View Counts -->
                <div class="grid my-3">
                    <span class="inline-block font-bold text-xs">
                        1213 Vews
                    </span>
                </div>
            </div>

            <!-- Summary Column -->
            <div class="col-span-12 sm:col-start-3 sm:col-end-13 px-3 sm:px-0">
                <div class="grid block sm:hidden">
                    <div class="flex flex-wrap">
                        <div class="mr-2">
                            <div class="inline-block font-light capitalize">
                                <i class="uil uil-arrow-circle-up mr-1"></i>
                                <span class="text-sm">
                                    21 Votes
                                </span>
                            </div>
                        </div>
                        <div class="mr-2">
                            <div class="inline-block font-light capitalize">
                                <i class="uil uil-check-circle mr-1"></i>
                                <span class="text-sm">
                                    21 Answers
                                </span>
                            </div>
                        </div>
                        <div class="mr-2">
                            <div class="inline-block">
                                <i class="uil uil-eye mr-1"></i>
                                <span class="text-sm capitalize font-light">
                                    21 Views
                                </span>
                            </div>
                        </div>

                        <div class="mr-2">
                            <div class="inline-block">
                                <i class="uil uil-clock mr-1"></i>
                                <span class="text-sm font-light">
                                    a few mins ago ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center hidden sm:block">
                    <span class="font-light text-gray-600">
                        a few min ago
                    </span>
                </div>

                <div class="mt-2">
                    <a href="#" class="sm:text-sm md:text-md lg:text-lg text-gray-700 font-bold hover:underline">
                        Praesent at arcu augue. Etiam lectus massa, consequat
                    </a>

                    <p class="mt-2 text-gray-600 text-sm md:text-md">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Tempora expedita dicta totam totam gul koparam doloremque. Excepturi iste iusto eos enim
                        reprehenderit nisi, accusamus...
                    </p>
                </div>

                <!-- Question Labels -->
                <div class="grid grid-cols-2 mt-4 my-auto">
                    <!-- Categories  -->
                    <div class="col-span-12 lg:col-span-8">
                        <a href="#" class="inline-block rounded-full text-white
                            bg-red-400 hover:bg-red-500 duration-300
                            text-xs font-bold
                            mr-1 md:mr-2 mb-2 px-2 md:px-4 py-1
                            opacity-90 hover:opacity-100">
                            Caching
                        </a>
                        <a href="#" class="inline-block rounded-full text-white
                            bg-yellow-400 hover:bg-yellow-500 duration-300
                            text-xs font-bold
                            mr-1 md:mr-2 mb-2 px-2 md:px-4 py-1
                            opacity-90 hover:opacity-100">
                            RabbitMQ
                        </a>
                        <a href="#" class="inline-block rounded-full text-white
                            bg-green-400 hover:bg-green-500 duration-300
                            text-xs font-bold
                            mr-1 md:mr-2 mb-2 px-2 md:px-4 py-1
                            opacity-90 hover:opacity-100">
                            Memcached
                        </a>
                        <a href="#" class="inline-block rounded-full text-white
                            bg-blue-400 hover:bg-blue-500 duration-300
                            text-xs font-bold
                            mr-1 md:mr-2 mb-2 px-2 md:px-4 py-1
                            opacity-90 hover:opacity-100">
                            Redis
                        </a>
                    </div>

                    <!-- User -->
                    <div class="col-none hidden mr-2 lg:block lg:col-start-9 lg:col-end-12">
                        <a href="#" class="flex items-center">
                            <img src="https://avatarfiles.alphacoders.com/165/thumb-1920-165285.png" alt="avatar"
                                 class="mr-2 w-8 h-8 rounded-full">

                            <div class="text-gray-600 font-bold text-sm hover:underline">
                                EgoistDeveloper
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>