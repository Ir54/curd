<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    public function insert(Request $req)
    {
        $name= $req->get('pname');
        $description= $req->get('pdescription');

        $prod= new product();
        $prod->PName = $name;
        $prod->PDescription = $description;
        $prod->save();
        return redirect('/');
    }
    public function readdata()
    {
        $pdata = product::all();
        return view("insertRead", ["data"=>$pdata]);
    }
    public function updateordelete(Request $req)
    {
        $id = $req->get('id');
        $name = $req->get('name');
        $description = $req->get('description');
        if ($req->get('update')=='Update') {
            return view('updateview', ['pid'=>$id,'pname'=>$name,'pdescription'=>$description]);
        } else {
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }
    public function update(Request $req)
    {
        $ID =$req->get('id');
        $Name =$req->get('name');
        $Description =$req->get('description');
        $prod = product::find($ID);
        $prod->PName = $Name;
        $prod->PDescription = $Description;
        $prod->save();
        return redirect('/');
    }
}
