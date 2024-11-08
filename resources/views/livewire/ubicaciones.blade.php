<div class="bg-white border-b border-gray-200 p-2">
    <div class="flex items-end p-1">
        <!-- Filtro por país -->
        <div class="px-1">
            <label for="pais_id" class="block font-medium text-sm text-gray-700">País:</label>
            <select wire:model="pais_id" id="pais_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-1">
                <option value="" >Todos</option>
                @foreach($paises as $pais)
                    <option value="{{ $pais->id }}">{{ $pais->name }}</option>
                @endforeach
            </select>
        </div>
        <!-- Filtro por departamento -->
        <div class="px-1">
            <label for="departamento_id" class="block font-medium text-sm text-gray-700">Departamento:</label>
            <select wire:model="departamento_id" id="departamento_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-1">
                <option value="">Todos</option>
                @foreach($departamentos as $departamento)
                    <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Filtro por municipio -->
        <div class="px-1">
            <label for="municipio_id" class="block font-medium text-sm text-gray-700">Municipio:</label>
            <select wire:model="municipio_id" id="municipio_id" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-1">
                <option value="">Todos</option>
                @foreach($municipios as $municipio)
                    <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Cuadro de búsqueda por número de oficina -->
        <div class="px-1">
            <label class="block font-medium text-sm text-gray-700">Buscar por número de oficina</label>
            <input type="text" wire:model="numero_oficina" placeholder="Ingrese número de oficina" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-1">
        </div>
        <div class="px-1">
            <label for="filtrar" class="block font-medium text-sm text-white">.</label>
            <x-button wire:click="filtrarUbicaciones" id="filtrar" class="p-1">
                filtrar
            </x-button>
        </div>
</div>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        No. Oficina
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ubicación
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Dirección
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Auxiliatura
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ubicaciones as $ubicacion)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-2">{{ $ubicacion->id }}</td>
                        <td class="px-6 py-2">{{ $ubicacion->numero_oficina }}</td>
                        <td class="px-6 py-2">{{ $ubicacion->municipio->departamento->pais->name }} / {{ $ubicacion->municipio->departamento->name }} / {{ $ubicacion->municipio->name }}</td>
                        <td class="px-6 py-2">{{ $ubicacion->address }}</td>
                        <td class="px-6 py-2">{{ $ubicacion->is_auxiliatura ? 'Sí' : 'No' }}</td>
                        <td class="px-6 py-2">{{ $ubicacion->state ? 'ACTIVO' : 'INACTIVO' }}</td>
                        <td class="px-6 py-2 flex">
                            <!-- Botón de Editar -->
                            <a href="{{ route('ubicaciones', $ubicacion->id) }}" class="text-blue-600 hover:text-blue-800">
                                <!-- Icono de Heroicon para Editar -->
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                  </svg>
                                                                  
                            </a>
                            <!-- Botón de Eliminar -->
                            <button onclick="confirm('¿Seguro que deseas eliminar esta ubicación?') || event.stopImmediatePropagation()" 
                                    wire:click="delete({{ $ubicacion->id }})" 
                                    class="text-red-600 hover:text-red-800">
                                <!-- Icono de Heroicon para Eliminar -->
                                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-2">
        {{ $ubicaciones->links() }}
        </div>
        
    </div>
