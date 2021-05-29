<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactEditRequest;
use App\Http\Requests\ContactPostRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response['contacts'] = Contact::get();
        return view('site.contact.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('site.contact.create.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ContactPostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPostRequest $request)
    {
        //
        $request->validated();
        Contact::create($request->all());
        return redirect()->route('site.contact.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $response['contact'] = Contact::find($id);
        return view('site.contact.details.index', $response);
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
        $response['contact'] = Contact::find($id);
        return view('site.contact.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ContactEditRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactEditRequest $request, $id)
    {
        //
        $request->validated();
       
        Contact::find($id)->update($request->all());
        return redirect()->route('site.contact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Contact::find($id)->delete();
        return redirect()->back();
    }
}
