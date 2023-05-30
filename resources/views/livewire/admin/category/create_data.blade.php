<form>
    <div class="row">
        <div class="col-md-4 mb-2">
            <label>Categoroy Name</label>
            <div>
                <input type="text" class="description" wire:model="category_name">  
                <button wire:click.prevent="store()" class="btn btn-success btncategory">Save</button>
                @error('category_name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

        </div>
    </div>
  
</form>