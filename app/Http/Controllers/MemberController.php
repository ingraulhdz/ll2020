<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Image;
class MemberController extends Controller
{

    
    public function index()
    {
        $members = Member::orderBy('id', 'ASC')->get();
        return view('members.index', compact('members'));
    }


	public function create()
	{
        return view('members.create');
	}


	public function store(Request $request)
	{ 
        $data = $this->validate(request(), [
            'name' => 'required|min:2|max:244',
            'last_name' => 'required|min:2|max:244',
            'email' => 'required|min:5|email|max:244|unique:members',
         'phone' => 'required|numeric|unique:members',
  ]);
		try{

			$member = new Member($request->all());
			$member->save();

 		}catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        	}

            $message ='El miembro se guardo con exito';
            \Session::flash('message',$message);
             return redirect()->route('members.index');
	}




	public function edit($id)
	{
			$member = Member::findOrFail($id);
			return view('members.edit', compact('member'));
	}


	public function update(Request $request,$id)
	{
        $data = $this->validate(request(), [
            'name' => 'required|min:2|max:244',
            //'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'last_name' => 'required|min:2|max:244',  
                      'phone' => [
                        'numeric',
                        Rule::unique('members')->ignore($id),
                    ], 
                      'email' => [
                        'email',
                        Rule::unique('members')->ignore($id),
                    ],   ]);
                
  
    try{
            $member= Member::findOrFail($id);

           if($request->image){

  
            $imageName = $member->id.'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/members'), $imageName);
                    $member->photo= '/images/members/'.$imageName;

           }

        $member->fill($request->all());
        $member->save();
        }catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
            }
        $message ='Miembro Actualizado ';
	 	\Session::flash('message',$message);
        return redirect()->route('members.index');
	}



    public function destroy($id)
{

 $item = Member::findOrFail($id);

 if($item->status){
$item->status = 0;
$message="Member inactive";
}
else{

$item->status = 1;
$message ="Member active";

}

 $item->save();
        \Session::flash('message',$message);

 return back()->with('success', $message);

}



   
	



	public function show($id)
	{

$member = Member::findOrFail($id);
return view('members.show', compact('member'));

	}

}
