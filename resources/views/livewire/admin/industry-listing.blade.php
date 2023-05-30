<div>
    <div class="row">
        <div class="col-md-4 mb-2">
            @if($is_update == true)
            @include('livewire.admin.industryUpdate')
            @else
            <label>Industry Name</label>
            <div>
                <input type="text" class="description" wire:model="industry_name">
                <button wire:click.prevent="store()" class="btn btn-success btncategory">Save</button>
                @error('industry_name') <div class="text-danger">{{ $message }}</div>@enderror
            </div>
            @endif
        </div>
    </div>
    <div class="col-sm-6 mb-1">
        <input type="text" placeholder="Search" class="first-name" name="Search" class="Search-bar" wire:model="searchTerm">
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>

                <tr>
                    <th>Id</th>
                    <th>Industry_Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($industryLists as $list )
                <tr>
                    <td>{{$list->id}}</td>
                    <td>{{$list->industry_name}}</td>
                    <td>
                        <button wire:click="edit({{ $list->id }})" class="btn btn-primary btn-sm">Edit</button>
                        <button wire:click="deleteId({{ $list->id }})" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $industryLists->links()}}
    </div>



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
                    <button type="button" wire:click="delete" class="btn btn-danger close-modal" data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!--End  -->

</div>