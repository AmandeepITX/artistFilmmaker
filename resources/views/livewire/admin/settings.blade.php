<div>
    @if (session()->has('message'))
    <div class="row">
        <div class="col-8">

            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ session('message') }}
            </div>
        </div>

    </div>



    @endif

    <!-- <button wire:click="edit({{ $settings->id}})" class="fa fa-edit btn-sm">Edit</button> -->
    <form wire:submit.prevent="update" enctype="multipart/form-data">
        <div class="row">
            <div class="col-8">


                <div class="form-group" wire:ignore>
                    <label for="exampleInputName">Business Sign up Title</label>
                    <textarea wire:model="title" name="title" class="form-control title" id="exampleInputName"></textarea>
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="exampleInputName">Business Sign up Description</label>
                    <textarea class="form-control description" name="description" id="exampleInputName" wire:model="description"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group" wire:ignore>
                    <label for="exampleInputName"> Footer Text</label>
                    <textarea class="form-control footer" name="footer" id="exampleInputName" wire:model="footer"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>


        </div>

    </form>
    <br>



</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


@push('scripts')
<script>
    window.addEventListener('refresh-page', event => {
      
        window.location.reload(false);
    })
    $(document).ready(function() {

       
        ClassicEditor
            .create(document.querySelector('.description'))
            .then(editor => {
                editor.model.document.on('change:data', () => {

                    @this.set('description', editor.getData());;
                })
            })
            .catch(error => {
                console.error(error);
            });
      
    })
</script>
@endpush