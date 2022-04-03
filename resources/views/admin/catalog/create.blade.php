@extends('layouts.admin')
@section('h1', 'Добавление продукта');
@section('content')
    <div class="mt-8">
        <form action="{{ route('admin.catalog.store') }}"
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
            <input name="manufacturer" type="text"
                   class="@error('manufacturer') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{old('manufacturer')}}"
                   placeholder="Производитель"/>
            @error('manufacturer')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="warranty" type="text"
                   class="@error('warranty') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{old('warranty')}}"
                   placeholder="Гарантия"/>
            @error('warranty')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="products" type="text"
                   class="@error('products') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{old('products')}}"
                   placeholder="Продукция"/>
            @error('products')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="description"
                      rows="7"
                      class="@error('description') border-red-500 @enderror w-full p-2 border-2 focus:outline-none focus:border-green-400 text-gray-500 rounded-lg"
                      placeholder="Назначение">{{old('description')}}</textarea>
            @error('description')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="benefits"
                      rows="7"
                      class="@error('benefits') border-red-500 @enderror w-full p-2 border-2 focus:outline-none focus:border-green-400 text-gray-500 rounded-lg"
                      placeholder="Преимущества">{{old('benefits')}}</textarea>
            @error('benefits')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input type="file" name="image">
            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Сохранить
            </button>
        </form>
    </div>
@endsection
