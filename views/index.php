<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/app.css">

    <title>Productos Textiles</title>
</head>
<body>
    <section>
        <div class="contenedor">
            <?php foreach ($resultados as $resultado) { ?>

                <div class="producto">
                    <p>Id del producto: <span style="font-weight: bold;"><?php echo $resultado['id'] ?></span></p>
                    <p>Nombre del producto: <span style="font-weight: bold;"><?php echo $resultado['producto'] ?></span></p>
                    <p>Precio por llarda:   <span style="font-weight: bold;"> <?php echo $resultado['precio'] ?></span></p>
                </div>

            <?php } ?> 
        </div>
    </section>
</body>
</html>


