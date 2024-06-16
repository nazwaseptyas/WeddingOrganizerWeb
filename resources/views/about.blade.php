@extends('layouts/main')
@section('container')
<body>
    <main>
        {{-- Hero - About --}}
        <div class="about-area pt-120 pb-90" style="background-color: #F6FBF4; margin-bottom:150px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-5">
                        <div class="sycho-tab-img mb-30">
                            <img src="assets/img/about/aboutcoun.png" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="sycho-tab-content pt-40 pr-0 mb-30">
                            <div class="section-title mb-40">
                                <span>Tentang Kami</span>
                                <p class="tab-quote">Pelajari Solusi Luar Biasa & Indah untuk Pertumbuhan Dalam Diri
                                </p>
                                <p style="text-align: justify;">
                                    YukCerita adalah platform konseling sebaya yang membantu mahasiswa mengatasi masalah
                                    pribadi, akademik, dan sosial selama kuliah. Kami menyediakan layanan konseling
                                    online yang dilakukan oleh mahasiswa terlatih untuk memberikan dukungan dan saran
                                    kepada teman-teman mereka. Privasi dan kerahasiaan mahasiswa sangat dijaga. Kami
                                    juga menyediakan artikel dan tips tentang kesehatan mental, manajemen waktu, dan
                                    strategi belajar. YukCerita berkomitmen untuk mendukung kesehatan mental mahasiswa
                                    agar mereka dapat mencapai tujuan akademik dan pribadi dengan lebih baik.
                                    Bergabunglah dengan komunitas YukCerita dan mulailah mengatasi masalah Anda secara
                                    efektif dan percaya diri!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Konselor --}}
        <div class="about-area pb-90" style="margin-bottom: 130px;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="about-img pos-rel mb-30">
                            <img src="assets/img/about/fatin.jpeg" alt="konselor" style="width: 300px; height: 500px;"/>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 col-md-6">
                        <div class="about-11-wrapper mb-30 pl-50 pt-40">
                            <div class="section-title mb-40">
                                <span>Konselor</span>
                                <h2>Nadjilah Fatin, S.Psi.</h2>
                                <div class="mb-40"></div>
                                <h3>Visi</h3>
                            <p style="text-align: justify;">
                                Visi kami adalah menciptakan lingkungan yang mendukung, inklusif, dan empatik bagi individu dalam mencari pertolongan dan mendapatkan dukungan yang mereka butuhkan. Kami berusaha untuk memperkuat komunitas kami dengan memberdayakan individu untuk menghadapi tantangan psikologis mereka dengan percaya diri dan positif.
                            </p>
                            <ul>
                                <li>
                                    <i class="fal fa-check-circle" style="color: #36b65e"></i>&nbsp; Gratis Konsultasi
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="ab-mission pt-40 mb-40">
                            <h3>Misi</h3>
                            <p style="text-align: justify;">
                                Kami berkomitmen untuk menawarkan dukungan empatik dan mendengarkan aktif kepada setiap individu yang mencari bantuan, sehingga mereka merasa didengar dan dihargai. Selain itu, kami berusaha menghubungkan individu dengan rekan sebaya dan ahli terlatih yang memberikan panduan, saran, dan dukungan dalam mengatasi masalah mereka. Kami juga berupaya memberikan informasi tentang kesehatan mental dan teknik pengelolaan stres untuk meningkatkan pemahaman dan keterampilan individu dalam merawat diri sendiri. Melalui upaya edukatif kami, kami berharap dapat menghilangkan stigma seputar isu-isu kesehatan mental dan psikologi, serta mendorong kesadaran akan pentingnya mencari bantuan ketika dibutuhkan.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Jadwal Kerja --}}
        <div class="appointment-area pb-70">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-xl-6 col-lg-6">
                        <div class="appointment-wrapper mb-30">
                            <div class="section-title mr-30 mb-40">
                                <span>Jadwal Kerja</span>
                                <p class="p-title" style="text-align: justify;">Kami siap untuk mendengarkan dan memberikan solusi terbaik yang
                                    sesuai dengan kebutuhan Anda. Hubungi kami sesuai dengan jadwal yang tertera.</p>
                            </div>
                            <div class="app-item">
                                <ul>
                                    <li>
                                        <div class="app-text">
                                            <h4>Senin - Jum'at</h4>
                                            <span>9:00 - 17:00 WIB</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="app-text">
                                            <h4>Sabtu &amp; Minggu</h4>
                                            <span>10:00 - 16:00 WIB</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="single-app pos-rel">
                            <div class="appointment-img">
                                <img src="assets/img/appointment/work2.jpeg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
@endsection