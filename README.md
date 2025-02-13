# Merge Images to PDF (php)

A simple PHP project for merging multiple images into a single PDF file. This project uses the FPDF library to handle PDF generation.

## ✨ Features
- Supports multiple image formats (JPEG, PNG, etc.).
- Dynamically adjusts images to fit within the PDF page.

## ⚙️ Requirements
- PHP 7.4 or higher.
- [FPDF library](http://www.fpdf.org/).

## 📖 Installation

Clone the repository and install the required dependencies:

```bash
git clone https://github.com/m-ah07/Merge-Images-to-PDF-php.git
cd merge-images-to-pdf
composer install
```

## 🚀 Usage

Here's an example of how to use the project:

```bash
require_once __DIR__ . '/src/MergeImagesToPdf.php';

use MergeImages\MergeImagesToPdf;

$images = [
    'path/to/image1.jpg',
    'path/to/image2.jpg',
];

$outputPath = 'output/merged.pdf';

$merger = new MergeImagesToPdf();
$merger->merge($images, $outputPath);

echo "PDF successfully created at: {$outputPath}";
```

## 📂 Folder Structure
```plaintext
merge-images-to-pdf/ 
├── examples/
│   └── example.php
├── src/
│   └── MergeImagesToPdf.php
├── LICENSE
├── .gitignore
└── README.md
```

## 🤝 Contributing

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

## 🌟 Show Your Support

If you found this project helpful, please consider giving it a ⭐ on GitHub. Your support means the world to us!
