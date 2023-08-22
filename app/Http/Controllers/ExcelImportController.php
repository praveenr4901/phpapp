<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

class ExcelImportController extends Controller
{
    public function showForm()
    {
        return view('import.form');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls,xml,csv'
        ]);

        $file = $request->file('file');

        try {
            Excel::import(new DataImport, $file);

            return redirect()->route('import.excel')->with('success', 'Data imported successfully!');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            return back()->withErrors($failures);
        } catch (\Exception $e) {
            $errorMessage = $e->getMessage();
            return back()->withErrors(['error' => "An error occurred while importing the data: $errorMessage "]);
        }
    }
}
