<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hackteam;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Rules\UniqueTeamName;


class hackathonController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contactUs(){
        return view('contactUs');
    }
    public function updates(){
        return view('updates');
    }
    public function register(){
        return view('Reg-page');
    }

    public function store(Request $request): RedirectResponse{
        //Form data Validation rules        
       /* $validated = $request->validate([                   
            'teamName' => ['required', new UniqueTeamName],
            'LeaderName'=>'required|string|max:100',
            'member1Contact'=>'required|min:10|max:15|unique:hackteams',
            'leader_faculty'=>'required',
            'leader_batchNumber'=>'required',
            'member1SID'=>'required|max:15',
            'member1Email'=>'required|string|max:50|unique:hackteams',
        ]);*/
        
        //Below is method II
       $rules=[
            'teamName' => ['required','max:30', new UniqueTeamName],
            'LeaderName'=>'required|string|max:100',
            'member1Contact'=>'required|min:10|max:12|unique:hackteams',
            'leader_faculty'=>'required',
            'leader_batchNumber'=>'required',
            'member1SID'=>'required|max:15',
            'member1Email'=>'required|string|max:50|unique:hackteams',
        ];
        $validator = Validator::make($request->all(),$rules,$messages = [
            'teamName.required'=>'Team Name is required',
            'teamName.max'=>'Maximum characters=30 for Team Name',
            'LeaderName.required'=>'Leader Name is required',
            'LeaderName.string'=>'Leader Name should be a string',
            'LeaderName.max'=>'Maximum characters=100 for Leader Name',
            'member1Contact.required'=>'Provide the Leader Contact Number',
            'member1Contact.min'=>'Minimum characters=10 for Leader Contact Number',
            'member1Contact.max'=>'Maximum characters=12 for Leader Contact Number',
            'member1Contact.unique'=>'Leader Contact Number has already been used',
            'leader_faculty.required'=>'Leader faculty is required',
            'leader_batchNumber.required'=>'Leader academic year is required',
            'member1SID.required'=>'Leader Student ID NO is required',
            'member1SID.max'=>'Maximum characters=15 for  Student ID NO',
            'member1Email.required'=>'Provide the Leader email address',
            'member1Email.string'=>'Leader email address should be a string',
            'member1Email.max'=>'Maximum characters=50 for Leader email address',
            'member1Email.unique'=>'Leader email has already been used',
        ]);
        
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $hackteam = new Hackteam();
        $hackteam->teamName = $request->teamName;
        $hackteam->LeaderName = $request->LeaderName;
        $hackteam->member1Contact = $request->member1Contact;
        $hackteam->leader_faculty = $request->leader_faculty;
        $hackteam->leader_year = $request->leader_batchNumber;
        $hackteam->member1SID = $request->member1SID;
        $hackteam->member1Email = $request->member1Email;

        $hackteam->member2Name = $request->member2Name;
        $hackteam->member2Contact = $request->member2Contact;
        $hackteam->m2_faculty = $request->m2_faculty;
        $hackteam->m2_year= $request->m2_batchNumber;
        $hackteam->member2SID = $request->member2SID;
        $hackteam->member2Email = $request->member2Email;

        $hackteam->member3Name = $request->member3Name;
        $hackteam->member3Contact = $request->member3Contact;
        $hackteam->m3_faculty = $request->m3_faculty;
        $hackteam->m3_year= $request->m3_batchNumber;
        $hackteam->member3SID = $request->member3SID;
        $hackteam->member3Email = $request->member3Email;
        $hackteam->save();
        session()->flash('registration_success', true);
        return redirect()->route('afterSubmit', ['id'=>$hackteam->id])->withInput();
    }

     //view entered data in the previous form in new page without changing when refresh
     public function afterSubmit(Request $request){
        // Retrieve data from the URL parameters
        $id = $request->get('id');
         
         // If data is not available, redirect back to the form
         if (!$id) {
             return redirect()->route('Reg-page')->with('error', 'Data not available. Please submit the form again.');
         }
 
         // Retrieve the Team instance using the id
         $Hackteam = Hackteam::find($id);
 
         // Return the view with the data
         return view('afterSubmit', compact('Hackteam'));
     } 


  
}
