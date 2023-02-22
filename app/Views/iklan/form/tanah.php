<form method="post" enctype="multipart/form-data">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Tanah </span>
        </h2>

        <?= $this->include("iklan/form/upload_img_iklan"); ?>
        
        <input type="hidden" name="nolayanan" value="<?= $no_layanan; ?>">
        <input type="hidden" name="nosublayanan" value="<?= $no_sublayanan; ?>">
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Judul Iklan</label>
            <input type="text" id="juduliklan" name="juduliklan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Luas</label>
            <input type="number" name="luastanah" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Kepemilikan</label>
            <select name="kepemilikan" id="" class="form-control margin-top-6">
                <option></option>
                <option>Sertifikat</option>
                <option>AJB</option>
                <option>Girik</option>
                <option>Lainnya</option>
            </select>
        </div>
        <div class="margin-bottom-12">
            <label for="" class="font-size-14">Akses Mobil</label>
            <select name="aksesmobil" id="" class="form-control margin-top-6">
                <option></option>
                <option>Tidak Masuk Mobil</option>
                <option>Masuk Mobil</option>
            </select>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Alamat Lokasi</label>
            <textarea name="lokasi" class="form-control margin-top-6"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Provinsi</label>
            <input type="text" name="propinsi" class="form-control width-input margin-top-6" placeholder="">
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>
        <div class="margin-bottom-12 margin-right-25">
            <label for="" class="font-size-14">Harga</label>
            <input type="number" name="harga" class="form-control width-input margin-top-6" placeholder="">
        </div>

        <div class="margin-bottom-12 margin-top-20">
            <button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

        <style>
          #button{
            display:block;
            margin:20px auto;
            padding:10px 30px;
            background-color:#eee;
            border:solid #ccc 1px;
            cursor: pointer;
          }
          #overlay{	
            position: fixed;
            top: 0;
            z-index: 100;
            width: 384px;
            height: 100%;
            display: none;
            background: rgb(251 251 251 / 60%);
          }
          .cv-spinner {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;  
          }
          .spinner {
            width: 40px;
            height: 40px;
            border: 4px #ddd solid;
            border-top: 4px #2e93e6 solid;
            border-radius: 50%;
            animation: sp-anime 0.8s infinite linear;
          }
          @keyframes sp-anime {
            100% { 
              transform: rotate(360deg); 
            }
          }
          .is-hide{
            display:none;
          }
        </style>

        <div id="overlay">
          <div class="cv-spinner">
            <span class="spinner"></span>
          </div>
        </div>

    </div>
</form>

<script>

function uploadImage(valImg) {

  let file = false;
  let idFile = "";
  if (valImg === "im1") {
    idFile = "#upload1";
  }

  if (valImg === "im2") {
    idFile = "#upload2";
  }

  if (valImg === "im3") {
    idFile = "#upload3";
  }

  file = document.querySelector(idFile).files[0];

  if (!file) return;

  const reader = new FileReader();

  reader.readAsDataURL(file);

  reader.onload = function (event) {
    const imgElement = document.createElement("img");
    imgElement.src = event.target.result;

    imgElement.onload = function (e) {
      const canvas = document.createElement("canvas");
      const MAX_WIDTH = 380;

      const scaleSize = MAX_WIDTH / e.target.width;
      canvas.width = MAX_WIDTH;
      canvas.height = e.target.height * scaleSize;

      const ctx = canvas.getContext("2d");

      ctx.drawImage(e.target, 0, 0, canvas.width, canvas.height);

      const srcEncoded = ctx.canvas.toDataURL(e.target, "image/jpeg");

      let idFormFile = "";
      let imgEncode = "";
      if (valImg === "im1") {
        idFormFile = "#uploadForm1";
        imgEncode = "#img1";
      }

      if (valImg === "im2") {
        idFormFile = "#uploadForm2";
        imgEncode = "#img2";
      }

      if (valImg === "im3") {
        idFormFile = "#uploadForm3";
        imgEncode = "#img3";
      }

      document.querySelector(imgEncode).src = srcEncoded;
      $(idFormFile).val(srcEncoded);
    };
  };
  
}

</script>
<?php //$this->include("script/iklan/iklan_upload_img"); ?>

<?php echo $this->include("script/iklan/iklan_tanah"); ?>