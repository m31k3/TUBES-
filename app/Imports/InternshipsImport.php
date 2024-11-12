<?php

namespace App\Imports;

use App\Models\Internship;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class InternshipsImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Internship([
            'name' => $row['nama'],
            'email' => $row['email_address'],
            'university' => $row['asal_universitas_atau_sekolah'],
            'letter' => $row['scan_surat_pengajuan_dari_kampus'],
            'student_card' => $row['scan_kartu_pelajar_atau_ktm'],
            'identity_card' => $row['scan_ktp_atau_kk'],
            'statement_letter' => $row['scan_surat_pernyataan'],
        ]);
    }
}
