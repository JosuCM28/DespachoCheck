



<div class="flex">
            <!-- Sidebar -->
            @include('layouts.list.sidebar')

            <!-- Contenido principal -->
            <div class="flex-1 p-6 bg-gray-100">
                @yield('content')
            </div>
        </div>
    </div>