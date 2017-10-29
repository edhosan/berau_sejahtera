<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRoles;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\DataTables\RolesDataTable;

class RoleController extends Controller
{
    public function index(RolesDataTable $dataTable)
    {
        return $dataTable->render('roles.lists');
    }

    public function create()
    {
        $permissions = Permission::all();

    	return view('roles.create')->with('hak_akses', $permissions);
    }

    public function store(StoreRoles $request)
    {
        $role = Role::create([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        if($request->has('hak_akses')){
            foreach ($request->hak_akses as $value) {
                $permissions = Permission::find($value);
                $role->givePermissionTo($permissions);
            }
        }

    	return redirect('/roles/index')->with('flash_message','Data berhasil disimpan!');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::get()->pluck('name','id');

        return view('roles.edit')->withRole($role)->with('hak_akses', $permissions);;
    }

    public function update(StoreRoles $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
            'guard_name' => $request->guard_name
        ]);

        if($request->has('hak_akses')){
           $role->permissions()->sync($request->hak_akses);
        }

        return redirect('/roles/index')->with('flash_message','Role '.$request->name.' berhasil diubah');
    }

    public function delete(Request $request)
    {
        $role = Role::find($request->data);

        return response()->json($role->delete());
    }
}
