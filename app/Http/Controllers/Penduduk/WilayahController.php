<?php

namespace App\Http\Controllers\Penduduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\WilKecDataTables;
use App\DataTables\WilKampungDataTables;
use App\Http\Requests\StoreKecamatan;
use App\Http\Requests\StoreKampung;
use App\Model\WilKecamatan;
use App\Model\WilKampung;

class WilayahController extends Controller
{
    public function index(WilKecDataTables $dataTables)
    {
    	return $dataTables->render('penduduk.kecamatan');
    }

    public function createKecamatan()
    {
    	return view('penduduk.kecamatan_create');
    }

    public function storeKecamatan(StoreKecamatan $request)
    {
    	$hak_akses = WilKecamatan::create([
            'id' => $request->id,
            'nm_kecamatan' => $request->nm_kecamatan
        ]);

    	return redirect('/kecamatan')->with('flash_message','Data berhasil disimpan!');
    }

    public function editKecamatan(WilKecamatan $kecamatan)
    {
        return view('penduduk.kecamatan_edit')->withKecamatan($kecamatan);
    }

    public function updateKecamatan(StoreKecamatan $request, WilKecamatan $kecamatan)
    {    
        $kecamatan->update([
            'id' => $request->id,
            'nm_kecamatan' => $request->nm_kecamatan
        ]);

        return redirect('/kecamatan')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteKecamatan(Request $request)
    {
        $kecamatan = WilKecamatan::find($request->data);

        return response()->json($kecamatan->delete());
    }

    public function listKampung(Request $request, WilKampungDataTables $dataTables, WilKecamatan $kecamatan)
    {               
        if($request->ajax()){
            return $dataTables->with('wil_kecamatan_id', $kecamatan->id)->render('penduduk.kampung');
        }

        return view('penduduk.kampung')->withKecamatan($kecamatan);
    }

    public function createKampung(WilKecamatan $kecamatan)
    {
        return view('penduduk.kampung_create')->withKecamatan($kecamatan);
    }

    public function storeKampung(StoreKampung $request, WilKecamatan $kecamatan)
    {
       $kecamatan->kampung()->create([
            'id' => $request->id,
            'nm_kampung' => $request->nm_kampung
       ]);

       return redirect()->route('kampung.index', [$kecamatan])->with('flash_message','Data berhasil disimpan!');
    }

    public function editKampung(WilKecamatan $kecamatan, $id)
    {
          $kampung = $kecamatan->kampung()->where('id', $id)->first();
        
          return view('penduduk.kampung_edit')->withKecamatan($kecamatan)->withKampung($kampung);
    }

    public function updateKampung(StoreKampung $request, WilKecamatan $kecamatan)
    {
        $kampung = $kecamatan->kampung()->where('id', $request->id)->first();      

        $kampung->update([
            'nm_kampung' => $request->nm_kampung
        ]);

        return redirect()->route('kampung.index', [$kecamatan])->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteKampung(Request $request)
    {
        $kampung = WilKampung::where('id', $request->id)->where('wil_kecamatan_id', $request->wil_kecamatan_id);

        return response()->json($kampung->delete());
    }

    public function listRw(Request $request, WilRwDataTables $dataTables, WilKecamatan $kecamatan, $wil_kampung_id)
    {               
        if($request->ajax()){
            return $dataTables->with('wil_kecamatan_id', $kecamatan->id)->with('wil_kampung_id', $wil_kampung_id)->render('penduduk.rw');
        }

        return view('penduduk.rw')->withKecamatan($kecamatan);
    }
}
