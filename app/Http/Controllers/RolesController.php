<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use Illuminate\Support\Facades\Validator;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Roles::all();
        return view('roles.index', compact('roles'));
    }

    public function addRoles(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'notes' => 'required',
            'is_active' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $addRoles = new Roles;
                $addRoles->name = $request->name;
                $addRoles->notes = $request->notes;
                $addRoles->is_active = $request->is_active == true ? 1:0;
                $addRoles->save();

                return response()->json(['success' => true, 'msg' =>'Roles Updated Successfully']);


            } catch (\Exception $e) {
               return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }

    }

    // DELETE FUNCTIONALITY
    public function deleteRoles($id){
        try {
            $delete_roles = Roles::where('id', $id)->delete();
            return response()->json(['success' => true, 'msg' =>'Roles Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
        }
    }

    // EDIT FUNCTIONALITY
    public function editRoles(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'notes' => 'required',
            'is_active' => 'sometimes'
        ]);
        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $editRoles = Roles::where('id', $request->roles_id)->update([
                    'name' => $request->name,
                    'notes' => $request->notes,
                    'is_active' => $request->is_active == true ? 1:0
                ]);
                return response()->json(['success' => true, 'msg' =>'Roles Updated Successfully']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }
    }

}
