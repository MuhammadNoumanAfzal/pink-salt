<?php
$sourcePath = 'C:/Users/Nouman/.gemini/antigravity-ide/brain/e655ee5c-5603-49dc-b4e9-24d7403f6db9/.user_uploaded/media_1791547214173.png';
$im = imagecreatefrompng($sourcePath);
$width = imagesx($im);
$height = imagesy($im);

// Let's create the output directory
$outDir = 'c:/xampp/htdocs/pink-salt/public/images/packaging';
if (!is_dir($outDir)) {
    mkdir($outDir, 0777, true);
}

// Also save the master overview image
imagejpeg($im, "$outDir/packaging-overview-all.jpg", 95);

echo "Width: $width, Height: $height\n";
