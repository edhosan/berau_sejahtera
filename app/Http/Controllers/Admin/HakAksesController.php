<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\DataTables\HakAksesDataTable;
use App\Http\Requests\StoreHakAkses;

class HakAksesController extends Controller
{
    public function index(HakAksesDataTable $dataTable)
    {
        return $dataTable->render('hak_akses.lists');
    }

    public function create()
    {
    	return view('hak_akses.create');
    }

    public function store(StoreHakAkses $request)
    {
    	$hak_akses = Permission::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

    	return redirect('/hak_akses')->with('flash_message','Data berhasil disimpan!');
    }

    public function edit(Permission $hak_akses)
    {
	   	return view('hak_akses.edit')->withHakakses($hak_akses);
    }

    public function update(StoreHakAkses $request, Permission $hak_akses)
    {       
    	$hak_akses->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        return redirect('/hak_akses')->with('flash_message','Hak akses '.$request->name.' berhasil diubah');
    }

    public function delete(Request $request)
    {
    	$hak_akses = Permission::find($request->data);

    	return response()->json($hak_akses->delete());
    }
}
