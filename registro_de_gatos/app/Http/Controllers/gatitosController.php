<?php

namespace App\Http\Controllers;

use App\Models\gatitosModel;
use Illuminate\Http\Request;

class gatitosController extends Controller
{
    //
     /**
        * Display a listing of the resource.
        *
        * @return Response
        */
        public function index()
        {
            //
            $gatitos = gatitosModel::all();

            return view('mostrar',compact('gatitos'));
        }

        /**
            * Show the form for creating a new resource.
            *
            * @return Response
            */
        public function create()
        {
            //
            return view('crear');
        }

        /**
            * Store a newly created resource in storage.
            *
            * @return Response
            */
        public function store(Request $request)
        {
            //
            $gatitos = new gatitosModel();
            $gatitos -> nombre = $request->post('nombre');
            $gatitos -> raza = $request->post('raza');
            $gatitos -> historia = $request->post('historia');
            $gatitos->save();

            return redirect()->route('gatitos.index')->with("Success","Agregado con exito");

        }

        /**
            * Display the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function show($id)
        {
            //
            $gatitos = gatitosModel::find($id);
            return view('eliminar',compact('gatitos'));
        }

        /**
            * Show the form for editing the specified resource.
            *
            * @param  int  $id
            * @return Response
            */
        public function edit($id)
        {
            //
            $gatitos = gatitosModel::find($id);
            return view('editar',compact('gatitos'));
        }

        /**
            * Update the specified resource in storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function update(Request $request ,$id)
        {
            //
            $gatitos = gatitosModel::find($id);
            $gatitos -> nombre = $request->post('nombre');
            $gatitos -> raza = $request->post('raza');
            $gatitos -> historia = $request->post('historia');
            $gatitos->save();

            return redirect()->route('gatitos.index');

        }

        /**
            * Remove the specified resource from storage.
            *
            * @param  int  $id
            * @return Response
            */
        public function destroy($id)
        {
            //
            $gatitos = gatitosModel::find($id);
            $gatitos->delete();
            return redirect()->route('gatitos.index');
        }

}
