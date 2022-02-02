<?= $this->extend('templates/main/main-template') ?>

<?= $this->section('styles') ?>
<link rel="stylesheet" href="/assets/css/pages/home.css">
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="hero"></div>
<section class="featured-products d-flex align-items-center flex-column">
    <h2 class="text-center text-uppercase">Produk Kami</h2>
    <div class="card-wrapper justify-content-center">
        <?php foreach ($produk as $pd) : ?>
            <div class="card border-0 text-center">
                <div class="card-body">
                    <a href="<?= base_url('detail/' . $pd['url_slug']) ?>"><img class="card-img mb-2" src="<?= base_url('assets/img/produk/' . $pd['gambar']) ?>"></a>
                    <div class="card-title"><?= $pd['nama'] ?></div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>

<section class="helm">
    <div class="helm-wrapper d-flex">
        <!-- <img class="helm-img mb-2 align-self-center" src="/assets/img/hero2.png"> -->
        <div class="helm-text position-relative">
            <h2 class="helm-header">Ambil kontrol untuk memilih Fashion yang anda sukai.</h2>
            <div class="helm-extra-text">
                <p style="text-align: justify;">Dress hitam memang selalu bisa jadi andalan untuk tampil elegan di setiap kesempatan, baik untuk acara formal atau sekadar hangout bersama teman. Modelnya pun bermacam-macam, bisa disesuaikan untuk gaya kasual, edgy, sampai gaya mewah.</p>
            </div>
            <p class="helm-read-more">Baca selengkapnya...</p>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    const readMore = () => {
        const readMore = document.querySelector(".helm-read-more");
        const extraText = document.getElementsByClassName("helm-extra-text")[0];

        readMore.addEventListener("click", () => {
            if (extraText.style.display === "") {
                readMore.textContent = "Baca sedikit..."
                extraText.style.display = "block";
            } else {
                extraText.style.display = "";
                readMore.textContent = "Baca selengkapnya..."
            }
        });
    }

    readMore();
</script>
<?= $this->endSection() ?>