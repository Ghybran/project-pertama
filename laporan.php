<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        
               
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation
                                </a>
                                
                            </div>
                        </div>
                        <a class="nav-link" href="index.php">
                                </i></div>
                                <b>KEMBALI</b>
                            </a>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DATATABLE BARANG
                            </div>
                          
                            <div class="card-body">
                                <div class="table-responsive">
                                     
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="20">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>nama</th>
                                                <th>jumlah</th>
                                                <th>lokasi</th>
                                                
                                            </tr>
                                            <?php

                                                include "config/koneksi.php";

                                                $sql = $pdo->prepare("SELECT * FROM barang");
                                                $sql->execute();
                                                while($data = $sql->fetch()){
                                                echo "<tr>";
                                                echo "<td>".$data['id']."</td>";
                                                echo "<td>".$data['nama']."</td>";
                                                echo "<td>".$data['jumlah']."</td>";
                                                echo "<td>".$data['lokasi']."</td>";
                                                

                                                }
                                            ?>
                                        </thead>
                                        
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                DATATABLE USERS
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>user</th>
                                                <th>role</th>
                                                
                                            </tr>
                                            <?php

                                                include "config/koneksi.php";

                                                $sql = $pdo->prepare("SELECT * FROM user");
                                                $sql->execute();
                                                while($data = $sql->fetch()){
                                                echo "<tr>";
                                                echo "<td>".$data['id']."</td>";
                                                echo "<td>".$data['user']."</td>";
                                                echo "<td>".$data['role']."</td>";
                                                

                                                }
                                            ?>
                                        </thead>
                                        
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
