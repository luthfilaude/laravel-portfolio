<!DOCTYPE html>
<html lang="en" data-theme="retro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Lutxise</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-main">

    {{-- Navbar --}}

    <nav id="navbar" class="fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="home" class="flex items-center space-x-3 rtl:space-x-reverse">
                {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"> --}}
                <span class=" text-green-dark font-bold self-center text-2xl whitespace-nowrap">Lutxise</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                {{-- <a href="admin"><button type="button"
                        class="text-white bg-green1 hover:bg-green-dark transtition duration-200 focus:ring-4 focus:outline-none font-bold rounded-lg text-sm px-4 py-2 text-center">Login</button></a> --}}

                @if (Auth::check())
                    <!-- Profil User -->
                    <div class="relative">
                        <button id="profile-menu-toggle" type="button"
                            class="flex items-center text-white bg-green1 hover:bg-green-dark transition duration-200 focus:ring-4 focus:outline-none font-bold rounded-lg text-sm px-4 py-2 text-center">
                            {{ Auth::user()->name }}
                            <svg class="ml-2 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <!-- Dropdown Menu -->
                        <div id="profile-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                            <a href="admin"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                Dashboard
                            </a>
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit"
                                    class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <!-- Tombol Login -->
                    <a href="admin/login">
                        <button type="button"
                            class="text-white bg-green1 hover:bg-green-dark transition duration-200 focus:ring-4 focus:outline-none font-bold rounded-lg text-sm px-4 py-2 text-center">
                            Login
                        </button>
                    </a>
                @endif

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-bold md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 text-lg">
                    <li>
                        <a href="#home"
                            class="block py-2 px-3 transtition duration-200 text-green2 hover:text-green-dark rounded md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 transtition duration-200 text-green2 hover:text-green-dark rounded md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 transtition duration-200 text-green2 hover:text-green-dark rounded md:p-0">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 transtition duration-200 text-green2 hover:text-green-dark rounded md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="py-8 mt-[50px]">
        <div class="container mx-auto flex flex-col-reverse md:flex-row items-center">
            <!-- Kolom Kiri -->
            <div class="text-center md:text-left md:w-1/2 space-y-4">
                <h2 class="mt-4 text-2xl md:text-4xl font-semibold">Hi There, I'm</h2>
                <h1
                    class="max-w-2xl text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-5xl text-[#4f6f52]">
                    Muhamad Luthfi Novianto</h1>
                <h4 class="text-gray-800 text-lg mt-[10px] lg:text-2xl">
                    I'm a
                    <span id="typing-effect" class="font-bold"></span>
                </h4>
                <p
                    class="max-w-2xl mb-6 text-base font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">
                    Elevating Ideas: Designing Tomorrow with Creativity. Welcome to the Showcase of Innovation!</p>
                <a href="#contact"
                    class="mt-[50px] inline-block px-6 py-3 transtition duration-200 bg-green1 text-white text-lg font-semibold rounded-lg hover:bg-green-dark">
                    My Portfolio
                </a>
            </div>

            <!-- Kolom Kanan -->
            <div class="md:w-1/2 flex justify-center">
                <img src="storage/heroku.png" alt="Hero Image"
                    class="w-full max-w-lg rounded-lg hover:shadow-lg transtition duration-500">
            </div>
        </div>
    </header>

    {{-- <main class="container mx-auto my-8">
        <h2 class="text-2xl font-bold mb-4">Latest Posts</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse ($posts as $post)
                <div class="bg-white rounded-lg shadow p-4">
                    @if ($post->image)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}" class="w-full h-48 object-cover rounded-md mb-4">
                    @endif
                    <h3 class="text-xl font-semibold">
                        <a href="{{ route('home', $post->slug) }}" class="text-blue-600 hover:underline">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-gray-600 mt-2">{{ Str::limit(strip_tags($post->content), 100) }}</p>
                    <a href="{{ route('home', $post->slug) }}" class="text-blue-500 hover:underline mt-2 block">
                        Read more
                    </a>
                </div>
            @empty
                <p>No posts available.</p>
            @endforelse
        </div>
    </main> --}}
    <main class="container mx-auto px-4 sm:px-6 lg:px-8 mt-[100px] mb-6">
        <h2 class="text-green-dark text-2xl font-bold text-center mb-6">LATEST POSTS</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
            @forelse ($posts as $post)
                <div class="bg-white rounded-lg shadow p-4 hover:shadow-lg transition-shadow">
                    @if ($post->image)
                        <img src="{{ $post->image_url }}" alt="{{ $post->title }}"
                            class="w-full h-48 object-cover rounded-md mb-4">
                    @endif
                    <h3 class="text-xl font-semibold">
                        <a href="{{ route('home', $post->slug) }}" class="text-green1 hover:underline">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-gray-600 mt-2 text-sm sm:text-base">
                        {{ Str::limit(strip_tags($post->content), 100) }}
                    </p>
                    <a href="{{ route('home', $post->slug) }}"
                        class="text-green3 hover:underline mt-2 block text-sm sm:text-base">
                        Read more
                    </a>
                </div>
            @empty
                <p class="text-center col-span-full">No posts available.</p>
            @endforelse
        </div>
    </main>


    <footer class="bg-green-dark">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="home" class="flex items-center">
                        {{-- <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" /> --}}
                        <span class="self-center text-2xl font-semibold whitespace-nowrap text-green3">Lutxise</span>
                    </a>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-green3 sm:text-center">© {{ date('Y') }} <a href="home"
                        class="hover:underline">Lutxise</a>. All Rights Reserved.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-green3 hover:text-green2">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-green3 hover:text-green2 ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-green3 hover:text-green2 ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-green3 hover:text-green2 ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-green3 hover:text-green2 ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>


    {{-- <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; {{ date('Y') }} My Blog. All rights reserved.</p>
        </div>
    </footer> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    @vite('resources/js/app.js', 'resources/js/flowbite.mid.js')


</body>

</html>
