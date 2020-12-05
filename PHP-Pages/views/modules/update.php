<?php
      if(isset($_GET["id"])) {
        $idAccess = "id";
        $idValue = $_GET["id"];
        
        $user = CtrlRegisterForm::ctrlGetUser($idAccess, $idValue);
      }
?>

<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-6 p-5 bg-light">
      <?php
      
      $update = new CtrlRegisterForm();
      $update -> ctrlUpdateUser();

      
      ?>
      <div>
        <h1 class="text-primary my-4">Update User</h1>
      </div>
      <form action="" method="POST">
        <div class="form-group">
          <label for="userName" class="mt-1">User Name</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"
                ><i class="fas fa-user"></i
              ></span>
            </div>
            <input
              class="form-control"
              type="userName"
              placeholder="Your user"
              id="userName"
              name="updateUserName"
              value=" <?php echo $user["user"] ;?> "
            />
          </div>
        </div>
        <div class="form-group">
          <label for="email" class="mt-1">Email</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"
                ><i class="fas fa-envelope"></i
              ></span>
            </div>
            <input
              class="form-control"
              type="text"
              placeholder="Your Email"
              id="email"
              name="updateEmail"
              value=" <?php echo $user["email"] ;?> "
            />
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="mt-1">Password</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroupPrepend"
                ><i class="fas fa-lock"></i
              ></span>
            </div>
            <input
              class="form-control"
              type="password"
              placeholder="Your Password"
              id="password"
              name="updatePassword"
            />
            <input
              type="hidden"
              name="actualPassword"
              value=" <?php echo $user["password"] ;?> "
            />
            <input
              type="hidden"
              name="userId"
              value=" <?php echo $user["id"] ;?> "
            />
          </div>
        </div>
        <button type="submit" class="btn btn-warning btn-block my-3">Update</button>
      </form>
    </div>
  </div>
</div>