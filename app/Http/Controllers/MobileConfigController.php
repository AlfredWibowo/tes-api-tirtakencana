<?php

namespace App\Http\Controllers;

use App\Models\MobileConfig;
use Exception;
use Illuminate\Http\Request;

class MobileConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $mobileConfigs = MobileConfig::all();
            return response()->json([
                'success' => true,
                'code' => 200,
                'data' => $mobileConfigs
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
    public function show(MobileConfig $mobileConfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MobileConfig $mobileConfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MobileConfig $mobileConfig)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MobileConfig $mobileConfig)
    {
        //
    }
}
