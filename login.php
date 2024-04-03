<?php
session_start();
include("./securite/bd.php");

    
if (isset($_POST['login'])) 
{
    $email=$_POST['email'];
    $password = $_POST['password'];

    $req_login="select * from user where email = '$email' and password = '$password'";
    $res_login=mysqli_query($link,$req_login);
    $data_login=mysqli_fetch_array($res_login);

    if ( isset($data_login['id']) && $data_login['id'] != null) 
    {
        $_SESSION['id_user']=$data_login['id'];
        $_SESSION['nom_user']=$data_login['nom'];
        $_SESSION['email_user']=$data_login['email'];

       header("location: index.php");
    }else
    {
        header("location: login.php?erreur");
    }



}


 ?>



<!DOCTYPE html>

<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Login - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" />
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="login">
        <div class="container sm:px-10">
            <div class="block xl:grid grid-cols-2 gap-4">
                <!-- BEGIN: Login Info -->
                <div class="hidden xl:flex flex-col min-h-screen">
                    <a href="" class="-intro-x flex items-center pt-5">
                        <img alt="Midone - HTML Admin Template" class="w-6" src="dist/images/logo.svg">
                        <span class="text-white text-lg ml-3"> Rubick </span> 
                    </a>
                    <div class="my-auto">
                        <img alt="Midone - HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg">
                        <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                            A few more clicks to 
                            <br>
                            sign in to your account.
                        </div>
                        <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400">Manage all your e-commerce accounts in one place</div>
                    </div>
                </div>
                <!-- END: Login Info -->
                <!-- BEGIN: Login Form -->

                

                <form method="POST" class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                    <div class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                        <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                            Sign In
                        </h2>
                        <?php if (isset($_GET['erreur'])): ?>
                            
                        
                        <h6 style="color:red;"> Login or password is incorrect</h6>

                        <?php endif ?>


                        <?php if (isset($_GET['erreur_session'])): ?>
                            
                        
                        <h6 style="color:red;"> Votre session est expiré  </h6>

                        <?php endif ?>



                         
                        <div class="intro-x mt-8">
                            <input name="email" type="text" class="intro-x login__input form-control py-3 px-4 block" placeholder="Email">
                            <input name="password" type="password" class="intro-x login__input form-control py-3 px-4 block mt-4" placeholder="Password">
                        </div>


                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">

                            <button name="login" type="submit" class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                             
                        </div>
                         
                    </div>
                </form>

             


                <!-- END: Login Form -->
            </div>
        </div>
    
        
        <!-- BEGIN: JS Assets-->
        <script src="dist/js/app.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>