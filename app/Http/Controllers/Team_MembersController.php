<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team_Members;
use Illuminate\Support\Facades\Validator;
use App\Models\Roles;

class Team_MembersController extends Controller
{
    public function index()
    {
        $team_members = Team_Members::all();
        $data = Roles::all();
        return view('team_members.index', compact('team_members'), ['data'=>$data]);
    }

    public function addTeamMembers(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'is_active' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $addTeamMembers = new Team_Members;
                $addTeamMembers->name = $request->name;
                $addTeamMembers->email = $request->email;
                $addTeamMembers->phone = $request->phone;
                $addTeamMembers->designation = $request->designation;
                $addTeamMembers->is_active = $request->is_active == true ? 1:0;
                $addTeamMembers->save();

                return response()->json(['success' => true, 'msg' =>'Team Members Updated Successfully']);


            } catch (\Exception $e) {
               return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }

    }

    // DELETE FUNCTIONALITY
    public function deleteTeamMembers($id){
        try {
            $delete_team_members = Team_Members::where('id', $id)->delete();
            return response()->json(['success' => true, 'msg' =>'Team Members Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
        }
    }

    // EDIT FUNCTIONALITY
    public function editTeamMembers(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'designation' => 'required',
            'is_active' => 'sometimes'
        ]);
        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $editTeamMembers = Team_Members::where('id', $request->team_members_id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'designation' => $request->designation,
                    'is_active' => $request->is_active == true ? 1:0
                ]);
                return response()->json(['success' => true, 'msg' =>'Team Members Updated Successfully']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }
    }

}
