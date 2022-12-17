@extends('layout')

@section('content')
<section>
    <div class="w-[1200px] mx-auto mt-24">
        <h1 class="text-4xl font-bold mb-10">Dashboard</h1>
        <div class="">
            <h2 class="text-2xl font-semibold mb-4">Daftar Calon Pendonor</h2>
            @foreach($donors as $donor)
            <div class="">
                <ul class="flex gap-8">
                    <li>{{ $donor->name }}</li>
                    {{-- <li>{{ $donor->gender }}</li>
                    <li>{{ $donor->birthday }}</li>
                    <li>{{ $donor->address }}</li> --}}
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection