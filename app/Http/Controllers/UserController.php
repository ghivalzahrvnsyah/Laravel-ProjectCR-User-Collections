<?php

namespace App\Http\Controllers;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        return view('user.daftarPengguna', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.registrasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'fullname' => ['required'],
            'email' => ['required', 'string','unique:users'],
            'phonenumber' => ['required'],
            'address' => ['required'],
            'birthdate' => ['required'],
            'agama' => ['required'],
            'jeniskelamin' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'agama' => $request->agama,
            'jeniskelamin' => $request->jeniskelamin,
            'password' => Hash::make($request->password),
        ]);
        $users = User::all();
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return view('user.daftarPengguna', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findorfail($id);
        return view('user.infoPengguna', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findorfail($id);
        return view('user.userEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->update([
            'username' => $request->username,
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
            'agama' => $request->agama,
            'jeniskelamin' => $request->jeniskelamin,
        ]);
        Alert::success('Success', 'Data Berhasil Diubah');
        return redirect()->route('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $get = User::findorfail($id);
        $get->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');
        return redirect()->route('user');
    }
}
