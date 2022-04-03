<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PartnerRequest;
use App\Http\Requests\Admin\PartnerUpdateRequest;
use App\Models\Partner;
use App\Services\ImageService;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index')->with([
            'partners' => $partners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     */
    public function store(PartnerRequest $request)
    {
        $data = $request->validated();
        $data['image_id'] = $data['image_id'] = ImageService::upload($request->file('image'));
        Partner::query()->create($data);
        return redirect(route('admin.partners.index'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     */
    public function edit($id)
    {
        $partner = Partner::query()->findOrFail($id);
        return view('admin.partners.edit')->with([
            'partner' => $partner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     */
    public function update(PartnerUpdateRequest $request, $id)
    {
        $data = $request->validated();
        if ($request->file('image')) {
            $data['image_id'] = ImageService::upload($request->file('image'));
        }
        Partner::query()->findOrFail($id)->update($data);
        return redirect(route('admin.partners.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     */
    public function destroy($id)
    {
        Partner::destroy($id);
        return redirect(route('admin.partners.index'));
    }
}
