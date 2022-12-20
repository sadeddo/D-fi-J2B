<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\Facture;
use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        $facture = Facture::findOrFail($id);
        $pdf = PDF::loadView('showfacture');
    
        return $pdf->download('facture.pdf');
    }
}
