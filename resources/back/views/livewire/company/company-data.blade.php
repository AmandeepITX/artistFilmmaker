<div>
    <div class="col-sm-4 mt-lg-3 serchbox">
        <input type="text" placeholder="Search" wire:model="searchTerm" placeholder="Search" class="serchin">
    </div>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>No.</th>
                <th>Discount</th>
                <th>Description</th>
                <th>Deal Type</th>
                <th>Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($company_datas as $value)

            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->discount }}%</td>
                <td>{{ $value->description }}</td>
                <td>{{@$value->category->category_name}}</td>
                <!-- <td>{{ $value->category_id }}</td> -->
                <td class="imagesize"> <img src="{{ asset('uploads/company/logo/' . $value->logo) }}" style="height:120px; width:120px"></td>
                @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")
                <td>
                    <button disabled class="btn btn-primary btndeit  btn-sm">Edit</button>
                    <button disabled class="btn btn-danger btndel btn-sm">Delete</button>
                </td>
                @else
                <td>
                    
                    <button class="btn btn-primary btn-sm btndeit" id="editDeal">Edit</button>
                    <button wire:click="deleteId({{ $value->id }})" class="btn btn-danger btn-sm btndel" data-toggle="modal" data-target="#exampleModal">Delete</button>
                </td>


                @endif

            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $company_datas->links()}}
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
<!-- Latest compiled and minified CSS -->
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script>
    $(document).ready(function() {
        $('#editDeal').click(function() {
            $('#update_form').show();
            $('#create_form').hide();
        });
    });
</script>
=======
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
>>>>>>> 19cf620548ce1e245c3265ebc9320b4904b92df7
