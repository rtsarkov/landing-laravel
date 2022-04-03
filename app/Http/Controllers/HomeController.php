<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Partner;

class HomeController extends Controller
{
    public function index()
    {
        $catalog = Catalog::all();
        $partners = Partner::query()->orderBy('sort')->get()->all();
        $contacts = Contact::query()->first();

        return view('home')->with([
            'catalog' => $catalog,
            'partners' => $partners,
            'contacts' => $contacts
        ]);
    }

    public function modalCatalog($id)
    {
        $product = Catalog::query()->findOrFail($id);

        return view('modals.product')->with(['product' => $product]);
    }
}
