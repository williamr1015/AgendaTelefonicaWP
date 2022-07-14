<?php get_header(); ?>
<?php plugin_dir_path(__FILE__) . '/asset/custom.js'; ?>
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

<?php    
    $Id = $_GET['id'];
    include_once "includes/conexion.php";
    $sentencia = $bd->query("SELECT * FROM contactos WHERE Con_Id = $Id;");
    $contacto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($contacto);
    
    
?>

    <div class="lista_contactos">
    <div class="row">
        <h2 class="text-center">
            Contacto

        </h2>
        <table style="border: double; padding:20px; ">
    <thead>
    <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>NUMERO CELULAR</th>
    <th>EMAIL</th>
    <th>CATEGORIA</th>
    <th>ETIQUETA</th>
    </tr>
</thead>
<tbody>

   <?php 
                                foreach($contacto as $dato){ 
                            ?>

                           <tr><td scope="row"><?php echo $dato->Con_Id; ?></td>
                                <td><?php echo $dato->Con_Nombre; ?></td>
                                <td><?php echo $dato->Con_Apellido; ?></td>
                                <td><?php echo $dato->Con_NroCelular; ?></td>
                                <td><?php echo $dato->Con_Email; ?></td>
                                <td><?php echo $dato->Con_Categorias; ?></td>
                                <td><?php echo $dato->Con_Etiquetas; ?></td>

                            <?php 
                                }
                            ?>
                           
    
    </tr>
</tbody>
</table>
<br> <br>
    <a href="http://localhost/PruebaBRMWilliamR/" style="display: flex; justify-content:center; padding: 20px;">
        <button style="padding: 5px; border-radius: 3px; ">Home</button>
    </a>
   </div>
   </div><br> <br> <br>
   
   </main>

<?php get_footer(); ?>