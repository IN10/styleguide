<?php

namespace IN10\Styleguide\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
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
        // Set the styleguide interpretation flag
        Config::set('styleguide.in_styleguide', true);

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
        // Set the styleguide interpretation flag
        Config::set('styleguide.in_styleguide', true);

        return view(str_replace("resources/views", "", config('styleguide.view_path')).".$id");
    }
}
