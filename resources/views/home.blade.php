@extends('layouts.app')

@section('content')

<!-- ================= HERO SLIDER ================= -->
<div x-data="slider()" x-init="start()" class="relative h-[420px] w-full overflow-hidden">

    <template x-for="(slide, index) in slides" :key="index">
        <div x-show="current === index"
            x-transition:enter="transition ease-in-out duration-1000"
            x-transition:enter-start="opacity-0 scale-105"
            x-transition:enter-end="opacity-100 scale-100"
            class="absolute inset-0">

            <img :src="slide.image" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/50"></div>

            <div class="absolute inset-0 flex items-center justify-center text-center text-white px-4">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold" x-text="slide.title"></h1>
                    <p class="mt-3 text-lg" x-text="slide.desc"></p>
                </div>
            </div>
        </div>
    </template>

    <!-- DOT -->
    <div class="absolute bottom-5 left-1/2 -translate-x-1/2 flex gap-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="current = index"
                :class="current === index ? 'bg-white' : 'bg-white/50'"
                class="w-3 h-3 rounded-full"></button>
        </template>
    </div>

</div>


<!-- ================= SAMBUTAN ================= -->
<section class="max-w-7xl mx-auto px-4 py-16">
    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 flex flex-col md:flex-row gap-8 items-center">

        <div class="md:w-1/3 text-center">
            <img src="{{ asset('images/kepsek.png') }}"
                class="w-52 mx-auto rounded-xl shadow hover:scale-105 transition">

            <h3 class="mt-4 text-lg font-bold">Sri Wahyuni, S.Pd.</h3>
            <p class="text-gray-500">Kepala Sekolah</p>
        </div>

        <div class="md:w-2/3 text-gray-700">
            <h2 class="text-2xl font-bold mb-4 text-green-700">
                Sambutan Kepala Sekolah
            </h2>

            <div class="space-y-5 text-gray-700 leading-loose text-justify">
                <p class="mb-3">Assalamu’alaikum Warahmatullahi Wabarakatuh.</p>

                <p class="mb-3">
                    Website resmi SDN Kuin Utara 4 Banjarmasin hadir sebagai media informasi,
                    komunikasi, dan publikasi kegiatan sekolah.
                    Kami berkomitmen memberikan pendidikan berkualitas,
                    membentuk karakter siswa berakhlak mulia,
                    serta menciptakan lingkungan belajar yang inovatif.
                </p>

                <p class="font-semibold mt-4">
                    Wassalamu’alaikum Warahmatullahi Wabarakatuh.
                </p>
            </div>

        </div>
</section>


<!-- STATISTIK -->
<section class="bg-gradient-to-r from-green-700 to-green-500 py-16">
    <div class="max-w-6xl mx-auto px-6">

        <div class="grid md:grid-cols-3 gap-6 text-center">

            <!-- CARD 1 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 animate-float hover:scale-105 transition duration-300">
                <h2 class="text-5xl font-bold text-green-700 counter" data-target="341">0</h2>
                <p class="text-gray-600 mt-2 text-lg">Siswa Aktif</p>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 animate-float delay-1 hover:scale-105 transition duration-300">
                <h2 class="text-5xl font-bold text-green-700 counter" data-target="21">0</h2>
                <p class="text-gray-600 mt-2 text-lg">Guru & Tendik</p>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white rounded-2xl shadow-lg p-8 animate-float delay-2 hover:scale-105 transition duration-300">
                <h2 class="text-5xl font-bold text-green-700">A</h2>
                <p class="text-gray-600 mt-2 text-lg">Akreditasi</p>
            </div>

        </div>

    </div>
</section>

<style>
    @keyframes floating {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-12px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-float {
        animation: floating 3s ease-in-out infinite;
    }

    .delay-1 {
        animation-delay: 0.5s;
    }

    .delay-2 {
        animation-delay: 1s;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.counter');

        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            let count = 0;

            function updateCounter() {
                count = 0;

                const interval = setInterval(() => {
                    count += Math.ceil(target / 50);

                    if (count >= target) {
                        counter.innerText = target;
                        clearInterval(interval);
                    } else {
                        counter.innerText = count;
                    }
                }, 30);
            }

            updateCounter();

            // ulang setiap 5 detik
            setInterval(updateCounter, 5000);
        });
    });
</script>



