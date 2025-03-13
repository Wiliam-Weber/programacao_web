<?php

use Carbon\Carbon;
use Illuminate\Http\Request;

class ImcController extends Controller
{
    public function showForm()
    {
        return view('imc-form');
    }

    public function calculateImc(Request $request)
    {
        $name = $request->input('name');
        $birthdate = $request->input('birthdate');
        $weight = $request->input('weight');
        $height = $request->input('height');

        $age = Carbon::parse($birthdate)->age;
        $imc = $weight / ($height * $height);

        // Classificação do IMC
        if ($imc < 18.5) {
            $classification = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            $classification = "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            $classification = "Sobrepeso";
        } elseif ($imc >= 30 && $imc < 34.9) {
            $classification = "Obesidade I";
        } elseif ($imc >= 35 && $imc < 39.9) {
            $classification = "Obesidade II";
        } else {
            $classification = "Obesidade III";
        }

        // Passar os dados para a view do resultado
        return view('imc-result', compact('name', 'age', 'weight', 'height', 'imc', 'classification'));
    }
}


