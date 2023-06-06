<h4>Company View</h4>

<div class="form-group ">
    <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="fa fa-angle-left"></i>Back</a>
    {{-- <div class="row">
        <div class="">
            <label for="exampleInputEmail1">Business Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="b_name">
        </div>
    </div> --}}

    <div class="row">
        <div class="col-4">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="first_name">
        </div>
        {{-- <div class="col-4">
            <label for="exampleInputEmail1">Media URl</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="media_url">
        </div> --}}
    </div>

    <div class="row">
        <div class="">
            <label for="exampleInputEmail1">Website</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="website">
        </div>
    </div>
    <div class="row">
        <div class="">
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="city">
        </div>
    </div>
    <div class="row">
        <div class="">
            <label for="exampleInputEmail1">State</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="state">
        </div>
    </div>

    <div class="row">
        <div class="col-3">
            <label for="exampleInputEmail1">Bio Information</label>
            <textarea type="text" class="form-control" id="exampleInputEmail1" wire:model="bio_info"></textarea>
        </div>
        {{-- <div class="col-3">
            <label for="exampleInputEmail1">State</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="state">
        </div>
        <div class="col-2">
            <label for="exampleInputEmail1">Zip Code</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="zip_code">
        </div> --}}
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".form-control").prop("disabled", true);
    });
</script>
