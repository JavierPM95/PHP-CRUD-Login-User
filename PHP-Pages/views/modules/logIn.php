<div class="container d-flex justify-content-center">
    <div class="col-md-6 p-5 bg-light">
        <?php
            $access = new CtrlRegisterForm();
            $access -> ctrlAccess();
        ?>
        <div>
            <h1 class="text-primary my-4" >Log in</h1>
        </div>
        <div>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email" class="mt-1">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input class="form-control" type="text" placeholder="Your Email" id="email" name="accessEmail" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="mt-1">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend"><i class="fas fa-lock"></i></span>
                        </div>
                            <input class="form-control" type="password" placeholder="Your Password" id="password" name="accessPassword">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block my-3">Log In</button>
                <p class="d-flex justify-content-center">Don't you have any register?</p>
                <a class="d-flex justify-content-center" href="index.php?action=signUp">Sign Up</a>
            </form>
        </div>
    </div>
</div>