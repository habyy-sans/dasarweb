<?php
if(isset($_POST['submit'])){
    $countfiles = count($_FILES['files']['name']);
    $upload_dir = 'uploads/';

    for($i = 0; $i < $countfiles; $i++){
        $filename = basename($_FILES['files']['name'][$i]);
        $target_file = $upload_dir . $filename;
        $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // cek apakah tipe file adalah gambar
        if(in_array($fileType, ['jpg','jpeg','png','gif'])){
            if(move_uploaded_file($_FILES['files']['tmp_name'][$i], $target_file)){
                echo "Uploaded: " . $filename . "<br>";
                // tampilkan thumbnail
                echo "<img src='$target_file' width='200'><br><br>";
            } else {
                echo "Failed: " . $filename . "<br>";
            }
        } else {
            echo "File type not allowed: " . $filename . "<br>";
        }
    }
}
?>
