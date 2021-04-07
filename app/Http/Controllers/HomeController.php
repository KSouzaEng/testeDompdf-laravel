<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Dompdf\Options;
use Dompdf\Dompdf;
class HomeController extends Controller
{
    public function generatePDF()
    {
        $data = ['title' => 'Frequencia do mes de Fevereiro','nome' => 'Karem Cristini de Souza dos Santos'];
        $pdf = PDF::loadView('myPDF', $data);
        $pdf->setPaper('A4', 'portrait');
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);
        return $pdf->download('itsolutionstuff.pdf');
    }
}
