<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usersModel;
use App\Province;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $province = Province::all();
        return view('addInfo')->with('provinces',$province);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if($request->province == 'Québec')
        {
            $this->validate($request, [
                'name' => 'required|min:2',
                'province' => 'required',
                'phone' => ['required','regex:/\(\d{3}\)[\s]?\d{3}-\d{4}|\d{3}-\d{3}-\d{4}/'],
                'postal' => 'required|max:7|regex:/[A-Z]\d[A-Z]\s?\d[A-Z]\d/',
                'salary'=> ['required','regex:/\d{2},?\d{3}\.\d{2}|\d{5}|\d{2}\s\d{3}(,\d\d)?/']
            ]);
        }
        else {
            $request->validate([
                'name' => 'required|min:2',
                'province' => 'required',
                'phone' => ['required','regex:/\(\d{3}\)[\s]?\d{3}-\d{4}|\d{3}-\d{3}-\d{4}/'],
                'postal' => 'required|max:7|regex:/[A-Z]\d[A-Z]\s?\d[A-Z]\d/',
                'salary'=> ['required','regex:/\d{2},?\d{3}\.\d{2}|\d{5}/']
            ]);
            }
        
        $usersModel = new usersModel;
        
        $usersModel->name = $request->name;
        $usersModel->province = $request->province;
        $usersModel->telephone = $request->phone;
        $usersModel->post_code = $request->postal;
        $usersModel->salary = $request->salary;
        
        $usersModel->save();
        
        // find currently inserted record's id
        $insertedId = $usersModel->id;
        // retrieve the inserted record 
        $record = usersModel::find($insertedId);
        
        return view('showinfo')->with('inserted_record',$record);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('list')->with('page_no_at_start',1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $province = Province::all();
                
        $record = usersModel::find($id);
        return view('update')->with('records',$record)->with('provinces',$province);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if($request->province == 'Québec')
        {
            $this->validate($request, [
                'name' => 'required|min:2',
                'province' => 'required',
                'phone' => ['required','regex:/\(\d{3}\)[\s]?\d{3}-\d{4}|\d{3}-\d{3}-\d{4}/'],
                'postal' => 'required|max:7|regex:/[A-Z]\d[A-Z]\s?\d[A-Z]\d/',
                'salary'=> ['required','regex:/\d{2},?\d{3}\.\d{2}|\d{5}|\d{2}\s\d{3}(,\d\d)?/']
            ]);
        }
        else {
            $request->validate([
                'name' => 'required|min:2',
                'province' => 'required',
                'phone' => ['required','regex:/\(\d{3}\)[\s]?\d{3}-\d{4}|\d{3}-\d{3}-\d{4}/'],
                'postal' => 'required|max:7|regex:/[A-Z]\d[A-Z]\s?\d[A-Z]\d/',
                'salary'=> ['required','regex:/\d{2},?\d{3}\.\d{2}|\d{5}/']
            ]);
            }
        
        $usersModel = usersModel::find($id);
        
        $usersModel->name = $request->name;
        $usersModel->province = $request->province;
        $usersModel->telephone = $request->phone;
        $usersModel->post_code = $request->postal;
        $usersModel->salary = $request->salary;
        
        $usersModel->save();
        
        // retrieving updated record
        $record = usersModel::find($id);
        
        return view('showUpdateInfo')->with('inserted_record',$record);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$page)
    {
        //
        $usersModel = usersModel::find($id);
        $usersModel->delete();
        return redirect()->back()->with('page_no_at_start',$page);
    }
}
