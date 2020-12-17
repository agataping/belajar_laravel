<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    function tambah($c,$d) {
        return 'hasil'. $c. '+' .$d. 'adalah' .( $c + $d);
    }
}
