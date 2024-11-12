<?php

namespace App\Exports;

use App\Models\IdCard;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class IdCardsExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return IdCard::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama Peminjam',
            'Tanggal Mulai PKL',
            'Tanggal Selesai PKL',
            'Tanggal Kartu PKL Dikembalikan',
            'Status Peminjaman',
            'Created At',
            'Updated At',
        ];
    }
}
