<?php get_header(); ?>

<main class="container">
<?php if (have_posts()){
        while (have_posts()){
            the_post();
            ?>
                    <h1 class="my-5"><?php the_title(); ?></h1>
                    <div class="row">
                        <div class="col-6">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="col-6">
                            <?php the_content(); ?>
                        </div>
                    </div>
                                 
            <?php
        }
    }?>

    <div class="lista_contactos">
    <div class="row">
        <h2 class="text-center">
            Contactos
        </h2> <br> <br>
        <p>En esta pagina encontraras los contactos favoritos para consultar todos tus contactos navega a "Agenda Telefonica" y desde alli podras consultar todos y abrir los detalles de tus contactos.</p> <br> <br>
            <?php
            $contactos = new WP_Query(array(
                'post_type' => 'contactos',
                'posts_per_page' => -1,
                'order' => 'DESC',
                'orderby' => 'title',
            ));
        
            if($contactos -> have_posts()){
                while($contactos -> have_posts()){
                    $contactos -> the_post();
                    ?>
                    <div class="col-4">
                        <h4 class="my-3">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                        </a>
                        </h4>
                        <h6><?php the_meta(); ?></h6>
                    </div>
               
                    <?php
                }
            }
            ?>
   </div>
   </div>
    
    
   
</main>

<?php get_footer(); ?>