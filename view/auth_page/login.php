<?php $title = 'Login' ?>
<?php 
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>

<?php $body = ob_get_clean(); ?>
<?php include 'master.php'; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Contact App Manager</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <style>
      body {
        background-color: #cd7672;
        font-family: "Poppins", sans-serif;
      }
      .form-email {
        margin-bottom: 10px;
      }
      .button-login {
        color: #fff;
        text-decoration: none;
      }
    </style>
  </head>

  <body>
    <section class="h-100">
      <div class="container h-100">
        <div class="row justify-content-sm-center h-100">
          <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
            <div class="text-center my-5 fs-3 fw-bold">Contact App Manager</div>
            <div class="card shadow">
              <div class="card-body p-5">
                <h1 class="fs-4 card-title fw-bold mb-4 text-center">LOGIN</h1>
                <form
                  method="post"
                  class="needs-validation"
                  novalidate=""
                  autocomplete="off"
                >
                  <div class="form-email mb-3">
                    <label class="mb-2 fw-bold text-muted" for="email"
                      >Email</label
                    >
                    <input
                      id="email-name"
                      type="text"
                      class="form-control"
                      placeholder="Masukkan email anda..."
                      pattern=".{6,50}"
                      title="Product Name must be 6 to 50 characters"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <div class="mb-2 w-100">
                      <label class="text-muted fw-bold" for="password"
                        >Password</label
                      >
                    </div>
                    <input
                      id="password"
                      type="password"
                      class="form-control fst-italic"
                      name="password"
                      placeholder="Masukkan password anda..."
                      required
                    />
                    <div class="invalid-feedback">Password is required</div>
                  </div>
                  <div class="align-items-center d-flex">
                    <button type="submit" class="btn btn-primary ms-auto">
                      <a class="button-login" href="<?= urlpath('dashboard'); ?>">LOGIN</a>
                    </button>
                  </div>
                </form>
              </div>
              <div class="card-footer bg-light py-3 border-0">
                <div class="text-center">
                  Tidak memiliki akun?
                  <a href="<?php echo urlpath('register'); ?>" class="text-primary">Registrasi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
