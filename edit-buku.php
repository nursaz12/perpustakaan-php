<?php
    include_once("./connect.php");
    $id = $_GET["id"];
    $query_get_data= mysqli_query($db,"SELECT * FROM buku WHERE id = $id");
    $buku = mysqli_fetch_assoc($query_get_data);
    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];
        $query = mysqli_query($db, "UPDATE buku SET nama = '$nama',isbn = '$isbn', unit = $unit WHERE id=$id" );    
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Form Edit Buku</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input value="<?php echo $buku['nama'] ?>" name="nama" type="text" class="form-control" id="nama"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ISBN</label>
                <input value="<?php echo $buku['isbn'] ?>" name="isbn" type="text" class="form-control" id="isbn"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Unit</label>
                <input value="<?php echo $buku['unit'] ?>" name="unit" type="number" class="form-control" id="uni"
                    aria-describedby="emailHelp">
            </div>
            <button class="btn btn-primary" type="submit" name="submit">Submit</button>
            <a class="btn btn-secondary" href="./buku.php">Kembali ke daftar buku</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>