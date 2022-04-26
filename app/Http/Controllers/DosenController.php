<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'     => 'Menu Dosen',
            'result'    => Dosen::all()
        ];
        return view('dosen', $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Dosen::where('id', $id)->first();
        return response($data);
    }

    

}
