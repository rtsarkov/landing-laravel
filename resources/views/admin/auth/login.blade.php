@extends('layouts.admin')
@section('title', 'Авторизация')
@section('content')
    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">Вход</h1>

            <form action="{{ route('admin.login_process') }}" method="post" class="space-y-5 mt-5">
                @csrf
                <input name="email" type="text" class="w-full h-12 border border-gray-800  @error('email') border-red-500 @enderror rounded px-3" placeholder="Email" />
                @error('email')
                <p class="text-red-500">{{ $message }}</p>
                @enderror
                <input type="password" name="password" class="w-full h-12 border border-gray-800 rounded px-3" placeholder="Пароль" />
                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Войти</button>
            </form>
        </div>
    </div>
@endsection
