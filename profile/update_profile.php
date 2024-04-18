<?php
    session_start(); 
    include("../securite/bd.php");

    if (!isset($_SESSION['id_user']) || (isset($_SESSION['id_user']) && $_SESSION['id_user'] == "" ) ) 
    {
        header("location: ../login.php?erreur_session");
    }else 
    {
        if(isset($_POST["saveemail"])) {
            $nom=$_POST["nom"];
            $email=$_POST["email"];
            $id_user=$_SESSION["id_user"];
            $req_modifier_email="UPDATE user SET nom='$nom', email='$email' WHERE id='$id_user'";
            mysqli_query($link, $req_modifier_email);
        }

        if(isset($_POST["savepass"])) {
            $pass=$_POST["newpass"];
            $id_user=$_SESSION["id_user"];
        
            $req_modifier_pass="UPDATE user SET password='$pass' WHERE id='$id_user'";
            $test=mysqli_query($link, $req_modifier_pass);
            if ($test===FALSE) {
                echo "<script>
                document.getElementById('pass_changed').innerHTML='Error !! Password couldn\'t be changed';
                document.getElementById('pass_changed').style.color = 'red';
                </script>";
            }
            elseif ($test===TRUE) {
                echo "<script>
                document.getElementById('pass_changed').innerHTML='Password has been changed successfully';
                document.getElementById('pass_changed').style.color = 'green';
                </script>";
            };
        };
            if(isset($_SESSION["id_user"])) {
                $id_user=$_SESSION["id_user"];
                $req_rename="SELECT * FROM user WHERE id = '$id_user' ";
                $res_rename = mysqli_query($link,$req_rename);
                $data_rename = mysqli_fetch_array($res_rename);
                
        
                if (isset($data_rename['id']) && $data_rename['id'] !=  null) 
                {
                $_SESSION['id_user'] = $data_rename['id'];
                $_SESSION['email_user'] = $data_rename['email'];
                $_SESSION['nom_user'] = $data_rename['nom'];
                }
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
        <title>Update Profile</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="../dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        

        <!-- END: Mobile Menu -->

        <div class="flex mt-[4.7rem] md:mt-0">

            <!-- BEGIN: Side Menu -->

                <?php include("../menu.php"); ?>

            <!-- END: Side Menu -->

            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                
                    <?php include("../header.php"); ?>
                    <?php /*include("../mobile_menu.php");*/ ?>

                <!-- END: Top Bar -->
                
                <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Update Profile
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">
                    <!-- BEGIN: Profile Menu -->
                    <div class="col-span-12 lg:col-span-4 2xl:col-span-3 flex lg:block flex-col-reverse">
                        <div class="intro-y box mt-5">
                            <div class="relative flex items-center p-5">
                                <div class="w-12 h-12 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="../dist/images/profile-6.jpg">
                                </div>
                                <div class="ml-4 mr-auto">
                                    <div class="font-medium text-base"><?php echo $_SESSION["nom_user"]; ?></div>
                                    <div class="text-slate-500">DevOps Engineer</div>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="more-horizontal" class="w-5 h-5 text-slate-500"></i> </a>
                                    <div class="dropdown-menu w-56">
                                        <ul class="dropdown-content">
                                            <li>
                                                <h6 class="dropdown-header">
                                                    Export Options
                                                </h6>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> English </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item">
                                                    <i data-lucide="box" class="w-4 h-4 mr-2"></i> Indonesia 
                                                    <div class="text-xs text-white px-1 rounded-full bg-danger ml-auto">10</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="layout" class="w-4 h-4 mr-2"></i> English </a>
                                            </li>
                                            <li>
                                                <a href="" class="dropdown-item"> <i data-lucide="sidebar" class="w-4 h-4 mr-2"></i> Indonesia </a>
                                            </li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li>
                                                <div class="flex p-1">
                                                    <button type="button" class="btn btn-primary py-1 px-2">Settings</button>
                                                    <button type="button" class="btn btn-secondary py-1 px-2 ml-auto">View Profile</button>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center text-primary font-medium" href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Personal Information </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Account Settings </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> User Settings </a>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400">
                                <a class="flex items-center" href=""> <i data-lucide="activity" class="w-4 h-4 mr-2"></i> Email Settings </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="box" class="w-4 h-4 mr-2"></i> Saved Credit Cards </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Social Networks </a>
                                <a class="flex items-center mt-5" href=""> <i data-lucide="settings" class="w-4 h-4 mr-2"></i> Tax Information </a>
                            </div>
                            <div class="p-5 border-t border-slate-200/60 dark:border-darkmode-400 flex">
                                <button type="button" class="btn btn-primary py-1 px-2">New Group</button>
                                <button type="button" class="btn btn-outline-secondary py-1 px-2 ml-auto">New Quick Link</button>
                            </div>
                        </div>
                    </div>
                    <!-- END: Profile Menu -->
                    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Display Information
                                </h2>
                            </div>

                            <div class="p-5">
                                <div class="flex flex-col-reverse xl:flex-row flex-col">
                                    <div class="flex-1 mt-6 xl:mt-0">
                                        <form method="post">
                                        <div class="grid grid-cols-12 gap-x-5">
                                            <div class="col-span-12 2xl:col-span-6">
                                                <div>
                                                    <label for="update-profile-form-1" class="form-label">Display Name</label>
                                                    <input id="update-profile-form-1" type="text" class="form-control" name="nom" value="<?php echo $_SESSION["nom_user"]; ?>" >
                                                </div>
                                                
                                            </div>
                                            <div class="col-span-12 2xl:col-span-6">
                                                
                                                <div class="">
                                                    <label for="update-profile-form-4" class="form-label">Email</label>
                                                    <input id="update-profile-form-4" type="email" class="form-control" name="email" value="<?php echo $_SESSION["email_user"]; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-primary w-20 mt-3" name="saveemail">Save</button>
                                        </form>
                                    </div>

                                    <div class="w-52 mx-auto xl:mr-0 xl:ml-6">
                                        <div class="border-2 border-dashed shadow-sm border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                            <div class="h-40 relative image-fit cursor-pointer zoom-in mx-auto">
                                                <img class="rounded-md" alt="Midone - HTML Admin Template" src="../dist/images/profile-6.jpg">
                                                <div title="Remove this profile photo?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                            </div>
                                            <div class="mx-auto cursor-pointer relative mt-5">
                                                <button type="button" class="btn btn-primary w-full">Change Photo</button>
                                                <input type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Display Information -->

                        <!-- BEGIN: Personal Information -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Change Password
                                </h2>
                            </div>
                            <div class="p-5">
                                <form method="post">
                                <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-12 xl:col-span-6">
                                        <div>
                                            <label for="update-profile-form-6" class="form-label">Email</label>
                                            <input id="update-profile-form-6" type="email" class="form-control" name="email" value="<?php echo $_SESSION["email_user"]; ?>" disabled>
                                        </div>
                                        
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="mt-3 xl:mt-0">
                                            <label for="update-profile-form-10" class="form-label">New Password</label>
                                            <input id="update-profile-form-10" type="password" class="form-control" placeholder="Enter your new password" name="newpass" value="">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-11" class="form-label">Confirm The Password</label>
                                            <input id="update-profile-form-11" type="password" class="form-control" placeholder="Confirme your password" name="confpass" value="" onkeyup="validate_password()">
                                        </div>
                                        <div class="mt-3">
                                            <center id="wrong_pass_alert"></center>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-12 gap-x-5">
                                    
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="mt-3">
                                            <center id="pass_changed" name="successful">
                                                <!--<?php /*if($test===TRUE) {
                                                        echo "Password has been changed successfully";
                                                        }
                                                        elseif($test===FALSE) {
                                                            echo "Error !! Password couldn't be changed";
                                                        };*/
                                                ?>-->
                                                </center>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit" id='save_changes' class="btn btn-primary w-20 mr-auto" name="savepass" onclick="wrong_pass_alert()">Save</button>

                                    <script>
                                        function validate_password() {

                                            let pass = document.getElementById('update-profile-form-10').value;
                                            let confirm_pass = document.getElementById('update-profile-form-11').value;
                                            if (pass != confirm_pass) {
                                                document.getElementById('wrong_pass_alert').style.color = 'red';
                                                document.getElementById('wrong_pass_alert').innerHTML= "☒ different password !";
                                                document.getElementById('save_changes').disabled = true;
                                                document.getElementById('save_changes').style.opacity = (0.4);
                                            } else {
                                                document.getElementById('wrong_pass_alert').style.color = 'green';
                                                document.getElementById('wrong_pass_alert').innerHTML ='🗹 password confirmed';
                                                document.getElementById('save_changes').disabled = false;
                                                document.getElementById('save_changes').style.opacity = (1);
                                            }
                                        }

                                        function wrong_pass_alert() {
                                            if (document.getElementById('pass').value != "" &&
                                                document.getElementById('confirm_pass').value != "") {
                                                alert("Changed successfully");
                                            } else {
                                                alert("Please fill all the fields");
                                            }
                                        }
                                    </script>

                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- END: Personal Information -->
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