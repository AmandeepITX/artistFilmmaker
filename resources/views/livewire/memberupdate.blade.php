<div class="row">
        <div class="col-md-4">
            <label for="exampleInputEmail1"> Chamber Member</label>
            <input type="text" class="form-control" id="exampleInputEmail1" wire:model="chamber_member">
            @error('chamber_member') <div class="text-danger">{{ $message }}</div>@enderror
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 mt-lg-3">
            <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
        </div>
    </div>