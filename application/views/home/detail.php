<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3><?= $berita->judul; ?></h3>
</div>
<div class="card-body">
    <p><strong>kategori:</strong> <?=$berita->kategori;?></p>
    <p><em><?=$berita->headline; ?></em></p>
    <div><?= $berita->isi_berita; ?></div>
</div>
<div class="card-footer">
    <a href="<? base_url('home_berita'); ?>" class="btn btn-secondary">kembali ke beranda</a>
</div>
</div>
</div>