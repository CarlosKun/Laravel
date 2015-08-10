<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PaginasController extends Controller
{
    public function acerca()
    {
    	$apoyo = [
            'Juan', 'Carlos', 'Lizeth'
        ];
    	return view('paginas.acerca', compact('apoyo'));
    }

    public function contacto()
    {
    	return view('contacto');
    }
}