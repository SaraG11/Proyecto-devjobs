<form class="md:w-1/2 space-y-5">
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" placeholder="Titulo" :value="old('titulo')" required autofocus autocomplete="username"  />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="salario" :value="__('Salaraio Mensual')" />
        <select name="salario" id="salario" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value=""> -- Seleccione --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id}}">{{ $salario->salario}}</option>
            @endforeach
            
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="categoria" :value="__('Categoria')" />
        <select name="categoria" id="categoria" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full">
            <option value="">--Selecciona un rol --</option>
            <option value="1">Developer - Obtener Empleo</option>
            <option value="2">Recruiter - Publicar Empleos</option>
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input id="empresa" class="block mt-1 w-full" type="text" name="empresa" :value="old('empresa')" required autofocus autocomplete="username"  />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo día para postularse')" />
        <x-text-input id="ultimo_dia" class="block mt-1 w-full" type="date" name="ultimo_dia" :value="old('ultimo_dia')" required autofocus autocomplete="username"  />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descipción del Puesto')" />
        <textarea name="descripcion" id="descripcion" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"></textarea>
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input name="imagen" id="imagen" type="file" />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>

    <x-primary-button>
        Registrar Vacante
    </x-primary-button>

</form>
