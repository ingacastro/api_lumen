<?php

namespace App\Http\Controllers;

#use App\Canister;
use App\Models\Canister;
use Illuminate\Http\Request;

class CanisterController extends Controller
{
    
    public function showAllCanisters()
    {
        return response()->json(Canister::all());
    }

    public function showOneCanister($id)
    {
        return response()->json(Canister::find($id));
    }

    public function create(Request $request)
    {
        $canister = Canister::create($request->all());

        return response()->json($canister, 201);
    }

    public function update($id, Request $request)
    {
        $canister = Canister::findOrFail($id);
        $canister->update($request->all());

        return response()->json($canister, 200);
    }

    public function delete($id)
    {
        //Canister::findOrFail($id)->delete();
        Canister::findOrFail($id)->update(['status', '=', 0]);
        return response('Deleted Successfully', 200);
    }
}