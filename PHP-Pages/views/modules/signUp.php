<div class="container">
  <div class="d-flex justify-content-center">
    <div class="col-md-6 p-5 bg-light">
    <?php
        
        $registerUser = CtrlRegisterForm::ctrlRegister();
        if ($registerUser == "ok") {

          echo '<script>
                  if (window.history.replaceState) {
                    window.history.replaceState(null, null, window.location.href);
                  }
                </script>';

          echo '<div class="alert alert-success text-center">User register successfully <span><i class="fas fa-check"></i></span></div>';
        }

        ?>
      <div>
        <h1 class="text-primary my-4">Sign Up</h1>
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
              name="registerUserName"
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
              name="registerEmail"
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
              name="registerPassword"
            />
          </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block my-3">Sign Up</button>
        <p class="d-flex justify-content-center">Are you register?</p>
        <a class="d-flex justify-content-center" href="index.php?action=logIn"
        >Log In</a
        >
      </form>
    </div>
  </div>
</div>