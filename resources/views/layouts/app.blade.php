<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        @livewireStyles

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        <script src="../path/to/flowbite/dist/flowbite.js"></script>
        <script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>

        <wireui:scripts />
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    </head>
    <body class="font-sans antialiased bg-gray-50">
        <aside class="ml-[-100%] fixed z-10 top-0 pb-3 px-6 w-full flex flex-col justify-between h-screen border-r bg-white transition duration-300 md:w-4/12 lg:ml-0 lg:w-[25%] xl:w-[20%] 2xl:w-[15%]">
            <div>
                <div class="-mx-6 px-6 py-4">
                    <a href="{{ route('dashboard') }}" title="home" class="font-bold text-2xl text-gray-600">
                        DSF Server
                    </a>
                </div>
        
                <ul class="space-y-2 tracking-wide mt-8">
                    <li>
                        <a href="{{ route('dashboard') }}" class="{{ Route::is('dashboard') ? 'relative px-4 py-3 flex items-center space-x-4 rounded-xl text-blue-700 bg-blue-100 font-semibold' : 'px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group font-semibold' }}">
                            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                                <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
                            </svg>
                            <span class="-mr-1">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('submissions.index') }}" class="{{ Route::is('submissions.index', 'submissions.edit', 'filterAccept', 'filterReject', 'filterNew', 'search', 'asc', 'desc', 'submissions.edit', 'date') ? 'relative px-4 py-3 flex items-center space-x-4 rounded-xl text-blue-700 bg-blue-100 font-semibold' : 'px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group font-semibold' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" fill-rule="evenodd" d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z" clip-rule="evenodd" />
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg>
                            <span class="group-hover:text-gray-700">Permintaan Akses</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('members.index') }}" class="{{ Route::is('members.index','members.create','members.edit', 'searchMember', 'ascMember', 'descMember') ? 'relative px-4 py-3 flex items-center space-x-4 rounded-xl text-blue-700 bg-blue-100 font-semibold' : 'px-4 py-3 flex items-center space-x-4 rounded-md text-gray-600 group font-semibold' }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path class="fill-current text-gray-600 group-hover:text-cyan-600" fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd" />
                                <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z" />
                            </svg>
                            <span class="group-hover:text-gray-700">Daftar Anggota</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="ml-auto mb-6 lg:w-[75%] xl:w-[80%] 2xl:w-[85%]">
            @livewire('navigation-menu')
            @if ($errors->any())
            <div class="absolute top-0 right-0">
                @foreach ($errors->all() as $error )
                        <div class="m-3 p-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                            <span class="font-medium">Danger alert!</span> {{ $error }}
                        </div>
                @endforeach
            </div>
            @endif
            
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
