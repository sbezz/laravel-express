<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome)
    {
        //
        //Criando a váriavel $nome
       // $nome = "Sergio";

        //return "Olá $nome";

        return view('test.index', ['nome' => $nome]);

    }

    public function notas(){

        $notas = [
            0 => 'Anotação 01',
            1 => 'Anotação 02',
            2 => 'Anotação 03',
            3 => 'Anotação 04',
            4 => 'Anotação 05'

        ];

        return view('test.notas', compact('notas'));

    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
