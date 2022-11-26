<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collections;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;


class CollectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = Collections::all();
        return view('koleksi.daftarKoleksi', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('koleksi.tambahKoleksi');
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
            'namaKoleksi' => ['required'],
            'jenisKoleksi' => ['required'],
            'jumlahKoleksi' => ['required'],
            // 'createdAt' => ['required'],
        ]);

        $collections = Collections::create([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
            // 'createdAt' => $request->createdAt,
        ]);

        $collection = Collections::all();
        Alert::success('Success', 'Data Berhasil Ditambahkan');
        return view('koleksi.daftarKoleksi', compact('collection'));
    }
    // public function getAllCollection() {
    //     $collection = DB :: table('collections') 
    //     -> select( 
    //         'id as id',
    //         'namaKoleksi as namaKoleksi',
    //         'jenisKoleksi as jenisKoleksi',
    //         'jumlahAwal as jumlahAwal',
    //         'jumlahSisa as jumlahSisa',
    //         'jumlahKeluar as jumlahKeluar',
    //     )
    //     ->orderBy('namaKoleksi', 'asc')
    //     ->get();
    //     return ::of($collection)
    //     ->addColumn('action', function ($collection) {
    //         return '<a href="koleksiView" class="btn btn-xs btn-primary edit" id="'.$collection->id.'"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
    //     })
    //     ->make(true);

    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collection = Collections::findorFail($id);
        return view('koleksi.infoKoleksi', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collection = Collections::findorFail($id);
        return view('koleksi.koleksiEdit', compact('collection'));
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
        // $request->validate([
        //     'namaKoleksi' => ['required'],
        //     'jenisKoleksi' => ['required'],
        //     'jumlahKoleksi' => ['required'],
        // ]);
        $collection = Collections::where('id', $id)->update([
            'namaKoleksi' => $request->namaKoleksi,
            'jenisKoleksi' => $request->jenisKoleksi,
            'jumlahKoleksi' => $request->jumlahKoleksi,
        ]);
        Alert::success('Success', 'Data Berhasil Diupdate');
        return redirect()->route('koleksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::question('Delete this Data?', 'Are you sure?');

        $get = Collections::findorFail($id);
        $get->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');


        return redirect()->route('koleksi');
    }
}
