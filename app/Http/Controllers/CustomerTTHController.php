<?php

namespace App\Http\Controllers;

use App\Models\CustomerTTH;
use Exception;
use Illuminate\Http\Request;

class CustomerTTHController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $customerTTHs = CustomerTTH::all();
            return response()->json([
                'success' => true,
                'code' => 200,
                'data' => $customerTTHs
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'code' => 500,
                'message' => $e->getMessage()
            ]);
        }
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CustomerTTH $customerTTH)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CustomerTTH $customerTTH)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CustomerTTH $customerTTH)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CustomerTTH $customerTTH)
    {
        //
    }
}