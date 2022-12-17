<?php

namespace App\Http\Controllers;


use App\Models\Donor;
use App\Models\DonorQuestionnaire;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function register()
    {
        return view('donor/register');
    }

    public function store(Request $request)
    {
        $payload = [
            'name' => $request->input("name"),
            'gender' => $request->input("gender"),
            'birthday' => $request->input("birthday"),
            'address' => $request->input("address"),
        ];

        Donor::query()->create($payload);
        return redirect("donor/questionnaire");
    }

    public function questionnaire() 
    {
        return view('donor/questionnaire');
    }

    public function storeQuestionnaire(Request $request) 
    {
        $payload = [
            'hepatitis' => $request->input("hepatitis"),
            'aids' => $request->input("aids"),
            'ketergantungan_obat' => $request->input("ketergantungan_obat"),
            'alkoholisme' => $request->input("alkoholisme"),
            'sifilis' => $request->input("sifilis"),
            'tuberkolosis' => $request->input("tuberkolosis"),
            'epilepsi' => $request->input("epilepsi"),
            'penyakit_kulit' => $request->input("penyakit_kulit"),
            'penyakit_darah' => $request->input("penyakit_darah"),
            'resiko_aids' => $request->input("resiko_aids"),
            'hamil' => $request->input("hamil"),
            'menyusui' => $request->input("menyusui"),
            'haid' => $request->input("haid"),
            'vaksinasi_polio' => $request->input("vaksinasi_polio"),
            'operasi_gigi' => $request->input("operasi_gigi"),
            'alergi' => $request->input("alergi"),
            'vaksinasi_virus_hidup' => $request->input("vaksinasi_virus_hidup"),
            'kontak_dengan_hepatitis' => $request->input("kontak_dengan_hepatitis"),
            'mendapat_transfusi' => $request->input("mendapat_transfusi"),
            'tato' => $request->input("tato"),
            'operasi_kecil' => $request->input("operasi_kecil"),
            'injeksi_rabies' => $request->input("injeksi_rabies"),
            'transplantasi_kulit' => $request->input("transplantasi_kulit"),
        ];

        DonorQuestionnaire::query()->create($payload);
        return redirect("/");
    }
}
