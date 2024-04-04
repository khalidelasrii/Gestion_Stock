
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pl-5 pt-4">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="../dist/images/logo.svg">
                    <span class="hidden xl:block text-white text-lg ml-3"> Rubick </span> 
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>

                    <li>
                        <a href="../dashbord/index.php" class="side-menu <?php if($page == 'dashbord') {?> side-menu--active <?php } ?>">
                            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="../produit/index.php" class="side-menu">
                            <div class="side-menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="side-menu__title">
                                Produit 
                                <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="../produit/index.php" class="side-menu <?php if($page == 'liste produit') {?> side-menu--active <?php } ?>">
                                    <div class="side-menu__icon "> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Liste Produit </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-add-product.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="side-menu__title"> Ajouter Produit </div>
                                </a>
                            </li>


                            
                            
                        </ul>
                    </li>
                      <li>
                        <a href="../profile/" class="side-menu  <?php if($page == 'profile') {?> side-menu--active <?php } ?>">
                            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="side-menu__title"> Profile </div>
                        </a>
                    </li>













 
 
                    <li class="side-nav__devider my-6"></li>


 
                </ul>
            </nav>
            <!-- END: Side Menu -->

