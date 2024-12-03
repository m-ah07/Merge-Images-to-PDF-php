<?php

namespace MergeImages;

use FPDF;

class MergeImagesToPdf
{
    public function merge(array $images, $outputPath)
    {
        $pdf = new FPDF();

        foreach ($images as $image) {
            if (!file_exists($image)) {
                throw new \Exception("File not found: {$image}");
            }

            list($width, $height) = getimagesize($image);
            $pdf->AddPage();
            $pdf->Image($image, 10, 10, $pdf->GetPageWidth() - 20, ($pdf->GetPageWidth() - 20) * $height / $width);
        }

        $pdf->Output('F', $outputPath);
    }
}
