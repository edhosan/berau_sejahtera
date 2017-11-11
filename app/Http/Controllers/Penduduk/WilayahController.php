<?php

namespace App\Http\Controllers\Penduduk;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\WilKecDataTables;
use App\DataTables\WilKampungDataTables;
use App\DataTables\WilRwDataTables;
use App\DataTables\WilRTDataTables;
use App\Http\Requests\StoreKecamatan;
use App\Http\Requests\StoreKampung;
use App\Http\Requests\StoreRW;
use App\Http\Requests\StoreRT;
use App\Model\WilKecamatan;
use App\Model\WilKampung;
use App\Model\WilRW;
use App\Model\WilRT;

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

        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();

        return view('penduduk.rw')->withKecamatan($kecamatan)->withKampung($kampung);
    }

    public function createRW(WilKecamatan $kecamatan, $wil_kampung_id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();

        return view('penduduk.rw_create')->withKecamatan($kecamatan)->withKampung($kampung);
    }

    public function storeRW(StoreRW $request, WilKecamatan $kecamatan, $wil_kampung_id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();

        $kampung->rw()->create([
           'id' => $request->id,
           'wil_kecamatan_id' => $kecamatan->id,
           'rw' => $request->rw
        ]);

        return redirect()->route('rw.index', [$kecamatan, $wil_kampung_id])->with('flash_message','Data berhasil disimpan!');  
    }

    public function editRW(WilKecamatan $kecamatan, $wil_kampung_id, $id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();
        $rw = $kampung->rw()->whereId($id)->first();

        return view('penduduk.rw_edit')->withKecamatan($kecamatan)->withKampung($kampung)->withRw($rw);   
    }

    public function updateRw(StoreRW $request, WilKecamatan $kecamatan, $wil_kampung_id, $id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();
        $rw = $kampung->rw()->whereId($id)->first();

        $result = $rw->update([
            'rw' => $request->rw
        ]);

        return redirect()->route('rw.index', [$kecamatan, $wil_kampung_id])->with('flash_message','Data berhasil disimpan!');     
    }

    public function deleteRw(Request $request)
    {
        $rw = WilRW::whereId($request->id)->where('wil_kecamatan_id', $request->wil_kecamatan_id)->where('wil_kampung_id', $request->wil_kampung_id);

        return response()->json($rw->delete());
    }

    public function listRT(Request $request, WilRTDataTables $dataTables, WilKecamatan $kecamatan, $wil_kampung_id, $wil_rw_id)
    {
        if($request->ajax()){
            return $dataTables->with('wil_kecamatan_id', $kecamatan->id)->with('wil_kampung_id', $wil_kampung_id)->with('wil_rw_id', $wil_rw_id)->render('penduduk.rt');
        }

        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();
        $rw = $kampung->rw()->whereId($wil_rw_id)->first();

        return view('penduduk.rt')->withKecamatan($kecamatan)->withKampung($kampung)->withRw($rw);
    }

    public function createRT(WilKecamatan $kecamatan, $wil_kampung_id, $wil_rw_id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();
        $rw = $kampung->rw()->whereId($wil_rw_id)->first();

        return view('penduduk.rt_create')->withKecamatan($kecamatan)->withKampung($kampung)->withRw($rw);
    }

    public function storeRT(StoreRT $request, WilKecamatan $kecamatan, $wil_kampung_id, $wil_rw_id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();   
        $rw = $kampung->rw()->whereId($wil_rw_id)->first();

        $rw->rt()->create([
            'wil_kecamatan_id'  => $request->wil_kecamatan_id,
            'wil_kampung_id'    => $request->wil_kampung_id,
            'id'    => $request->id,
            'rt'    => $request->rt
        ]);

        return redirect()->route('rt.index', [$kecamatan, $wil_kampung_id, $wil_rw_id])->with('flash_message','Data berhasil disimpan!');     
    }

    public function editRT(WilKecamatan $kecamatan, $wil_kampung_id, $wil_rw_id, $id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();   
        $rw = $kampung->rw()->whereId($wil_rw_id)->first();
        $rt = $rw->rt()->whereId($id)->first();

        return view('penduduk.rt_edit')->withKecamatan($kecamatan)->withKampung($kampung)->withRw($rw)->withRt($rt);   
    }

    public function updateRT(StoreRT $request, WilKecamatan $kecamatan, $wil_kampung_id, $wil_rw_id, $id)
    {
        $kampung = $kecamatan->kampung()->whereId($wil_kampung_id)->first();   
        $rw = $kampung->rw()->whereId($wil_rw_id)->first();
        $rt = $rw->rt()->whereId($id)->first();

        $rt->update([
            'rt'    => $request->rt
        ]);        

        return redirect()->route('rt.index', [$kecamatan, $wil_kampung_id, $wil_rw_id])->with('flash_message','Data berhasil disimpan!');     
    }

    public function deleteRT(Request $request)
    {
        $rt = WilRT::where('wil_kecamatan_id', $request->wil_kecamatan_id)
                ->where('wil_kampung_id', $request->wil_kampung_id)
                ->where('wil_rw_id', $request->wil_rw_id)
                ->where('id', $request->id);


        return response()->json($rt->delete());


    }
}
