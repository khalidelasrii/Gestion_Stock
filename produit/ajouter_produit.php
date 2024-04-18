<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <link href="../dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ajouter Produit">
    <meta name="author" content="LEFT4CODE">
    <title>Ajouter Produit</title>
    <link rel="stylesheet" href="../dist/css/app.css">
</head>
<body class="py-5">
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- Sidebar -->
        <?php include("../menu.php"); ?>
        <!-- Content -->
        <div class="content">
            <!-- Top Bar -->
            <?php include("../header.php"); ?>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-9">
                    <!-- Horizontal Form -->
                    <div class="intro-y box mt-5">
                        <div class="flex flex-col sm:flex-row items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                            <h2 class="font-medium text-base mr-auto">
                                Ajouter Produit
                            </h2>
                        </div>
                        <div id="horizontal-form" class="p-5">
                            <form method="get">
                                <div class="preview">
                                    <div class="form-inline mb-4">
                                        <label for="libelle" class="form-label sm:w-20">LIBELLE</label>
                                        <input id="libelle" type="text" name="lib" class="form-control">
                                    </div>
                                    <div class="form-inline mb-4">
                                        <label for="quantite" class="form-label sm:w-20">QUANTITE</label>
                                        <input id="quantite" type="number" name="qte" class="form-control" min="1" step="1">
                                    </div>
                                    <div class="form-inline mb-4">
                                        <label for="prix" class="form-label sm:w-20">PRIX</label>
                                        <input id="prix" type="number" name="prix" step=".01" class="form-control">
                                    </div>
                                    <div class="sm:ml-20 sm:pl-5">
                                        <button class="btn btn-secondary" name="ajouter">Ajouter</button>
                                        <button class="btn btn-primary"><a href="./">Retour à la liste des produits</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END: Horizontal Form -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
    <script src="../dist/js/app.js"></script>
</body>
</html>
