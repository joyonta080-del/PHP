<!DOCTYPE html>
<html>
<head>
<title>PHP File Upload</title>
</head>
<body>

<h2>Upload a Document</h2>

<form method="post" enctype="multipart/form-data">

    Select File:
<input type="file" name="document" required>
<br><br>

<input type="submit" name="upload" value="Upload File">

</form>

<?php

if (isset($_POST['upload'])) {

    if (isset($_FILES['document']) &&
        $_FILES['document']['error'] === UPLOAD_ERR_OK) {

        $fileName = $_FILES['document']['name'];
        $fileSize = $_FILES['document']['size'];
        $tmpName = $_FILES['document']['tmp_name'];

        $allowedTypes = ['pdf', 'jpg', 'jpeg', 'png'];
        $extension = strtolower(
            pathinfo($fileName, PATHINFO_EXTENSION)
        );

        if (!in_array($extension, $allowedTypes)) {

            echo "Error: Only PDF, JPG, JPEG and PNG files are allowed.";

        } elseif ($fileSize > 2 * 1024 * 1024) {

            echo "Error: File size must not exceed 2 MB.";

        } else {

            $uploadDirectory = "uploads/";

            if (!is_dir($uploadDirectory)) {
                mkdir($uploadDirectory, 0755, true);
            }

            $newFileName =
                uniqid("file_", true) . "." . $extension;

            $destination =
                $uploadDirectory . $newFileName;

            if (move_uploaded_file($tmpName, $destination)) {

                echo "File uploaded successfully.<br>";
                echo "Stored File Name: "
                     . htmlspecialchars($newFileName);

            } else {

                echo "Error while uploading the file.";
            }
        }

    } else {

        echo "Please select a valid file.";
    }
}

?>

</body>
</html>
