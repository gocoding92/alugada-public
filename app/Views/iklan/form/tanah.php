<form method="post" enctype="multipart/form-data" action="<?= base_url('iklan/saveTanah'); ?>">
    <div class="row">
        <h2 class="margin-top-3 margin-bottom-min3"> <i class=" fa fa-edit"></i> Informasi Data <br />
            <span class="font-size-10 position-relative bottom-16 left-30"> Property - Tanah </span>
        </h2>

        <?php //$this->include("iklan/form/upload_img"); ?>
        
        
        <!--<input id="imgInp1" type="file" name="file1" accept="image/*" style="display:block" />-->
        <!--<input id="imgInp2" type="file" name="file2" accept="image/*" style="display:block" />-->
        <!--<input id="imgInp3" type="file" name="file3" accept="image/*" style="display:block" />-->
        <!--<input id="imgInp4" type="file" name="file4" accept="image/*" style="display:block" />-->
        <!--<input id="imgInp5" type="file" name="file5" accept="image/*" style="display:block" />-->
        <!--<input id="imgInp6" type="file" name="file6" accept="image/*" style="display:block" />-->
        
        <input type="file" name="file[]" accept="image/*" style="display:block" multiple />
        

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
            <!--<button type="submit" id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>-->
            <button type="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
        </div>

    </div>
</form>

<script>
    
    const MAX_WIDTH = 350;
    const MAX_HEIGHT = 200;
    const MIME_TYPE = "image/jpeg";
    const QUALITY = 0.9;
    
    const input = document.getElementById("img1");
    input.onchange = function (ev) {
      const file = ev.target.files[0]; // get the file
      
      console.log('file', file)
      return;
      
      const blobURL = URL.createObjectURL(file);
      const img = new Image();
      img.src = blobURL;
      img.onerror = function () {
        URL.revokeObjectURL(this.src);
        // Handle the failure properly
        console.log("Cannot load image");
      };
      img.onload = function () {
        URL.revokeObjectURL(this.src);
        const [newWidth, newHeight] = calculateSize(img, MAX_WIDTH, MAX_HEIGHT);
        const canvas = document.createElement("canvas");
        canvas.width = newWidth;
        canvas.height = newHeight;
        const ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0, newWidth, newHeight);
        canvas.toBlob(
          (blob) => {
            // Handle the compressed image. es. upload or save in local state
            displayInfo('Original file', file);
            displayInfo('Compressed file', blob);
          },
          MIME_TYPE,
          QUALITY
        );
        document.getElementById("root").append(canvas);
      };
    };
    
    function calculateSize(img, maxWidth, maxHeight) {
      let width = img.width;
      let height = img.height;
    
      // calculate the width and height, constraining the proportions
      if (width > height) {
        if (width > maxWidth) {
          height = Math.round((height * maxWidth) / width);
          width = maxWidth;
        }
      } else {
        if (height > maxHeight) {
          width = Math.round((width * maxHeight) / height);
          height = maxHeight;
        }
      }
      return [width, height];
    }
    
    // Utility functions for demo purpose
    
    function displayInfo(label, file) {
      const p = document.createElement('p');
      p.innerText = `${label} - ${readableBytes(file.size)}`;
      document.getElementById('root').append(p);
    }
    
    function readableBytes(bytes) {
      const i = Math.floor(Math.log(bytes) / Math.log(1024)),
        sizes = ['B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'];
    
      return (bytes / Math.pow(1024, i)).toFixed(2) + ' ' + sizes[i];
    }
</script>
<?= $this->include("script/iklan/iklan_upload_img"); ?>

<?php // $this->include("script/iklan/iklan_tanah"); ?>