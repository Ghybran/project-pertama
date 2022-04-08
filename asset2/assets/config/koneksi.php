 <?php    
$host="localhost";
$username="root";
$password="";
$database="akademik";
 
    if (mysqli_connect_errno()){
         echo "Koneksi database gagal : " . mysqli_connect_error();
    }
    $pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?> 
