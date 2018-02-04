<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registros;

class HomeController extends Controller
{

    public function getHome()
    {
        return view('home');
    }

    public function postRegistroReclamo(Request $request)
    {
        $validatedData = $request->validate([
            'tipo_documento' => 'required',
            'numero_documento' => 'required|min:8',
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'telefono_fijo' => 'required',
            'telefono_celular' => 'required',
            'email' => 'required|email',
            'tienda' => 'required',
            'motivo' => 'required',
            'detalle' => 'required',
            'pedido' => 'required',
        ]);
        // generar codigo
        $codigo = strtoupper(substr(md5(uniqid(mt_rand(), true)), 0, 8));
        // obtener ip
        $ip = request()->ip();
        // grabar registro
        $registro = new Registros;
        $registro->codigo = $codigo;
        $registro->tipo_documento = $request->tipo_documento;
        $registro->numero_documento = $request->numero_documento;
        $registro->nombres = $request->nombres;
        $registro->apellido_paterno = $request->apellido_paterno;
        $registro->apellido_materno = $request->apellido_materno;
        $registro->telefono_fijo = $request->telefono_fijo;
        $registro->telefono_celular = $request->telefono_celular;
        $registro->email = $request->email;
        $registro->nombre_apoderado = $request->nombre_apoderado;
        $registro->tipo_documento_apoderado = $request->tipo_documento_apoderado;
        $registro->numero_documento_apoderado = $request->numero_documento_apoderado;
        $registro->tienda = $request->tienda;
        $registro->motivo = $request->motivo;
        $registro->detalle = $request->detalle;
        $registro->pedido = $request->pedido;
        $registro->ip = $ip;
        $registro->info_navegador = $request->info_navegador;
        $registro->save();
        return view('gracias')->with('nombres', $request->nombres)->with('codigo', $codigo)->with('motivo', $request->motivo);
    }

    public function getVerReclamos()
    {
        $registros = Registros::all()->sortByDesc('created_at');;
        return view('registros')->with('data', $registros);
    }

    public function getVerReclamo($id)
    {
        $registro = Registros::find($id);
        return view('registro')->with('data', $registro);
    }

    public function postActualizarReclamo(Request $request)
    {
        $registro = Registros::find($request->id);
        $registro->fecha_respuesta = date('Y-m-d');
        $registro->respuesta = $request->respuesta;
        $registro->estado = 2;
        $registro->save();
        $registros = Registros::all();
        return view('registros')->with('data', $registros);
    }

    public function getConsultaReclamo($id)
    {
        $registro = Registros::where('codigo', $id)->get();
        return view('consulta')->with('data', $registro[0]);
    }

}
