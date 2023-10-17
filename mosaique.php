<?php require_once('Evenement.php')?>
 <body data-spy="scroll" data-target="#main-navbar">
        <div class="page-loader"></div>  <!-- Display loading image while page loads -->
    <div class="body">
       
            <!--========== BEGIN HEADER ==========-->
            <header id="header" class="header-main">

                <!-- Begin Navbar -->
                <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation"> <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                  <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand page-scroll" href="index.html"><?php echo $theme; ?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="page-scroll" href="<?php echo base_url();?>index.php/accueil/afficher">Accueil</a></li>
                            <li><a class="page-scroll" href="">Actualite</a></li>
                            <li><a class="page-scroll" href="#about-section">Invite</a></li>
                            <li><a class="page-scroll" href="<?php echo base_url();?>index.php/programmation/afficher">Programmation</a></li>
                            <li><a class="page-scroll" href="<?php echo base_url();?>index.php/services/afficher">Services</a></li>
                            <li><a class="page-scroll" href="#prices-section">Objet trouve</a></li>
                            <li><a class="page-scroll" href="#Lieux-section">Lieux</a></li>
                            <li><a class="page-scroll" href="<?php echo base_url();?>index.php/compte/connecter">Connexion</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container -->

                </nav>
                <!-- End Navbar -->

            </header>
       
   

            <!-- ========= END HEADER =========-->

            <!--===================Resultat de ma requette invité====================-->
           


<!-- Begin Portfolio -->
            <section id="portfolio-section" class="page bg-style1">
            <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portfolio">
                                <!-- Begin page header-->

                                <div class="page-header-wrapper">
                                    <div class="container">
                                        <div class="page-header text-center wow fadeInDown" data-wow-delay="0.4s">
                                        </br>
                                        </br>
                                            <h2><?php echo $titre;?></h2>
                                            <div class="devider"></div>
                                            <!--<p class="subtitle">What we are proud of</p>-->
                                        </div>
                                    </div>
                                </div>
                                <!-- End page header-->
                               
                                <div class="portfoloi_content_area" >
                                    <div class="portfolio_menu" id="filters">
                                       
                                    </div>
                                   
                                    <div class="portfolio_content">
                                           
                                        <div class="row"  id="portfolio">
                                             <?php
                                 
                                                if($inv != NULL){
                                                    foreach($inv as $in){
                                                      if (!isset($traite[$in["inv_id"]])){

                                                         $inv_id=$in["inv_id"];
                                                        $lien=$in["res_hyperlien"];
                                                       
                                                        $photo=$in["inv_photo"];
                                                        $post=$in["post"];
                                            ?>

                                            <div class="col-xs-12 col-sm-4 appsDevelopment">
                                                <div class="portfolio_single_content">

                                                    <?php
                                                     if($in["inv_nom"]==NULL)
                                                     {
                                                        echo "<h1>Auncun invité</h1>";
                                                     }
                                                     else {
                                                     ?>

                                                    <h1><?php echo $in["inv_nom"]?></h1>
                                                    <img src="<?php echo base_url();?>style/img/portfolio/<?php echo $photo;?>" alt="title"/>
                                                   
                                                 

                                                   
                                                </div>

                                                <?php if($post==NULL){
                                                    echo "</br>";
                                                        echo "<p>"; echo"Pas de post pour cette invité ! " ;echo "</p>";
                                                        echo"</br>";

                                                } else{
                                                ?>

                                                <p>------------------------------------------------</p>
                                                        </br>
                                                        <p> <?php echo $post;?></p>
                                                        </br>
                                                <p>------------------------------------------------</p>

                                                <?php
                                                    }
                                                ?>

                                                <p>Reseau social :</p>
                                                </br>

                                                 <?php
                                                    /*foreach($inv as $i){
                                                     if(strcmp($inv_id,$i["inv_id"])==0){
                                                         $hyperlien=$i["res_hyperlien"];
                                                        if($hyperlien==NULL)
                                                        {
                                                             echo "Pas de réseau social pour cet invité !";
                                                        }
                                                        else {
                                                        ?>

                                                         <?php  echo "<p>";?> <a href="<?php echo $hyperlien; ?>"><?php echo $hyperlien; ?></a>  <?php echo "</p>"; } }}*/
                                                          $hyperlien=$in["hyperliens"];
                                                        if($hyperlien==NULL)
                                                        {
                                                             echo "Pas de réseau social pour cet invité !";
                                                        }
                                                        else {
                                                       
                                                        echo $hyperlien; }
                                                         

                                                ?>

                                            </div>
                                         <?php
                                           
                                        }
                                                     $traite[$in["inv_id"]]=1;

                                                    }
                                                        }
                                                    }
                                                       /* else {
                                                            echo "<br />";
                                                            echo "Aucun invite pour l'instant !";
                                                        }*/
                                                        ?>
                                                       
                                        </div>
                                       
                                    </div>
                                   
                                </div>
                               
                               
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End portfolio -->