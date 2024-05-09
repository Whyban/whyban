<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use Illuminate\Http\Request;
use App\Models\Designations;
use Illuminate\Support\Facades\Validator;

class DesignationsController extends Controller
{
    public function index()
    {
        $designations = Designations::all();
        $data = Roles::all();
        return view('designations.index', compact('designations'), ['data'=>$data]);
    }

    public function addDesignations(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $addDesignations = new Designations;
                $addDesignations->name = $request->name;
                $addDesignations->category = $request->category;
                $addDesignations->description = $request->description;
                $addDesignations->save();

                return response()->json(['success' => true, 'msg' =>'Designations Created Successfully']);


            } catch (\Exception $e) {
               return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }

    }

    // DELETE FUNCTIONALITY
    public function deleteDesignations($id){
        try {
            $delete_designations = Designations::where('id', $id)->delete();
            return response()->json(['success' => true, 'msg' =>'Designations Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
        }
    }

    // EDIT FUNCTIONALITY
    public function editDesignations(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $editDesignations = Designations::where('id', $request->designations_id)->update([
                    'name' => $request->name,
                    'category' => $request->category,
                    'description' => $request->description
                ]);
                return response()->json(['success' => true, 'msg' =>'Designations Updated Successfully']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }
    }

}

