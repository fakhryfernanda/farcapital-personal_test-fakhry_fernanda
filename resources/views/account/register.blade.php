@extends('index')

@section('content')
    <div class="mx-auto w-fit">
        <h2 class="mb-5 text-3xl text-center font-semibold">Buat Akun</h2>
        <form action="/register" method="post" class="flex flex-col">
            @csrf
            <input class="w-[500px] py-3 px-4 border border-gray-300" name="name" type="text" placeholder="Name">
            <input class="w-[500px] py-3 px-4 border border-gray-300" name="username" type="text" placeholder="Username">
            <input class="w-[500px] py-3 px-4 border border-gray-300" name="email" type="email" placeholder="Email Address">
            <input class="w-[500px] py-3 px-4 border border-gray-300" name="password" type="password" placeholder="Password">
            {{-- <div class="mt-2 flex items-center gap-2">
                <input class="block" type="Checkbox">
                <p>Remember me</p>
            </div> --}}
            <button class="mt-4 py-2 text-lg text-white bg-blue-500 text-center rounded-md">Register</button>
        </form>
        <p class="text-center mt-5">Already registered? <a href="/login" class="underline text-blue-500">Login Now!</a></p>
    </div>
@endsection