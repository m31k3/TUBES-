<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placement;
use App\Exports\PlacementsExport;
use Maatwebsite\Excel\Facades\Excel;

class PlacementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $placements = Placement::all();
        return view('placement', compact('placements'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'intern_name' => 'required|string|max:255',
            'responsible_name' => 'required|string|max:255',
            'mentor_name' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'status' => 'required|string'
        ]);

        Placement::create($request->all());

        return redirect()->route('placement')->with('success', 'Penempatan berhasil di buat.');
    }

    public function edit(Placement $placement)
    {
        return view('placement_edit', compact('placement'));
    }

    public function update(Request $request, Placement $placement)
    {
        $request->validate([
            'intern_name' => 'required|string|max:255',
            'responsible_name' => 'required|string|max:255',
            'mentor_name' => 'required|string|max:255',
            'division' => 'required|string|max:255',
            'status' => 'required|string'
        ]);

        $placement->update($request->all());

        return redirect()->route('placement')->with('success', 'Penempatan berhasil di update.');
    }

    public function destroy(Placement $placement)
    {
        $placement->delete();

        return redirect()->route('placement')->with('success', 'Penempatan berhasil di hapus.');
    }

    public function export()
    {
        return Excel::download(new PlacementsExport, 'placements.xlsx');
    }
}
