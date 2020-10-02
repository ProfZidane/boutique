<!DOCTYPE html>
<html lang="en" dir="">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dashboard v1 | lce boutique</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="public/dist-assets/css/themes/lite-purple.min.css" rel="stylesheet" />
    <link href="public/dist-assets/css/plugins/perfect-scrollbar.min.css" rel="stylesheet" />
</head>

<body class="text-left">
   
    <div class="container-fluid">
        <div class="row">
            <div class="container" style="width: 30%;transform:translateY(50%)">                        
                        <div class="card mb-5">
                        <?php 
                            if (isset($_GET['err'])) {
                                echo "<div class='alert alert-danger'>".$_GET['err']."</div>";
                            }
                        ?>
                        <h2 style="padding: 2rem;text-align:center">Connexion</h2>
                            <div class="card-body">
                               <form action="traitment/signIn.php" method="post">
                               <div class="d-flex flex-column">
                                    <div class="form-group">
                                        <input class="form-control" name="pseudo" type="text" placeholder="Entrer votre nom d'utilisateur" />
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" name="password" type="password" placeholder="Entrer votre mot de passe" />
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary pd-x-20">Se connecter</button>
                                </div>
                               </form>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->
    <script src="public/dist-assets/js/plugins/jquery-3.3.1.min.js"></script>
    <script src="public/dist-assets/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="public/dist-assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="public/dist-assets/js/scripts/script.min.js"></script>
    <script src="public/dist-assets/js/scripts/sidebar.large.script.min.js"></script>
    <script src="public/dist-assets/js/plugins/echarts.min.js"></script>
    <script src="public/dist-assets/js/scripts/echart.options.min.js"></script>
    <script src="public/dist-assets/js/scripts/dashboard.v1.script.min.js"></script>
    <script src="public/dist-assets/js/scripts/datatables.script.min.js"></script>
    <script src="public/dist-assets/js/plugins/datatables.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="public/dist-assets/js/scripts/chartjs.script.min.js"></script>
</body>


</html>