<?php

namespace App\Http\Controllers;

use App\Api;
use App\Http\Requests\ApiRequest as Request;

class ApiController extends Controller
{

    public function index()
    {
        $apis = Api::all();

        return view('index',compact('apis'));
    }



    public function store(Request $request)
    {
        $api = new Api();
        $api->fill($request->all());
        $api->save();

        return  redirect()->route('api.index');
    }



    public function update(Request $request, $id)
    {
        $api = Api::find($id);
        $api->update($request->all());

        return  redirect()->route('index');
    }


    public function destroy($id)
    {
        $api = Api::find($id);
        $api->delete();

        return  redirect()->route('index');
    }

    public function entry(Request $request) {
        $entry = $request->path();
        $api = Api::where('entry','=',$entry)->first();

        return $api['data'];
    }
}
