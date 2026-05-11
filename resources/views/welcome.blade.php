<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Faqih Aunillah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-800">

    <nav class="fixed w-full z-50 bg-white/70 backdrop-blur-md">
        <div class="container mx-auto px-6 lg:px-32 py-5 flex justify-between items-center">
            <div class="font-bold text-2xl tracking-tighter">
                <span class="text-slate-900">F</span><span class="text-emerald-500">A</span><span class="text-emerald-500">.</span>
            </div>
            <div class="hidden md:flex space-x-10 text-sm font-semibold text-slate-500">
                <a href="#" class="hover:text-emerald-600 transition">Home</a>
                <a href="#about" class="hover:text-emerald-600 transition">About</a>
                <a href="#projects" class="hover:text-emerald-600 transition">Projects</a>
                <a href="#contact" class="text-slate-900 hover:text-emerald-600 transition">Contact</a>
            </div>
        </div>
    </nav>

    <section class="min-h-screen flex items-center px-6 lg:px-32 pt-20">
        <div class="container mx-auto grid lg:grid-cols-2 gap-16 items-center">
            
            <div class="space-y-8 text-center lg:text-left order-2 lg:order-1">
                <div class="inline-block px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold uppercase tracking-widest">
                    Available for Internship 2026
                </div>
                <h1 class="text-5xl lg:text-7xl font-extrabold text-slate-900 leading-[1.1]">
                    Faqih <span class="text-emerald-600">Aunillah.</span>
                </h1>
                <p class="text-slate-500 text-lg lg:text-xl leading-relaxed max-w-xl">
                    Siswa RPL di SMKN 4 Bandung. Fokus pada pengembangan <span class="text-slate-900 font-semibold">Web Laravel</span> dan minat besar dalam mempelajari <span class="text-slate-900 font-semibold">Struktur Database</span>.
                </p>
                <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                    <a href="#projects" class="bg-slate-900 text-white px-8 py-4 rounded-2xl font-bold hover:bg-emerald-600 transition-all shadow-lg shadow-slate-200">
                        Lihat Karya
                    </a>
                    <a href="#about" class="bg-white text-slate-900 border border-slate-200 px-8 py-4 rounded-2xl font-bold hover:bg-slate-50 transition-all">
                        Tentang Saya
                    </a>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end order-1 lg:order-2">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-emerald-100 rounded-[3rem] rotate-6 group-hover:rotate-3 transition-all"></div>
                    <div class="relative w-64 h-64 lg:w-80 lg:h-80 overflow-hidden rounded-[2.5rem] shadow-2xl border-8 border-white">
                        <img src="{{ asset('img/profile.png') }}" alt="Aun Profile" class="w-full h-full object-cover shadow-inner">
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section id="about" class="py-32 bg-white px-6 lg:px-32">
        <div class="container mx-auto max-w-5xl">
            <div class="grid lg:grid-cols-12 gap-12">
                
                <div class="lg:col-span-4">
                    <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-4">01. Background</h2>
                    <h3 class="text-3xl font-bold text-slate-900">Mengenal Saya Lebih Dekat</h3>
                </div>

                <div class="lg:col-span-8 text-slate-500 text-lg leading-relaxed space-y-6">
                    <p>
                        Halo! Saya <span class="text-slate-900 font-medium">Faqih</span>, siswa Rekayasa Perangkat Lunak yang berdomisili di Bandung. Saya memiliki ketertarikan mendalam pada alur kerja sistem di balik layar (*backend*). 
                    </p>
                    <p>
                        Minat terbesar saya saat ini ada pada <span class="text-slate-900 font-medium text-emerald-600 italic">Database Management</span>. Walaupun masih di tahap awal, saya berkomitmen untuk terus mengeksplorasi efisiensi data menggunakan MySQL dan Laravel guna menciptakan aplikasi yang andal.
                    </p>
                    <div class="grid grid-cols-2 gap-8 pt-6">
                        <div>
                            <h4 class="text-slate-900 font-bold mb-3 text-sm uppercase">Fokus Utama</h4>
                            <ul class="space-y-2 text-sm">
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> Dasar MySQL & CRUD
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> Laravel Development
                                </li>
                                <li class="flex items-center gap-2">
                                    <div class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></div> UI/UX Design
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-slate-900 font-bold mb-3 text-sm uppercase">Soft Skills</h4>
                            <ul class="space-y-2 text-sm italic">
                                <li>Storytelling (Proyek LDKO)</li>
                                <li>Creative Writing</li>
                                <li>Adaptive Learning</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="projects" class="py-32 px-6 lg:px-32 bg-[#F8FAFC]">
        <div class="container mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-4">
                <div class="max-w-xl">
                    <h2 class="text-emerald-600 font-bold uppercase tracking-widest text-sm mb-4">02. Selected Works</h2>
                    <h3 class="text-4xl font-extrabold text-slate-900 mb-4">Proyek yang Pernah Saya Bangun</h3>
                    <p class="text-slate-500 text-lg">Kombinasi antara logika pemrograman, manajemen database, dan narasi kreatif.</p>
                </div>
                <a href="https://github.com/username-kamu" target="_blank" class="text-slate-900 font-bold border-b-2 border-emerald-500 pb-1 hover:text-emerald-600 transition-all">
                    Lihat GitHub →
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <div onclick="openModal('modal-bondscan')" class="group bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-emerald-100 overflow-hidden">
                        <img src="{{ asset('img/BondScan.png') }}" alt="BondScan Screenshot" class="w-full h-full object-cover transition-transform group-hover:scale-105 duration-300">
                        <div class="w-full h-full flex items-center justify-center text-emerald-500 font-bold italic text-xl">BondScan</div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold px-3 py-1 bg-slate-100 text-slate-600 rounded-full uppercase">AI & Face Detection</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition">BondScan</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Aplikasi inovatif yang menggunakan deteksi wajah dan emosi untuk memperkuat interaksi antar pengguna.
                        </p>
                        <div class="flex gap-4 text-xs font-mono text-slate-400">
                            <span>Python/JS</span>
                            <span>Tailwind</span>
                        </div>
                    </div>
                </div>

                <div onclick="openModal('modal-virama')" class="group bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-orange-50 overflow-hidden">
                        <img src="{{ asset('img/ViramaCoffee.png') }}" alt="Virama Screenshot" class="w-full h-full object-cover transition-transform group-hover:scale-105 duration-300">
                        <div class="w-full h-full flex items-center justify-center text-orange-400 font-bold italic text-xl">Virama Coffee</div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold px-3 py-1 bg-orange-100 text-orange-600 rounded-full uppercase">Web Development</span>
                            <span class="text-[10px] font-bold px-3 py-1 bg-blue-100 text-blue-600 rounded-full uppercase">Database</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition">Virama Coffee</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Website profil bisnis kopi dengan sistem katalog menu yang dinamis dan terstruktur dengan database MySQL.
                        </p>
                        <div class="flex gap-4 text-xs font-mono text-slate-400">
                            <span>Laravel</span>
                            <span>MySQL</span>
                        </div>
                    </div>
                </div>

                <div onclick="openModal('modal-ldko')" class="group bg-white rounded-[2rem] overflow-hidden border border-slate-100 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300">
                    <div class="aspect-video bg-slate-200 overflow-hidden">
                        <img src="{{ asset('img/GameLDKO.png') }}" alt="Game LDKO Screenshot" class="w-full h-full object-cover transition-transform group-hover:scale-105 duration-300">
                        <div class="w-full h-full flex items-center justify-center text-slate-500 font-bold italic text-xl">LDKO Project</div>
                    </div>
                    <div class="p-8">
                        <div class="flex gap-2 mb-4">
                            <span class="text-[10px] font-bold px-3 py-1 bg-purple-100 text-purple-600 rounded-full uppercase">Storytelling</span>
                            <span class="text-[10px] font-bold px-3 py-1 bg-slate-100 text-slate-600 rounded-full uppercase">Unity 3D</span>
                        </div>
                        <h4 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition">LDKO (3D Horror)</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-6">
                            Berkontribusi dalam pengembangan narasi dan alur cerita (Scriptwriting) untuk memberikan pengalaman bermain yang imersif.
                        </p>
                        <div class="flex gap-4 text-xs font-mono text-slate-400">
                            <span>Creative Writing</span>
                            <span>Unity</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="contact" class="py-32 px-6 lg:px-32 bg-white">
        <div class="container mx-auto max-w-4xl text-center">
            <div class="inline-block px-4 py-2 bg-emerald-50 text-emerald-700 rounded-full text-xs font-bold uppercase tracking-[0.2em] mb-6">
                03. What's Next?
            </div>
            
            <h3 class="text-4xl lg:text-5xl font-extrabold text-slate-900 mb-6 tracking-tight">
                Tertarik untuk <span class="text-emerald-600">Bekerja Sama?</span>
            </h3>
            
            <p class="text-slate-500 text-lg mb-12 leading-relaxed max-w-2xl mx-auto">
                Saya sedang mencari peluang Magang / PKL untuk mengasah kemampuan saya di bidang Web Development dan Database. Jika kamu memiliki pertanyaan atau tawaran kolaborasi, jangan ragu untuk menghubungi saya!
            </p>
            
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                <a href="https://wa.me/6281214103509?text=Halo%20Aun,%20saya%20tertarik%20dengan%20portofolio%20kamu" 
                   target="_blank" 
                   class="group relative flex items-center gap-3 bg-emerald-600 text-white px-10 py-5 rounded-2xl font-bold hover:bg-slate-900 transition-all duration-300 shadow-xl shadow-emerald-200">
                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.588-5.946 0-6.556 5.332-11.888 11.887-11.888 3.174 0 6.16 1.236 8.41 3.484 2.246 2.248 3.481 5.231 3.481 8.404 0 6.556-5.332 11.89-11.888 11.89-2.015 0-3.991-.511-5.741-1.479l-6.248 1.639zm5.886-3.346l.369.219c1.3.774 2.774 1.185 4.29 1.185 4.563 0 8.271-3.707 8.271-8.27 0-2.21-.86-4.286-2.42-5.845s-3.635-2.42-5.845-2.42c-4.562 0-8.27 3.708-8.27 8.27 0 1.622.473 3.208 1.368 4.595l.241.373-.993 3.631 3.73-.978z"/></svg>
                    WhatsApp Saya
                </a>

                <a href="mailto:aqih1710@gmail.com" 
                   class="flex items-center gap-3 bg-white text-slate-900 border-2 border-slate-100 px-10 py-5 rounded-2xl font-bold hover:border-emerald-600 hover:text-emerald-600 transition-all duration-300">
                    <svg class="w-6 h-6 stroke-current fill-none" viewBox="0 0 24 24" stroke-width="2"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    Kirim Email
                </a>
            </div>

            <div class="mt-20 pt-10 border-t border-slate-50 text-slate-400 text-sm">
                <p>Aktif di hari sekolah (Senin - Jumat) • Bandung, Indonesia</p>
            </div>
        </div>
    </section>

    <footer class="py-20 text-center bg-[#F8FAFC]">
        <div class="text-slate-400 text-sm font-medium">
            &copy; 2026 Faqih Aunillah. Designed for SMK PKL.
        </div>
    </footer>

    <div id="modal-overlay" class="fixed inset-0 bg-slate-900/60 backdrop-blur-sm z-[100] hidden flex items-center justify-center p-4 lg:p-10">
    
    <div id="modal-content" class="bg-white w-full max-w-5xl max-h-[90vh] rounded-[3rem] overflow-y-auto relative shadow-2xl">
        <button onclick="closeModal()" class="absolute top-6 right-6 z-[110] bg-slate-100 hover:bg-emerald-100 text-slate-500 hover:text-emerald-600 w-12 h-12 rounded-full flex items-center justify-center transition-all">✕</button>
        
        <div id="modal-body">
            </div>
    </div>
