<?php

namespace App\Exports;

use App\Models\Placement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PlacementsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Placement::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Pemagang',
            'Nama Penanggung Jawab',
            'Nama Pembimbing',
            'Divisi',
            'Status',
            'Created At',
            'Updated At',
        ];
    }
}
