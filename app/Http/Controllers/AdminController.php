<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donor;
use App\Models\DonorQuestionnaire;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin/dashboard', [
            "donors" => Donor::all()
        ]);
    }

    public function findDonor($id)
    {
        $donor = Donor::find($id);
        $lolosCekKesehatan = true;

        if (!isset($donor->weight)) {
            $lolosCekKesehatan = false;
        }

        if ($donor->weight < 45) {
            $lolosCekKesehatan = false;
        } elseif ($donor->temperature < 36) {
            $lolosCekKesehatan = false;
        } elseif($donor->tempreature > 37) {
            $lolosCekKesehatan = false;
        } elseif($donor->hemoglobin < 12) {
            $lolosCekKesehatan = false;
        }

        if (!$lolosCekKesehatan) {
            $bolehDonor = 'tidak boleh';
        } else {
            $bolehDonor = 'boleh';
        }

        $columns = $donor->getFillable();
        foreach($columns as $col) {
            if ($col === 'T') {
                $bolehDonor = 'tidak boleh';
            } 
        }

        return view('admin/detail-donor', [
            'donor' => $donor,
            'donorQuestionnaire' => DonorQuestionnaire::find($donor->id),
            'bolehDonor' => $bolehDonor
        ]);
    }
    
    public function form($id)
    {   
        $donor = Donor::find($id);
        $dob = $donor->birthday;
        $age = Carbon::parse($dob)->age;
        return view('admin/form-kesehatan',[
            'donor' => $donor,
            'age' => $age
        ]);
    }
}
