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
        return redirect('index');
    }
}
