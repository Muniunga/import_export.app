<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\product;
use App\Exports\ProductExport;

class ExcelExportController extends Controller
{
    public function lista()
    {
        $data['getRecord'] = product::getRecord();
        $data['header_title'] = "Produto";
        return view('welcome', $data);
    }

    public function export()
    {
        $fileName = 'produtos.xlsx';

    return Excel::download(new ProductExport(), $fileName);
    }
}
