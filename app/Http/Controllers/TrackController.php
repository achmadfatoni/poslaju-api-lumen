<?php

namespace App\Http\Controllers;

use Achmadfatoni\PoslajuLaravel\Poslaju;

class TrackController extends Controller
{
    public function __invoke($id)
    {
        $trackResult = Poslaju::track($id);
        return response()->json($trackResult);
    }

}