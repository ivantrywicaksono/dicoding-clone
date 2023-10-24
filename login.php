<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dicoding.css" />

    <title>Dicoding Indonesia</title>
  </head>
  <body>
    <header>
      <?php include_once "header_nav.html"; ?>
    </header>

    <main class="form-control">
      <h1>Masuk</h1>
      <form>
        <input type="email" placeholder="Email" />
        <input type="password" placeholder="Password" />
        <a href="" class="text-right">Lupa Password?</a>
        <button class="btn primary-btn" type="submit">Masuk</button>
        <div class="sso-divider">
          <hr />
          <p>atau</p>
          <hr />
        </div>
        <button class="btn primary-btn--outline sso-btn">
          <img src="assets/images/icons8-google.svg" alt="Google Logo" /> Masuk
          dengan Google
        </button>
        <p>Belum punya akun? Ayo <a href="register.php">daftar</a></p>
        <hr />
        <article class="small-font text-center">
          <p>
            Dengan melakukan login, Anda setuju dengan
            <a href="https://www.dicoding.com/termsofuse" target="_blank"
              >syarat & ketentuan Dicoding</a
            >.
          </p>
          <p>
            This site is protected by reCAPTCHA and the Google Privacy Policy
            and Terms of Service apply.
          </p>
        </article>
      </form>
    </main>

    <?php include_once "footer.html"; ?>
  </body>
</html>
