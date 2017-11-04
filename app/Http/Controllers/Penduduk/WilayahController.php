<?php

namespace App\Http\Controllers\Penduduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\WilKecDataTables;

class WilayahController extends Controller
{
    public function index(WilKecDataTables $dataTables)
    {
    	$dataTables->render('penduduk.kecamatan');
    }
}