</div>

<div id="data-modals" class="hidden">
    
    <div id="modal-bondscan">
        <div class="grid lg:grid-cols-2">
            <div class="p-8 lg:p-12">
                <img src="{{ asset('img/bondscan-full.png') }}" class="w-full rounded-2xl shadow-lg border border-slate-100">
            </div>
            <div class="p-8 lg:p-12 lg:pl-0">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">BondScan</h2>
                <p class="text-slate-500 mb-6 leading-relaxed">BondScan adalah aplikasi analisis interaksi sosial berbasis kecerdasan buatan. Proyek ini menonjolkan penggunaan Face Detection untuk mengenali ekspresi dan emosi pengguna guna meningkatkan kualitas engagement dalam sebuah platform digital.</p>
                <div class="space-y-4 mb-8">
                    <div class="flex items-center gap-3 text-sm text-slate-600"><span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Fitur Deteksi Wajah Real-time</div>
                    <div class="flex items-center gap-3 text-sm text-slate-600"><span class="w-2 h-2 bg-emerald-500 rounded-full"></span> Integrasi API Emotion Recognition</div>
                </div>
                <a href="https://bondscan.com" target="_blank" class="inline-block bg-emerald-600 text-white px-8 py-3 rounded-xl font-bold hover:bg-slate-900 transition-all">Buka Live Website ↗</a>
            </div>
        </div>
    </div>

    <div id="modal-virama">
        <div class="grid lg:grid-cols-2">
            <div class="p-8 lg:p-12 text-center">
                <img src="{{ asset('img/virama-full.png') }}" class="w-full rounded-2xl shadow-lg mb-4">
                <p class="text-xs text-slate-400 italic font-mono">Tampilan Katalog Menu & Database Relasional</p>
            </div>
            <div class="p-8 lg:p-12 lg:pl-0">
                <h2 class="text-3xl font-bold text-slate-900 mb-4">Virama Coffee</h2>
                <p class="text-slate-500 mb-6 leading-relaxed">Website Profil Bisnis yang terintegrasi dengan sistem manajemen inventori sederhana. Di sini saya menerapkan dasar-dasar MySQL untuk menyimpan data menu, harga, dan kategori secara dinamis.</p>
                <div class="bg-emerald-50 p-6 rounded-2xl mb-8">
                    <h4 class="text-sm font-bold text-emerald-800 mb-2 uppercase">Database Highlight:</h4>
                    <p class="text-emerald-700 text-sm italic">"Menggunakan relasi One-to-Many antara kategori kopi dan menu produk menggunakan Laravel Eloquent."</p>
                </div>
                <a href="#" class="inline-block bg-slate-900 text-white px-8 py-3 rounded-xl font-bold hover:bg-emerald-600 transition-all">Kunjungi Web ↗</a>
            </div>
        </div>
    </div>

    <div id="modal-ldko">
        <div class="p-8 lg:p-12">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-4xl font-bold text-slate-900 mb-4 text-center">LDKO: The Journey</h2>
                <p class="text-slate-500 mb-8 text-center">Dalam proyek game 3D ini, peran saya adalah sebagai <strong>Storywriter</strong>. Saya menyusun narasi, dialog, dan perkembangan karakter untuk menciptakan suasana yang mendalam bagi pemain.</p>
                
                <div class="aspect-video bg-slate-100 rounded-3xl overflow-hidden shadow-inner mb-8 border border-slate-200">
                    <iframe class="w-full h-full" src="https://www.youtube.com/embed/VIDEO_ID_KAMU" frameborder="0" allowfullscreen></iframe>
                </div>

                <div class="grid md:grid-cols-2 gap-6 text-sm text-slate-600 italic">
                    <div class="p-4 border-l-2 border-emerald-500 bg-slate-50">"Menulis lebih dari 20+ alur dialog interaktif."</div>
                    <div class="p-4 border-l-2 border-emerald-500 bg-slate-50">"Merancang twist cerita untuk meningkatkan engagement pemain."</div>
                </div>
            </div>
        </div>
    </div>

</div>

<script>
        const overlay = document.getElementById('modal-overlay');
        const modalBody = document.getElementById('modal-body');

        function openModal(projectId) {
            const content = document.getElementById(projectId).innerHTML;
            modalBody.innerHTML = content;
            overlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            overlay.classList.add('hidden');
            modalBody.innerHTML = '';
            document.body.style.overflow = 'auto';
        }

        window.onclick = function(event) {
            if (event.target == overlay) {
                closeModal();
            }
        }
    </script>

</body> </html>

</body>
</html>