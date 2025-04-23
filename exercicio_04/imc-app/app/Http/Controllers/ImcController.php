<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ImcController extends Controller
{
    public function showForm()
    {
        return view('imc-form');
    }

    public function calculateImc(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ]);

        $birthDate = Carbon::parse($validated['birth_date']);
        $age = $birthDate->age;

        $imc = $validated['weight'] / ($validated['height'] * $validated['height']);

        $classification = '';
        if ($imc < 18.5) {
            $classification = 'Abaixo do peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            $classification = 'Peso normal';
        } elseif ($imc >= 25 && $imc <= 29.9) {
            $classification = 'Sobrepeso';
        } elseif ($imc >= 30 && $imc <= 34.9) {
            $classification = 'Obesidade I';
        } elseif ($imc >= 35 && $imc <= 39.9) {
            $classification = 'Obesidade II';
        } else {
            $classification = 'Obesidade III';
        }

        // Retornar o resultado para o view
        return view('imc-result', compact('validated', 'imc', 'classification', 'age'));
    }
}
