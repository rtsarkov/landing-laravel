@extends('layouts.admin')
@section('h1', 'Добавление партнера');
@section('content')
    <div class="mt-8">
        <form action="{{ route('admin.partners.store') }}"
              method="post"
              enctype="multipart/form-data"
              class="space-y-5 mt-5">
            @csrf
            <input name="name" type="text"
                   class="@error('name') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{old('name')}}"
                   placeholder="Название"/>
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="file" name="image">
            @error('image')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Сохранить
            </button>
        </form>
    </div>
@endsection
