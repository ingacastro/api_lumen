<?php

namespace App\Http\Controllers;

#use App\Canister;
use App\Models\Canister;
use Illuminate\Http\Request;

class CanisterController extends Controller
{
    
    public function index()
    {
        return response()->json(Canister::orderBy('id')
            //->where('status', 1)
            ->get()
        );
    }

    public function show($id)
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

    public function findByName($canister_name){
        $canister = Canister::where([
            ['canister_name', 'ilike', '%'.$canister_name.'%'],
            //['status', 1]
        ])->get();
        return response()->json($canister, 200);
    }

    public function updateStatus($id, Request $request){
        $canister = Canister::findOrFail($id);
        $canister->update(['status' => $request->status]);

        return response()
        ->json(
            [
                "status" => "OK"
            ],
            200
        );       
    }
}