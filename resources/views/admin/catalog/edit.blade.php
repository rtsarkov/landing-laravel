@extends('layouts.admin')
@section('h1', 'Редактирвание продукта');
@section('content')
    <div class="mt-8">
        <form action="{{ route('admin.catalog.update', $product->id) }}"
              method="post"
              enctype="multipart/form-data"
              class="space-y-5 mt-5">
            @csrf
            @method('PUT')
            <input name="name" type="text"
                   class="@error('name') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $product->name }}"
                   placeholder="Название"/>
            @error('name')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="manufacturer" type="text"
                   class="@error('manufacturer') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $product->manufacturer }}"
                   placeholder="Производитель"/>
            @error('manufacturer')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="warranty" type="text"
                   class="@error('warranty') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $product->warranty }}"
                   placeholder="Гарантия"/>
            @error('warranty')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <input name="products" type="text"
                   class="@error('products') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   value="{{ $product->products }}"
                   placeholder="Продукция"/>
            @error('products')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="description"
                   class="@error('description') border-red-500 @enderror w-full h-12 border border-gray-800 rounded px-3"
                   placeholder="Назначение">
                {{ $product->description }}
            </textarea>
            @error('description')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <textarea name="benefits"
                   class="w@error('benefits') border-red-500 @enderror -full h-12 border border-gray-800 rounded px-3"
                   placeholder="Преимущества">
                {{ $product->benefits }}
            </textarea>
            @error('benefits')
            <p class="text-red-500">{{ $message }}</p>
            @enderror
            <img src="/storage/images/{{ $product->image->name }}" alt="" width="150">
            <input type="file" name="image" value="/storage/images/{{ $product->image->name }}">
            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Сохранить
            </button>
        </form>
    </div>
@endsection
