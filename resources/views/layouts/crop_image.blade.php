<!-- Accept Modal Start Here-->
<div id="cropModal" class="modal" role="dialog">
    <div class="modal-dialog modal_style">
        <button type="button" class="btn btn-default close closeCropModal" data-dismiss="modal">x</button>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="image" style="width:250px; margin-top:20px"></div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button type="button" class="btn_s crop_image">Crop Image</button>
            </div>
        </div>
    </div>
</div>

<div id="cropModalProfile" class="modal" role="dialog">
    <div class="modal-dialog modal_style">
        <button type="button" class="btn btn-default close closeCropModal" data-dismiss="modal">x</button>
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Upload & Crop Image</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="imagepro" style="width:250px; margin-top:20px"></div>
                    </div>
                </div>
            </div>
            <div class="text-center mb-3">
                <button type="button" class="btn_s profile_crop_image">Crop Image</button>
            </div>
        </div>
    </div>
</div>

<link href="{{ asset('/css/croppie.css') }}" rel="stylesheet" />
<script src="{{ asset('/js/croppie.js') }}"></script>

<style>
    .croppie-container {
        width: 100% !important;
        height: 100%;
    }
</style>
<script>
    $(document).ready(function() {

        let viewportWidth = 300;
        let viewportHeight = 300;
        let boundaryWidth = 300;
        let boundaryHeight = 300;

        $image_crop = $('#image').croppie({
            enableExif: true,
            viewport: {
                width: viewportWidth,
                height: viewportHeight,
                type: 'square' //circle  square
            },
            boundary: {
                width: boundaryWidth,
                height: boundaryHeight
            }
        });

        $image_crop2 = $('#imagepro').croppie({
            enableExif: true,
            viewport: {
                width: viewportWidth,
                height: viewportHeight,
                type: 'square' //circle  square
            },
            boundary: {
                width: boundaryWidth,
                height: boundaryHeight
            }
        });

        $('#upload').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#cropModal').modal('show');
        });

        $('#profile_image').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop2.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#cropModalProfile').modal('show');
        });


        $('.crop_image').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                // $('#uploaded img').attr('src', response);
                $('#dis-img').show();
                $('#dis-img').attr('src', response);
                $('#upload-img').attr('value', response);
                $('#cropModal').modal('hide');
            })
        });

        $('.profile_crop_image').click(function(event) {
            $image_crop2.croppie('result', {
                type: 'canvas',
                size: 'viewport'
            }).then(function(response) {
                // $('#uploaded img').attr('src', response);
                $('#dis-pro-img').show();
                $('#dis-pro-img').attr('src', response);
                $('#profile-upload-img').attr('value', response);
                $('#cropModalProfile').modal('hide');
            })
        });


        $('.closeCropModal').click(function(event) {
            $('#cropModal').modal('hide');
            $('#cropModalProfile').modal('hide');
        });


    });
</script>