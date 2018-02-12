<?php
//require_once("./vendor/dompdf/dompdf/src/Autoloader.php");
use Dompdf\Dompdf;
use Mpdf\Mpdf;
class PdfGenerator
{
  public function generateDompdf($html,$filename)
  {
    $dompdf = new DOMPDF();
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
  public function generateMpdf($html){
    $mpdf = new \Mpdf\Mpdf(['tempDir' => __DIR__ . '/temp']);
    $mpdf->WriteHTML($html);
    $mpdf->Output();
  }
}
