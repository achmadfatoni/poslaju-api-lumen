<?php

namespace App\Http\Controllers;

use App\Services\Poslaju;

class TrackController extends Controller
{
    public function __invoke($id)
    {
        $trackResult = (new Poslaju())->track($id);
        return response()->json($trackResult);
    }

}