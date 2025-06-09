<?php

namespace App\Http\Controllers;

use App\Models\Advertiser;
use Illuminate\Http\Request;

class AdvertiserController extends Controller
{
    public function index()
    {
        return Advertiser::all();
    }

    public function show(Advertiser $advertiser)
    {
        return $advertiser;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        return Advertiser::create($data);
    }

    public function update(Request $request, Advertiser $advertiser)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        $advertiser->update($data);
        return $advertiser;
    }

    public function destroy(Advertiser $advertiser)
    {
        $advertiser->delete();
        return response()->noContent();
    }
}