<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function index(){
        $datos=DB::select("select * from producto");
        return view("Modulo_inventario")->with("datos",$datos);
    }
    public function create(Request $request){
        try {
            $sql=DB::insert("insert into producto(ID_PRODUCTO,PRODUCTO,DESCRIPCION,VALOR_UNITARIO,categoria_ID_CATEGORIA,marca_ID_MARCA,inventario_ID_PRODUCTO)values(?,?,?,?,?,?,?)",[
                $request->txtcodigo,
                $request->txtnombre,
                $request->txtdescripcion,
                $request->txtvalor,
                $request->txtcategoria,
                $request->txtmarca,
                $request->txtinventario
            ]);
        } catch (\Throwable $th) {
            $sql=0;
        }
        if ($sql== true) {
            return back()->with("correcto","producto registrado correctamente");
        }else {
            return back()->with("incorrecto","Error al registrar");
        }
    }
    public function update(Request $request){
        try {
            $sql=DB::update("update producto set PRODUCTO=?,DESCRIPCION=?,VALOR_UNITARIO=?,categoria_ID_CATEGORIA=?,marca_ID_MARCA=? where ID_PRODUCTO=?",[
                $request->txtnombre,
                $request->txtdescripcion,
                $request->txtvalor,
                $request->txtcategoria,
                $request->txtmarca,
                $request->txtinventario
            ]);
            if ($sql==0) {
                $sql=1;
            }
        } catch (\Throwable $th) {
            $sql=0;
        }
        if ($sql== true) {
            return back()->with("correcto","producto modificado correctamente");
        }else {
            return back()->with("incorrecto","Error al modificar");
        }
    }
    public function delete($ID){
        try {
            $sql=DB::delete("delete from producto where ID_PRODUCTO=$ID");
        } catch (\Throwable $th) {
            $sql=0;
        }
        if ($sql== true) {
            return back()->with("correcto","producto eliminado correctamente");
        }else {
            return back()->with("incorrecto","Error al eliminar");
        }
    }
}
