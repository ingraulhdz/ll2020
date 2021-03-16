<?php

namespace App\Http\Controllers;

use App\CategoryExpense;
use Illuminate\Http\Request;

class CategoryExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = CategoryExpense::get();


        return view('category_expenses.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

			return view('category_expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validate(request(), [
            'name' => 'required|min:2|max:244',
            'description' => 'required|min:5|max:244',
      ]);
            try{
    
                $category = new CategoryExpense($request->all());
                $category->save();
    
             }catch(\Exception $e){
    
                $messageError = "Someting is worng: ".$e->getMessage();
                \Session::flash('error',$messageError);
                return \Redirect::back()->withInput()->withErrors($messageError);
                }
    
                $message ='The category has been created!.';
                \Session::flash('message',$message);
                 return redirect()->route('categoryExpense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\categoryExpense  $categoryExpense
     * @return \Illuminate\Http\Response
     */
    public function show($categoryExpense)
    {
        
        

$categoryExpense = CategoryExpense::findOrFail($categoryExpense);

return view('category_expenses.show', compact('categoryExpense'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\categoryExpense  $categoryExpense
     * @return \Illuminate\Http\Response
     */
    public function edit( $categoryExpense)
    {
        
        
			$categoryExpense = CategoryExpense::findOrFail($categoryExpense);
			return view('category_expenses.edit', compact('categoryExpense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\categoryExpense  $categoryExpense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryExpense)
    {
        
     $data = $this->validate(request(), [
        'name' => 'required|min:2|max:244',
        'description' => 'required|min:5|max:244',

  ]);
    try{
            $categoryExpense= CategoryExpense::findOrFail($categoryExpense);
        $categoryExpense->fill($request->all());
        $categoryExpense->save();
        }catch(\Exception $e){

            $messageError = "Someting is worng: ".$e->getMessage();
            \Session::flash('error',$messageError);
            return \Redirect::back()->withInput()->withErrors($messageError);
            }
        $message ='category updated! ';
	 	\Session::flash('message',$message);
        return redirect()->route('categoryExpense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\categoryExpense  $categoryExpense
     * @return \Illuminate\Http\Response
     */
    public function destroy( $categoryExpense)
    {
        
 $item = CategoryExpense::findOrFail($categoryExpense);

 if($item->status){
$item->status = 0;
$message="category inactive";
}
else{

$item->status = 1;
$message ="category active";

}

 $item->save();
        \Session::flash('message',$message);

 return back()->with('success', $message);

    }
}
