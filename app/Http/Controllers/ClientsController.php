<?php

namespace LaravelAngularJS\Http\Controllers;

use Illuminate\Http\Request;
use LaravelAngularJS\Http\Requests;
use LaravelAngularJS\Clients;

class ClientsController extends Controller
{
    public function index(){
      return Clients::all();
    }
    
    public function store(Request $request){
      return Clients::create($request->all());
    }
    
    public function show($id){
      return Clients::find($id);
    }
    
    public function update(Request $request, $id){
      $client = Clients::find($id);
      $client->update($request->all());
      return Clients::all();
    }
    
    public function destroy($id){
      Clients::find($id)->delete();
      return Clients::all();
    }
}
