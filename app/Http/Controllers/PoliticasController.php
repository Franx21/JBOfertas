<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliticasController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return view('footer.politica');
    }
}
