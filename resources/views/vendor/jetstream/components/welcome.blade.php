<div class="p-6 sm:px-20 bg-white border-b border-gray-200">

    <div class="flex justify-center mt-4">
        <p class="font-medium font-inherit text-lg font-semibold uppercase">LICENCIAS DE CONDUCIR DE CLASE - A EN PROCESO DE IMPRESION</p>
    </div>

    <div class="mt-6 text-gray-500">
        <div class="overflow-x-auto">
            <table class="w-full mb-28">
                <thead>
                    <tr class="bg-gray-200 text-xs">
                        <th class="border px-3">
                            <input id="checkbox-all" type="checkbox" wire:model="selectAll" class="w-4 h-4 my-2 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                        </th>
                        <th class="border px-3"></th>
                        <th wire:click="sortByColumn('numero_placa_vigente')" class="px-3 flex items-center">
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
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

