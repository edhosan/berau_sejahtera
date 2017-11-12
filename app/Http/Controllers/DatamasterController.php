<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\AgamaDataTables;
use App\DataTables\PendidikanKKDataTables;
use App\DataTables\PendidikanDitempuhDataTables;
use App\DataTables\PekerjaanDataTables;
use App\DataTables\StatusDataTables;
use App\DataTables\HubunganDataTables;
use App\DataTables\GolonganDataTables;
use App\DataTables\CacatDataTables;
use App\DataTables\AkseptorDataTables;
use App\Http\Requests\StoreAgama;
use App\Http\Requests\StorePendidikanKK;
use App\Http\Requests\StorePendidikanDitempuh;
use App\Http\Requests\StorePekerjaan;
use App\Http\Requests\StoreStatus;
use App\Http\Requests\StoreHubungan;
use App\Http\Requests\StoreGolongan;
use App\Http\Requests\StoreCacat;
use App\Http\Requests\StoreAkseptor;
use App\Model\Agama;
use App\Model\PendidikanKK;
use App\Model\PendidikanDitempuh;
use App\Model\Pekerjaan;
use App\Model\Status;
use App\Model\Hubungan;
use App\Model\Golongan;
use App\Model\Cacat;
use App\Model\Akseptor;

class DatamasterController extends Controller
{
    public function listAgama(Request $request, AgamaDataTables $dataTables)
    {
 		if($request->ajax()){
            return $dataTables->render('datamaster.agama');
        }

        return view('datamaster.agama');
    }

    public function createAgama()
    {
    	return view('datamaster.agama_create');
    }

