<?php get_header(); ?>

<div class="container">

    <!-- Home Section -->
    <section id="home" class="page active">
        <div class="card welcome-card">
            <h1 class="card-title">Halo, saya Ali 👋</h1>
            <p>Selamat datang di portfolio saya.</p>
        </div>
    </section>

    <!-- Data Pribadi -->
    <section id="data-pribadi" class="page">
        <div class="card">
            <h2 class="card-title">Data Pribadi</h2>
        </div>
    </section>

    <!-- Prestasi -->
    <section id="prestasi" class="page">
        <div class="card">
            <h2 class="card-title">Prestasi</h2>
            
        </div>
    </section>

    <!-- Pengalaman -->
    <section id="pengalaman" class="page">
        <div class="card">
        </div>
    </section>


    <!-- Kontak -->
    <section id="kontak" class="page">
        <div class="card">
            <h2 class="card-title">Kontak</h2>
            <form>
                <input type="text" placeholder="Nama" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Pesan" required></textarea>
                <button type="submit">Kirim</button>
            </form>
        </div>
    </section>

</div>

<?php get_footer(); ?>