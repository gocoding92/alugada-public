<div id="home-page" class="row-sm padding-bottom-90">
  <p class="margin-left-16 font-size-18 textcolor-303235  font-weight: 600;">Selamat datang di Alugada!</p>
  <p class="margin-left-16 font-size-13 textcolor-303235 position-relative top-min14"> <i class="fa fa-user"></i> Silahkan masukkan pasword</p>
  <div class="row">
    <div class="margin-bottom-12 padding-right-46 padding-left-16">
      <label for="password" class="font-size-13">Masukkan Password <span class="textcolor-red"> *</span></label>
      <input type="password" id="password" class="form-control margin-top-6" placeholder="***">
    </div>
    <p class=" margin-left-16 margin-right-18 text-align-right">
      <a class="textcolor-303235 font-size-14 text-decoration-none" href="<?php echo base_url('lupa-password'); ?>">Lupa Password ?</a>
    </p>
    <div class="margin-bottom-12 padding-right-20 padding-left-16 margin-top-20">
      <button id="submit" class="btn btn-primary width-100-percent textcolor-white"> Submit </button>
    </div>
  </div>
</div>

<?= $this->include("script/lockscreen"); ?>