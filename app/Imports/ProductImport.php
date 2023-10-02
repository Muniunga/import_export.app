<?php

namespace App\Imports;
use App\Models\product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    public function model(array $row)
    {
        return new product([
            'name' => $row[0], // Mapeie as colunas do Excel para os campos do modelo
            'description' => $row[1],
            'unit_price' => $row[2],
            // Adicione aqui os outros campos do modelo e do arquivo Excel
        ]);
    }
}

