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
      <h1>Daftar akun Dicoding</h1>
      <form>
        <label for="name">Nama Lengkap</label>
        <input type="text" name="name" id="name" placeholder="Nama Lengkap" />
        <p class="small-font">Masukkan nama asli Anda, nama akan digunakan pada data sertifikat</p>

        <label for="email">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          placeholder="Alamat Email"
        />
        <p class="small-font">Gunakan alamat email aktif Anda</p>

        <label for="password">Password</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Masukkan password baru"
        />
        <p class="small-font">Gunakan minimal 8 karakter dengan kombinasi huruf dan angka</p>

        <button class="btn primary-btn" type="submit">Daftar</button>

        <div class="sso-divider">
          <hr />
          <p>atau</p>
          <hr />
        </div>
        <button class="btn primary-btn--outline sso-btn">
          <img src="assets/images/icons8-google.svg" alt="Google Logo" />Masuk
          dengan Google
        </button>
        <p>Sudah punya akun? <a href="login.php">Masuk sekarang</a></p>
        <hr />
        <article class="small-font text-center">
          <p>
            Dengan melakukan pendaftaran, Anda setuju dengan <a href="https://www.dicoding.com/termsofuse" target="_blank">syarat & ketentuan
              Dicoding</a>.
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
