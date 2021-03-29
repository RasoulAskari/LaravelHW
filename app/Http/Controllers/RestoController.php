<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\Session;
 
use App\Models\Restaurant;
class RestoController extends Controller
{


    
    public function list(){
        $data = Restaurant::all();
        return view('list', ['data'=>$data]);
    }

    public function store(Request $req){
        $rest = new Restaurant;
        $rest->name = $req->name;
        $rest->email = $req->email;
        $rest->address = $req->address;
        $result = $rest->save();
        $req->session()->flash('status', "the has been seccessfully added");

        if($result){
            return redirect('list');
        }
    }

    public function delete($id){
        
        $resto = Restaurant::find($id); 
        $result = $resto->delete();
        Session::flash('delete', 'Data has been successfully delete');
        
        if($result){
            return redirect('list');
        }
    }

}
