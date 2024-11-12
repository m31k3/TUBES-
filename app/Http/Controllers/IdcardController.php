<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdCard;
use App\Exports\IdCardsExport;
use Maatwebsite\Excel\Facades\Excel;

class IdcardController extends Controller
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
     * Show the ID Card page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $idcards = IdCard::all();
        return view('idcard', compact('idcards'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'return_date' => 'nullable|date|after_or_equal:end_date',
            'status' => 'required|string'
        ]);

        IdCard::create($request->all());

        return redirect()->route('idcard')->with('success', 'ID Card berhasil di buat.');
    }

    public function edit(IdCard $idcard)
    {
        return view('idcard_edit', compact('idcard'));
    }

    public function update(Request $request, IdCard $idcard)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'card_number' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'return_date' => 'nullable|date|after_or_equal:end_date',
            'status' => 'required|string'
        ]);

        $idcard->update($request->all());

        return redirect()->route('idcard')->with('success', 'ID Card berhasil di update.');
    }

    public function destroy(IdCard $idcard)
    {
        $idcard->delete();

        return redirect()->route('idcard')->with('success', 'ID Card berhasil di hapus.');
    }

    public function export()
    {
        return Excel::download(new IdCardsExport, 'idcards.xlsx');
    }
}
