<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    //// app/Http/Controllers/PDFController.php


public function generatePDF()
{
    $data = You::all(); // Replace YourModel with your actual Eloquent model

    $pdf = PDF::loadView('pdf.view', compact('data'));

    return $pdf->download('data.pdf');
}

}
