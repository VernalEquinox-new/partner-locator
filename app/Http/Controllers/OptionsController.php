<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OptionsController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
      $table = $request->table;

      if($table === 'status') {
        $options = DB::table('partner_locator')
                     ->select($table)->distinct()->get();
      }
      if($table === 'country') {
        $options = DB::table('loc_country')->get();
      }
      if($table === 'state') {
        $options = DB::table('loc_state')->get();
      }

      return $options;
    }
}
