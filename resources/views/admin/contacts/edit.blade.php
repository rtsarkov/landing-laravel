@extends('layouts.admin')
@section('h1', 'Контакты');
@section('content')
    <div class="mt-8">
        <form action="{{ route('admin.contacts.update', $contact->id) }}"
              method="post"
              enctype="multipart/form-data"
              class="space-y-5 mt-5">
            @csrf
            @method('PUT')
            <input name="address" type="text"
                   class="@error('address') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $contact->address }}"
                   placeholder="Адрес"/>
            @error('address')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="phones" type="text"
                   class="@error('phones') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $contact->phones }}"
                   placeholder="Телефон"/>
            @error('phones')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="phone_added" type="text"
                   class="w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $contact->phone_added }}"
                   placeholder="Добавочный телефон"/>
            <input name="email" type="text"
                   class="@error('email') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $contact->email }}"
                   placeholder="Email"/>
            @error('email')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Сохранить
            </button>
        </form>
    </div>
@endsection
