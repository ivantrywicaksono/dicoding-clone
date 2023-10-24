<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="dicoding.css" />
    <title>
      Dicoding Indonesia - Bangun Karirmu Sebagai Developer Profesional
    </title>
  </head>
  <body>
    <header>
      <article class="announcement-bar">
        <p>
          Kembali Dibuka! Beragam Beasiswa Dicoding Bangun Negeri Batch 2.
          GRATIS.
        </p>
        <a href="https://www.dicoding.com/bangun-negeri/bootcamp"
          >Lihat di sini &rarr;</a
        >
      </article>

      <?php include "header_nav.html"; ?>
    </header>

    <main>
      <?php require_once "db.php"; ?>
      <section class="hero">
        <article>
          <h1>Bangun Karirmu Sebagai Developer Profesional</h1>
          <p>Mulai belajar terarah dengan learning path</p>
          <a href="#learning-path">
            <button class="btn primary-btn">Belajar Sekarang</button>
          </a>
        </article>
        <img src="./assets/images/homepage-hero.png" alt="Hero" />
      </section>

      <section class="dicoding-partner">
        <h2>Telah dipercayai oleh</h2>
        <?php 
        try {
          $partners = mysqli_query($conn, "SELECT * FROM partners");
        } catch (\Throwable $th) {
          die(mysqli_error($conn));
        }
        ?>
        
        <?php
          for ($row=1; $row <= 3; $row++) { ?>
            <div class="row">

            <?php for ($item=1; $item <= 6; $item++) { ?>
              <?php $partner = mysqli_fetch_assoc($partners); ?>
              <div>
                <img
                  src="./assets/images/dicoding-partner/<?= $partner['partner_image_path']; ?>"
                  alt="<?= $partner['partner_name']; ?>"
                />
              </div>
            <?php } ?>

            </div>
        <?php } ?>
        
      </section>

      <section class="dicoding-program">
        
        <article>
          <h1>Program terbaru kami</h1>
          <p>
            Bekerja sama dengan partner, kami menyelenggarakan beberapa program
            untuk mendukung developer Indonesia.
          </p>
        </article>
        <section>
          <div class="slider-buttons">
            <!-- Left -->
            <button onclick="plusSlide(-1)">
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  cx="16"
                  cy="16"
                  r="15"
                  stroke="#2D3E50"
                  stroke-width="2"
                ></circle>
                <path
                  d="M23 16H9"
                  stroke="#2D3E50"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M16 23L9 16L16 9"
                  stroke="#2D3E50"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>

            <!-- Right -->
            <button onclick="plusSlide(1)">
              <svg
                width="32"
                height="32"
                viewBox="0 0 32 32"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle
                  cx="16"
                  cy="16"
                  r="15"
                  stroke="#2D3E50"
                  stroke-width="2"
                ></circle>
                <path
                  d="M9 16H23"
                  stroke="#2D3E50"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M16 9L23 16L16 23"
                  stroke="#2D3E50"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </button>
          </div>
          <div id="slider" class="card-container">
          <?php 
          try {
            $programs = mysqli_query($conn, "SELECT * FROM programs");
          } catch (\Throwable $th) {
            die(mysqli_error($conn));
          }
          ?>

          <?php
            while ($program = mysqli_fetch_assoc($programs)) {
          ?>
            <article class="card">
              <img
                src="./assets/images/dicoding-program/<?= $program['program_image_path']; ?>"
                alt="<?= $program['program_name']; ?>"
              />
              <article>
                <p><?= $program['program_by']; ?></p>
                <h5><?= $program['program_name']; ?></h5>
                <p><?= $program['program_description']; ?></p>
              </article>
            </article>
          <?php } ?>
            
          </div>
        </section>
      </section>

      <section class="dicoding-features">
        <h1>Kenapa Dicoding Academy Berbeda</h1>
        <p>
          Saatnya bijak memilih sumber belajar. Tak hanya materi yang terjamin,
          Dicoding Academy juga memiliki reviewer profesional yang akan mengulas
          kode Anda.
        </p>

        <section class="row">
          <article class="dicoding-feature">
            <ul>
              <li>Kurikulum standar industri global</li>
              <li>Belajar fleksibel sesuai jadwal Anda</li>
              <li>Code Review dari Developer Expert</li>
              <li>Alumni terpercaya di berbagai perusahaan</li>
            </ul>
          </article>

          <img
            src="./assets/images/feature-1-kurikulum-global-3.png"
            alt="Kurikulum Global Image"
          />
        </section>
      </section>

      <section class="learning-path-section" id="learning-path">
        <h1>Learning Path</h1>

        <p>
          Learning path akan membantu Anda dalam belajar di Academy dengan
          kurikulum yang dibangun bersama pelaku industri ternama.
        </p>

        <article class="row">
          <img
            height="37px"
            src="./assets/images/academy-googleatp-3.png"
            alt="Google Developer"
          />
          <img
            height="60px"
            src="./assets/images/google-cloud-partner.png"
            alt="Google Cloud"
          />
          <img
            height="60px"
            src="./assets/images/google-for-education-partner.jpg"
            alt="Google for Education"
          />
        </article>

        <article class="dicoding-partner">
          <div class="row">
            <div>
              <img
                height="40px"
                src="./assets/images/homepage-partner-google.png"
                alt="Google Developer"
              />
            </div>
            <div>
              <img
                height="40px"
                src="./assets/images/homepage-partner-microsoft.png"
                alt="Google Cloud"
              />
            </div>
            <div>
              <img
                height="40px"
                src="./assets/images/homepage-partner-aws.png"
                alt="Google for Education"
              />
            </div>
            <div>
              <img
                height="40px"
                src="./assets/images/homepage-partner-ibm.png"
                alt="Google for Education"
              />
            </div>
            <div>
              <img
                height="40px"
                src="./assets/images/homepage-partner-line.png"
                alt="Google for Education"
              />
            </div>
          </div>
        </article>

        <article class="learning-path">
          <img
            height="168px"
            src="./assets/images/homepage-lp-android-developer-3.jpg"
            alt="Android Learning Path"
          />

          <img
            height="168px"
            src="./assets/images/homepage-lp-back-end-developer-2.jpg"
            alt="Backend Learning Path"
          />

          <img
            height="168px"
            src="./assets/images/homepage-lp-front-end-web-developer-2.jpg"
            alt="Frontend Learning Path"
          />

          <img
            height="168px"
            src="./assets/images/homepage-lp-ios-developer-2.jpg"
            alt="iOS Learning Path"
          />
        </article>

        <article class="learning-path-content row">
          <div>
            <h2>Android Developer</h2>
            <div class="row">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                width="24"
                height="24"
              >
                <path
                  fill="#3F3F46"
                  fill-rule="evenodd"
                  d="M2 4a2 2 0 012-2h11a2 2 0 012 2v1h3a2 2 0 012 2v13a2 2 0 01-2 2H4a2 2 0 01-2-2V4zm13 0v1H4V4h11zM4 20V7h3v13H4zm5 0h11V7H9v13z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <p>6 Kelas</p>
            </div>

            <div class="row">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                width="24"
                height="24"
              >
                <path
                  fill="#3F3F46"
                  fill-rule="evenodd"
                  d="M7.5 4a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM6 7.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 4a3.5 3.5 0 100 7 3.5 3.5 0 000-7zM15 7.5a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM12 14.337A5.5 5.5 0 002 17.5V21a1 1 0 001 1h18a1 1 0 001-1v-3.5a5.5 5.5 0 00-10-3.163zM11 20v-2.503a3.5 3.5 0 00-7 .003V20h7zm2-2.503V20h7v-2.5a3.5 3.5 0 00-7-.003z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <p>242k siswa belajar di learning path ini</p>
            </div>
            <p class="border-top">
              Kurikulum didesain dengan persetujuan dari Tim Google Android
              untuk mempersiapkan developer Android standar Global. Dicoding
              adalah Google Developer Authorized Training Partner.
            </p>
          </div>

          <div class="row">
            <!-- Langkah 1 -->
            <a
              href="https://www.dicoding.com/academies/80"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/memulai_pemrograman_dengan_kotlin_logo_230421132137.jpg"
                alt="Kotlin"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 1</p>
                </div>

                <h5>Memulai Pemrograman Dengan Kotlin</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,84</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Dasar - Pemula</p>
                </div>
              </div>
            </a>

            <!-- Langkah 2 -->
            <a
              href="https://www.dicoding.com/academies/51"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/belajar_membuat_aplikasi_android_untuk_pemula_logo_230421132330.jpg"
                alt="Android Pemula"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 2</p>
                </div>

                <h5>Belajar Membuat Aplikasi Android untuk Pemula</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,88</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Pemula</p>
                </div>
              </div>
            </a>

            <!-- Langkah 3 -->
            <a
              href="https://www.dicoding.com/academies/14"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/belajar_fundamental_aplikasi_android_logo_230421132359.jpg"
                alt="Fundamental Android"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 3</p>
                </div>

                <h5>Belajar Fundamental Aplikasi Android</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,87</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Menengah</p>
                </div>
              </div>
            </a>

            <!-- Langkah 4 -->
            <a
              href="https://www.dicoding.com/academies/352"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/dos_belajar_pengembangan_aplikasi_android_intermediate_logo_140222092310.png"
                alt="Android Intermediate"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 4</p>
                </div>

                <h5>Belajar Pengembangan Aplikasi Android Intermediate</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,82</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Mahir</p>
                </div>
              </div>
            </a>

            <!-- Langkah 5 -->
            <a
              href="https://www.dicoding.com/academies/169"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/belajar_prinsip_pemrograman_solid_logo_230421132206.jpg"
                alt="SOLID"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 5</p>
                </div>

                <h5>Belajar Prinsip Pemrograman SOLID</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,88</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Menengah</p>
                </div>
              </div>
            </a>

            <!-- Langkah 6 -->
            <a
              href="https://www.dicoding.com/academies/165"
              class="learning-path-course"
            >
              <img
                src="./assets/images/android_path/menjadi_android_developer_expert_logo_230421132521.jpg"
                alt="Android Expert"
              />

              <div class="learning-path-course__content">
                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path fill="#fff" d="M0 0h16v16H0z"></path>
                    <path
                      stroke="#3F3F46"
                      stroke-linejoin="round"
                      stroke-width="1.5"
                      d="M13.5 13.5h-11V9h3V5.5h4V2h4v11.5z"
                    ></path>
                  </svg>
                  <p>Langkah 6</p>
                </div>

                <h5>Menjadi Android Developer Expert</h5>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#F59E0B"
                      d="M8 12.174l-4.702 2.632 1.05-5.286L.391 5.862l5.352-.635L8 .333l2.257 4.894 5.352.635-3.957 3.658 1.05 5.286L8 12.174z"
                    ></path>
                  </svg>
                  <p>4,82</p>
                </div>

                <div class="row">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill="#2563EB"
                      d="M12 7H4v8l4.065-1.664L12 15V7z"
                    ></path>
                    <path
                      fill="#3B82F6"
                      d="M8 1l2.61 1.48L13.196 4l.024 3-.024 3-2.586 1.52L8 13l-2.61-1.48L2.804 10 2.78 7l.024-3L5.39 2.48 8 1z"
                    ></path>
                    <path
                      fill="#60A5FA"
                      d="M8 2l2.175 1.233L12.33 4.5l.02 2.5-.02 2.5-2.155 1.267L8 12l-2.175-1.233L3.67 9.5 3.65 7l.02-2.5 2.155-1.267L8 2z"
                    ></path>
                    <path
                      fill="#BFDBFE"
                      d="M8 4l.97 1.665 1.883.408L9.57 7.51l.194 1.917L8 8.65l-1.763.777.194-1.917-1.284-1.437 1.883-.408L8 4z"
                    ></path>
                  </svg>
                  <p>Level Profesional</p>
                </div>
              </div>
            </a>
          </div>
        </article>
      </section>

      <section class="other-courses-section row">
        <div>
          <h1>Belajar dengan kelas standar industri global</h1>
          <p>
            Kelas di Dicoding Academy tersedia bagi yang belum memiliki
            kemampuan programming (dasar) hingga yang sudah profesional.
          </p>
          <a href="https://www.dicoding.com/academies/list" target="_blank"
            >Lihat semua kelas &rarr;</a
          >
        </div>

        <article>
          <div class="row">
            <h4>Belajar Dasar Manajemen Proyek</h4>
            <h4>Belajar Dasar Git dengan Github</h4>
          </div>
          <div class="row">
            <h4>Belajar Dasar UX Design</h4>
            <h4>Belajar Membangun LINE Chatbot</h4>
          </div>
          <div class="row">
            <h4>Belajar Javascript Dasar</h4>
            <h4>Belajar Dasar Google Cloud</h4>
          </div>
        </article>
      </section>

      <section class="reviewer-action-section">
        <div class="reviewer-action">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 48 49"
          >
            <path
              fill="#FFFFFF"
              d="M6 6.936h36a2 2 0 012 2v32a2 2 0 01-2 2H6a2 2 0 01-2-2v-32a2 2 0 012-2zm26.928 25.072L40 24.934l-7.072-7.072-2.828 2.832 4.244 4.24-4.244 4.242 2.828 2.83zm-19.272-7.073l4.244-4.241-2.828-2.83L8 24.935l7.072 7.072 2.828-2.833-4.244-4.24zm8.832 10l7.28-20h-4.256l-7.28 20h4.256z"
            ></path>
          </svg>
          <h1>Kenal lebih dekat dengan kami!</h1>
          <p>
            Sebagai platform edukasi teknologi, pengembangan skill para
            developer adalah fokus Dicoding. Untuk mencapainya, tersedia
            berbagai kelas online, program pelatihan, dan sertifikasi
            pemrograman dengan kualitas yang terjamin serta 2 layanan utama:
            Code Review & Forum Diskusi.
          </p>

          <div class="row">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 48 49"
              width="24"
              height="24"
              class="mr-2"
            >
              <path
                stroke="#ffffff"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M24 44.935c11.046 0 20-8.954 20-20 0-11.045-8.954-20-20-20s-20 8.955-20 20c0 11.046 8.954 20 20 20z"
              ></path>
              <path fill="#ffffff" d="M20 16.936l12 8-12 8v-16z"></path>
            </svg>
            <p>Tonton Video</p>
          </div>
        </div>
      </section>

      <section class="other-pillars">
        <article>
          <article>
            <h1>Bergabung dengan jaringan developer terbesar</h1>
            <p>
              Selain belajar di Academy, Anda juga bisa mengikuti kegiatan dan
              layanan kami yang lain.
            </p>
            <div class="row">
              <button>CHALLENGE</button>
              <button>EVENT</button>
              <button>JOB</button>
            </div>
          </article>
          <hr />
          <article>
            <h1>Dicoding Challenge</h1>
            <p>
              Kami telah menyelenggarakan berbagai macam challenge dengan jutaan
              hadiah. Dengan platform Challenge, developer bisa mengasah skill
              yang dipelajari dari Academy. Lihat Challenge
            </p>
            <a href="https://www.dicoding.com/challenges" target="_blank">
              <h4>Lihat Challenge &rarr;</h4>
            </a>
          </article>
        </article>
        <div class="img">
          <img
            src="./assets/images/homepage-dicoding-challenge-illustration.png"
            alt="Dicoding Challenge"
          />
        </div>
      </section>

      <section class="student-testimonies">
        <h1>Testimoni Siswa</h1>
        <article class="row testimoni-card">
          <article>
            <p>
              “Saya khusus mendedikasikan waktu saya untuk belajar ngoding. Di
              Dicoding belajarnya step by step, library-nya up-to-date. Kalau
              ada eror, nggak bingung. Di sini saya juga belajar untuk nggak
              asal coding. CV pun jadi bagus. Saya jadi percaya diri.”
            </p>
            <p>Emrycho C.J. Simanungkalit,</p>
            <p>Product Engineer - <span class="bold">Gojek</span></p>
            <p>Lulusan Android Developer Learning Path</p>
          </article>

          <img
            src="./assets/images/homepage-testimony-emrycho-cj.png"
            alt=""
            width="475px"
          />
        </article>
      </section>

      <section class="registration-cta">
        <h1>Tunggu apa lagi?</h1>
        <p>Belajar lebih terarah dengan learning path dan code review</p>
        <button class="btn primary-btn--outline">BUAT AKUN</button>
      </section>
    </main>

    <?php include "footer.html"; ?>

    <script src="slider.js"></script>
  </body>
</html>
<?php
  mysqli_close($conn);
?>