<!-- ================= SEJARAH ================= -->
<section class="bg-white py-20">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-green-800">
                Sejarah Sekolah
            </h2>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-start">

            <!-- FOTO -->
            <div class="animate-left">
                <img src="{{ asset('images/sejarah.jpeg') }}"
                    class="rounded-2xl shadow-xl w-full h-[500px] object-cover"
                    alt="Sejarah Sekolah">
            </div>

            <!-- Isi Sejarah -->
            <div class="text-gray-700 leading-relaxed text-lg space-y-6 animate-right">

                <div>
                    <h3 class="text-2xl font-semibold text-green-700 mb-3">
                        Riwayat Singkat Sekolah
                    </h3>

                    <p class="mb-2">
                        <strong>a. Nama Sekolah</strong>
                    </p>

                    <ul class="list-disc pl-6 space-y-2">
                        <li><strong>SR Cerucuk 2</strong> (1942 – 1950)</li>
                        <li><strong>SD Patih Masih</strong> (1950 – 1981)</li>
                        <li><strong>SDN Kuin Utara 4</strong> (1981 – Sekarang)</li>
                    </ul>
                </div>

                <div>
                    <p class="mb-3">
                        <strong>b. Riwayat Akreditasi</strong>
                    </p>

                    <ul class="list-disc pl-6 space-y-3 text-base">
                        <li>
                            <strong>2002</strong> — Mendapat akreditasi
                            <span class="font-semibold text-yellow-600">C (Cukup)</span>,
                            berlaku 01 Januari 2003 s.d. 31 Desember 2006.
                        </li>

                        <li>
                            <strong>2007</strong> — Meningkat menjadi akreditasi
                            <span class="font-semibold text-blue-600">B (Baik)</span>,
                            berlaku 01 Januari 2007 s.d. 31 Desember 2011.
                        </li>

                        <li>
                            <strong>2010</strong> — Kembali memperoleh akreditasi
                            <span class="font-semibold text-blue-600">B (Baik)</span>,
                            berlaku 01 Januari 2011 s.d. 31 Desember 2015.
                        </li>

                        <li>
                            <strong>2015</strong> — Meraih akreditasi
                            <span class="font-semibold text-green-600">A (Amat Baik)</span>,
                            berlaku 01 November 2015 s.d. 31 Oktober 2020.
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>

