<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Roles;
use App\Models\Designations;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $roles = Roles::all();
        $designations = Designations::all();
        $totalRoles = $this->getTotalRoles();
        $totalDesignations = $this->getTotalDesignations();
        $totalProjects = $this->getTotalProjects(); // Call the function to get total projects
        $totalPendings = $this->getTotalPendings();
        $totalSuccess = $this->getTotalSuccess();

        return view('dashboard', compact('projects', 'totalProjects', 'totalPendings', 'totalSuccess', 'totalRoles', 'totalDesignations'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'project_name' => 'required|string|max:255',
            'project_description' => 'required|string',
            'status' => 'required|string|in:On Hold,Cancelled,Success',
            'project_progress' => 'numeric',
            'client_company' => 'required|string',
            'project_leader' => 'required|string',
            'estimated_budget' => 'required|numeric',
            'total_amount_spent' => 'required|numeric',
            'estimated_duration' => 'required|string',
        ]);

        $projects = Project::create([
            'project_name' => $request->input('project_name'),
            'project_description' => $request->input('project_description'),
            'status' => $request->input('status'),
            'project_progress' => $request->input('project_progress'),
            'client_company' => $request->input('client_company'),
            'project_leader' => $request->input('project_leader'),
            'estimated_budget' => $request->input('estimated_budget'),
            'total_amount_spent' => $request->input('total_amount_spent'),
            'estimated_duration' => $request->input('estimated_duration'),
        ]);
        return redirect()->back();
    }

    public function edit(Project $project)
{

    return view('edit_project_modal', compact('project'));
}

    public function update(Request $request, Project $project)
    {
        $validator = Validator::make($request->all(), [
            'project_name' => 'required|string|max:255',
            'status' => 'required|string|in:On Hold,Cancelled,Success',
            'project_progress' => 'numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['success' => false, 'msg' => $validator->errors()->toArray()]);
        }

        try {
            $project->update([
                'project_name' => $request->input('project_name'),
                'status' => $request->input('status'),
                'project_progress' => $request->input('project_progress'),
            ]);

            return response()->json(['success' => true, 'msg' => 'Project updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
    }


    public function delete($id)
    {
        try{
            $project = Project::findOrFail($id);
            $project->delete();
            return response()->json(['success' => true, 'msg' => 'Project Deleted Successfully!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'msg' => $e->getMessage()]);
        }
    }
    protected function getTotalProjects()
    {
        return Project::count();
    }
    protected function getTotalPendings()
    {
        return Project::where('status', 'On Hold')->count();
    }
    protected function getTotalSuccess()
    {
        return Project::where('status', 'Success')->count();
    }
    protected function getTotalRoles()
    {
        return Roles::count();
    }
    protected function getTotalDesignations()
    {
        return Designations::count();
    }
}
