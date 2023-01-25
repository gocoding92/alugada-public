  <div class="border3-solid-ced4da margin-bottom-6 border-radius-5">
    <legend class="font-size-10 textcolor-9a9a9a margin-top-4 margin-bottom-8">Select photos (Up to photos 6) Min 1 <span class="textcolor-red"> * </span></legend>
    <div class="display-flex width-auto overflow-auto">
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView1" style="<?= $data_iklan['image_1'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera1"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-1" type="hidden" name="img-edit-1" value="<?= $data_iklan['image_1']; ?>" />

                <input id="imgInp1" type="file" name="file1" class="display-none" />
                <img id="img1" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_1']; ?>" alt="your image" style="<?= $data_iklan['image_1'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg1" class="deleteImg" style="<?= $data_iklan['image_1'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView2" style="<?= $data_iklan['image_2'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera2"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-2" type="hidden" name="img-edit-2" value="<?= $data_iklan['image_2']; ?>" />

                <input id="imgInp2" type="file" name="file2" class="display-none" />
                <img id="img2" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_2']; ?>" alt="your image" style="<?= $data_iklan['image_2'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg2" class="deleteImg" style="<?= $data_iklan['image_2'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView3" style="<?= $data_iklan['image_3'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera3"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-3" type="hidden" name="img-edit-3" value="<?= $data_iklan['image_3']; ?>" />

                <input id="imgInp3" type="file" name="file3" class="display-none" />
                <img id="img3" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_3']; ?>" alt="your image" style="<?= $data_iklan['image_3'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg3" class="deleteImg" style="<?= $data_iklan['image_3'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView4" style="<?= $data_iklan['image_4'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera4"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-4" type="hidden" name="img-edit-4" value="<?= $data_iklan['image_4']; ?>" />

                <input id="imgInp4" type="file" name="file4" class="display-none" />
                <img id="img4" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_4']; ?>" alt="your image" style="<?= $data_iklan['image_4'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg4" class="deleteImg" style="<?= $data_iklan['image_4'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView5" style="<?= $data_iklan['image_5'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera5"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-5" type="hidden" name="img-edit-5" value="<?= $data_iklan['image_5']; ?>" />

                <input id="imgInp5" type="file" name="file5" class="display-none" />
                <img id="img5" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_5']; ?>" alt="your image" style="<?= $data_iklan['image_5'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg5" class="deleteImg" style="<?= $data_iklan['image_5'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
        <div class="select-image margin-bottom-12">
            <label for="inputTag" class="cursor-pointer font-size-14">
                <div id="imgInpView6" style="<?= $data_iklan['image_6'] ? 'display:none;' : 'display:block;' ?>">
                    <i class="fa fa-2x fa-camera" id="iconCamera6"></i>
                </div>

                <!-- // hidden text img -->
                <input id="img-edit-6" type="hidden" name="img-edit-6" value="<?= $data_iklan['image_6']; ?>" />

                <input id="imgInp6" type="file" name="file6" class="display-none" />
                <img id="img6" class="img-upload-iklan" src="<?= base_url('Image/iklan') ?>/<?= $path_folder; ?>/<?= $data_iklan['image_6']; ?>" alt="your image" style="<?= $data_iklan['image_6'] ? 'display:block;' : 'display:none;' ?>" />
                <p id="deleteImg6" class="deleteImg" style="<?= $data_iklan['image_6'] ? 'display:block;' : 'display:none;' ?>"> Delete </p>
            </label>
        </div>
    </div>
</div>