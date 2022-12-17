@extends('layout')

@section('content')
<section class="mt-24">
    <div class="w-[1200px] mx-auto">
        <h1 class="text-4xl font-bold mb-10">Detail Donor</h1>
        <div class="flex flex-col gap-4">
            <div class="">
                <h3 class="text-lg font-semibold">Nama Lengkap</h3>
                <p>{{ $donor->name }}</p>
            </div>
            <div class="">
                <h3 class="text-lg font-semibold">Jenis Kelamin</h3>
                <p>{{ $donor->gender }}</p>
            </div>
            <div class="">
                <h3 class="text-lg font-semibold">Tangal Lahir</h3>
                <p>{{ $donor->birthday }}</p>
            </div>
            <div class="">
                <h3 class="text-lg font-semibold">Alamat</h3>
                <p>{{ $donor->address }}</p>
            </div>
            <div class="">
                <h3 class="text-lg font-semibold">Boleh donor</h3>
                <p>{{ $bolehDonor }}</p>
            </div>
            {{-- <div class="">
                <h3 class="text-lg font-semibold">Hepatitis</h3>
                <p>{{ $donorQuestionnaire->hepatitis }}</p>
            </div> --}}
            
            <button class="w-fit py-2 px-4 bg-blue-500 text-white rounded-md">
                <a href="/dashboard/form-kesehatan/{{ $donor->id }}">Isi Form Kesehatan</a>
            </button>
        </div>
    </div>
</section>
@endsection