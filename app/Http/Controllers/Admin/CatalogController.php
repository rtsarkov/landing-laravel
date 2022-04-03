<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CatalogRequest;
use App\Http\Requests\Admin\CatalogUpdateRequest;
use App\Models\Catalog;
use App\Services\ImageService;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $catalog = Catalog::all();
        return view('admin.catalog.index')->with([
            'catalog' => $catalog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(CatalogRequest $request)
    {
        $data = $request->validated();
        $data['image_id'] = $data['image_id'] = ImageService::upload($request->file('image'));
        Catalog::query()->create($data);
        return redirect(route('admin.catalog.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit($id)
    {
        $product = Catalog::query()->findOrFail($id);
        return view('admin.catalog.edit')->with([
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(CatalogUpdateRequest $request, $id)
    {
        $data = $request->validated();
        if ($request->file('image')) {
            $data['image_id'] = ImageService::upload($request->file('image'));
        }
        Catalog::query()->findOrFail($id)->update($data);
        return redirect(route('admin.catalog.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        Catalog::destroy($id);
        return redirect(route('admin.catalog.index'));
    }
}
