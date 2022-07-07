<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PromoCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     */
    public function index()
    {
        $promo_codes = PromoCode::orderBy('created_at','ASC')->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function show(PromoCode $promoCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function edit(PromoCode $promoCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param PromoCode $promoCode
     * @return Response
     */
    public function update(Request $request, PromoCode $promoCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param PromoCode $promoCode
     * @return void
     */
    public function destroy(PromoCode $promoCode)
    {
        //
    }
}
