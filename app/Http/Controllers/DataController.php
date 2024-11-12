<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\InternshipsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Internship;

class DataController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the Data page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $internships = Internship::all();
        return view('data', compact('internships'));
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        Internship::truncate(); // Menghapus semua data sebelum impor baru

        Excel::import(new InternshipsImport, $request->file('file'));

        return redirect()->route('data')->with('success', 'Data berhasil di unggah.');
    }

    public function deleteAll()
    {
        Internship::truncate(); // Menghapus semua data di tabel internships
        return redirect()->route('data')->with('success', 'Semua Data Berhasil di Hapus.');
    }
}
