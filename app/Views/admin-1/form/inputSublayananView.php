<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div id="home-page" class="row-sm padding-bottom-90">
    <!-- <h1 class="margin-left-16"> Profile </h1> -->
    <h4 class="margin-left-16"> Tambah Sublayanan </h4>

    <form action="<?= base_url('submit-input-sub-layanan');?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <label for="nolayanan" class="font-size-15">No Layanan</label>
                <input readonly type="text" name="nolayanan" class="form-control margin-top-6" value="<?= $nolayanan; ?>">
            </div>
            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <label for="nosublayanan" class="font-size-15">No Sub Layanan</label>
                <input readonly type="text" name="nosublayanan" class="form-control margin-top-6" value="<?= $nosublayanan; ?>">
            </div>

            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <label for="sublayanan" class="font-size-15">Sub Layanan</label>
                <input required type="text" name="sublayanan" class="form-control margin-top-6" placeholder="Nama Sublayanan .......">
            </div>

            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <label for="url" class="font-size-15">URL</label>
                <input required type="text" name="url" class="form-control margin-top-6" placeholder="Masukkan URL .......">
            </div>
            <div class="margin-bottom-12 padding-right-46 padding-left-16">
                <label for="gambar" class="font-size-15">Gambar</label>
                <div class="col-sm-2">
                    <img src="<?= base_url('Image/Layanan/Sublayanan/sublayanandefault.png'); ?>" class="img-thumbnail img-preview" style="width:50px" id="img-preview">
                </div>
                <div class="col-sm-8">
                    <input type="file" class="form-control margin-top-6" id="gambar" name="gambar" onchange="previewgambar()">
                </div>
            </div>

            <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
                <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Tambah Sub Layanan </button>
            </div>
        </div>
    </form>


</div>
<?= $this->endSection(); ?>