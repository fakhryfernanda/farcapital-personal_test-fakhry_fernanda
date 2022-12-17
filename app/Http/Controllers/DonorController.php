<?php

namespace App\Http\Controllers;

use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input("name"),
            'gender' => $request->input("gender"),
            'birthday' => $request->input("birthday"),
            'address' => $request->input("address"),
        ];

        Donor::query()->create($payload);
        return redirect("/");
    }
}
