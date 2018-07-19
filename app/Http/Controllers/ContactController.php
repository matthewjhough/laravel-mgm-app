<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Resources\Contact as ContactResource;

class ContactController extends Controller
{
    //
    public function show ($id)
    {
        return new ContactResource(Contact::find($id));
    }

    public function all () 
    {
        return new ContactResource(Contact::all());
    }

    public function test () 
    {
        return response()->json([
            'id' => 1,
            'name' => 'this is test data',
            'test' => 'more test fields'
        ]);
    }
}
