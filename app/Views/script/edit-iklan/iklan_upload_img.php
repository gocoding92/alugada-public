<script>
    // gambar action 1
    imgInpView1.onclick = () => {
        document.getElementById("imgInp1").click();
    }

    imgInp1.onchange = evt => {
        const [file] = imgInp1.files
        if (file) {
            img1.src = URL.createObjectURL(file);
            document.getElementById("iconCamera1").style.display = 'none';
            document.getElementById("img1").style.display = 'block';
            document.getElementById("deleteImg1").style.display = 'block';
        }
    }

    deleteImg1.onclick = evt => {
        document.getElementById("iconCamera1").style.display = 'block';
        document.getElementById("img1").style.display = 'none';
        document.getElementById("deleteImg1").style.display = 'none';
        document.getElementById("imgInp1").value = "";
    }

    // gambar action 2
    imgInpView2.onclick = () => {
        document.getElementById("imgInp2").click();
    }

    imgInp2.onchange = evt => {
        const [file] = imgInp2.files
        if (file) {
            img2.src = URL.createObjectURL(file);
            document.getElementById("iconCamera2").style.display = 'none';
            document.getElementById("img2").style.display = 'block';
            document.getElementById("deleteImg2").style.display = 'block';
        }
    }

    deleteImg2.onclick = evt => {
        document.getElementById("iconCamera2").style.display = 'block';
        document.getElementById("img2").style.display = 'none';
        document.getElementById("deleteImg2").style.display = 'none';
        document.getElementById("imgInp2").value = "";
    }

    // gambar action 3
    imgInpView3.onclick = () => {
        document.getElementById("imgInp3").click();
    }

    imgInp3.onchange = evt => {
        const [file] = imgInp3.files
        if (file) {
            img3.src = URL.createObjectURL(file);
            document.getElementById("iconCamera3").style.display = 'none';
            document.getElementById("img3").style.display = 'block';
            document.getElementById("deleteImg3").style.display = 'block';
        }
    }

    deleteImg3.onclick = evt => {
        document.getElementById("iconCamera3").style.display = 'block';
        document.getElementById("img3").style.display = 'none';
        document.getElementById("deleteImg3").style.display = 'none';
        document.getElementById("imgInp3").value = "";
    }

    // gambar action 4
    imgInpView4.onclick = () => {
        document.getElementById("imgInp4").click();
    }

    imgInp4.onchange = evt => {
        const [file] = imgInp4.files
        if (file) {
            img4.src = URL.createObjectURL(file);
            document.getElementById("iconCamera4").style.display = 'none';
            document.getElementById("img4").style.display = 'block';
            document.getElementById("deleteImg4").style.display = 'block';
        }
    }

    deleteImg4.onclick = evt => {
        document.getElementById("iconCamera4").style.display = 'block';
        document.getElementById("img4").style.display = 'none';
        document.getElementById("deleteImg4").style.display = 'none';
        document.getElementById("imgInp4").value = "";
    }

    // gambar action 5
    imgInpView5.onclick = () => {
        document.getElementById("imgInp5").click();
    }

    imgInp5.onchange = evt => {
        const [file] = imgInp5.files
        if (file) {
            img5.src = URL.createObjectURL(file);
            document.getElementById("iconCamera5").style.display = 'none';
            document.getElementById("img5").style.display = 'block';
            document.getElementById("deleteImg5").style.display = 'block';
        }
    }

    deleteImg5.onclick = evt => {
        document.getElementById("iconCamera5").style.display = 'block';
        document.getElementById("img5").style.display = 'none';
        document.getElementById("deleteImg5").style.display = 'none';
        document.getElementById("imgInp5").value = "";
    }

    // gambar action 6
    imgInpView6.onclick = () => {
        document.getElementById("imgInp6").click();
    }

    imgInp6.onchange = evt => {
        const [file] = imgInp6.files
        if (file) {
            img6.src = URL.createObjectURL(file);
            document.getElementById("iconCamera6").style.display = 'none';
            document.getElementById("img6").style.display = 'block';
            document.getElementById("deleteImg6").style.display = 'block';
        }
    }

    deleteImg6.onclick = evt => {
        document.getElementById("iconCamera6").style.display = 'block';
        document.getElementById("img6").style.display = 'none';
        document.getElementById("deleteImg6").style.display = 'none';
        document.getElementById("imgInp6").value = "";
    }
</script>