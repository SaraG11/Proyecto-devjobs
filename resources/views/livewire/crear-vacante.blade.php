<form class="md:w-1/2 space-y-5" wire:submit.prevent ='crearVacante'>
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" wire:model='titulo' class="block mt-1 w-full" type="text" placeholder="Titulo" :value="old('titulo')"  autofocus autocomplete="username"  />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salaraio Mensual')" />
        <select wire:model="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option> -- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id}}">{{ $salario->salario}}</option>
            @endforeach
            
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select wire:model="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option> -- Seleccione --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id}}">{{ $categoria->categoria}}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" wire:model="empresa" class="block mt-1 w-full" type="text" :value="old('empresa')"  autofocus autocomplete="username"  />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo día para postularse')" />
        <x-text-input id="ultimo_dia" wire:model="ultimo_dia" class="block mt-1 w-full" type="date" :value="old('ultimo_dia')"  autofocus autocomplete="username"  />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descipción del Puesto')" />
        <textarea wire:model="descripcion" id="descripcion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"></textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input wire:model="imagen" id="imagen" type="file" accept="image/*" />
        <div class="my-5 w-80">
            @if ($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}">
            @endif
        </div>
        @error('imagen')
            <livewire:mostrar-alerta :message="$message">
        @enderror
        {{-- <x-input-error :messages="$errors->get('imagen')" class="mt-2" /> --}}
    </div>

    <x-primary-button>
        Registrar Vacante
    </x-primary-button>

</form>
