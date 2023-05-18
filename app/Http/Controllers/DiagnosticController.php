<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Diagnostic;
use App\Http\Requests\CreateDiagnosticRequest;


class DiagnosticController extends Controller
{


    /**
     * Show the form for creating a new resource.
     */
    public function showInputDiagnosticForm()
    {
        $diagnostic = Diagnostic::all();
        return redirect()->route('third-page').compact('diagnostic');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeInputDiagnosticForm(CreateDiagnosticRequest $request)
    {
       $diagnostic = Diagnostic::create( $request->validated());
         return redirect()->route('third-page')->with('success', 'Diagnostic has been added');
    }

    public function countDiagnosticUsingFraminghamAlgorithm(Request $request)
    {
        $age = $request->input('age');
        $gender = $request->input('gender');
        $totalCholesterol = $request->input('kadarKolestrol');
        $smoker = $request->input('smoker');
        $hdlCholesterol = $request->input('hdlCholesterol');
        $bloodPressure = $request->input('bloodPressure');
    
        // Inisialisasi probabilitas awal
        $probability = 0;
    
        // Lakukan perhitungan probabilitas berdasarkan faktor risiko
        // Menggunakan rumus dan data dari Framingham Risk Score untuk Wanita
        if ($gender == 'Female') {
            if ($age >= 20 && $age <= 34) {
                $probability -= 7;
            } elseif ($age >= 35 && $age <= 39) {
                $probability -= 3;
            } elseif ($age >= 40 && $age <= 44) {
                $probability += 0;
            } elseif ($age >= 45 && $age <= 49) {
                $probability += 3;
            } elseif ($age >= 50 && $age <= 54) {
                $probability += 6;
            } elseif ($age >= 55 && $age <= 59) {
                $probability += 8;
            } elseif ($age >= 60 && $age <= 64) {
                $probability += 10;
            } elseif ($age >= 65 && $age <= 69) {
                $probability += 12;
            } elseif ($age >= 70 && $age <= 74) {
                $probability += 14;
            } elseif ($age >= 75 && $age <= 79) {
                $probability += 16;
            }
        
            if ($totalCholesterol >= 160 && $totalCholesterol <= 199) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 0 : ($ageGroup >= 50 ? 2 : ($ageGroup >= 40 ? 3 : 4));
            } elseif ($totalCholesterol >= 200 && $totalCholesterol <= 239) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 60 ? 1 : ($ageGroup >= 40 ? 2 : 8);
            } elseif ($totalCholesterol >= 240 && $totalCholesterol <= 279) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 2 : ($ageGroup >= 50 ? 5 : ($ageGroup >= 40 ? 8 : 11));
            } elseif ($totalCholesterol >= 280) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 2 : ($ageGroup >= 50 ? 7 : ($ageGroup >= 40 ? 10 : 13));
            }
        
            if ($smoker) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 1 : ($ageGroup >= 50 ? 4 : ($ageGroup >= 40 ? 7 : 9));
            }
        
            if ($hdlCholesterol >= 60) {
                $probability -= 1;
            } elseif ($hdlCholesterol >= 50 && $hdlCholesterol <= 59) {
                $probability += 0;
            } elseif ($hdlCholesterol >= 40 && $hdlCholesterol <= 49) {
                $probability += 1;
            } elseif ($hdlCholesterol < 40) {
                $probability += 2;
            }
        
            if ($bloodPressure >= 120 && $bloodPressure <= 129) {
                $probability += $bloodPressure ? 3 : 1;
            } elseif ($bloodPressure >= 130 && $bloodPressure <= 139) {
                $probability += $bloodPressure ? 4 : 2;
            } elseif ($bloodPressure >= 140 && $bloodPressure <= 159) {
                $probability += $bloodPressure ? 5 : 3;
            } elseif ($bloodPressure >= 160) {
                $probability += $bloodPressure ? 6 : 4;
            }
        } elseif ($gender == 'Male') {
            if ($age >= 20 && $age <= 34) {
                $probability -= 9;
            } elseif ($age >= 35 && $age <= 39) {
                $probability -= 4;
            } elseif ($age >= 40 && $age <= 44) {
                $probability += 0;
            } elseif ($age >= 45 && $age <= 49) {
                $probability += 3;
            } elseif ($age >= 50 && $age <= 54) {
                $probability += 6;
            } elseif ($age >= 55 && $age <= 59) {
                $probability += 8;
            } elseif ($age >= 60 && $age <= 64) {
                $probability += 10;
            } elseif ($age >= 65 && $age <= 69) {
                $probability += 11;
            } elseif ($age >= 70 && $age <= 74) {
                $probability += 12;
            } elseif ($age >= 75 && $age <= 79) {
                $probability += 13;
            }
        
            if ($totalCholesterol >= 160 && $totalCholesterol <= 199) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 0 : ($ageGroup >= 50 ? 2 : ($ageGroup >= 40 ? 3 : 4));
            } elseif ($totalCholesterol >= 200 && $totalCholesterol <= 239) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 60 ? 1 : ($ageGroup >= 40 ? 3 : 7);
            } elseif ($totalCholesterol >= 240 && $totalCholesterol <= 279) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 1 : ($ageGroup >= 50 ? 4 : ($ageGroup >= 40 ? 6 : 9));
            } elseif ($totalCholesterol >= 280) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 1 : ($ageGroup >= 50 ? 5 : ($ageGroup >= 40 ? 8 : 11));
            }
        
            if ($smoker) {
                $ageGroup = floor($age / 10) * 10;
                $probability += $ageGroup >= 70 ? 1 : ($ageGroup >= 50 ? 3 : ($ageGroup >= 40 ? 5 : 8));
            }
        
            if ($hdlCholesterol >= 60) {
                $probability -= 1;
            } elseif ($hdlCholesterol >= 50 && $hdlCholesterol <= 59) {
                $probability += 0;
            } elseif ($hdlCholesterol >= 40 && $hdlCholesterol <= 49) {
                $probability += 1;
            } elseif ($hdlCholesterol < 40) {
                $probability += 2;
            }
        
            if ($bloodPressure >= 120 && $bloodPressure <= 129) {
                $probability += $bloodPressure ? 1 : 0;
            } elseif ($bloodPressure >= 130 && $bloodPressure <= 139) {
                $probability += $bloodPressure ? 2 : 1;
            } elseif ($bloodPressure >= 140 && $bloodPressure <= 159) {
                $probability += $bloodPressure ? 2 : 1;
            } elseif ($bloodPressure >= 160) {
                $probability += $bloodPressure ? 3 : 2;
            }
        }
        
        // Update the value of $probability
        $probability = max(min($probability, 100), 0); // Limit the value between 0 and 100
        
        // Use the updated $probability value
        echo "Probability: " . $probability;
        
    
        // Menghitung 10-tahun risiko penyakit kardiovaskular
        $risk = (1 - pow(0.98767, exp($probability - 26.0145))) * 100;
    
        // Mengembalikan hasil probabilitas dan risiko
        return view('results', [
            'probability' => $probability,
            'risk' => $risk
        ]);
    }
    
}
