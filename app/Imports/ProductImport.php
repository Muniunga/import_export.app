<?php

namespace App\Imports;
use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    public function model(array $row)
    {
        return new product([
            'description' => $row[1],
            'unit_price' => $row[2],
            'item_code' => $row[0],
            // Adicione aqui os outros campos do modelo e do arquivo Excel
        ]);
    }
}

