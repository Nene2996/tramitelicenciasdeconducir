<div class="py-12">
    <div class="max-w-7xl w-screen mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-b-lg py-5 px-7">
            <div class="flex justify-center mt-4">
                <div class="font-inherit text-lg font-semibold uppercase text-gray-700">Proceso de cambio de Ruta o Transportista: <span class="text-yellow-600">frfrfr</span></div>
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
                    <legend class="ml-5 px-3 text-sm font-semibold uppercase">Información referente al C.I.T.V:</legend>
                    <div class="grid grid-cols-1 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Empresa Certificadora:</label>
                            <input type="text" class="rounded-md sm:text-sm
                                @error('certifyingCompany')
                                    border-2 border-red-500
                                @enderror"
                            wire:model="certifyingCompany">
                            @error('certifyingCompany') 
                                <span class="font-sans text-red-500 text-sm pt-1">
                                    <div class="flex items-center space-x-1">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="font-light">
                                            {{ $message }}
                                        </div>
                                    </div>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">N° de Certificado:</label>
                            <input type="text" class="rounded-md sm:text-sm
                                @error('certificateNumber')
                                    border-2 border-red-500
                                @enderror"
                            wire:model="certificateNumber">
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Vigencia desde:</label>
                            <input type="date" class="rounded-md sm:text-sm
                                @error('startValidity')
                                    border-2 border-red-500
                                @enderror"
                            wire:model="startValidity">
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Vigencia hasta:</label>
                            <input type="date" class="rounded-md sm:text-sm
                                @error('endValidity')
                                    border-2 border-red-500
                                @enderror"
                            wire:model="endValidity">
                        </div>
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Estado:</label>
                            <input type="text" class="rounded-md sm:text-sm bg-gray-100 border-gray-200 border-2"
                            wire:model="status" disabled readonly>
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            @error('certificateNumber') 
                                <span class="font-sans text-red-500 text-sm pt-1">
                                    <div class="flex items-center space-x-1">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="font-light">
                                            {{ $message }}
                                        </div>
                                    </div>
                                </span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1">
                            @error('startValidity') 
                                <span class="font-sans text-red-500 text-sm pt-1">
                                    <div class="flex items-center space-x-1">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="font-light">
                                            {{ $message }}
                                        </div>
                                    </div>
                                </span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1">
                            @error('endValidity') 
                                <span class="font-sans text-red-500 text-sm pt-1">
                                    <div class="flex items-center space-x-1">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="font-light">
                                            {{ $message }}
                                        </div>
                                    </div>
                                </span>
                            @enderror
                        </div>
                        <div class="grid grid-cols-1">
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-3 my-2 text-sm">
                        <div class="grid grid-cols-1">
                            <label for="" class="font-semibold">Resultado de Inspeccion:</label>
                            <input type="text" class="rounded-md sm:text-sm
                                @error('inspectionResult')
                                    border-2 border-red-500
                                @enderror"
                            wire:model="inspectionResult">
                            @error('inspectionResult') 
                                <span class="font-sans text-red-500 text-sm pt-1">
                                    <div class="flex items-center space-x-1">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                            </svg>
                                        </div>
                                        <div class="font-light">
                                            {{ $message }}
                                        </div>
                                    </div>
                                </span>
                            @enderror
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>
