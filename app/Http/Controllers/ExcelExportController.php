<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\product;
use App\Exports\ProductExport;
use App\Imports\ProductImport;

class ExcelExportController extends Controller
{
    public function lista()
    {
        $data['getRecord'] = product::getRecord();
        $data['header_title'] = "Produto";
        return view('welcome', $data);
    }
    public function novo()
    {
        $data['getRecord'] = product::getRecord();
        $data['header_title'] = "novo";
        return view('novo', $data);
    }

    public function insert(Request $request)
    {
        // dd($request->all());
        $save = new product;
        $save->description = $request->descricao;
        $save->unit_price = $request->preco;
        $save->item_code = $request->item_code;


        $save->save();
        return redirect('/')->with("Bem Adicionado com sucesso");
    }

    public function export()
    {
        $fileName = 'produtos.xlsx';

    return Excel::download(new ProductExport(), $fileName);
    }


public function showImportForm()
{
    return view('import.form');
}

public function import(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx',
    ]);

    try {
        Excel::import(new ProductImport, $request->file('file')->store('temp'), null, \Maatwebsite\Excel\Excel::XLSX);
    } catch (\Exception $e) {
        // Registre mensagens de erro para depuração.
       dd($e->getMessage());
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}
}
