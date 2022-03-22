<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perfume;
use Illuminate\Support\Facades\DB as FacadesDB;

class PerfumeController extends Controller
{

    public function getPerfumes() {

 
        $perfume = FacadesDB::select( "SELECT * FROM perfumes" );
 
        foreach( $perfume as $perfume ) {
     
            print_r( $perfume->name. " ");
            print_r( $perfume->type. " ");
            print_r( $perfume->price . "<br>" );
        }
    }

    public function newPerfume(Request $request) {
        if( $request->isMethod( "post" )) {
 
            $request->validate([
                "name" => "required",
                "type" => "required",
                "price" => "required"
            ]);
        }

        return view("new_perfume");
    }

    public function storePerfume( Request $request ) {

        $perfume = new Perfume;

        $perfume->name = $request->name;
        $perfume->type = $request->type;
        $perfume->price = (int)$request->price;

        $perfume->save();

        return redirect( "/new-perfume" );
    }

    public function editPerfume( Request $request) {

        if( $request->isMethod( "post" )) {
 
            $request->validate([
                "name" => "required",
                "type" => "required",
                "price" => "required"
            ]);
        }

        return view("edit_perfume");
    }

    public function updatePerfume(  ) {
        $perfume = FacadesDB::update( "UPDATE perfume SET name = ?, set type= ?, set price=? WHERE id = ?");
        print_r( $perfume );
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "/perfumes" );
    }
}
