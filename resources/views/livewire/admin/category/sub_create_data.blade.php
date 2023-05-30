<form>
    <div class="row">
        <div class="col-md-4 mb-2">
            <label>Name</label>
            <div>
                <input type="text" class="description" wire:model="name">  
                <button wire:click.prevent="store()" class="btn btn-success btncategory">Save</button>
                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

        </div>
    </div>
  
</form>