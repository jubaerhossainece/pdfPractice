<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use PDF;


class PdfController extends Controller
{
    public function pdfPage(){
        return view('pdfpage');
    }

    function pdfDownload() {
        $data = array('car', 'fridge');
        $pdf = PDF::loadView('pdfpage',
            $data,
            [],
            [
                'format' => 'A4-P',
                'orientation' => 'P',
            ]);
        $name = 'pdfpage';

        return $pdf->stream($name . '.pdf');
    }

}
