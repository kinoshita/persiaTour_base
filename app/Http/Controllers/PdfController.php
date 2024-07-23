<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Mccarlosen\LaravelMpdf\Facades\LaravelMpdf as PDF;
//use Mccarlosen\LaravelMpdf\LaravelMpdf as Pdf;


class PdfController extends Controller
{
    //
    public function index()
    {
        // PDFの生成
        $data = [
            'test' => 'ddd',
            'name' => 'テスト'

        ];

        $pdf = PDF::loadView('pdf.receipt', $data);

// PDFの保存
        $receiptFile = 'test.pdf';
        //$pdf->save(Storage::disk('private')->path('receipts/'.$receiptFile));
        $pdf->save($receiptFile);
    }
}
