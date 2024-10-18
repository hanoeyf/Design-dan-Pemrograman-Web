<?php
if(isset($_POST["submit"])){ 
    $targetdir = "uploads.php"; //Direktori tujuan untuk menyimpan file
    $targetfile = $targetdir. basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxsize = 3*1024*1024;

    if(in_array($fileType, $allowedExtensions)&& $_FILES["myfile"]["size"]<=$maxsize)
    {
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah <br>";
        }
        else{ 
            echo "Gagal mengunggah file.";
        }
    }
    else{
        echo "File tidak diizinkan atau ukuran file terlalu besar.";     
    }
}
?>