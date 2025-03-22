<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToModel,  WithCustomCsvSettings
{

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ',',
        ];
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'external_id'     => $row[0],
            'name'            => $row[1],
            'email'           => $row[2],
            'password'        => Hash::make($row[3]),
            'address'         => $row[4] ?? null,
            'primary_number'  => $row[5] ?? null, 
            'secondary_number'=> $row[6] ?? null,
            'image_path'      => $row[7] ?? null, 
            'language'        => $row[8] ?? null,
        ]);
    }
}
