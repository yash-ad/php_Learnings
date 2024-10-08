<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop | Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- A container for table -->
    <div class="container my-5">
        <h1 class="text-center">CRUD Operation</h1>
        <br>
        <h2>List of Clients</h2>
        <a class="btn btn-primary" href="./create.php" role="button">Add New Client</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>File</th>
                    <th>Created at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("./config.php");

                // Prepare the SQL query 
                $sql = $connection->prepare("SELECT * FROM `clients`");

                // Execute the prepared statement
                $sql->execute();

                // Fetch the result
                $result = $sql->get_result();
                $clients = $result->fetch_all(MYSQLI_ASSOC); // Fetch as associative array

                // Loop over the clients and display them
                foreach ($clients as $client) {
                    echo "
    <tr>
        <td>{$client['id']}</td>
        <td>{$client['name']}</td>
        <td>{$client['email']}</td>
        <td>{$client['phone']}</td> 
        <td>{$client['address']}</td>
        <td><img src='{$client['profile_picture']}' width='100'></td> <!-- Display the image -->
        <td>{$client['created_at']}</td>
          <td>
            <a class='btn btn-primary btn-sm'  href='./update.php?id={$client['id']}'>Edit</a>
            <br><br/>
            <a class='btn btn-danger btn-sm' href='./delete.php?id={$client['id']}'>Delete</a>
        </td>
    </tr>
    ";
                }
                ?>


            </tbody>
        </table>
    </div>
</body>

</html>