<div class="py-12">
    <div class="max-w-7xl w-screen mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-b-lg py-5 px-7">
            <div class="flex justify-center mt-4">
                <div class="font-inherit text-lg font-semibold uppercase text-gray-700">Actualizacion de Estado de Tramite de Licencia de Conducir<span class="text-yellow-600"></span></div>
            </div>
            @if ($errors->has('errorChangeRouteOrEnterprise'))
                <div x-ref="text" id="alert-1" class="flex p-4 mb-4 bg-red-100 rounded-lg dark:bg-red-200 border border-red-400" role="alert">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="flex-shrink-0 w-5 h-5 text-red-700 dark:text-red-800">
                        <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
                    </svg>
                    <div role="alert">
                        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
                            {{ $errors->first('errorChangeRouteOrEnterprise') }}
                        </div>
                    </div>
                </div>
            @endif
            <div class="grid grid-cols-1 text-sm mt-2 w-full">
                <fieldset class="border-2 border-gray-400 rounded-md py-2 px-4 mt-3 mb-3">
                    <legend class="ml-5 px-3 text-sm font-semibold uppercase">Información referente al Administrado:</legend>
                    <div class="grid grid-cols-1 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Apellidos y Nombres:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            disabled readonly value="{{ $administered->apellido_paterno.' '.$administered->apellido_materno.' '.$administered->nombres }}">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Tipo de Documento:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            value="{{ $administered->documentType->tipo }}"
                            disabled readonly>
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Nro de Documento:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            value="{{ $administered->numero_documento }}"
                            disabled readonly>
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Nro de Licencia:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            value="{{ $administered->numero_licencia }}"
                            disabled readonly>
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Cat. de Licencia:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            value="{{ $administered->licenceCategory->categoria }}"
                            disabled readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Tipo de Tramite:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            value="{{ $administered->procedureType->tipo }}"
                            disabled readonly>
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Estado de Tramite:</label>
                            <select class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400
                                    @error('statusId')
                                        border-2 border-red-500
                                    @enderror"
                                    wire:model="statusId">
                                <option value="" selected>Selecciona una opcion</option>
                                @foreach($processStatus as $item)
                                    <option value="{{ $item->id }}">{{ $item->estado }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="flex justify-start space-x-3">
                <button wire:click.prevent="save"
                        class="inline-flex items-center focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white tracking-widest bg-blue-500 hover:bg-blue-600 font-bold text-xs uppercase">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 01-3-3m3 3a3 3 0 100 6h13.5a3 3 0 100-6m-16.5-3a3 3 0 013-3h13.5a3 3 0 013 3m-19.5 0a4.5 4.5 0 01.9-2.7L5.737 5.1a3.375 3.375 0 012.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 01.9 2.7m0 0a3 3 0 01-3 3m0 3h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008zm-3 6h.008v.008h-.008v-.008zm0-6h.008v.008h-.008v-.008z" />
                        </svg>
                        <span class="mx-1">Guardar</span>
                </button>
                <a href="{{ route('dashboard') }}" class="inline-flex items-center focus:outline-none border border-transparent py-2 px-5 rounded-lg shadow-sm text-center text-white tracking-widest bg-gray-500 hover:bg-gray-600 font-bold text-xs uppercase">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    <span class="mx-1">Cancelar</span>
                </a>
            </div>
        </div>
    </div>
</div>
