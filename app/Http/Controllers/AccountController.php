<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
  

    public function index()
    {
$user = User::find(auth()->user()->id);

if($user->hasPermissionTo('accounts.delete') || $user->hasRole('Super-Admin')){
        $accounts = Account::orderBy('id', 'ASC')->get();

        return view('accounts.index', compact('accounts'));

}else{
        $accounts = Account::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('accounts.index', compact('accounts'));}
    }


	public function create()
	{
        return view('accounts.create');
	}


	public function store(Request $request)
	{ 
        $data = $this->validate(request(), [
            'owner' => 'required|min:2|max:244',
            'bank' => 'required|min:2|max:244',
            'card' => 'numeric',
        'account_number' => 'numeric',
        'route_number' => 'numeric',
        'country' => 'required',

         
  ]);
		try{


            $account = new Account($request->all());
            $account->country = $request->country;

			$account->save();

 		}catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
        	}

            $message ='The account was created!.';
            \Session::flash('message',$message);
             return redirect()->route('accounts.index');
	}




	public function edit($id)
	{
			$account = Account::findOrFail($id);
			return view('accounts.edit', compact('account'));
	}


	public function update(Request $request,$id)
	{
     $data = $this->validate(request(), [
        'owner' => 'required|min:2|max:244',
        'bank' => 'required|min:2|max:244',
        'card' => 'numeric',
        'country' => 'required',
    'account_number' => 'numeric',
    'route_number' => 'numeric',

  ]);
    try{
      //  dd($request);
        $account= Account::findOrFail($id);
        $account->country = $request->country;
        $account->fill($request->all());
        $account->save();
        }catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
            }
        $message ='account updated! ';
	 	\Session::flash('message',$message);
        return redirect()->route('accounts.index');
	}



    public function destroy($id)
{

 $item = Account::findOrFail($id);

  if($item->status){
$item->status = null;
$message="Account inactive";
}
else{

$item->status = 1;
$message ="Account active";

}


 $item->save();
        \Session::flash('message',$message);

 return back()->with('success', $message);

}



   
	



	public function show($id)
	{

$account = Account::findOrFail($id);
return view('accounts.show', compact('account'));

	}



}
