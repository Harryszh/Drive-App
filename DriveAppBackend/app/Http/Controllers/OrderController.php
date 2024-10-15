<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController /* extends Controller */
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validierung
        $validated = $request->validate([
            'abholort' => 'required|string|max:255',
            'zielort' => 'required|string|max:255',
            'fahrzeugtyp' => 'required|string',
            'ladezeit' => 'required',
            'zustelloption' => 'required|in:express,termin',
            'termin_datum' => 'nullable|date',
        ]);

        // Buchung erstellen
        $order = Order::create($validated);

        return response()->json([
            'message' => 'Buchung erfolgreich erstellt!',
            'order' => $order
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
