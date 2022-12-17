@extends('layout')

@section('content')
<section>
    <div class="w-[800px] mx-auto mt-20 p-5 border">
        <h1 class="text-4xl font-bold mb-16">Pendaftaran Data Diri</h1>
        <form action="donor/register" method="post">
            @csrf
            <div class="flex flex-col gap-3">
                <div class="flex items-center">
                    <label for="name" class="w-[200px]">Nama Lengkap</label>
                    <input type="text" id="name" name="name" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <p class="w-[200px]">Jenis Kelamin</p>
                    <input type="radio" id="laki" name="gender" value="M" class="mr-2">
                    <label for="laki" class="mr-5">Laki-laki</label><br>
                    <input type="radio" id="perempuan" name="gender" value="F" class="mr-2">
                    <label for="perempuan">Perempuan</label><br>
                </div>
                <div class="flex items-center">
                    <label for="birthday" class="w-[200px]">Tanggal Lahir</label>
                    <input type="date" id="birthday" name="birthday" class="py-1 px-2 border border-slate-400">
                </div>
                <div class="flex items-center">
                    <label for="address" class="w-[200px]">Alamat</label>
                    <input type="text" id="address" name="address" class="w-[300px] py-1 px-2 border border-slate-400">
                </div>
                <button type="submit" class="w-fit mx-auto py-2 px-4 bg-sky-400 text-white rounded-md">Daftar</button>
            </div>
        </form>
    </div>
</section>
@endsection