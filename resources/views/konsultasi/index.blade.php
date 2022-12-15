@extends('layouts.app')

@section('content')
  <!-- consultant area -->
  <section class="flex flex-col items-center justify-center my-[5%] gap-[50px]">
    <!-- date -->
    <section class="flex flex-col gap-[60px] w-full">
      <div class="flex text-center flex-col gap-5 text-gray-600 w-[90%] self-center">
        <h1 class="font-bold text-[5vmin]">Konsultasi Taman</h1>
        <p>
          Klik dibawah ini untuk memilih tanggal dan waktu yang
          tersedia untuk memanggil konsultan kami
        </p>
      </div>

      <div class="flex justify-between items-center self-center w-[90%] flex-col md:flex-row gap-[25px] md:gap-0">
        {{-- Date --}}
        <div
          class="w-full md:w-[40%] shadow-[0px_2px_10px_rgba(17,17,26,0.1),_0px_4px_14px_rgba(17,17,26,0.1),_0px_8px_25px_rgba(17,17,26,0.1)] rounded-[5px]">
          <div class="md:p-8 p-5 bg-white rounded-[5px]">
            <div class="px-4 flex items-center justify-between">
              <span tabindex="0" class="focus:outline-none  text-base font-bold text-gray-800">October
                2022</span>
              <div class="flex items-center">
                <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="15 6 9 12 15 18" />
                  </svg>
                </button>
                <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right"
                    width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <polyline points="9 6 15 12 9 18" />
                  </svg>
                </button>

              </div>
            </div>
            <div class="flex items-center justify-between pt-12 overflow-x-auto">
              <table class="w-full">
                <thead>
                  <tr>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Mo</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Tu</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">We</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Th</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Fr</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Sa</p>
                      </div>
                    </th>
                    <th>
                      <div class="w-full flex justify-center">
                        <p class="text-base font-medium text-center text-gray-800">Su</p>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                    </td>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                    </td>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">1</p>
                      </div>
                    </td>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">2</p>
                      </div>
                    </td>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">3</p>
                      </div>
                    </td>
                    <td class="pt-6">
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">4</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">5</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">6</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">7</p>
                      </div>
                    </td>
                    <td>
                      <div class="w-full h-full">
                        <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                          <a role="link" tabindex="0"
                            class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-blue-400 focus:bg-blue-400 hover:bg-blue-400 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-blue-400 rounded-full">8</a>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">9</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">10</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">11</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">12</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">13</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">14</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">15</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">16</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">17</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">18</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">19</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">20</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">21</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">22</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">23</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">24</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500">25</p>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">26</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">27</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">28</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">29</p>
                      </div>
                    </td>
                    <td>
                      <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                        <p class="text-base text-gray-500 font-medium">30</p>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>


        {{-- Time --}}
        <div
          class="flex flex-col w-full md:w-[55%] bg-white rounded-[5px] shadow-[0px_2px_10px_rgba(17,17,26,0.1),_0px_4px_14px_rgba(17,17,26,0.1),_0px_8px_25px_rgba(17,17,26,0.1)] px-7 py-[31px] text-gray-600">

          <div class="flex flex-col self-center text-center">
            <h2 class="font-bold text-lg">Thursday</h2>
            <span>October 8, 2022</span>
          </div>

          <div class="flex flex-col mt-[40px] mb-[20px]">
            <h2 class="font-bold text-lg">Pilih Waktu</h2>
            <span>Durasi Konsultasi 30 Menit</span>
          </div>

          <div class="flex font-bold flex-wrap justify-between">
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">09.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">13.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">10.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">14.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">11.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">15.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">12.00</button>
            <button
              class="border-[1px] flex-wrap p-1 text-blue-400 rounded-[5px] w-[48%] mb-2 border-gray-500 hover:bg-blue-400 hover:border-blue-400 hover:text-white duration-200">16.00</button>
          </div>
        </div>
      </div>
    </section>

    <!-- form -->
    <section
      class="flex flex-col min-h-screen w-[90%] bg-white rounded-[5px] shadow-[0px_2px_10px_rgba(17,17,26,0.1),_0px_4px_14px_rgba(17,17,26,0.1),_0px_8px_25px_rgba(17,17,26,0.1)]">
      <div class="flex flex-col gap-[30px] m-[50px]">
        <h1 class="font-bold text-[5vmin] text-gray-600">
          Informasi Data Diri
        </h1>
        <div class="flex w-full gap-5 flex-col lg:flex-row">
          <div class="flex flex-col gap-2 lg:w-[40%] w-full">
            <label for="" class="font-bold text-gray-600">Nama Lengkap</label>
            <input type="text" placeholder="Yudha Wahyu" class="outline-none p-1 px-2 rounded-[5px] bg-gray-100" />
          </div>
          <div class="flex flex-col gap-2 lg:w-[40%] w-full">
            <label for="">No HP</label>
            <input type="text" placeholder="+62 852 2324 4747"
              class="outline-none p-1 px-2 rounded-[5px] bg-gray-100" />
          </div>
        </div>

        <div class="flex items-start gap-5 lg:w-[70%] w-full flex-col lg:flex-row">
          <label for="">Alamat</label>
          <div class="flex flex-col gap-[30px] border-[2px] border-green-600 rounded-[5px] px-5 pt-5 pb-2">
            <ul>
              <li>
                Jl. serangkai 1 Perum. Bumi Jaya blok A No.
                12 Kelurahan samping, Kecamatan Baru, Kota
                Tanjungpinang, Kepulauan Riau 29125,
                Indonesia
              </li>
            </ul>

            <button class="self-end text-green-600 underline underline-offset-2">Tambah Alamat Baru</button>
          </div>
        </div>
      </div>

      <hr class="mt-[50px] border-gray-300" />

      <div class="m-[50px] flex flex-col justify-center gap-[30px]">
        <h1 class="font-bold text-[5vmin] text-gray-600">
          Informasi Konsultasi Taman
        </h1>

        <div class="flex flex-col gap-[50px]">
          <div class="flex flex-col gap-3">
            <div class="text-gray-600 flex flex-col gap-2">
              <h2 class="font-bold text-lg">Lahan Taman</h2>
              <p>
                Pilih jumlah lahan taman yang akan dibuat.
              </p>
            </div>

            <div class="flex gap-5 flex-col lg:flex-row">
              <button
                class="border-[1px] p-2 text-green-700 rounded-[5px] w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                1 Lahan Taman
              </button>
              <button
                class="border-[1px] p-2 text-green-700 rounded-[5px] w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                2 Lahan Taman
              </button>
              <button
                class="border-[1px] p-2 text-green-700 rounded-[5px] w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                Lebih dari 2 Lahan Taman
              </button>
            </div>
          </div>

          <div class="flex flex-col gap-4">
            <div class="text-gray-600 flex flex-col gap-2">
              <h2 class="font-bold text-lg">Tema Taman</h2>
              <p>Pilih tema yang akan dibuat.</p>
            </div>

            <div class="bg-orange-100 p-4 lg:w-[70%] w-full rounded-[10px]">
              <p>
                <b>Catatan :</b> Jika anda belum memiliki
                inspirasi tema taman maka anda bisa melewati
                tahapan ini, konsultan kami akan memberikan
                rekomendasi terbaik untuk taman anda.
              </p>
            </div>

            <div class="flex items-center justify-between mt-5 flex-col lg:flex-row gap-8 lg:gap-0">
              <div class="flex justify-center items-center">
                <div
                  class="flex flex-col max-w-[320px] h-[425px] rounded-[10px] overflow-hidden border-[#d8e6db] border-[2px] text-gray-600">
                  <img class="w-full rounded-[10px]" src="{{ asset('assets/garden1.jpg') }}"
                    alt="Sunset in the mountains" />

                  <div class="px-6 py-4 h-full">
                    <div class="font-bold text-[18px] mb-2">
                      Taman Minimalis
                    </div>
                    <p class="text-gray-700 text-[14px]">
                      Taman yang indah dilahan yang
                      sempit.
                    </p>
                  </div>

                  <button
                    class="w-fit underline underline-offset-2 text-green-600 self-end p-2 hover:text-green-700 duration-200">
                    Pilih
                  </button>
                </div>
              </div>
              <div class="flex justify-center items-center">
                <div
                  class="flex flex-col max-w-[320px] h-[425px] rounded-[10px] overflow-hidden border-[#d8e6db] border-[2px] text-gray-600">
                  <img class="w-full rounded-[10px]" src="{{ asset('assets/garden2.jpg') }}"
                    alt="Sunset in the mountains" />

                  <div class="px-6 py-4 h-full">
                    <div class="font-bold text-[18px] mb-2">
                      Taman Kering
                    </div>
                    <p class="text-gray-700 text-[14px]">
                      Taman yang dirancang untuk
                      menghasilkan suasana alam
                      didalam dan diluar rumah.
                    </p>
                  </div>

                  <button
                    class="w-fit underline underline-offset-2 text-green-600 self-end p-2 hover:text-green-700 duration-200">
                    Pilih
                  </button>
                </div>
              </div>
              <div class="flex justify-center items-center">
                <div
                  class="flex flex-col max-w-[320px] h-[425px] rounded-[10px] overflow-hidden border-[#d8e6db] border-[2px] text-gray-600">
                  <img class="w-full rounded-[10px]" src="{{ asset('assets/garden3.jpg') }}"
                    alt="Sunset in the mountains" />

                  <div class="px-6 py-4 h-full">
                    <div class="font-bold text-[18px] mb-2">
                      Taman Minimalis
                    </div>
                    <p class="text-gray-700 text-[14px]">
                      Taman yang yang paling sesuai
                      dengan iklim di indonesia.
                    </p>
                  </div>

                  <button
                    class="w-fit underline underline-offset-2 text-green-600 self-end p-2 hover:text-green-700 duration-200">
                    Pilih
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-[10px] text-gray-600">
            <h2 class="font-bold text-lg">
              Estimasi Ukuran Taman
            </h2>
            <div class="flex gap-[20px] flex-col lg:flex-row">
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                &lt;10m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                11-20m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                21-30m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                31-40m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                41-50m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                51-60m2
              </button>
              <button
                class="border-[2px] p-1 text-green-700 rounded-[5px] px-5 w-auto border-green-700 hover:bg-green-700 hover:text-white duration-200">
                &gt;100m2
              </button>
            </div>
          </div>
        </div>

        <div class="self-end mt-[10%]">
          <button
            class="border-[1px] p-2 text-gray-600 rounded-[5px] w-[70px] bg-gray-200 hover:bg-gray-400 duration-200">
            Batal
          </button>
          <button
            class="border-[1px] p-2 bg-green-700 rounded-[5px] w-[70px] text-white hover:bg-green-800 duration-200">
            Oke
          </button>
        </div>
      </div>
    </section>
  </section>
@endsection
