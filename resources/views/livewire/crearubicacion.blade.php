<form wire:submit.prevent="store" class="w-full max-w-lg p-4">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        Número de oficina
      </label>
      <input wire:model="numero_oficina" type="text" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" placeholder="Número">
      @error('numero_oficina') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Dirección
      </label>
      <input wire:model="direccion" type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Dirección completa">
      @error('direccion') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-2">
    <div class="w-full md:w-1/3 px-3 mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        País
      </label>
      <select wire:model="pais_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <option value="">Seleccione</option>
          @foreach($paises as $pais)
              <option value="{{ $pais->id }}">{{ $pais->name }}</option>
          @endforeach
      </select>
      @error('pais_id') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Departamento
      </label>
      <select wire:model="departamento_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <option value="">Seleccione</option>
          @foreach($departamentos as $departamento)
              <option value="{{ $departamento->id }}">{{ $departamento->name }}</option>
          @endforeach
      </select>
      @error('departamento_id') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        Municipio
      </label>
      <select wire:model="municipio_id" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
          <option value="">Seleccione</option>
          @foreach($municipios as $municipio)
              <option value="{{ $municipio->id }}">{{ $municipio->name }}</option>
          @endforeach
      </select>
      @error('municipio_id') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        <input type="checkbox" wire:model="auxiliatura" />
        <span>ES AUXILIATURA</span>
      </label>
    </div>

    <div class="w-full md:w-1/3 px-3 mb-6">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
        <input type="checkbox" wire:model="activo" checked />
        <span>ACTIVO</span>
      </label>
    </div>

    <div class="w-full md:w-3/3 px-3 mb-6">
      <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        Guardar
      </button>
    </div>
  </div>
</form>
