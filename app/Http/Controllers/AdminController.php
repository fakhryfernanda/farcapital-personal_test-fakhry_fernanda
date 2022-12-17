<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Donor;
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
        return view('admin/detail-donor', [
            'donor' => Donor::find($id),
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
