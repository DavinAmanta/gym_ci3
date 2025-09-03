<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HerFlo | Push Your Limits</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .btn-custom {
            background-color: #D3A796;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-custom:hover {
            background-color: #b88c7a;
        }

        .article-card:hover {
            transform: translateY(-5px);
            transition: 0.3s;
        }
    </style>
</head>

<body class="bg-[#f8f4f1] text-gray-800">

    <header class="bg-[#f8f4f1] fixed w-full shadow z-50">
        <nav class="container mx-auto flex justify-between items-center px-4 py-4">
            <div class="font-bold text-xl text-[#7d6b60]">HerFlo</div>
            <div class="hidden lg:flex space-x-8 text-sm font-medium">
                <a href="#" class="hover:text-[#7d6b60]">About Us</a>
                <a href="#" class="hover:text-[#7d6b60]">Membership</a>
                <a href="#" class="hover:text-[#7d6b60]">Personal Trainer</a>
                <a href="#" class="hover:text-[#7d6b60]">Subject</a>
            </div>
            <a href="#" class="btn-custom hidden lg:block text-sm">Free Trial</a>
            <button class="lg:hidden" id="menu-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-[#7d6b60]" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </nav>
        <div class="hidden flex-col space-y-4 px-6 pb-6 bg-[#f8f4f1]" id="mobile-menu">
            <a href="#">About Us</a>
            <a href="#">Membership</a>
            <a href="#">Personal Trainer</a>
            <a href="#">Subject</a>
            <a href="#" class="btn-custom inline-block">Free Trial</a>
        </div>
    </header>

    <section class="bg-[#f8f4f1] pt-28 lg:pt-32">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-5xl font-bold text-[#7d6b60] leading-tight">
                        Push Your <br>Limits with Us
                    </h1>
                    <p class="text-gray-600">
                        Gym khusus wanita modern dengan fasilitas lengkap dan suasana nyaman.
                        Tingkatkan kekuatan, kesehatan, dan kepercayaan diri bersama kami.
                    </p>
                    <a href="#" class="btn-custom inline-block">Join Now</a>

                    <div class="flex flex-wrap gap-2 text-sm">
                        <span class="bg-white px-3 py-1 rounded-full shadow">Strength</span>
                        <span class="bg-white px-3 py-1 rounded-full shadow">Endurance</span>
                        <span class="bg-white px-3 py-1 rounded-full shadow">Workout</span>
                        <span class="bg-white px-3 py-1 rounded-full shadow">Weightlifting</span>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="<?php echo base_url('assets/gym_foto/10fe3850984220be97243e714da1f13e-removebg-preview.png'); ?>" alt="HerFlo Hero"
                        class="w-full max-w-md lg:max-w-lg object-contain drop-shadow-xl">
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-16">
            <h2 class="text-center text-4xl font-bold text-[#7d6b60] mb-12">About Us</h2>
            <div class="mb-10">
                <img src="<?php echo base_url('assets/gym_foto/download (42).jpg'); ?>" alt="HerFlo Gym"
                    class="w-full h-[500px] object-cover object-top rounded-xl shadow-lg">
            </div>
            <div class="flex flex-col-reverse lg:flex-row items-center gap-10">
                <div class="lg:w-1/2 space-y-4 text-gray-700">
                    <p>
                        <span class="font-semibold text-[#7d6b60]">HerFlo</span> adalah gym khusus wanita dengan
                        fasilitas lengkap dan
                        privasi penuh. Kami mendukung setiap langkah perjalanan Anda untuk menjadi lebih sehat, lebih
                        kuat,
                        dan lebih percaya diri.
                    </p>
                </div>
                <div class="lg:w-1/2 grid grid-cols-2 gap-4">
                    <img src="<?php echo base_url('assets/gym_foto/download (44).jpg'); ?>" alt="HerFlo Training Area"
                        class="w-full h-48 object-cover rounded-xl shadow-lg">
                    <img src="<?php echo base_url('assets/gym_foto/download (47).jpg'); ?>" alt="HerFlo Facilities"
                        class="w-full h-48 object-cover rounded-xl shadow-lg">
                </div>
            </div>
        </div>
    </section>


    <section class="py-16 bg-[#f8f4f1]">
        <div class="container mx-auto flex flex-col lg:flex-row items-center gap-10 px-6 lg:px-16">
            <div class="grid grid-cols-2 gap-4 lg:w-1/2">
                <img src="<?php echo base_url('assets/gym_foto/Fitness Model Ellie Gonsalves Shares Secret To Her Amazing Physique.jpg'); ?>"
                    class="rounded-xl shadow-lg object-cover">
                <img src="<?php echo base_url('assets/gym_foto/download (43).jpg'); ?>" class="rounded-xl shadow-lg object-cover">
                <img src="<?php echo base_url('assets/gym_foto/Ascend Pilates - Classical Pilates San Diego.jpg'); ?>"
                    class="rounded-xl shadow-lg object-cover">
                <img src="<?php echo base_url('assets/gym_foto/Hyperflex Seamless 2 __ Doyoueven.jpg'); ?>" class="rounded-xl shadow-lg object-cover">
            </div>
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-3xl font-bold text-[#7d6b60] mb-4">Membership mulai dari 250K/bulan</h2>
                <p class="text-gray-700 mb-6">Pilih paket yang sesuai dengan kebutuhanmu dan mulailah perjalanan
                    kebugaran bersama HerFlo.</p>
                <a href="#" class="btn-custom">Lihat Paket Membership</a>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 lg:px-16">
            <h2 class="text-center text-4xl font-bold text-[#7d6b60] mb-12">Our Service</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?php echo base_url('assets/gym_foto/download (44).jpg'); ?>"
                        class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?php echo base_url('assets/gym_foto/More than just a workout - TPC is a community_.jpg'); ?>"
                        class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?php echo base_url('assets/gym_foto/House Gym.jpg'); ?>"
                        class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                </div>

                <div class="overflow-hidden rounded-xl shadow-lg">
                    <img src="<?php echo base_url('assets/gym_foto/(1) Instagram_files/491460037_17846392308453354_8990374039995515462_n.jpg'); ?>"
                        class="w-full h-96 object-cover hover:scale-105 transition-transform duration-500">
                </div>

            </div>
        </div>
    </section>



    <section class="py-20 bg-[#f8f4f1]">
        <div class="container mx-auto px-6 lg:px-16">
            <h2 class="text-center text-4xl font-extrabold text-[#7d6b60] mb-14">Latest Articles</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <div
                    class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="overflow-hidden">
                        <img src="<?php echo base_url('assets/gym_foto/(1) Instagram_files/514742250_17856304311453354_8640657566842467816_n.jpg'); ?>"
                            class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500"
                            alt="article">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-sm text-gray-500 block">10-10-2025</span>
                        <span class="text-xs uppercase tracking-wider text-[#C5A08A] font-semibold">Lifestyle</span>
                        <h3 class="font-bold text-xl text-[#7d6b60] leading-snug">
                            Bugar dan Percaya Diri di Herflo: Gym Eksklusif untuk Wanita
                        </h3>
                        <a href="#"
                            class="inline-block mt-3 text-sm font-semibold text-[#C5A08A] hover:text-[#7d6b60] transition">Read
                            More →</a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="overflow-hidden">
                        <img src="<?php echo base_url('assets/gym_foto/12 Moves to Build a Stronger, More Functional Core.jpg'); ?>"
                            class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500"
                            alt="article">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-sm text-gray-500 block">10-10-2025</span>
                        <span class="text-xs uppercase tracking-wider text-[#C5A08A] font-semibold">Wellness</span>
                        <h3 class="font-bold text-xl text-[#7d6b60] leading-snug">
                            Herflo Women’s Gym: Ruang Aman dan Nyaman untuk Perempuan Aktif
                        </h3>
                        <a href="#"
                            class="inline-block mt-3 text-sm font-semibold text-[#C5A08A] hover:text-[#7d6b60] transition">Read
                            More →</a>
                    </div>
                </div>

                <div
                    class="bg-white rounded-2xl shadow-md overflow-hidden group hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="overflow-hidden">
                        <img src="<?php echo base_url('assets/gym_foto/(1) Instagram_files/491460037_17846392308453354_8990374039995515462_n.jpg'); ?>"
                            class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500"
                            alt="article">
                    </div>
                    <div class="p-6 space-y-3">
                        <span class="text-sm text-gray-500 block">10-10-2025</span>
                        <span class="text-xs uppercase tracking-wider text-[#C5A08A] font-semibold">Fitness</span>
                        <h3 class="font-bold text-xl text-[#7d6b60] leading-snug">
                            Herflo Gym Resmi Dibuka: Tempat Terbaik untuk Membangun Tubuh Sehat
                        </h3>
                        <a href="#"
                            class="inline-block mt-3 text-sm font-semibold text-[#C5A08A] hover:text-[#7d6b60] transition">Read
                            More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="bg-[#C5A08A] pt-16 pb-10 mt-16 text-white">
        <div class="container mx-auto px-6 lg:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div>
                <h4 class="font-bold text-3xl mb-5">HerFlo</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1036.0599909379305!2d110.95986325624764!3d-7.5971659244119305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a19004b4ef1f5%3A0x68889f4e4d43230!2sHer%20Flo!5e0!3m2!1sid!2sid!4v1755746348658!5m2!1sid!2sid"
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-md"></iframe>
            </div>

            <div>
                <h4 class="font-semibold text-2xl mb-5">Explore</h4>
                <ul class="space-y-3 text-base">
                    <li><a href="#" class="hover:underline hover:opacity-90 transition">About</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-90 transition">Classes</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-90 transition">Services</a></li>
                    <li><a href="#" class="hover:underline hover:opacity-90 transition">Articles</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-semibold text-2xl mb-5">Contact Us</h4>
                <p class="text-base opacity-90">📧 info@herflo.com</p>
                <p class="text-base opacity-90">📞 +62 811 2345 6789</p>
            </div>

            <div>
                <h4 class="font-semibold text-2xl mb-5">Follow Us</h4>
                <div class="flex space-x-4">
                    <a href="#"
                        class="w-11 h-11 flex items-center justify-center rounded-full bg-white text-[#C5A08A] shadow hover:bg-[#a88168] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M22.675 0h-21.35C.597 0 0 .597 0 1.326v21.348C0 23.403.597 24 1.326 24h11.495v-9.294H9.691V11.01h3.13V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24h-1.918c-1.504 0-1.797.715-1.797 1.764v2.312h3.587l-.467 3.696h-3.12V24h6.116C23.403 24 24 23.403 24 22.674V1.326C24 .597 23.403 0 22.675 0z" />
                        </svg>
                    </a>

                    <a href="#"
                        class="w-11 h-11 flex items-center justify-center rounded-full bg-white text-[#C5A08A] shadow hover:bg-[#a88168] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.35 3.608 1.325.975.975 1.262 2.242 1.324 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.35 2.633-1.325 3.608-.975.975-2.242 1.262-3.608 1.324-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.35-3.608-1.325-.975-.975-1.262-2.242-1.324-3.608C2.175 15.747 2.163 15.367 2.163 12s.012-3.584.07-4.85c.062-1.366.35-2.633 1.325-3.608.975-.975 2.242-1.262 3.608-1.324C8.416 2.175 8.796 2.163 12 2.163zm0 1.838c-3.17 0-3.548.012-4.796.07-1.042.048-1.61.218-1.982.363-.5.194-.86.426-1.237.803-.377.377-.61.737-.804 1.237-.145.372-.315.94-.363 1.982-.058 1.248-.07 1.626-.07 4.796s.012 3.548.07 4.796c.048 1.042.218 1.61.363 1.982.194.5.426.86.803 1.237.377.377.737.61 1.237.804.372.145.94.315 1.982.363 1.248.058 1.626.07 4.796.07s3.548-.012 4.796-.07c1.042-.048 1.61-.218 1.982-.363.5-.194.86-.426 1.237-.803.377-.377.61-.737.804-1.237.145-.372.315-.94.363-1.982.058-1.248.07-1.626.07-4.796s-.012-3.548-.07-4.796c-.048-1.042-.218-1.61-.363-1.982-.194-.5-.426-.86-.803-1.237-.377-.377-.737-.61-1.237-.804-.372-.145-.94-.315-1.982-.363-1.248-.058-1.626-.07-4.796-.07zm0 3.905a5.935 5.935 0 110 11.87 5.935 5.935 0 010-11.87zm0 9.797a3.862 3.862 0 100-7.724 3.862 3.862 0 000 7.724zm7.842-10.705a1.387 1.387 0 11-2.774 0 1.387 1.387 0 012.774 0z" />
                        </svg>
                    </a>

                    <a href="#"
                        class="w-11 h-11 flex items-center justify-center rounded-full bg-white text-[#C5A08A] shadow hover:bg-[#a88168] hover:text-white transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M24 4.557a9.93 9.93 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.555-2.005.959-3.127 1.184a4.916 4.916 0 00-8.384 4.482A13.94 13.94 0 011.671 3.149a4.916 4.916 0 001.523 6.574 4.897 4.897 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.935 4.935 0 01-2.224.084 4.919 4.919 0 004.588 3.417A9.867 9.867 0 010 19.54a13.94 13.94 0 007.548 2.212c9.056 0 14.01-7.496 14.01-13.986 0-.213-.005-.425-.014-.636A10.012 10.012 0 0024 4.557z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-14 text-center">
            <h3 class="text-2xl font-bold tracking-wide mb-3">🕒 Jam Operasional</h3>
            <div class="space-y-2 text-base font-medium opacity-95">
                <p><span class="font-semibold">Morning Flo</span> — 07:00 to 12:00 WIB</p>
                <p><span class="font-semibold">Evening Flo</span> — 15:00 to 20:00 WIB</p>
            </div>
        </div>

        <div class="mt-12 border-t border-white/30 pt-6 text-center text-base opacity-90">
            © 2025 HerFlo Gym. All rights reserved.
        </div>
    </footer>
    <script>
        const toggle = document.getElementById("menu-toggle");
        const menu = document.getElementById("mobile-menu");
        toggle.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

</body>

</html>