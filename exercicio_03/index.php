<?php
require __DIR__ . '/vendor/autoload.php';


use Mpdf\Mpdf;

try {
    $mpdf = new Mpdf();
    
    $html = '<h1>Hello World - Texto gerado através do Mpdf\mpdf</h1>';
    
    $mpdf->WriteHTML($html);
    
    $mpdf->Output('arquivo.pdf', 'I');
} catch (Exception $e) {
    echo "Erro ao gerar o PDF: " . $e->getMessage();
}
