<div>
    @if($view_page)
    @include('livewire.admin.company-view')
    @else
    <div class="col-sm-6 mb-1">
        <input type="text" placeholder="Search" class="first-name" name="Search" class="Search-bar" wire:model="searchTerm">
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
                @foreach($filmmakers as $company)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->email }}</td>
                    <td>{{ $company->created_at->format('M d, Y') }}</td>
                    <td>

                        <div class="btn-icon-list">


                            @if($company->status=='approved')
                            <a class="btn btn-success">
                                Approved </a>
                            @else
                            <a class="btn btn-info" wire:click="approvedStatus({{ $company->id }})">
                                Approve </a><span wire:loading wire:target="approvedStatus({{ $company->id }})">
                                                            <span class="fa-2x">
                                                               <i class="fas fa-spinner fa-spin"></i>
                                                            </span>
                                            </span>
                            @endif


                            @if($company->status=='unapproved')
                            <a class="btn btn-danger">
                                Unapproved</a>
                            @else
                            <a class="btn btn-info" wire:click="unapprovedStatus({{ $company->id }})">
                                Unapprove </a><span wire:loading wire:target="unapprovedStatus({{ $company->id }})">
                                                        <span class="fa-2x">
                                                           <i class="fas fa-spinner fa-spin"></i>
                                                        </span>
                                             </span>
                            @endif
                            </a>
                        </div>
                    </td>

                    <td>
                        <a class="btn btn-info" wire:click.="view({{ $company->id }})">
                            view
                        </a>
                    </td>

                    <!-- <td>
                        <div class="btn-icon-list">
                            <a class="btn btn-info">
                                view
                            </a>
                            <a class="btn btn-danger">
                                delete
                            </a>
                        </div>
                    </td>  -->
                </tr>
                @endforeach
            </tbody>
        </table>

         {{ $filmmakers->links()}}
    </div>

    @endif

</div>

