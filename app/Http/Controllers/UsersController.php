<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\User;
use App\Http\Requests\UsersRequest;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
  public function index(UsersDataTable $dataTable)
  {
      return $dataTable->render('users.lists');
  }

  public function edit(User $user)
  {
    $role = Role::get()->pluck('name','id');

  	return view('users.edit')->withUser($user)->withRole($role);
  }

  public function update(UsersRequest $request, User $user)
  {
  	$user->update([
		    'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'api_token' => str_random(100)
  	]);

    if($request->has('roles')){
        $user->roles()->sync($request->roles);
    }

  	return redirect('/users')->with('flash_message','User '.$request->name.' berhasil diubah');
  }

  public function delete(Request $request)
  {
    $user = User::find($request->data);

    return response()->json($user->delete());
  }
}
