<?php
if (isset($_FILES['files'])) {
    $countfiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $countfiles; $i++) {
        $errors = array();
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        @$file_ext = strtolower("" . end(explode('.', $_FILES['files']['name'][$i])) . "");
        $extensions = array("jpg", "jpeg", "png", "gif");

        // validasi ekstensi
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan hanya JPG, JPEG, PNG, atau GIF.";
        }

        // validasi ukuran, contoh max 2MB
        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
        }

        if (empty($errors) == true) {
            // simpan ke folder uploads/
            move_uploaded_file($file_tmp, "uploads/" . $file_name);
            echo "File " . $file_name . " berhasil diunggah.<br>";
            echo "<img src='uploads/$file_name' width='200'><br><br>";
        } else {
            echo "File " . $file_name . " gagal diunggah: " . implode(" ", $errors) . "<br>";
        }
    }
}
?>
