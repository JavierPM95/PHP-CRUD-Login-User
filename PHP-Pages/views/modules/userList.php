<?php
    if(!isset($_SESSION["acceptedAccess"])) {
        echo '<script> window.location = "index.php?action=logIn" </script>';
        return;
    } else {
        if($_SESSION["acceptedAccess"] != "ok") {
            echo '<script> window.location = "index.php?action=logIn" </script>';
            return;
        }   
    }
    $users = CtrlRegisterForm::ctrlGetUser(null, null);

?>

<div class="container">
    
    <div class="text-center my-2">
        <?php
            $delete = new CtrlRegisterForm();
            $delete -> ctrlDeleteUser();
        ?>
    </div>

    <div>
        <h1 class="text-primary my-4" >User List</h1>
    </div>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User</th>
                <th scope="col">Email</th>
                <th scope="col" colspan="3">Creation Date</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $key => $value): ?>

            <tr>
                <td><?php echo ($key+1); ?></td>
                <td><?php echo $value["user"]; ?></td>
                <td><?php echo $value["email"]; ?></td>
                <td><?php echo $value["date"]; ?></td>
                <td>
                    <div class="btn-group">
                        <div>
                            <a href="index.php?action=update&id=<?php echo $value["id"]; ?>" class="btn btn-warning mx-1"><i class="fas fa-edit"></i></a>
                        </div>
                        <form method="POST">
                            <button type="submit" class="btn btn-danger mx-1"><i class="fas fa-trash-alt"></i></button>
                            <input type="hidden" name="deleteUser" value=" <?php echo $value["id"]; ?> " >
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>