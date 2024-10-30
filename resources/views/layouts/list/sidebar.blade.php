<!-- Menú Clientes --> 
<div class="w-64 h-screen bg-gray-200 text-black" x-data="{ openMenu: '' }">
    <div class="p-4">
        <h2 class="text-2xl font-semibold">Dashboard</h2>
    </div>

    <!-- Menú principal -->
    <nav>
        <!-- Menú Clientes -->
        <div 
            @click="openMenu = openMenu === 'clientes' ? '' : 'clientes'" 
            class="cursor-pointer p-4 hover:bg-blue-100"
        >
            Clientes
        </div>
        <div x-show="openMenu === 'clientes'" x-transition.duration.500ms class="pl-8 transition ease-in-out duration-500">
            <a href="#" class="block p-2 hover:scale-105 duration-500">Nuevo Cliente</a>
            <a href="#" class="block p-2 hover:scale-105 duration-500">Ver Clientes</a>
        </div>

        <!-- Menú Recibos -->
        <div 
            @click="openMenu = openMenu === 'recibos' ? '' : 'recibos'" 
            class="cursor-pointer p-4 hover:bg-blue-100"
        >
            Recibos
        </div>
        <div x-show="openMenu === 'recibos'" x-transition.duration.500ms class="pl-8 transition ease-in-out duration-500">
            <a href="#" class="block p-2 hover:scale-105 duration-500">Crear Recibo</a>
            <a href="#" class="block p-2 hover:scale-105 duration-500">Ver Recibos</a>
        </div>

        <!-- Menú Tareas -->
        <div 
            @click="openMenu = openMenu === 'tareas' ? '' : 'tareas'" 
            class="cursor-pointer p-4 hover:bg-blue-100"
        >
            Tareas
        </div>
        <div x-show="openMenu === 'tareas'" x-transition.duration.500ms class="pl-8 transition ease-in-out duration-500">
            <a href="#" class="block p-2 hover:scale-105 duration-500">Nueva Tarea</a>
            <a href="#" class="block p-2 hover:scale-105 duration-500">Ver Tareas</a>
        </div>

        <!-- Menú Inventario -->
        <div 
            @click="openMenu = openMenu === 'inventario' ? '' : 'inventario'" 
            class="cursor-pointer p-4 hover:bg-blue-100"
        >
            Inventario
        </div>
        <div x-show="openMenu === 'inventario'" x-transition.duration.500ms class="pl-8 transition ease-in-out duration-500">
            <a href="#" class="block p-2 hover:scale-105 duration-500">Nuevo Item</a>
            <a href="#" class="block p-2 hover:scale-105 duration-500">Ver Inventario</a>
        </div>
    </nav>
</div>
