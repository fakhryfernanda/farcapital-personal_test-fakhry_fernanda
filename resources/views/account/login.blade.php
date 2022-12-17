@extends('layout')

@section('content')
<div class="mx-auto w-fit mt-24">
    {{-- @if (session()->has('success'))
        <div class="group mb-4 py-3 px-4 rounded-md bg-green-200 flex justify-between">
            <p class="text-green-800 font-semibold">{{ session('success') }}</p>
            <button class="group-active:hidden text-xs">&#10060;</button>
        </div>
    @endif --}}

    {{-- @if (session()->has('loginError'))
        <div class="group mb-4 py-3 px-4 rounded-md bg-red-100 flex justify-between">
            <p class="text-red-800 font-semibold">{{ session('loginError') }}</p>
            <button class="group-active:hidden text-xs">&#10060;</button>
        </div>
    @endif --}}

    <h2 class="mb-5 text-3xl text-center font-semibold">Silakan login</h2>
    <form action="login" method="post" class="flex flex-col">
        @csrf
        <input class="w-[300px] py-3 px-4 rounded-sm border border-gray-300 " name="username" type="text" placeholder="Username" required>
        <input class="w-[300px] py-3 px-4 rounded-sm border border-gray-300" name="password" type="password" placeholder="Password" required>
        <button class="mt-4 py-2 text-lg text-white bg-blue-500 text-center rounded-md">Sign in</button>
    </form>
    <p class="text-center mt-5">Not registered? <a href="/register" class="underline text-blue-500">Register Now!</a></p>
</div>
@endsection