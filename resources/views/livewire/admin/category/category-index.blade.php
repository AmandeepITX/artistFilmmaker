<div>
    @if (session()->has('message'))
    <div class="alert alert-info alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('message') }}
    </div>
    @endif
    @if($is_update)
    @include('livewire.admin.category.update_data')
    @else
    @include('livewire.admin.category.create_data')
    @endif


    <div class="row mt-lg-3">
        <div class="col-sm-8">
            <input type="text" placeholder="Search" wire:model="searchTerm" placeholder="Search">
        </div>
    </div>

    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>No.</th>
                <th>Category Name</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $value)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ @$value->category_name }}</td>
                <td>{{ $value->created_at->format('M d, Y') }}</td>
                <td>
                    <a class="btn btn-info" wire:click="subcategory({{ $value->id }})">
                        Sub Category
                    </a>
                    <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="deleteId({{ $value->id }})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    {{ $categories->links()}}

     <!-- Modal -->
     <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete()" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>