<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;


class ClientsController extends Controller
{
    //find(id) - select where id =
    //obj->title
    //where()->first()/get()
    //all()

    public function index()
    {
        return view('main');
    }

    public function show($id){
        $cli = Client::find($id);
        return $cli;
    }

    public function store(){

        dd('Created!!!!!!!!!!!!!!!!!!!!!!!');
    }

    public function update($id){
        $client = Client::find($id);

        $client->update([
            'firstname' => 'edited',
            'lastname' => 'edited',
            'email' => 'edited@a.ru',
            'phone' => '8998',
        ]);
        dd('updated line #' . $id);
    }

    public function destroy(){
//        $cl = Client::where('id', 1)->get();
        $cl = Client::find(3);
//        $cl = Client::withTrashed()->find(3);
        $cl->delete();
        dd('deleted');
    }
}
