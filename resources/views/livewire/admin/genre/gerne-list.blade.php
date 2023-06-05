<div>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Genre</h1>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            Add
                        </button>

                        <!-- The Modal -->
                        <div wire:ignore class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title"> Add Genre Types</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        {{-- <label></label> --}}
                                        <input type="text" wire:model="title">
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"
                                            wire:click="addGenreTypes">Save</button>
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Title</th>
                                        <th>Action </th>

                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($genreTypes as $genreType)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td> {{$genreType->title}}</td>
                                            <td>
                                                <button type="submit" class="btn btn-info" wire:click="edit({{$genreType->id}})" data-toggle="modal" data-target="#editModal"> Edit </button>

                                                <a href="javascript::void(0)" type="submit" class="btn btn-danger" wire:click="deleteConfirm({{$genreType->id}})"> Delete </a>
                                            </td>
                                    @endforeach
                                </tbody>
                            </table>


                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>


{{-- @dd(@$genreEdit->title); --}}
{{-- //Edit-Model --}}
    <div wire:ignore class="modal" id="editModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Edit Genre Types</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    {{-- <label></label> --}}
                    <input type="text" wire:model="title">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"
                        wire:click="updateGenreTypes()">Update</button>
                    {{-- <button type="button" class="btn btn-danger"
                        data-dismiss="modal">Close</button> --}}
                </div>

            </div>
        </div>
    </div>
</div>
