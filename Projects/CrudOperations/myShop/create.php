<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop | Create</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $errorMessage = "";
    $successMessage = "";

    if (isset($_POST['submitBtn'])) {
        include("./config.php");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        
        do {
            
                    // Check if all required fields are filled
            if (empty($name) || empty($email) || empty($phone) || empty($address)) {
                $errorMessage = "All fields are required.";
                break;
            }

            // Handle file upload
            if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
                $profile_picture = $_FILES['profile_picture']['name'];
                $profile_pictureTmp = $_FILES['profile_picture']['tmp_name'];
                $targetDirectory = "uploads/";
                $targetFile = $targetDirectory . basename($profile_picture);
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                // Check if the uploaded file is an image:-
                $check = getimagesize($profile_pictureTmp);
                if ($check === false) {
                    $errorMessage = "File is not an image.";
                    break;
                }

                // Check file size (max: 2MB)
                if ($_FILES["profile_picture"]["size"] > 2000000) {
                    $errorMessage = "Sorry, your file is too large.";
                    break;
                }

                // Allow only specific file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $errorMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    break;
                }

                // Move the uploaded file to the target directory
                if (!move_uploaded_file($profile_pictureTmp, $targetFile)) {
                    $errorMessage = "Sorry, there was an error uploading your file.";
                    break;
                }
            } else {
                $targetFile = ""; // In case no file is uploaded
            }

            // Insert new client into the database
            $sql = "INSERT INTO clients(name, email, phone, address, profile_picture) VALUES ('$name', '$email', '$phone', '$address', '$targetFile')";
            $result = $connection->query($sql);

            if (!$result) {
                $errorMessage = "Error: " . $connection->error;
                break;
            }

            $successMessage = "Client added successfully!";
            // Clear input fields after success
            $name = $email = $phone = $address = "";

            // Redirect to the 'read.php' page
            header("Location: ./read.php");
            exit;
        } while (false);
    }
    ?>

    <div class="container my-5">
        <h2>Create New Client</h2>
        <?php
        // Show error message if exists
        if (!empty($errorMessage)) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo htmlspecialchars($name); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo htmlspecialchars($address); ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">File</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="profile_picture">
                </div>
            </div>
            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-success" name="submitBtn">Submit</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="./read.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>