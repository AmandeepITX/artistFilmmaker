<div>
    @if($view_page)
    @include('livewire.admin.user-view')
    @else

    <div class="col-sm-6">
        <input type="text" placeholder="Search" class="state" name="Search" class="Search-bar" wire:model="searchTerm">
    </div>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th width="28%">Status</th>
                    <!-- <th>Action</th> -->
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                    <td>

                        <div class="btn-icon-list">

                            @if($user->status=='approved')
                            <a class="btn btn-success">
                                Approved </a>
                            @else
                            <a class="btn btn-info" wire:click="approvedStatus({{ $user->id }})">
                                Approve </a><span wire:loading wire:target="approvedStatus({{ $user->id }})">
                                                            <span class="fa-2x">
                                                               <i class="fas fa-spinner fa-spin"></i>
                                                            </span>
                                            </span>

                            @endif


                            @if($user->status=='unapproved')
                            <a class="btn btn-danger">
                                Unapproved</a>
                            @else
                            <a class="btn btn-info" wire:click="unapprovedStatus({{ $user->id }})">
                                Unapprove </a><span wire:loading wire:target="unapprovedStatus({{ $user->id }})">
                                                <span class="fa-2x">
                                                               <i class="fas fa-spinner fa-spin"></i>
                                                            </span>
                                            </span>
                            @endif
                            </a>

                        </div>
                    </td>

                    <td>
                        <a class="btn btn-info" wire:click.="view({{ $user->id }})">
                            view
                        </a>
                    </td>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
        {{-- {{ $users->links()}} --}}

    </div>

    @endif
</div>