    public function storeAgama(StoreAgama $request)
    {
    	Agama::create([
    		'nm_agama'	=> $request->nm_agama
    	]);

    	return redirect()->route('agama.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editAgama(Agama $agama)
    {
    	return view('datamaster.agama_edit')->withAgama($agama);
    }

    public function updateAgama(StoreAgama $request, Agama $agama)
    {
    	$agama->update([
    		'nm_agama'	=> $request->nm_agama
    	]);

    	return redirect()->route('agama.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteAgama(Request $request)
    {
    	$agama = Agama::find($request->data);

    	return response()->json($agama->delete());
    }

    public function listPendidikanKK(Request $request, PendidikanKKDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.pendidikankk');
        }

        return view('datamaster.pendidikankk');
    }

    public function createPendidikanKK()
    {
        return view('datamaster.pendidikankk_create');
    }

    public function storePendidikanKK(StorePendidikanKK $request)
    {
        PendidikanKK::create([
            'nm_pendidikan_kk'  => $request->nm_pendidikan_kk
        ]);

        return redirect()->route('pendidikankk.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editPendidikanKK(PendidikanKK $pendidikankk)
    {
        return view('datamaster.pendidikankk_edit')->withPendidikankk($pendidikankk);
    }

    public function updatePendidikanKK(StorePendidikanKK $request, PendidikanKK $pendidikankk)
    {        
        $pendidikankk->update([
            'nm_pendidikan_kk'  => $request->nm_pendidikan_kk
        ]);

        return redirect()->route('pendidikankk.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deletePendidikanKK(Request $request)
    {
        $pendidikankk = PendidikanKK::find($request->data);

        return response()->json($pendidikankk->delete());
    }

    public function listPendidikanDitempuh(Request $request, PendidikanDitempuhDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.pendidikan_ditempuh');
        }

        return view('datamaster.pendidikan_ditempuh');
    }

    public function createPendidikanDitempuh()
    {
        return view('datamaster.pendidikan_ditempuh_create');
    }

    public function storePendidikanDitempuh(StorePendidikanDitempuh $request)
    {
        PendidikanDitempuh::create([
            'nm_pendidikan_ditempuh'  => $request->nm_pendidikan_ditempuh
        ]);

        return redirect()->route('pendidikan_ditempuh.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editPendidikanDitempuh(PendidikanDitempuh $pendidikanditempuh)
    {
        return view('datamaster.pendidikan_ditempuh_edit')->withPendidikanditempuh($pendidikanditempuh);
    }

    public function updatePendidikanDitempuh(StorePendidikanDitempuh $request, PendidikanDitempuh $pendidikanditempuh)
    {        
        $pendidikanditempuh->update([
            'nm_pendidikan_ditempuh'  => $request->nm_pendidikan_ditempuh
        ]);

        return redirect()->route('pendidikan_ditempuh.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deletePendidikanDitempuh(Request $request)
    {
        $pendidikanditempuh = PendidikanDitempuh::find($request->data);

        return response()->json($pendidikanditempuh->delete());
    }

    public function listPekerjaan(Request $request, PekerjaanDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.pekerjaan');
        }

        return view('datamaster.pekerjaan');
    }

    public function createPekerjaan()
    {
        return view('datamaster.pekerjaan_create');
    }

    public function storePekerjaan(StorePekerjaan $request)
    {
        Pekerjaan::create([
            'nm_pekerjaan'  => $request->nm_pekerjaan
        ]);

        return redirect()->route('pekerjaan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editPekerjaan(Pekerjaan $pekerjaan)
    {
        return view('datamaster.pekerjaan_edit')->withPekerjaan($pekerjaan);
    }

    public function updatePekerjaan(StorePekerjaan $request, Pekerjaan $pekerjaan)
    {        
        $pekerjaan->update([
            'nm_pekerjaan'  => $request->nm_pekerjaan
        ]);

        return redirect()->route('pekerjaan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deletePekerjaan(Request $request)
    {
        $pekerjaan = Pekerjaan::find($request->data);

        return response()->json($pekerjaan->delete());
    }

    public function listStatus(Request $request, StatusDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.status');
        }

        return view('datamaster.status');
    }

    public function createStatus()
    {
        return view('datamaster.status_create');
    }

    public function storeStatus(StoreStatus $request)
    {
        Status::create([
            'nm_status_kawin'  => $request->nm_status_kawin
        ]);

        return redirect()->route('status.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editStatus(Status $status)
    {
        return view('datamaster.status_edit')->withStatus($status);
    }

    public function updateStatus(StoreStatus $request, Status $status)
    {        
        $status->update([
            'nm_status_kawin'  => $request->nm_status_kawin
        ]);

        return redirect()->route('status.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteStatus(Request $request)
    {
        $status = Status::find($request->data);

        return response()->json($status->delete());
    }

    public function listHubungan(Request $request, HubunganDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.hubungan');
        }

        return view('datamaster.hubungan');
    }

    public function createHubungan()
    {
        return view('datamaster.hubungan_create');
    }

    public function storeHubungan(StoreHubungan $request)
    {
        Hubungan::create([
            'nm_hubungan'  => $request->nm_hubungan
        ]);

        return redirect()->route('hubungan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editHubungan(Hubungan $hubungan)
    {
        return view('datamaster.hubungan_edit')->withHubungan($hubungan);
    }

    public function updateHubungan(StoreHubungan $request, Hubungan $hubungan)
    {        
        $hubungan->update([
            'nm_hubungan'  => $request->nm_hubungan
        ]);

        return redirect()->route('hubungan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteHubungan(Request $request)
    {
        $hubungan = Hubungan::find($request->data);

        return response()->json($hubungan->delete());
    }

    public function listGolongan(Request $request, GolonganDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.golongan');
        }

        return view('datamaster.golongan');
    }

    public function createGolongan()
    {
        return view('datamaster.golongan_create');
    }

    public function storeGolongan(StoreGolongan $request)
    {
        Golongan::create([
            'nm_golongan'  => $request->nm_golongan
        ]);

        return redirect()->route('golongan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editGolongan(Golongan $golongan)
    {
        return view('datamaster.golongan_edit')->withgolongan($golongan);
    }

    public function updateGolongan(StoreGolongan $request, Golongan $golongan)
    {        
        $golongan->update([
            'nm_golongan'  => $request->nm_golongan
        ]);

        return redirect()->route('golongan.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteGolongan(Request $request)
    {
        $golongan = Golongan::find($request->data);

        return response()->json($golongan->delete());
    }

    public function listCacat(Request $request, CacatDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.cacat');
        }

        return view('datamaster.cacat');
    }

    public function createCacat()
    {
        return view('datamaster.cacat_create');
    }

    public function storeCacat(StoreCacat $request)
    {
        Cacat::create([
            'nm_cacat'  => $request->nm_cacat
        ]);

        return redirect()->route('cacat.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editCacat(Cacat $cacat)
    {
        return view('datamaster.cacat_edit')->withcacat($cacat);
    }

    public function updateCacat(StoreCacat $request, Cacat $cacat)
    {        
        $cacat->update([
            'nm_cacat'  => $request->nm_cacat
        ]);

        return redirect()->route('cacat.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteCacat(Request $request)
    {
        $cacat = Cacat::find($request->data);

        return response()->json($cacat->delete());
    }

    public function listAkseptor(Request $request, AkseptorDataTables $dataTables)
    {
        if($request->ajax()){
            return $dataTables->render('datamaster.akseptor');
        }

        return view('datamaster.akseptor');
    }

    public function createAkseptor()
    {
        return view('datamaster.akseptor_create');
    }

    public function storeAkseptor(StoreAkseptor $request)
    {
        Akseptor::create([
            'nm_kb'  => $request->nm_akseptor
        ]);

        return redirect()->route('akseptor.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function editAkseptor(Akseptor $akseptor)
    {
        return view('datamaster.akseptor_edit')->withAkseptor($akseptor);
    }

    public function updateAkseptor(StoreAkseptor $request, Akseptor $akseptor)
    {        
        $akseptor->update([
            'nm_kb'  => $request->nm_akseptor
        ]);

        return redirect()->route('akseptor.index')->with('flash_message','Data berhasil disimpan!');
    }

    public function deleteAkseptor(Request $request)
    {
        $akseptor = Akseptor::find($request->data);

        return response()->json($akseptor->delete());
    }


}
