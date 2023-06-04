<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['username'];
        $pass = $_POST['pass'];

        if ($user == "budi" && $pass == "1234") {
            $_SESSION['login'] = $user;

            header("location: CRUD.php");
        } else {
            ?>
                <html>
                    <head>
                        <title>Login</title>
                        <link rel="stylesheet" href="LoginCss.css" type="text/css">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

                    </head>
                    <body>
                        <div class="container" align="center">
                            <form action="" method="post">
                                <div class="mb-3 mt-3">
                                    <label for="username" class="form-label">Username:</label>
                                    <input type="text" class="form-control form-control-sm" id="username" placeholder="Username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="pass" class="form-label">Password:</label>
                                    <input type="password" class="form-control form-control-sm" id="pass" placeholder="Enter password" name="pass" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : ''; ?>">
                                </div>
                                <div class ='alert alert-warning alert-dismissible fade-show' role='alert'>
                                    <strong>Username atau Password salah!</strong>
                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                </div>
                                    <button name="login"type="submit" class="btn btn-primary" value="Login">Login</button>
                            </form>
                        </div>
                    </body>
                </html>
            <?php
        }
    } else {
        ?>
            <html>
              <head>
                  <title>Login</title>
                  <link rel="stylesheet" href="LoginCss.css" type="text/css">
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

              </head>
              <body>
                  <div class="container" align="center">
                      <form action="" method="post">
                          <div class="mb-3 mt-3">
                              <label for="username" class="form-label">Username:</label>
                              <input type="text" class="form-control form-control-sm" id="username" placeholder="Username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
                            </div>
                            <div class="mb-3">
                              <label for="pass" class="form-label">Password:</label>
                              <input type="password" class="form-control form-control-sm" id="pass" placeholder="Enter password" name="pass" value="<?php echo isset($_POST['pass']) ? $_POST['pass'] : ''; ?>">
                            </div>
                            <button name="login"type="submit" class="btn btn-primary" value="Login">Login</button>
                      </form>
                  </div>
              </body>
            </html>
        <?php
    }
?>