<!-- CSS ANIMASI -->
<style>
    @keyframes slideLeft {
        from {
            opacity: 0;
            transform: translateX(-80px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slideRight {
        from {
            opacity: 0;
            transform: translateX(80px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-left {
        animation: slideLeft 1.5s ease forwards;
    }

    .animate-right {
        animation: slideRight 1.5s ease forwards;
    }
</style>

<!-- ================= DATA SISWA ================= -->
<section class="bg-gray-100 py-14">

    <!-- Judul -->
    <div class="text-center mb-8">
        <h2 class="text-3xl font-bold text-green-800">
            Data Siswa
        </h2>
        <div class="w-20 h-1 bg-green-500 mx-auto mt-3 rounded-full"></div>
    </div>

    <div class="max-w-4xl mx-auto px-6">

        <!-- Card putih -->
        <div class="bg-white rounded-3xl shadow-lg p-6 md:p-8 animate-up">

            <!-- Statistik -->
            <div class="grid md:grid-cols-2 gap-5 mb-8">

                <!-- Laki-laki -->
                <div class="bg-blue-100 rounded-2xl shadow p-6 text-center">
                    <h2 class="text-4xl font-bold text-blue-700">143</h2>
                    <p class="text-gray-700 mt-2 text-lg">
                        Siswa Laki-laki
                    </p>
                </div>

                <!-- Perempuan -->
                <div class="bg-pink-100 rounded-2xl shadow p-6 text-center">
                    <h2 class="text-4xl font-bold text-pink-700">198</h2>
                    <p class="text-gray-700 mt-2 text-lg">
                        Siswa Perempuan
                    </p>
                </div>

            </div>

            <!-- Diagram -->
            <div class="w-56 h-56 mx-auto">
                <canvas id="myChart"></canvas>
            </div>

        </div>
    </div>
</section>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Laki-laki', 'Perempuan'],
            datasets: [{
                data: [143, 198],
                backgroundColor: [
                    '#3B82F6',
                    '#EC4899'
                ],
                borderColor: '#ffffff',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 30,
                        font: {
                            size: 12
                        }
                    }
                }
            }
        }
    });
</script>

<!-- CSS ANIMASI -->
<style>
    @keyframes naikTurun {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-8px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-up {
        animation: naikTurun 3s ease-in-out infinite;
    }
</style>

<!--berita-->
<section class="min-h-screen bg-gradient-to-b from-green-50 to-white py-16">

    <div class="max-w-5xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-green-800">
                Berita Sekolah
            </h1>
            <div class="w-24 h-1 bg-green-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

            <!-- Berita 1 -->
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition animate-berita">

                <img src="{{ asset('images/berita5.jpeg') }}"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <span class="inline-block bg-green-600 text-white text-sm px-4 py-1 rounded-lg mb-4">
                        PRESTASI
                    </span>

                    <h2 class="text-xl font-bold text-gray-800 mb-3">
                        Prestasi Gemilang Siswa SDN Kuin Utara 4 Banjarmasin
                    </h2>
                </div>
            </div>


            <!-- Berita 2 -->
            <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:shadow-xl transition animate-berita delay-berita">

                <img src="{{ asset('images/jumat-takwa.jpeg') }}"
                    class="w-full h-56 object-cover">

                <div class="p-6">
                    <span class="inline-block bg-green-600 text-white text-sm px-4 py-1 rounded-lg mb-4">
                        KEGIATAN
                    </span>

                    <h2 class="text-xl font-bold text-gray-800 mb-3">
                        Kegiatan Jum'at Takwa Sekolah
                    </h2>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- CSS ANIMASI BERITA -->
<style>
    @keyframes beritaFloat {
        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-15px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .animate-berita {
        animation: beritaFloat 3s ease-in-out infinite;
    }

    .delay-berita {
        animation-delay: 0.8s;
    }
</style>

<!-- ================= MAPS & KONTAK ================= -->
<section class="relative bg-green-50 py-16 overflow-hidden">

    <!-- BLUR BACKGROUND -->
    <div class="absolute -top-20 -left-20 w-96 h-96 bg-green-400 rounded-full opacity-40 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-green-500 rounded-full opacity-40 blur-3xl"></div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-7xl mx-auto px-4 grid md:grid-cols-2 gap-8 items-center">

        <!-- MAP -->
        <div class="h-[400px] rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
            <iframe
                src="https://www.google.com/maps?q=SDN%20Kuin%20Utara%204%20Banjarmasin&output=embed"
                class="w-full h-full border-0"
                loading="lazy">
            </iframe>
        </div>

        <!-- KONTAK -->
        <div class="bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-2xl shadow-xl hover:scale-105 transition duration-300">

            <h2 class="text-2xl font-bold text-green-700 mb-6">
                Informasi Kontak
            </h2>

            <div class="space-y-5 text-gray-700">

                <div class="flex gap-3">
                    <div class="bg-green-200 p-2 rounded-full">📍</div>
                    <div>
                        <p class="font-semibold text-green-800">Alamat</p>
                        <p class="text-gray-600">
                            Jl. Hksn, Kuin Utara, Kec. Banjarmasin, Kalimantan Selatan
                        </p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="bg-green-200 p-2 rounded-full">📞</div>
                    <div>
                        <p class="font-semibold text-green-800">Telepon</p>
                        <p class="text-gray-600">0851-2620-0356</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="bg-green-200 p-2 rounded-full">✉️</div>
                    <div>
                        <p class="font-semibold text-green-800">Email</p>
                        <p class="text-gray-600">sdnku4bjm@gmail.com</p>
                    </div>
                </div>

                <div class="flex gap-3">
                    <div class="bg-green-200 p-2 rounded-full">⏰</div>
                    <div>
                        <p class="font-semibold text-green-800">Jam Operasional</p>
                        <p class="text-gray-600">Senin - Kamis: 07.30 - 14.30</p>
                        <p class="text-gray-600">Jum'at: 07.30 - 11.00</p>
                        <p class="text-gray-600">Sabtu: 07.30 - 13.30</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- ================= SCRIPT ================= -->
<script>
    function slider() {
        return {
            current: 0,
            slides: [{
                    image: "{{ asset('images/sekolah.jpeg') }}",
                    title: "SDN Kuin Utara 4 Banjarmasin",
                    desc: "Sekolah Berprestasi & Berakhlak Mulia"
                },
                {
                    image: "{{ asset('images/berita1.jpeg') }}",
                    title: "Kegiatan Belajar",
                    desc: "Suasana belajar aktif"
                },
            ],
            start() {
                setInterval(() => {
                    this.current = (this.current + 1) % this.slides.length
                }, 4000)
            }
        }
    }
</script>

@endsection