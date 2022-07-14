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
    <?php
   
   include_once "includes/conexion.php";
   $sentencia = $bd->query("SELECT Con_Id, Con_Nombre FROM contactos;");
   $contacto = $sentencia->fetchAll(PDO::FETCH_OBJ);

   
   
?>

    <div class="lista_contactos">
    <div class="row">
        <h2 class="text-center">
            Contactos
        </h2>
        <table style="border: double; padding:20px;">
    <thead>
    <tr>
    <th>ID</th>
    <th>NOMBRE</th>
    <th>DETALLES</th>
    </tr>
</thead>
<tbody>

   <?php 
                                foreach($contacto as $dato){ 
                            ?>

                           <tr><td scope="row"><?php echo $dato->Con_Id; ?></td>
                                <td><?php echo $dato->Con_Nombre; ?></td>
                                <td>
                                    <a href="<?php echo get_permalink(get_page_by_title('Detalles Contacto')); ?>?id=<?php echo $dato->Con_Id; ?>">
                                        <button class="btn btn-primary">Detalles</button>
                                    </a>
                                </td>
                            <?php 
                                }
                            ?>
                           
    
    </tr>
</tbody>
</table>
   </div>
   </div> <br> <br> <br>
   <div class="lista_contactos">
    <div class="row">
        <h1>Buscar Contacto Por Número de Celular</h1>
        <form action="" method="get" style="display: flex; justify-content: center; padding: 25px;">
        <input type="number" name="busqueda" id="busqueda" style="padding: 5px; margin:10px;"placeholder="Ingesa Número Celular"><br>
        <input type="submit" name="enviar" value="Buscar" style="padding: 5 px; margin: 10px;">
        </form>
        <?php
    if(isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];
    include_once "includes/conexion.php";
    $sentencia = $bd->query("SELECT * FROM contactos WHERE Con_NroCelular LIKE '%$busqueda%'");
    $contacto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($contacto);
    
    
?>

<table style="border: double; padding:20px;">
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
        <?php } ?>
    <br> <br>
    
        <a href="http://localhost/PruebaBRMWilliamR/" style="display: flex; justify-content:center; padding: 20px;">
            <button style="padding: 5px; border-radius: 3px; ">Home</button>
        </a>                            
    </div>
    </div> <br> <br> <br>
   </main>

<?php get_footer(); ?>