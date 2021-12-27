<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('permission:Hak Pengguna Show', ['only' => 'index']);
        $this->middleware('permission:Buat Hak Pengguna Show', ['only' => ['create','store' ]]);
        $this->middleware('permission:Ubah Hak Pengguna Show', ['only' => ['edit','update' ]]);
        $this->middleware('permission:Hapus Hak Pengguna Show', ['only' => 'destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index',[
            'users' => User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create',[
            'roles' => Role::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "name" => "required|string|max:30",
            "role" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required|min:3|confirmed",
        ],
        []);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            $user->assignRole($request->role);
            Alert::success('Data Pengguna', 'Berhasil Ditambahkan');
            return redirect()->route('users.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Alert::error('Data Pengguna', 'Gagal Ditambahkan');
            $request['role'] = Role::select('id', 'name')->find($request->role);
            return redirect()->back()->withInput($request->all());
        }finally{
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',[
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validateData = $request->validate([
            "role" => "required",
        ],
        []);

        DB::beginTransaction();
        try {
            $user->syncRoles($request->role);
            Alert::success('Data Pengguna', 'Berhasil Diubah');
            return redirect()->route('users.index');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Alert::error('Data Pengguna', 'Gagal Diubah');
            $request['role'] = Role::select('id', 'name')->find($request->role);
            return redirect()->back()->withInput($request->all());
        }finally{
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        DB::beginTransaction();
        try {
            $user->removeRole($user->roles->first());
            $user->delete();
            Alert::success('Data Pengguna', 'Berhasil Dihapus');
        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            Alert::error('Data Pengguna', 'Gagal Dihapus');
        }finally{
            DB::commit();
            return redirect()->back();
        }
    }
}
