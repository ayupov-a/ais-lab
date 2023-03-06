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
        return 'hello';
    }

    public function read(){
        $clients = Client::all();
        dd($clients);
    }

    public function store(){
        Client::create([
            'firstname' => 'BUl',
            'lastname' => 'BUL',
            'email' => 'BUL@a.ru',
            'phone' => '89999999999',
        ]);
    }

    public function update(){
        $client = Client::find(2);

        $client->update([
            'firstname' => 'Kutl',
            'lastname' => 'ural',
            'email' => 'ural@a.ru',
            'phone' => '8998',
        ]);
    }

    public function destroy(){
//        $cl = Client::where('id', 1)->get();
        $cl = Client::find(2);
        $cl = Client::withTrashed()->find(2);
        $cl->delete();
        dd('deleted');
    }
}
