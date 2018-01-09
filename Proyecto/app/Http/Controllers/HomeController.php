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
        return view('gracias');
    }

    public function getVerReclamos()
    {
        $registros = Registros::all();
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
        $registro = Registros::find($id);
        return view('consulta')->with('data', $registro);
    }

    public function getTipoCombustible()
    {
        $registros = TipoCombustible::all();
        return view('TipoCombustible.lista')->with('data', $registros);
    }
    public function postTipoCombustibleAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $tipoCombustible = new TipoCombustible;
        } else {
            $tipoCombustible = TipoCombustible::find($id);
        }
        $tipoCombustible->descripcion = $request->descripcion;
        $tipoCombustible->save();
        return redirect()->route('tc_lista');
    }

    public function getTipoVehiculo()
    {
        $registros = TipoVehiculo::all();
        return view('TipoVehiculo.lista')->with('data', $registros);
    }
    public function postTipoVehiculoAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $tipoVehiculo = new TipoVehiculo;
        } else {
            $tipoVehiculo = TipoVehiculo::find($id);
        }
        $tipoVehiculo->descripcion = $request->descripcion;
        $tipoVehiculo->save();
        return redirect()->route('tv_lista');
    }

    public function getVehiculoMarca()
    {
        $registros = VehiculoMarca::all();
        return view('VehiculoMarca.lista')->with('data', $registros);
    }
    public function postVehiculoMarcaAgregar(Request $request)
    {
        $validatedData = $request->validate([
            'descripcion' => 'required|max:100',
            'logo' => 'image|mimes:jpeg,png,jpg,bmp,gif,svg|max:5120',
        ]);
        $id = $request->id;
        if ($id == 0) {
            $vehiculoMarca = new VehiculoMarca;
        } else {
            $vehiculoMarca = VehiculoMarca::find($id);
        }
        $vehiculoMarca->descripcion = $request->descripcion;
        if ($request->hasFile('logo')) {
            $imageName = time().'.'.request()->logo->getClientOriginalExtension();
            request()->logo->move(public_path('uploads/marca-vehiculo'), $imageName);
            $vehiculoMarca->logo = $imageName;
        }
        $vehiculoMarca->save();
        return redirect()->route('vmar_lista');
    }
}
