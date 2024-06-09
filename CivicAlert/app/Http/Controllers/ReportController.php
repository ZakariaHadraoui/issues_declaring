<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function updateStatus(Request $request, Report $report)
    {
        $request->validate([
            'status' => 'required|in:reçu,lu', // Adjust the status values as needed
        ]);

        $report->update([
            'status' => $request->input('status'),
        ]);

        return redirect()->back()->with('success', 'Status updated successfully!');
    }
    public function index(){
        $reports=Report::all();
        return view('reports.index',compact('reports'));
    }
    public function create(){
        return view('user.declare');
    }
    public function store(Request $request){
        $request->validate([
            'title' =>'required',   
            
            'description' =>'required',
        ]);
        $report=new Report();
        $report->title=$request->title;
        $report->user_id=Auth::user()->id;
        $report->description=$request->description;
        $report->latitude=5;
        $report->longitude=9;
        $report->save();
        return redirect()->back()->with('success','Déclaration envoyé');

    }
    
    
}
