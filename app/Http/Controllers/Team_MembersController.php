<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designations;
use App\Models\Team_Members;
use Illuminate\Support\Facades\Validator;

class Team_MembersController extends Controller
{
    public function index()
    {
        $team_members = Team_Members::all();
        $data = Designations::all();
        return view('team_members.index', compact('team_members'), ['data'=>$data]);
    }

    public function addTeam_Members(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
            'is_active' => 'sometimes'
        ]);

        if ($validator->fails()) {
            return response()->json(['msg' => $validator->errors()->toArray()]);
        }else{
            try {
                $addTeam_Members = new Team_Members;
                $addTeam_Members->name = $request->name;
                $addTeam_Members->email = $request->email;
                $addTeam_Members->phone = $request->phone;
                $addTeam_Members->category = $request->category;
                $addTeam_Members->is_active = $request->is_active == true ? 1:0;
                $addTeam_Members->save();

                return response()->json(['success' => true, 'msg' =>'Team Members Created Successfully']);


            } catch (\Exception $e) {
               return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }

    }

    // DELETE FUNCTIONALITY
    public function deleteTeam_Members($id){
        try {
            $delete_team_members = Team_Members::where('id', $id)->delete();
            return response()->json(['success' => true, 'msg' =>'Team Members Deleted Successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
        }
    }

    // EDIT FUNCTIONALITY
    public function editTeam_Members(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'category' => 'required',
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
                    'category' => $request->category,
                    'is_active' => $request->is_active == true ? 1:0
                ]);
                return response()->json(['success' => true, 'msg' =>'Team Members Updated Successfully']);
            } catch (\Exception $e) {
                return response()->json(['success' => false, 'msg' =>$e->getMessage()]);
            }
        }
    }

}
