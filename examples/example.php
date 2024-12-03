<?php

require_once __DIR__ . '/../src/MergeImagesToPdf.php';

use MergeImages\MergeImagesToPdf;

try {
    $images = [
        __DIR__ . '/image1.jpg',
        __DIR__ . '/image2.jpg',
    ];

    $outputPath = __DIR__ . '/merged_output.pdf';

    $merger = new MergeImagesToPdf();
    $merger->merge($images, $outputPath);

    echo "PDF successfully created at: {$outputPath}";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
