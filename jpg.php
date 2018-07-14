<? 
Header("Content-type: image/jpeg"); 
$im = imagecreatefromjpeg("./test.jpg"); 
Imagejpeg($im,'',20); 
ImageDestroy($im); 
?>