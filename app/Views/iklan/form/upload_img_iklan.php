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

<div class="border3-solid-ced4da margin-bottom-6 border-radius-5">
    <legend class="font-size-10 textcolor-9a9a9a margin-top-4 margin-bottom-8">Select photos (Up to photos 3) Min 1 <span class="textcolor-red"> * </span></legend>
    <div class="display-flex width-auto overflow-auto">
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView1">
                    <i class="fa fa-2x fa-camera" id="iconCamera1"></i>
                </div>
                <input
                    style="display: none;"
                    type="file"
                    id="upload1"
                    accept=".jpg, .jpeg, .png"
                    onchange="uploadImage('im1')"
                />
                <img id="img1" class="img-upload-iklan" src="#" alt="your image" style="display: none;" />
                <p id="deleteImg1" class="deleteImg" style="display: none;"> Delete </p>

                <input type="hidden" name="uploadForm1" id="uploadForm1" />
            </label>
        </div>
        <div class="select-image margin-bottom-12">
        <label for="inputTag" class="cursor-pointer font-size-14">
            <div id="imgInpView2">
                <i class="fa fa-2x fa-camera" id="iconCamera2"></i>
            </div>
            <input
                style="display: none;"
                type="file"
                id="upload2"
                accept=".jpg, .jpeg, .png"
                onchange="uploadImage('im2')"
            />
            <img id="img2" class="img-upload-iklan" src="#" alt="your image" style="display: none;" />
            <p id="deleteImg2" class="deleteImg" style="display: none;"> Delete </p>

            <input type="hidden" name="uploadForm2" id="uploadForm2" />
        </label>
    </div>
    <div class="select-image margin-bottom-12">
        <label for="inputTag" class="cursor-pointer font-size-14">
            <div id="imgInpView3">
                <i class="fa fa-2x fa-camera" id="iconCamera3"></i>
            </div>
            <input
                style="display: none;"
                type="file"
                id="upload3"
                accept=".jpg, .jpeg, .png"
                onchange="uploadImage('im3')"
            />
            <img id="img3" class="img-upload-iklan" src="#" alt="your image" style="display: none;" />
            <p id="deleteImg3" class="deleteImg" style="display: none;"> Delete </p>

            <input type="hidden" name="uploadForm3" id="uploadForm3" />
        </label>
    </div>
    </div>
</div>

<script>
    imgInpView1.onclick = () => {
      document.getElementById("upload1").click();
    }

    imgInpView2.onclick = () => {
      document.getElementById("upload2").click();
    }

    imgInpView3.onclick = () => {
      document.getElementById("upload3").click();
    }

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

          document.getElementById("iconCamera1").style.display = 'none';
          document.getElementById("img1").style.display = 'block';
          document.getElementById("deleteImg1").style.display = 'block';
        }

        if (valImg === "im2") {
          idFormFile = "#uploadForm2";
          imgEncode = "#img2";

          document.getElementById("iconCamera2").style.display = 'none';
          document.getElementById("img2").style.display = 'block';
          document.getElementById("deleteImg2").style.display = 'block';
        }

        if (valImg === "im3") {
          idFormFile = "#uploadForm3";
          imgEncode = "#img3";

          document.getElementById("iconCamera3").style.display = 'none';
          document.getElementById("img3").style.display = 'block';
          document.getElementById("deleteImg3").style.display = 'block';
        }

        document.querySelector(imgEncode).src = srcEncoded;
        $(idFormFile).val(srcEncoded);
      };
    };
    
  }

  deleteImg1.onclick = evt => {
    document.getElementById("iconCamera1").style.display = 'block';
    document.getElementById("img1").style.display = 'none';
    document.getElementById("deleteImg1").style.display = 'none';

    document.getElementById("upload1").value = "";
    document.getElementById("uploadForm1").value = "";
  }

  deleteImg2.onclick = evt => {
    document.getElementById("iconCamera2").style.display = 'block';
    document.getElementById("img2").style.display = 'none';
    document.getElementById("deleteImg2").style.display = 'none';

    document.getElementById("upload2").value = "";
    document.getElementById("uploadForm2").value = "";
  }

  deleteImg3.onclick = evt => {
    document.getElementById("iconCamera3").style.display = 'block';
    document.getElementById("img3").style.display = 'none';
    document.getElementById("deleteImg3").style.display = 'none';

    document.getElementById("upload3").value = "";
    document.getElementById("uploadForm3").value = "";
  }
</script>