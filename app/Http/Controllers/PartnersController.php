<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = trim($request->search);
        $status = $request->status;
        $country = $request->country;
        $state = $request->state;

        $partners = DB::table('partner_locator')
                          ->when($search, function($query, $search) {
                            return $query->where('company', 'LIKE', '%'.$search.'%')
                                         ->orWhere('address', 'LIKE', '%'.$search.'%');
                          })
                          ->when($status, function($query, $status) {
                            return $query->where('status', '=', $status);
                          })
                          ->when($country, function($query, $country) {
                            return $query->where('countries_covered', 'LIKE', '%'.$country.'%');
                          })
                          ->when($state, function($query, $state) {
                            return $query->where('states_covered', 'LIKE', '%'.$state.'%');
                          })
                          ->get();

        //$partners = DB::select('select * from partner_locator');
        return $partners;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
