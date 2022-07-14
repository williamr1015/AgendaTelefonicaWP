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
            Contacto

        </h2>
        <form action="#" name="formulario" method="POST" class="row g-3 needs-validation" novalidate>
            <input type="text"  placeholder="Ingresa Nombre" name="nombre" required="required" class="form-control"><br><br>
            <input type="text"  placeholder="Ingresa Apellido" name="apellido" required="required" class="form-control"><br><br>
            <input type="text"  placeholder="Ingresa Numero Celular" name="celular" required="required" class="form-control"><br><br>
            <input type="text"  placeholder="Ingresa Email" name="email" required="required" class="form-control"><br><br>
            <input type="text"  placeholder="Ingresa Categoria" name="categoria" class="form-control"> <br><br>
            <input type="text"  placeholder="Ingresa Etiqueta" name="etiqueta" class="form-control"> <br><br>
            <input type="submit" value="Enviar" name="regitronewcontact" class="btn"> <br><br>
        </form>

        <?php    
    include_once "includes/conexion.php";
    if(isset($_POST['regitronewcontact'])){
        if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['celular']) && !empty($_POST['email']) && !empty($_POST['categoria']) && !empty($_POST['etiqueta'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $celular = $_POST['celular'];
            $email = $_POST['email'];
            $categoria = $_POST['categoria'];
            $etiqueta = $_POST['etiqueta'];
            $sentencia = $bd->prepare("INSERT INTO contactos (Con_Nombre, Con_Apellido, Con_NroCelular, Con_Email, Con_Categorias, Con_Etiquetas) VALUES (:nombre, :apellido, :celular, :email, :categoria, :etiqueta);");
            $sentencia->bindParam(':nombre', $nombre);
            $sentencia->bindParam(':apellido', $apellido);
            $sentencia->bindParam(':celular', $celular);
            $sentencia->bindParam(':email', $email);
            $sentencia->bindParam(':categoria', $categoria);
            $sentencia->bindParam(':etiqueta', $etiqueta);
            $sentencia->execute();
            echo "<script>alert('Contacto Agregado');</script>";
    }else{
        echo "<script>alert('Faltan Datos');</script>";
    }
 }
    ?>

        <a href="http://localhost/PruebaBRMWilliamR/" style="display: flex; justify-content:center; padding: 20px;">
            <button style="padding: 5px; border-radius: 3px; ">Home</button>
        </a>
    </div>
    </div> <br> <br> <br>
   </main>

<?php get_footer(); ?>