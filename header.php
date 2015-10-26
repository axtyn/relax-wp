<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="../../favicon.ico">

    <title><?php /*prefijo al titulo de la pagina */ wp_title('-', true, 'right'); ?>
      <?php bloginfo('name'); ?></title>
    <?php wp_head();?> 
  </head>

  <body <?php body_class(); ?>>

    <header class="site-header">

        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                            <h1><a href="http://www.revistarelax.com" rel="no-follow"><img src="http://www.revistarelax.com/images/Relax.png" alt="Revista Relax" ></a></h1>
                            <h2>Lectura Terapéutica</h2>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="publicidad">
                            <img src="http://www.revistarelax.com/ads/banner-header.png" alt="Publicidad">
                        </div>
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->

        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="list-menu slideRight" >
                            <ul>
                                <li><a href="<?php echo $url1 ?>" class="<?php echo $clase_current1 ?>">Relax Hoy</a></li>
                                <li><a href="<?php echo $url2 ?>" class="<?php echo $clase_current2 ?>">Revista Relax</a></li>
                                <li><a href="<?php echo $url3 ?>" class="<?php echo $clase_current3 ?>">Infografías</a></li>
                                <li><a href="<?php echo $url4 ?>" class="<?php echo $clase_current4 ?>">Congresos</a></li>                               
                                <li><a href="<?php echo $url5 ?>" class="<?php echo $clase_current4 ?>">Blog de los Médicos</a></li>
                                <li><a href="<?php echo $url6 ?>" class="<?php echo $clase_current5 ?>">Entrevistas</a></li>
                                <li><a href="<?php echo $url7 ?>" class="<?php echo $clase_current6 ?>">Multimedia</a></li>                              
                                <li><a href="<?php echo $url9 ?>" class="<?php echo $clase_current8 ?>">Ed. Anteriores</a></li>
                                <li><a href="<?php echo $url10 ?>" class="<?php echo $clase_current9 ?>">Editorial</a></li>
                                <li><a href="<?php echo $url11 ?>" class="<?php echo $clase_current10 ?>">Contacto</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->

                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->

    </header> <!-- /.site-header -->





