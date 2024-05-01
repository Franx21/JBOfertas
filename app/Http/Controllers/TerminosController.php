<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminosController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        return view('footer.terminos');
    }
}
