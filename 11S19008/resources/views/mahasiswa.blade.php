<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
    <title>Situs Web Mahasiswa S1 Informatika</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="logo-box">
          <img
            class="logo-img"
            src="{{asset('img/logo_itdel.jpeg')}}"
            alt="Logo-IT-Del"
          />
        </div>
        <div class="title-box">
          <h1 class="title-text">Situs Web Mahasiswa S1 Informatika</h1>
        </div>
        <div class="form-login-box">
          <a class="form-login-text" href="#" target="_blank"
            >Form Login</a
          >
        </div>
      </header>
      <div class="main">
        <article>
          <div class="data-box">
            <div class="data-head-box">
              <h2 class="data-head-text">
                Selamat Datang di Situs Web Rewina Pakpahan
              </h2>
            </div>

            @foreach($mahasiswa as $mhs) 

            <div class="data-main-box">
              <div class="data-list-box">
                <div class="data-list">
                  <span class="th">Nama</span><span class="titik-dua">:</span
                  ><span class="data">
                    {{$mhs->firstname}} {{$mhs->lastname}}
                  </span>
                </div>
                <div class="data-list">
                  <span class="th">NIM</span><span class="titik-dua">:</span
                  ><span class="data">
                    @if($mhs->id_mahasiswa < 10) 
                      11S1900{{$mhs->id_mahasiswa}}
                    @else
                      11S190{{$mhs->id_mahasiswa}}
                    @endif
                  </span>
                </div>
                
                <div class="data-list">
                  <span class="th">Prodi</span><span class="titik-dua">:</span
                  ><span class="data">
                    {{$mhs->program}}
                  </span>
                </div>
                <div class="data-list">
                  <span class="th">Akt</span><span class="titik-dua">:</span
                  ><span class="data">
                   {{$mhs->generation}}
                  </span>
                </div>
                <div class="data-list">
                  <span class="th">Status</span><span class="titik-dua">:</span
                  ><span class="data">
                    @if($mhs->status == 1)
                      Aktif
                    @else
                      Tidak Aktif
                    @endif
                  </span>
                </div>
                
              </div>
              <div class="data-img-box">
                <img
                  class="data-img"
                  src="{{asset('img/rewina.jpeg')}}"
                  alt="Alfrendo Photo"
                />
              </div>
            </div>

            @endforeach

          </div>
        </article>
        <nav>
          <ul class="nav-list">
            <li class="list"><a href="#" target="_blank">Home</a></li>
            <li class="list">
              <a href="#" target="_blank">Profil Diri</a>
            </li>
            <li class="list">
              <a href="#" target="_blank">Mahasiswa</a>
            </li>
          </ul>
        </nav>
      </div>
      <footer>
        <div class="footer-box">
          <p>Copyright@11S19008-2021</p>
        </div>
      </footer>
    </div>
  </body>
</html>
