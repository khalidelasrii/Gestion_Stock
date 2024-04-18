<?php
    session_start(); 
    include("../securite/bd.php");

    if (!isset($_SESSION['id_user']) || (isset($_SESSION['id_user']) && $_SESSION['id_user'] == "" ) ) 
    {
        header("location: ../login.php?erreur_session");
    }else 
    {
        $req_selection= 'SELECT * FROM produit';
        $resultat_selection= mysqli_query($link, $req_selection);
        
        if(isset($_GET["Deleted"])) {
            $id_produit=$_GET["Deleted"];

            $req_supprimer= "DELETE FROM produit WHERE id='$id_produit'";
            mysqli_query($link, $req_supprimer);
            header("location: liste_produits.php");       
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
        <title>Product List - Midone - Tailwind HTML Admin Template</title>
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

                <h2 class="intro-y text-lg font-medium mt-10">
                    Product List
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                        <button class="btn btn-primary shadow-md mr-2"><a href="./ajouter_produit.php">Add New Product</a></button>
                        <div class="dropdown">
                            <button class="dropdown-toggle btn px-2 box" aria-expanded="false" data-tw-toggle="dropdown">
                                <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4" data-lucide="plus"></i> </span>
                            </button>
                            <div class="dropdown-menu w-40">
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="printer" class="w-4 h-4 mr-2"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to Excel </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item"> <i data-lucide="file-text" class="w-4 h-4 mr-2"></i> Export to PDF </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden md:block mx-auto text-slate-500">Showing 1 to 10 of 150 entries</div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i> 
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">ID PRODUIT</th>
                                    <th class="whitespace-nowrap">LIBELLE</th>
                                    <th class="text-center whitespace-nowrap">QUANTITE</th>
                                    <th class="text-center whitespace-nowrap">PRIX</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($data_selection= mysqli_fetch_array($resultat_selection)) {  ;?>

                                <tr class="intro-x">
                                    <td class="w-40"><?php echo $id= $data_selection["id"];?></td>
                                    <td class=""><?php echo $data_selection["libelle"];?></td>
                                    <td class="text-center"><?php echo $data_selection["qte"];?></td>
                                    <td class="text-center"><?php echo $data_selection["prix"];?></td>
                                    <td class="table-report__action w-56">
                                        <?php echo "
                                            <div class='flex justify-center items-center'>
                                                <a class='flex items-center mr-3' href='./modifier_produit.php?id=$id'> <i data-lucide='check-square' class='w-4 h-4 mr-1'></i> Edit </a>
                                                <a class='flex items-center text-danger' href='javascript:;' data-tw-toggle='modal' data-tw-target='#delete-confirmation-modal'> <i data-lucide='trash-2' class='w-4 h-4 mr-1'></i> Delete </a>
                                            </div>"
                                        ;?>
                                        
                                    </td>
                                </tr>
                                <?php };?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-left"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-left"></i> </a>
                                </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item active"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">...</a> </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevron-right"></i> </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#"> <i class="w-4 h-4" data-lucide="chevrons-right"></i> </a>
                                </li>
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0">
                            <option>10</option>
                            <option>25</option>
                            <option>35</option>
                            <option>50</option>
                        </select>
                    </div>
                    <!-- END: Pagination -->
                </div>
                <!-- BEGIN: Delete Confirmation Modal -->
                <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body p-0">
                                <div class="p-5 text-center">
                                    <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i> 
                                    <div class="text-3xl mt-5">Are you sure?</div>
                                    <div class="text-slate-500 mt-2">
                                        Do you really want to delete these records? 
                                        <br>
                                        This process cannot be undone.
                                    </div>
                                </div>                           
                                <div class="px-5 pb-8 text-center">
                                    <form method="get">
                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                        <?php echo "
                                        <a href='liste_produits.php?Deleted=$id'>
                                            <button type='button' class='btn btn-danger w-24' name='supp_produit'>Delete</button>
                                        </a>"
                                        ;?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Delete Confirmation Modal -->
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