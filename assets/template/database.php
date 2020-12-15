<?php 

$conn = mysqli_connect("localhost","root","","kosyuk");

function query($query){
    global $conn;
    $result = mysqli_query($conn,$query);
    $row = [];
    while ($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// tambah data
function registrasi($data){
    global $conn;
    $nama_lengkap   = htmlspecialchars($data["nama_lengkap"]);
    $username       = strtolower(stripcslashes($data["username"]));
    $password       = mysqli_real_escape_string($conn, $data["password"]);
    $password2      = mysqli_real_escape_string($conn, $data["password2"]);
    $email          = htmlspecialchars($data["email"]);
    $no_hp          = htmlspecialchars($data["no_hp"]);
    $alamat         = htmlspecialchars($data["alamat"]);
    $norekening     = htmlspecialchars($data["norekening"]);

    
    // cek username yang sama
    $cek = mysqli_query($conn, "SELECT username FROM pemilik_kos WHERE username = '$username' " );

    if (mysqli_fetch_assoc($cek) ) {
        echo "<script>
            alert('Username Sudah ada');
        </script>";

        return false;
    }

    // konfirmasi password
    if ( $password !== $password2) {
        echo "<script>
            alert('Password Tidak Sama');
            </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
   
    mysqli_query($conn, "INSERT INTO pemilik_kos VALUES
                ('',
                '$nama_lengkap',
                '$username',
                '$password',
                '$email',
                '$no_hp',
                '$alamat',
                '$norekening')");

     return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    $del = "DELETE FROM pemilik_kos WHERE id_pemilik_kos=$id";
    mysqli_query($conn,$del);

    return mysqli_affected_rows($conn);
}


 ?>
