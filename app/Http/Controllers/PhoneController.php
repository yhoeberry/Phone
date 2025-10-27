<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return view('phones.index', compact('phones'));
    }

    public function create()
    {
        return view('phones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Phone::create($request->all());

        return redirect()->route('phones.index')->with('success', 'Phone added successfully!');
    }

    public function edit(Phone $phone)
    {
        return view('phones.edit', compact('phone'));
    }

    public function update(Request $request, Phone $phone)
    {
        $request->validate([
            'brand' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $phone->update($request->all());

        return redirect()->route('phones.index')->with('success', 'Phone updated successfully!');
    }

    public function destroy(Phone $phone)
    {
        $phone->delete();
        return redirect()->route('phones.index')->with('success', 'Phone deleted successfully!');
    }
}
