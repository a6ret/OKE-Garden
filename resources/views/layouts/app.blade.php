<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'OKE GARDEN') }}</title>
  <link rel="icon" href="{{ asset('assets/title-logo.jpg') }}" type="image/x-icon" />
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="{{ asset('js/script.js') }}" defer></script>
</head>

<body>
  <div id="app">
    <nav class="sticky flex top-0 justify-between items-center py-[15px] px-[30px] bg-white shadow-md">
      <a href="{{ url('/') }}">
        <img src="{{ asset('assets/logo.png') }}" alt="" class="lg:w-[200px] w-[150px]" />
      </a>
      <ul class="hidden lg:flex justify center items-center gap-[40px] text-[17px] font-[500] text-gray-600">
        <li>Beranda</li>
        <li>
          <a href="#" class="dropdown-layanan">Layanan</a>
          <ul
            class="toggle-layanan absolute mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Pesan Taman
              </li>
            </a>
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Pesan Desain
              </li>
            </a>
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Konsultasi Online
              </li>
            </a>
          </ul>
        </li>
        <li>
          <a href="#" class="dropdown-blog">Blog</a>
          <ul
            class="toggle-blog absolute mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Blog 1
              </li>
            </a>
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Blog 2
              </li>
            </a>
          </ul>
        </li>
        <li>
          <a href="#" class="dropdown-mitra">Mitra</a>
          <ul
            class="toggle-mitra absolute mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Mitra 1
              </li>
            </a>
            <a href="#">
              <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                Mitra 2
              </li>
            </a>
          </ul>
        </li>
      </ul>

      <div class="flex flex-col">
        <img src="{{ asset('assets/person.jpg') }}" alt=""
          class="dropdown-profil w-[40px] cursor-pointer rounded-[50%] hidden lg:flex" />

        <ul
          class="toggle-profil absolute right-20 bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
          <a href="#">
            <li class="hover:bg-gray-200 py-1 duration-200 px-5">
              Pengaturan
            </li>
          </a>
          <a href="#">
            <li class="hover:bg-gray-200 py-1 duration-200 px-5">
              Keluar
            </li>
          </a>
        </ul>
      </div>
      <button class="hamburgerMenu lg:hidden w-10 border-[1px] p-2 hover:bg-gray-200 duration-200 rounded-[5px]">
        <img src="{{ asset('assets/menu-icon.svg') }}" />
      </button>
    </nav>

    <!-- Mobile menu -->
    <div class="mobile-menu toggle-mobile-menu">
      <div class="overlay-mobile-menu fixed top-0 left-0 bg-black z-[100] h-screen w-full opacity-[0.5]"></div>
      <nav class="fixed lg:hidden flex flex-col top-0 right-0 h-screen w-[60%] bg-white z-[101] py-5 px-4 gap-[50px]">
        <div class="flex justify-between items-center">
          <img src="{{ asset('assets/logo.png') }}" alt="" class="lg:w-[200px] w-[150px]" />
          <button class="closeIcon lg:w-10 w-7 border-[1px] lg:p-2 p-1 hover:bg-gray-200 duration-200 rounded-[5px]">
            <img src="{{ asset('assets/close-icon.svg') }}" alt="" />
          </button>
        </div>

        <ul class="flex flex-col justify-center gap-[10px] text-[3vmin] font-[500] text-gray-600">
          <li>Beranda</li>
          <li>
            <a href="#" class="dropdown-layanan-mobile">Layanan</a>
            <ul
              class="toggle-layanan-mobile relative mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Pesan Taman
                </li>
              </a>
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Pesan Desain
                </li>
              </a>
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Konsultasi Online
                </li>
              </a>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-blog-mobile">Blog</a>
            <ul
              class="toggle-blog-mobile relative mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Blog 1
                </li>
              </a>
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Blog 2
                </li>
              </a>
            </ul>
          </li>
          <li>
            <a href="#" class="dropdown-mitra-mobile">Mitra</a>
            <ul
              class="toggle-mitra-mobile relative mt-[15px] bg-white py-2 rounded-md shadow-[0px_4px_16px_rgba(17,17,26,0.1),_0px_8px_24px_rgba(17,17,26,0.1),_0px_16px_56px_rgba(17,17,26,0.1)]">
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Mitra 1
                </li>
              </a>
              <a href="#">
                <li class="hover:bg-gray-200 py-1 duration-200 px-5">
                  Mitra 2
                </li>
              </a>
            </ul>
          </li>
        </ul>

        <div class="flex items-center w-full gap-3 text-[3vmin] flex-col lg:flex-row">
          <button class="border-[1px] p-2 bg-green-700 rounded-[5px] w-full text-white hover:bg-green-800 duration-200">
            Daftar
          </button>
          <button
            class="border-[1px] p-2 text-green-700 rounded-[5px] w-full border-green-700 hover:bg-green-700 hover:text-white duration-200">
            Masuk
          </button>
        </div>
      </nav>
    </div>
  </div>

  <main class="">
    @yield('content')
  </main>

  <footer>
  </footer>
</body>

</html>
