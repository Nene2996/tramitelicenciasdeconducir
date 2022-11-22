<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="flex justify-center mt-4">
        <p class="font-medium font-inherit text-lg font-semibold uppercase">LICENCIAS DE CONDUCIR DE CLASE - A EN PROCESO DE IMPRESION</p>
    </div>
    <div class="flex flex-row justify-center py-5">
        <div class="pt-1 px-4">
            <a href="{{ route('administered.create') }}" class="inline-flex items-center p-2 bg-blue-500 hover:bg-blue-400 text-white font-semibold py-2 border-b-4 border-blue-700 hover:border-blue-500 rounded uppercase leading-tight active:shadow-lg transition duration-150 ease-in-out text-xs">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
                <span class="mx-1">Registrar Administrado</span>
            </a>
        </div>
    </div>
    <div class="text-gray-500">
        <div class="overflow-x-auto">
            @if (session()->has('message'))
                    <div x-ref="textMessageSuccessful" id="alert-1" class="flex p-4 my-4 bg-green-100 rounded-lg dark:bg-green-200 border border-green-400" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="flex-shrink-0 w-5 h-5 text-green-700 dark:text-green-800">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <div role="alert">
                            <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
                                {{ session('message') }}
                            </div>
                        </div>                          
                    </div>
            @endif
            <table class="w-full">
                <thead>
                    <tr>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <input wire:model="searchColumns.apellido_paterno" type="text" placeholder="Apellidos..."
                                class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400" />
                        </td>
                        <td>
                        </td>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <input wire:model="searchColumns.numero_documento" type="text" placeholder="Nro de Dni..."
                                class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400" />
                        </td>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <input wire:model="searchColumns.numero_licencia" type="text" placeholder="Nro Licencia..."
                                class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400" />
                        </td>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <select wire:model="searchColumns.cat_licencia_id" class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400">
                                <option value="" selected disabled>Selecciona</option>
                                <option value="1">A I</option>
                                <option value="2">A IIa</option>
                                <option value="3">A IIb</option>
                                <option value="4">A IIIa</option>
                                <option value="5">A IIIb</option>
                                <option value="6">A IIIc</option>
                            </select>
                        </td>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <select wire:model="searchColumns.tipo_tramite_id" class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400">
                                <option value="" selected disabled>Selecciona</option>
                                <option value="1">Nuevo</option>
                                <option value="2">Revalidación</option>
                                <option value="3">Recategorización</option>
                                <option value="4">Duplicado</option>
                            </select>
                        </td>
                        <td class="py-2 px-1 whitespace-no-wrap border-b text-sm leading-5">
                            <select wire:model="searchColumns.estado_tramite_id" class="text-sm pl-2 pr-4 rounded-lg border border-gray-400 w-full py-1 focus:outline-none focus:border-blue-400">
                                <option value="" selected disabled>Selecciona</option>
                                <option value="1">En Proceso de Impresion</option>
                                <option value="2">Listo para Recoger</option>
                                <option value="3">Licencia Entregada</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="bg-gray-200 text-xs">
                        <th wire:click="sortByColumn('numero_placa_vigente')">
                            Administrado
                        </th>
                        <th wire:click="sortByColumn('nombre_ruta')" class="">
                            Tipo de Documento
                        </th>
                        <th wire:click="sortByColumn('razon_social')" class="border px-3">
                            Nro de Documento
                        </th>
                        <th class="border px-3 ">
                            Nro de Licencia
                        </th>
                        <th class="border px-3">
                            Cat. de Licencia
                        </th>
                        <th class="border px-3">
                            Tipo de Tramite
                        </th>
                        <th class="border px-3">
                            Estado de Tramite
                        </th>
                        <th class="border px-3">
                            Local de Recojo
                        </th>
                        <th class="border px-3">
                            Opciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($administereds as $administered)
                        <tr class="text-xs hover:bg-amber-100 ">
                            <td class="border-l-2 border px-2">{{ $administered->apellido_paterno.' '.$administered->apellido_materno.', '.$administered->nombres }}</td>
                            <td class="border px-2">{{ $administered->tipo_documento_identidad }}</td>
                            <td class="border px-2">{{ $administered->numero_documento_identidad }}</td>
                            <td class="border px-2">{{ $administered->numero_licencia }}</td>
                            <td class="border px-2">{{ $administered->categoria_licencia }}</td>
                            <td class="border px-2">{{ $administered->tipo_tramite }}</td>
                            <td class="border px-2">{{ $administered->estado_tramite }}</td>
                            <td class="border px-2">{{ $administered->local_recojo }}</td>
                            <td class="border">
                                <div class="flex flex-row justify-center text-xs">
                                    <a  title="Modificar Datos" class="hover:bg-gray-200 rounded-full p-2 transition delay-150 duration-300 ease-in-out">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </span>
                                    </a>
                                    <a href="{{ route('administered.changeStatusLicence', $administered) }}" title="Modificar Datos" class="hover:bg-gray-200 rounded-full p-2">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-blue-600">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                            </svg>                                     
                                        </span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr class="text-sm text-center">
                            <td colspan="8">.: No existe datos/informacion :.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            @if ($administereds->hasPages())
                <div class="px-6 py-3">
                    {{ $administereds->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
