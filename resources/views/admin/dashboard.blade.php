@extends('layout')

@section('content')
<section>
    <div class="w-[1200px] mx-auto mt-24">
        <h1 class="text-4xl font-bold mb-10">Dashboard</h1>
        <div class="">
            <h2 class="text-2xl font-semibold mb-4">Daftar Calon Pendonor</h2>
            @foreach($donors as $donor)
            <table>
                <tr>
                    <th class="w-[600px] py-1 px-4 border text-center">Nama Lengkap</th>
                    {{-- <th class="py-1 px-4 border text-center">Keterangan boleh mendonor</th> --}}
                    <th class="py-1 px-4 border text-center"></th>
                </tr>
                <tr>
                    <td class="w-[600px] py-1 px-4 border text-center">{{ $donor->name }}</td>
                    {{-- <td class="py-1 px-4 border text-center">{{ isset($donor->weight) ? 'Boleh' : 'Tidak boleh' }}</td> --}}
                    <td class="py-1 px-4 border text-center"><a href="dashboard/donor/{{ $donor->id }}" class="text-blue-500 underline">Detail</a></td>
                </tr>
            </table>
            @endforeach
        </div>
    </div>
</section>
@endsection