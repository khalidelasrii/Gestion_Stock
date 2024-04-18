<?php
    session_start(); 
    include("../securite/bd.php");

    if (!isset($_SESSION['id_user']) || (isset($_SESSION['id_user']) && $_SESSION['id_user'] == "" ) ) 
    {
        header("location: ../login.php?erreur_session");
    }else 
    {
        if(isset($_GET['id'])) {
            $id=$_GET['id'];

            $sql= "SELECT * FROM produit WHERE id= '$id'";

            $rslt=mysqli_query($link, $sql);
            $rslt_data= mysqli_fetch_array($rslt);

            $lib=$rslt_data["libelle"];
            $prix=$rslt_data["prix"];
            $qte=$rslt_data["qte"];
        }

        if(isset($_POST["modifier"]) && isset($_GET["id"])) {
            $lib=$_POST["lib"];
            $prix=$_POST["prix"];
            $qte=$_POST["qte"];
            $id=$_GET["id"];
            $req_ajouter= "UPDATE produit SET libelle= '$lib', qte= '$qte' , prix= '$prix' WHERE id='$id'";
            $rsl= mysqli_query($link, $req_ajouter);
        }
    }
?>

<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="../dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Modifier produit</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="../dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">

        <div class="flex mt-[4.7rem] md:mt-0">



            <!-- BEGIN: Side Menu -->
            
            <?php include("../menu.php"); ?>

            <!-- END: Side Menu -->


            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->

                    <?php include("../header.php"); ?>

                <!-- END: Top Bar -->
                
                <div class="grid grid-cols-12 gap-6 mt-5">

                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <button class="btn btn-primary shadow-md mr-2"><a href="./">Return to Product list</a></button>
                    </div>
                    
                    <div class="intro-y col-span-12 lg:col-span-9">
                        
                        <!-- BEGIN: Horizontal Form -->
                        <div class="intro-y box mt-5">
                            <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Modifier Produit
                                </h2>
                                
                            </div>
                            <div id="horizontal-form" class="p-5">
                                <form method="post">
                                    <div class="preview">
                                        <div class="form-inline">
                                            <label for="horizontal-form-1" class="form-label sm:w-20">LIBELLE</label>
                                            <input id="horizontal-form-1" type="text" name="lib" value='<?php echo $lib;?>' class="form-control">
                                        </div>
                                        <div class="form-inline mt-5">
                                            <label for="horizontal-form-2" class="form-label sm:w-20">QUANTITE</label>
                                            <input id="horizontal-form-2" type="number" name="qte" value='<?php echo $qte;?>' class="form-control" min=1 step=1>
                                        </div>
                                        <div class="form-inline mt-5">
                                            <label for="horizontal-form-2" class="form-label sm:w-20">PRIX</label>
                                            <input id="horizontal-form-2" type="number" name="prix" value='<?php echo $prix;?>' step=.01 class="form-control">
                                        </div>
                                        <div class="sm:ml-20 sm:pl-5 mt-5">
                                        <a href="./">                                        <button class="btn btn-primary" name="modifier">Modifier</button>
</a>

                                    </div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                        <!-- END: Horizontal Form -->
                        
                        
                    </div>
                </div>
            </div>
            <!-- END: Content -->
        </div>

        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="../dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>



