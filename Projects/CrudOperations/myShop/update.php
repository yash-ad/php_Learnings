<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop | Update</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    // Initialize variables
    $id = "";
    $name = "";
    $email = "";
    $phone = "";
    $address = "";
    $errorMessage = "";
    $profile_picture = "";

    include("./config.php");

    // Retrieve the client data using GET method
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Retrieve data of the selected client
        $sql = "SELECT * FROM clients WHERE id = $id";
        $result = $connection->query($sql);

        // Populate the form fields with fetched data
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $address = $row['address'];
            $profile_picture = $row['profile_picture'];
        } 
        else {
            // If no record found, redirect to 'read.php'
            header("Location: ./read.php");
            exit;
        }
    } else {
        header("Location: ./read.php");
        exit;
    }

    // Update the client data when the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $errorMessage = "";

        // Check if all fields are filled
        if (empty($name) || empty($email) || empty($phone) || empty($address)) {
            $errorMessage = "All fields are required.";
        } 
        else {
            // Handle file upload if a new profile picture is selected
            if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] == 0) {
                $profile_picture_name = $_FILES['profile_picture']['name'];
                $profile_picture_tmp = $_FILES['profile_picture']['tmp_name'];
                $targetDirectory = "uploads/";
                $targetFile = $targetDirectory . basename($profile_picture_name);
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

                // Check if the uploaded file is an image
                $check = getimagesize($profile_picture_tmp);
                if ($check === false) {
                    $errorMessage = "File is not an image.";
                }

                // Check file size (max: 2MB)
                if ($_FILES["profile_picture"]["size"] > 2000000) {
                    $errorMessage = "Sorry, your file is too large.";
                }

                // Allow only specific file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                    $errorMessage = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                }

                // Move the uploaded file to the target directory
                if (empty($errorMessage) && !move_uploaded_file($profile_picture_tmp, $targetFile)) {
                    $errorMessage = "Sorry, there was an error uploading your file.";
                } 
                else {
                    $profile_picture = $targetFile; // Update the profile picture path
                }
            }

            // If no errors, and error message is empty then update the client info update the client's information in the database
            if (empty($errorMessage)) {
                $sql = "UPDATE clients SET name='$name', email='$email', phone='$phone', address='$address', profile_picture='$profile_picture' WHERE id=$id";

                if ($connection->query($sql) === TRUE) {
                    header("Location: ./read.php");
                    exit();
                } else {
                    $errorMessage = "Error updating client: " . $connection->error;
                }
            }
        }
    }
    ?>

    <div class="container my-5">
        <h2>Edit Client</h2>
        <?php
        // Show error message if not empty
        if (empty($errorMessage)=== false) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>
        <form method="post" enctype="multipart/form-data">
            <!-- Hidden field to store the ID -->
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>">

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
                <label class="col-sm-3 col-form-label">File</label> <!-- New file input -->
                <div class="col-sm-6">
                    <input type="file" class="form-control" name="profile_picture">
                    <?php if (empty($profile_picture) === false) { ?>
                        <p>Current File: <img src="<?php echo $profile_picture; ?>" alt="Profile Picture" width="100"></p>
                    <?php } ?>
                </div>
            </div>

            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
                <div class="col-sm-3 d-grid">
                    <a class="btn btn-outline-primary" href="./read.php" role="button">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>