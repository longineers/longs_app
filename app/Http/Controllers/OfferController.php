<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        return Offer::all();
    }

    public function show(Offer $offer)
    {
        return $offer;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'advertiser_id' => 'required|exists:advertisers,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'payout' => 'required|numeric',
            'status' => 'in:active,inactive',
        ]);
        return Offer::create($data);
    }

    public function update(Request $request, Offer $offer)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'payout' => 'required|numeric',
            'status' => 'in:active,inactive',
        ]);
        $offer->update($data);
        return $offer;
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();
        return response()->noContent();
    }
}