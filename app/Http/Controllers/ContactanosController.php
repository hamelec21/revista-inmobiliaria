<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
Use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
    return view('contactanos.index');
    }

    public function store(Request $request)
    {
        $correo = new ContactanosMailable($request->all());
        Mail::to('juanramoncornejo@gmail.com')->send($correo);
        return redirect()->route('contactanos.index')->with('info', 'Mensaje Enviado');
    }

}
