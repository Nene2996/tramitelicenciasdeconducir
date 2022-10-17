<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Administered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LicenseController extends Controller
{
    public function LicencePending(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tipo_documento' => 'required|numeric',
            'numero_documento' => 'required|numeric|regex:/^[0-9]+$/'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 500,
                'message' => 'Seleccionar el tipo e ingresar numero de documento de identidad',
            ], 500);
        }

        /*
            $licencesPending = Administered::where('numero_documento', $request->input('numero_documento'))
                            ->where('tipo_doc_id', $request->input('tipo_documento'))->first();
            
            $licencesPending = Administered::with([
                'documentType', 
                'licenceCategory',
                'placeDelivery',
                'procedureType',
                'processStatus'
                ])->get();

            $licencesPending = Administered::with('licenceCategory:id,categoria')->get();
        */
        $licencesPending = Administered::select([
            'administrados.id',
            'nombres',
            'apellido_paterno',
            'apellido_materno',
            'tipos_documento.tipo as tipo_documento_identidad',
            'numero_documento as numero_documento_identidad',
            'numero_licencia',
            'categorias_licencia.categoria as categoria_licencia',
            'tipos_tramite.tipo as tipo_tramite',
            'estados_tramite.estado as estado_tramite',
            'locales_recojo.local as local_recojo',
            ])->leftJoin(
                'categorias_licencia',
                'administrados.cat_licencia_id',
                '=',
                'categorias_licencia.id'
            )->leftJoin(
                'tipos_documento',
                'administrados.tipo_doc_id',
                '=',
                'tipos_documento.id'
            )->leftJoin(
                'tipos_tramite',
                'administrados.tipo_tramite_id',
                '=',
                'tipos_tramite.id'
            )->leftJoin(
                'estados_tramite',
                'administrados.estado_tramite_id',
                '=',
                'estados_tramite.id'
            )->leftJoin(
                'locales_recojo',
                'administrados.local_recojo_id',
                '=',
                'locales_recojo.id'
            )
            ->where('tipo_doc_id',  $request->input('tipo_documento'))
            ->where('numero_documento',  $request->input('numero_documento'))
            ->first();
        
        if ($licencesPending) {
            return $licencesPending;
        } else {
            return response()->json([
                'status' => 500,
                'message' => 'El Administrado con Numero de Doc de Identidad ('. $request->input('numero_documento') .') no tiene ningun tramite en proceso',
            ], 500);
        }
    }
}
