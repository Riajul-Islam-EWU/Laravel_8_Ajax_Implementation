<?php

namespace App\Http\Controllers;

use App\Models\Ajax;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class AjaxController extends Controller
{
    public function form_submit(Request $request)
    {
        $model = new Ajax();
        $model->name = $request->post('name');
        $model->email = $request->post('email');
        $model->save();
        return ["msg" => "Data Inserted"];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function show(Ajax $ajax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function edit(Ajax $ajax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ajax $ajax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ajax  $ajax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ajax $ajax)
    {
        //
    }
}