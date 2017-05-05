<?php
/*
Theme Name: WPBootstrap
Theme URI: http://geekpurple.com/
Description: Plantilla demo para el post  <a href="http://geekpurple.com/crear-una-plantilla-de-wordpress-con-bootstrap/">Como hacer una plantilla para WordPress usando Bootstrap</a>.
Author: Yolanda Jimenez
Author URI: http://geekpurple.com/
Version: 1.0
Tags: wordpress, blog, bootstrap

Este tema ha sido creado basandonos en los ejemplos de Bootstrap para crear una web
*/
?>

<?php 
/**
 * Template Name: Home template
 *
 *
 * Template general para el home
 */
 get_header(); ?>
<!--Body content-->
            
            <div class="hero-unit">
               <h1>Guía de uso Bootstrap en GeekPurple</h1>
               <p>Estamos haciendo un ejemplo sencillo para empezar a trabajar con Bootstrap.</p>
               
              <div id="myCarousel" class="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                 </ol>
                 <!-- Carousel items -->
                 
                 <div class="carousel-inner">
                    


                    <div class="active item"><img  src="<?php echo get_template_directory_uri().'/img/imagen1.jpg' ?>" alt="imagen1" /></div>
                    <div class="item"><img  src="<?php echo get_template_directory_uri().'/img/imagen2.jpg' ?>" alt="imagen2" />                    
                     <div class="carousel-caption">
                      <h4>First Thumbnail label</h4>
                      <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    </div>
                    </div>
                   
                    <div class="item"><img  src="<?php echo get_template_directory_uri().'/img/imagen3.jpg' ?>" alt="imagen3" /></div>
                    
                 </div>
                 
                 <!-- Carousel nav -->
                 <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                 <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
              </div>

           </div>
             
             <div class="row-fluid">
               
               
               <div class="span4"> <h2> Titulo 1 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p>
                 
                 <a class="btn btn-primary" href="#">Botón titulo 1</a>
                 
                 <i class="icon-trash icon-white"></i> 
               </div>
               
               <div class="span4"> <h2> Titulo 2 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p>
                 <a class="btn btn-primary" href="#">Botón titulo 2</a>
                 
                 </div>
                 
               <div class="span4"> <h2> Titulo 3 </h2> 
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sollicitudin vestibulum est a aliquam. Suspendisse ac lectus ultrices, porta eros eu, viverra nunc. Aliquam vel eros iaculis, pharetra orci et, consectetur magna. Duis egestas orci sem, at commodo ante viverra quis. Donec sed dolor condimentum, congue erat ut, pulvinar tortor.</p> 
                 <a class="btn btn-primary" href="#">Botón titulo 3</a>
                 
                 </div>
             </div>

	</div>
	
<?php get_footer(); ?>