@extends('layouts.admin')
@section('h1', 'Партнеры');
@section('content')
    <div class="mt-8">
        <a href="{{ route('admin.partners.create') }}" class="text-indigo-600 hover:text-indigo-900">Добавить</a>
    </div>

    <div class="flex flex-col mt-8">
        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div
                class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                            Содержимое
                        </th>
                        <th class="px-6 py-3 border-b border-gray-200 bg-gray-50"></th>
                    </tr>
                    </thead>

                    <tbody class="bg-white">
                    @foreach($partners as $partner)
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">

                                <div class="text-sm leading-5 text-gray-900">
                                    <p>{{ $partner->name }}</p>
                                    <img src="/storage/images/{{ $partner->image->name }}" alt="" width="150px">
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">
                                <a href="{{ route('admin.partners.edit', $partner->id) }}" class="text-indigo-600 hover:text-indigo-900">Редактировать</a>
                                <form action="{{ route('admin.partners.destroy', $partner->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Удалить</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
