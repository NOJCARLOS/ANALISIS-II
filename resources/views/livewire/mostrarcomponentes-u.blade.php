<div>
    <!-- Botones para cambiar entre componentes -->
    <DIV class="p-2">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="p-2">
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <button wire:click="mostrarComponente('usuarios')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">Lista de usuarios</button>
                <button wire:click="mostrarComponente('crearusuario')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">Crear usuario</button>
                <button wire:click="mostrarComponente('accionesusuario')" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">Más acciones</button>
            </div>
        </div>
    

        <!-- Espacio para los componentes dinámicos -->
        <div class="px-4 mt-6">
            @if ($componenteActual === 'usuarios')
                <livewire:usuarios />
            @elseif ($componenteActual === 'crearusuario')
                <livewire:crearusuario />
            @elseif ($componenteActual === 'accionesusuario')
                <livewire:accionesusuario />
            @endif
        </div>
    </div>
    </DIV>
</div>
