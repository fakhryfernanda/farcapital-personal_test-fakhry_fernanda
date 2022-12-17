@extends('layout')

@section('content')
<section>
    <div class="w-[800px] mx-auto mt-20 p-5 border">
        <h1 class="text-4xl font-bold mb-16">Form Kesehatan</h1>
        <form action="/donor/update/{{ $donor->id }}" method="post">
            @csrf
            @method("put")
            <div class="flex flex-col gap-3">
                <div class="flex items-center">
                    <label for="name" class="w-[200px]">Nama Lengkap</label>
                    <input disabled value="{{ $donor->name }}" required type="text" id="name" name="name" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="name" class="w-[200px]">Umur</label>
                    <input disabled value="{{ $age }}" required type="text" id="name" name="name" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="weight" class="w-[200px]">Berat badan</label>
                    <input required type="number" id="weight" name="weight" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="temperature" class="w-[200px]">Temperatur tubuh</label>
                    <input required type="number" id="temperature" name="temperature" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="sistole" class="w-[200px]">Tekanan darah (sistole)</label>
                    <input required type="number" id="sistole" name="sistole" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="diastole" class="w-[200px]">Tekanan darah (diastole)</label>
                    <input required type="number" id="diastole" name="diastole" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="pulse" class="w-[200px]">Denyut nadi (per menit)</label>
                    <input required type="number" id="pulse" name="pulse" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="hemoglobin" class="w-[200px]">Hemoglobin</label>
                    <input required type="number" id="hemoglobin" name="hemoglobin" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <button type="submit" class="w-fit mx-auto py-2 px-4 bg-sky-400 text-white rounded-md">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection