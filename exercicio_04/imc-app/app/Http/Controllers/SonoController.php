<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonoController extends Controller
{
    public function index()
    {
        return view('sono');
    }

    public function avaliar(Request $request)
    {
        $idade = $request->input('idade');
        $horas = $request->input('horas');

        $avaliacao = 'Desconhecido';
        if ($idade <= 3) {
            $avaliacao = ($horas >= 14 && $horas <= 17) ? 'Bom' : 'Ruim';
        } elseif ($idade <= 11) {
            $avaliacao = ($horas >= 10 && $horas <= 12) ? 'Bom' : 'Ruim';
        } elseif ($idade <= 17) {
            $avaliacao = ($horas >= 8 && $horas <= 10) ? 'Bom' : 'Ruim';
        } else {
            $avaliacao = ($horas >= 7 && $horas <= 9) ? 'Bom' : 'Ruim';
        }

        return view('sono', ['avaliacao' => $avaliacao]);
    }
}
