<?php

namespace IN10\Styleguide\Controllers;

use Illuminate\Http\Request;
use IN10\Styleguide\Services\Views;

class StyleguideController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sections = (new Views())->read();

        return view('styleguide::dashboard', compact('sections'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view(str_replace("resources/views", "", config('styleguide.view_path')).".$id");
    }
}
