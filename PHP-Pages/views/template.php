<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record List</title>

    <!-- BootsWatch -->
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/db319272ab.js" crossorigin="anonymous"></script>

</head>
<body>
<?php

    include "PHP-Pages/views/modules/navigation.php";

?>

<section>
    <?php

        $mvc = new MvcController();
        $mvc -> linksPagesController();

    ?>
</section>

</body>
</html>