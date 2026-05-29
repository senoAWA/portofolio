<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <title>Seno Adi Wijaya — Portfolio</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script>
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body
    class="bg-zinc-50 dark:bg-[#09090b] text-zinc-800 dark:text-neutral-200 selection:bg-black selection:text-white dark:selection:bg-white dark:selection:text-black antialiased font-sans transition-colors duration-300 ease-in-out">
    <div class="max-w-5xl mx-auto px-2 sm:px-6 md:px-8">

        <nav class="flex items-center justify-between py-6 md:py-8 border-b border-zinc-200/80 dark:border-zinc-800/60">
            <h1
                class="text-xl font-bold tracking-tight text-zinc-900 dark:text-white hover:opacity-80 transition-all duration-200 cursor-pointer">
                exdev<span class="text-blue-500 animate-pulse">.</span>
            </h1>

            <div class="flex items-center gap-5 sm:gap-6 text-sm font-medium">
                <a href="#experience"
                    class="text-zinc-500 dark:text-neutral-400 hover:text-zinc-900 dark:hover:text-white transition-colors duration-200">
                    experience
                </a>
                <a href="#projects"
                    class="text-zinc-500 dark:text-neutral-400 hover:text-zinc-900 dark:hover:text-white transition-colors duration-200">
                    projects
                </a>

                <button id="theme-toggle"
                    class="text-zinc-500 dark:text-neutral-400 hover:text-zinc-900 dark:hover:text-white text-lg p-2 grid place-items-center rounded-xl bg-zinc-100 dark:bg-zinc-900 hover:bg-zinc-200 dark:hover:bg-zinc-800/80 transition-all duration-200"
                    aria-label="Toggle Theme">
                    <i id="theme-icon" class="ph ph-moon"></i>
                </button>
            </div>
        </nav>

        <section class="mt-8 md:mt-28 max-w-4xl">
            <div
                class="inline-flex items-center gap-2 bg-blue-50/60 dark:bg-blue-950/30 border border-blue-200/80 dark:border-blue-900/50 text-blue-600 dark:text-blue-400 text-xs px-3 py-1 rounded-full font-semibold tracking-wider uppercase">
                <span>hello there👋, i'm</span>
            </div>

            <h1
                class="text-4xl sm:text-5xl md:text-7xl font-bold mt-5 tracking-tight text-zinc-900 dark:text-white leading-tight md:leading-none">
                Seno Adi Wijaya
            </h1>

            <p class="text-lg md:text-2xl mt-4 text-zinc-600 dark:text-neutral-400 font-medium tracking-tight">
                18 years old <span class="text-zinc-300 dark:text-zinc-800 mx-2">•</span> he/him
            </p>

            <p class="text-zinc-600 dark:text-neutral-400 mt-6 text-base md:text-xl max-w-3xl leading-relaxed font-normal">
                Fresh graduate SMK Rekayasa Perangkat Lunak yang memiliki minat dan focus tinggi dalam membangun
                aplikasi web modern, interaktif, dan scalable.
            </p>

            <div class="flex flex-wrap items-center gap-4 sm:gap-6 mt-8 md:mt-12">
                <a href="https://drive.google.com/file/d/1XSED0TQv0zD3AXsc-c3Ondoy9FQQ9f4E/view?usp=drive_link"
                    class="w-full sm:w-auto text-center bg-zinc-900 dark:bg-neutral-100 text-white dark:text-zinc-950 hover:bg-zinc-800 dark:hover:bg-white px-6 py-3 rounded-xl font-semibold text-sm transition-all duration-200 shadow-sm hover:shadow active:scale-[0.98]">
                    View CV
                </a>

                <div class="flex gap-1.5 text-xl text-zinc-500 dark:text-neutral-400 mx-auto sm:mx-0">
                    <a href="mailto:senoa5995@gmail.com"
                        class="hover:text-zinc-900 dark:hover:text-white p-2.5 hover:bg-zinc-100 dark:hover:bg-zinc-900 rounded-xl transition-all duration-200"
                        aria-label="Email"><i class="ph ph-envelope-simple"></i></a>
                    <a href="https://github.com/senoAWA"
                        class="hover:text-zinc-900 dark:hover:text-white p-2.5 hover:bg-zinc-100 dark:hover:bg-zinc-900 rounded-xl transition-all duration-200"
                        aria-label="Github"><i class="ph ph-github-logo"></i></a>
                    <a href="https://www.linkedin.com/in/seno-adi-wijaya-197496384/"
                        class="hover:text-zinc-900 dark:hover:text-white p-2.5 hover:bg-zinc-100 dark:hover:bg-zinc-900 rounded-xl transition-all duration-200"
                        aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
                </div>
            </div>
        </section>

        <section class="mt-8 md:mt-32 border-t border-zinc-200/80 dark:border-zinc-800/60 pt-12 md:pt-16">
            <h2 class="text-xl md:text-2xl font-bold tracking-tight text-zinc-900 dark:text-white mb-4 md:mb-6">
                about me
            </h2>
            <p
                class="text-zinc-600 dark:text-neutral-400 text-sm sm:text-base md:text-lg leading-relaxed max-w-4xl text-justify sm:text-left font-normal">
                Halo, saya Seno, lulusan Rekayasa Perangkat Lunak yang memiliki keahlian dalam pengembangan website dan
                aplikasi berbasis web, termasuk HTML, CSS, JavaScript, serta manajemen database. Saya terbiasa
                menggunakan Git dan memiliki pemahaman dasar mengenai analisis sistem, debugging, dan problem solving.
                Saya memiliki semangat untuk terus belajar dan mengembangkan kemampuan di bidang software development,
                serta siap berkontribusi dalam lingkungan profesional.
            </p>
        </section>

        <section class="mt-8 md:mt-12">
            <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-400 dark:text-zinc-500 mb-3">
                skills & technologies
            </h3>
            <p class="text-zinc-500 dark:text-neutral-400 text-sm mb-5 max-w-2xl">
                Berikut adalah beberapa *tech stack*, tools, dan bahasa pemrograman yang biasa saya gunakan untuk
                membangun serta mengoptimalkan performa aplikasi web:
            </p>
            <div class="flex flex-wrap gap-2">
                @foreach (['HTML', 'CSS', 'JavaScript', 'Laravel', 'MySQL', 'Tailwind CSS', 'React.js', 'Figma', 'Git'] as $skill)
                    <span
                        class="bg-zinc-100/80 dark:bg-zinc-900/40 border border-zinc-200/80 dark:border-zinc-800/60 text-zinc-700 dark:text-neutral-300 px-3 py-1.5 rounded-xl text-xs font-medium tracking-wide transition-colors duration-200 hover:border-zinc-300 dark:hover:border-zinc-700">
                        {{ $skill }}
                    </span>
                @endforeach
            </div>
        </section>

        <section id="experience" class="mt-12 md:mt-36 border-t border-zinc-200/80 dark:border-zinc-800/60 pt-12 md:pt-16">
            <h2 class="text-xl md:text-2xl font-bold tracking-tight text-zinc-900 dark:text-white mb-10 md:mb-14">
                experience
            </h2>

            <div class="space-y-14">
                <div class="relative border-l border-zinc-200 dark:border-zinc-800 pl-6 md:pl-8 group">
                    <div
                        class="absolute -left-[4.5px] top-2 w-2 h-2 rounded-full bg-zinc-300 dark:bg-zinc-700 group-hover:bg-blue-500 group-hover:scale-125 transition-all duration-300">
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-2">
                        <div>
                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                <h3
                                    class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white tracking-tight group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-200">
                                    Web Developer
                                </h3>
                                <span
                                    class="bg-zinc-100 dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 text-zinc-500 dark:text-neutral-400 px-2 py-0.5 rounded-md text-xs font-medium">
                                    Ciamis, Jawa Barat
                                </span>
                            </div>
                            <p class="text-zinc-600 dark:text-neutral-400 mt-1.5 text-sm font-medium">
                                at Exdev ID <span class="text-zinc-400 dark:text-zinc-600 font-normal">(Personal
                                    Project)</span>
                            </p>
                        </div>
                        <p class="text-zinc-400 dark:text-zinc-500 text-xs md:text-sm font-medium pt-0.5 tracking-wide">
                            Jan 2026 - Sekarang
                        </p>
                    </div>

                    <ul class="mt-4 space-y-2.5 text-sm text-zinc-600 dark:text-neutral-400 list-disc list-inside leading-relaxed">
                        <li>Mengembangkan aplikasi web modern dan responsif menggunakan Laravel dan JavaScript.</li>
                        <li>Membangun antarmuka pengguna dengan React.js, Tailwind CSS, dan Blade.</li>
                        <li>Mengelola database dan logika aplikasi menggunakan MySQL dan Laravel.</li>
                        <li>Menggunakan Git dan GitHub untuk version control dan kolaborasi tim.</li>
                        <li>Membuat dan mengimplementasikan desain UI/UX dari Figma menjadi website fungsional.</li>
                    </ul>

                    <div class="flex flex-wrap gap-2 mt-5">
                        @foreach (['laravel', 'mysql', 'tailwindcss', 'blade', 'figma', 'github'] as $tech)
                            <span
                                class="bg-zinc-100/60 dark:bg-zinc-900/30 text-zinc-500 dark:text-neutral-400 border border-zinc-200/80 dark:border-zinc-800/60 px-2.5 py-0.5 rounded-md text-xs font-medium tracking-wide">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>

                <div class="relative border-l border-zinc-200 dark:border-zinc-800 pl-6 md:pl-8 group">
                    <div
                        class="absolute -left-[4.5px] top-2 w-2 h-2 rounded-full bg-zinc-300 dark:bg-zinc-700 group-hover:bg-blue-500 group-hover:scale-125 transition-all duration-300">
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-start justify-between gap-2">
                        <div>
                            <div class="flex flex-wrap items-center gap-2 sm:gap-3">
                                <h3
                                    class="text-lg md:text-xl font-bold text-zinc-900 dark:text-white tracking-tight group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-200">
                                    Programmer
                                </h3>
                                <span
                                    class="bg-zinc-100 dark:bg-zinc-900/80 border border-zinc-200 dark:border-zinc-800 text-zinc-500 dark:text-neutral-400 px-2 py-0.5 rounded-md text-xs font-medium">
                                    Banguntapan, Yogyakarta
                                </span>
                            </div>
                            <p class="text-zinc-600 dark:text-neutral-400 mt-1.5 text-sm font-medium">
                                at Seven Inc
                            </p>
                        </div>
                        <p class="text-zinc-400 dark:text-zinc-500 text-xs md:text-sm font-medium pt-0.5 tracking-wide">
                            Jul 2025 - Jan 2026
                        </p>
                    </div>

                    <ul class="mt-4 space-y-2.5 text-sm text-zinc-600 dark:text-neutral-400 list-disc list-inside leading-relaxed">
                        <li>Mengembangkan project website dalam tim menggunakan Laravel dan JavaScript.</li>
                        <li>Berkontribusi dalam pengembangan fitur, debugging, dan pengujian aplikasi.</li>
                        <li>Menggunakan Git untuk version control dalam workflow tim.</li>
                    </ul>

                    <div class="flex flex-wrap gap-2 mt-5">
                        @foreach (['laravel', 'mysql', 'javascript', 'blade', 'tailwindcss', 'github'] as $tech)
                            <span
                                class="bg-zinc-100/60 dark:bg-zinc-900/30 text-zinc-500 dark:text-neutral-400 border border-zinc-200/80 dark:border-zinc-800/60 px-2.5 py-0.5 rounded-md text-xs font-medium tracking-wide">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="mt-12 md:mt-36 border-t border-zinc-200/80 dark:border-zinc-800/60 pt-12 md:pt-16">
            <h2 class="text-xl md:text-2xl font-bold tracking-tight text-zinc-900 dark:text-white mb-10 md:mb-14">
                projects
            </h2>

            <div class="space-y-12">
                <div class="border-l border-zinc-200 dark:border-zinc-800 hover:border-blue-500 dark:hover:border-blue-500 pl-6 md:pl-8 space-y-3.5 group transition-colors duration-300">
                    <div>
                        <h3 class="text-base md:text-lg font-bold text-zinc-900 dark:text-white tracking-tight group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-200">
                            Portal Kerja (areakerja.com)
                        </h3>
                        <a href="#"
                            class="inline-flex items-center gap-1 text-xs font-medium text-zinc-400 dark:text-neutral-500 hover:text-zinc-900 dark:hover:text-white transition-colors duration-200 mt-1 group/link">
                            <span>Preview</span>
                            <i class="ph ph-arrow-square-out text-sm transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5"></i>
                        </a>
                    </div>

                    <ul class="space-y-2 text-sm text-zinc-600 dark:text-neutral-400 list-disc list-inside leading-relaxed">
                        <li>Mengembangkan website portal lowongan kerja menggunakan Laravel.</li>
                        <li>Mengimplementasikan sistem autentikasi dan otorisasi multi-role (Pelamar, Perusahaan, Admin, Multi Admin, Finance).</li>
                        <li>Berkolaborasi dalam pengembangan aplikasi dan debugging bersama tim.</li>
                    </ul>

                    <div class="flex flex-wrap gap-2 pt-1">
                        @foreach (['laravel', 'mysql', 'jquery', 'tailwindcss', 'flowbite'] as $tech)
                            <span
                                class="px-2.5 py-1 text-xs font-medium text-zinc-500 dark:text-neutral-400 bg-zinc-100/60 dark:bg-zinc-900/30 border border-zinc-200/80 dark:border-zinc-800/60 rounded-md tracking-wide">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="border-l border-zinc-200 dark:border-zinc-800 hover:border-blue-500 dark:hover:border-blue-500 pl-6 md:pl-8 space-y-3.5 group transition-colors duration-300">
                    <div>
                        <h3 class="text-base md:text-lg font-bold text-zinc-900 dark:text-white tracking-tight group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-200">
                            Bimbel Cerdas
                        </h3>
                        <a href="#"
                            class="inline-flex items-center gap-1 text-xs font-medium text-zinc-400 dark:text-neutral-500 hover:text-zinc-900 dark:hover:text-white transition-colors duration-200 mt-1 group/link">
                            <span>Preview</span>
                            <i class="ph ph-arrow-square-out text-sm transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5"></i>
                        </a>
                    </div>

                    <ul class="space-y-2 text-sm text-zinc-600 dark:text-neutral-400 list-disc list-inside leading-relaxed">
                        <li>Mengembangkan website bimbingan belajar berbasis Laravel.</li>
                        <li>Berkolaborasi dalam pengembangan aplikasi dan debugging bersama tim.</li>
                        <li>Mengimplementasikan sistem pencarian jarak terdekat antara pengguna dan pengajar.</li>
                    </ul>

                    <div class="flex flex-wrap gap-2 pt-1">
                        @foreach (['laravel', 'mysql', 'jquery', 'tailwindcss'] as $tech)
                            <span
                                class="px-2.5 py-1 text-xs font-medium text-zinc-500 dark:text-neutral-400 bg-zinc-100/60 dark:bg-zinc-900/30 border border-zinc-200/80 dark:border-zinc-800/60 rounded-md tracking-wide">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="border-l border-zinc-200 dark:border-zinc-800 hover:border-blue-500 dark:hover:border-blue-500 pl-6 md:pl-8 space-y-3.5 group transition-colors duration-300">
                    <div>
                        <h3 class="text-base md:text-lg font-bold text-zinc-900 dark:text-white tracking-tight group-hover:text-blue-500 dark:group-hover:text-blue-400 transition-colors duration-200">
                            Sending Love Self Development
                        </h3>
                        <a href="#"
                            class="inline-flex items-center gap-1 text-xs font-medium text-zinc-400 dark:text-neutral-500 hover:text-zinc-900 dark:hover:text-white transition-colors duration-200 mt-1 group/link">
                            <span>Preview</span>
                            <i class="ph ph-arrow-square-out text-sm transition-transform duration-200 group-hover/link:-translate-y-0.5 group-hover/link:translate-x-0.5"></i>
                        </a>
                    </div>

                    <ul class="space-y-2 text-sm text-zinc-600 dark:text-neutral-400 list-disc list-inside leading-relaxed">
                        <li>Mengimplementasikan sistem analisis mood harian berdasarkan perbandingan dengan hari sebelumnya.</li>
                        <li>Berkolaborasi dalam pengembangan website bertema self development.</li>
                    </ul>

                    <div class="flex flex-wrap gap-2 pt-1">
                        @foreach (['laravel', 'mysql', 'javascript', 'tailwindcss'] as $tech)
                            <span
                                class="px-2.5 py-1 text-xs font-medium text-zinc-500 dark:text-neutral-400 bg-zinc-100/60 dark:bg-zinc-900/30 border border-zinc-200/80 dark:border-zinc-800/60 rounded-md tracking-wide">{{ $tech }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <footer
            class="mt-32 pb-12 border-t border-zinc-200/80 dark:border-zinc-800/60 pt-8 text-xs font-medium text-zinc-400 dark:text-zinc-500">
            <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
                <p>© 2026 exdev. All rights reserved.</p>
                <div class="flex items-center gap-6">
                    <a href="https://github.com/senoAWA" class="hover:text-zinc-900 dark:hover:text-white transition-colors duration-200">Github</a>
                    <a href="https://www.linkedin.com/in/seno-adi-wijaya-197496384/" class="hover:text-zinc-900 dark:hover:text-white transition-colors duration-200">Linkedin</a>
                    <a href="mailto:senoa5995@gmail.com" class="hover:text-zinc-900 dark:hover:text-white transition-colors duration-200">Email</a>
                </div>
            </div>
        </footer>

    </div>

    <script>
        const themeToggleBtn = document.getElementById('theme-toggle');
        const themeIcon = document.getElementById('theme-icon');
        const html = document.documentElement;

        function updateIcon() {
            if (html.classList.contains('dark')) {
                themeIcon.className = 'ph ph-sun';
            } else {
                themeIcon.className = 'ph ph-moon';
            }
        }

        if (
            localStorage.theme === 'dark' ||
            (!localStorage.theme &&
                window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            html.classList.add('dark');
        } else {
            html.classList.remove('dark');
        }

        updateIcon();

        themeToggleBtn.addEventListener('click', () => {
            html.classList.toggle('dark');

            if (html.classList.contains('dark')) {
                localStorage.theme = 'dark';
            } else {
                localStorage.theme = 'light';
            }

            updateIcon();
        });
    </script>
</body>

</html>