<div>
    <div class="discounts-services-inner ">
        <div class="grey-bg container-fluid">
            <div class="container px-0">
                <div class="discounts-services-titel">
                    <h2>Search Filmmakers & Artists</h2>


                </div>
                <div class="row">
                    {{-- <div class="col-md-5 sm-px-3">
                <select class="form-select" wire:model="industryId" aria-label="Default select example">
                    <option value="" selected>Industry</option>
                    @foreach ($users as $list)
                    <option value="{{$list->id}}">{{$list->industry_name}}</option>
                    @endforeach
                    </select>
                </div> --}}
                    <div class="col-md-4 search-form">

                        <select class="filter-dropdown" wire:model="searchUserType">
                            <option value=''> User Roles </option>
                            <option value='filmmaker'> Filmmaker </option>
                            <option value='artist'> Artist </option>
                        </select>
                    </div>
                    <div class="col-md-4 search-form">
                        <select class="filter-dropdown" id="genre-filter" wire:model="searchGenre"
                            wire:loading.attr="disabled" wire:target="searchGenre">
                            <option value=''>Filter by genre</option>

                            @foreach ($genreTypes as $genreType)
                                <option value="{{ $genreType->id }}">{{ $genreType->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 sm-px-3">
                        <!-- <input type="search" class="form-control my-0" placeholder="search by city,name,zipcode etc.." > -->
                        {{-- <form class="search-form"> --}}
                            <input type="search" class="form-control m-0" placeholder="Search by name, zip code"
                                wire:model="searchTerm" placeholder="Search" class="searchTerm">
                            {{-- <button class="search-btn"><img src="./img/search.png"></button> --}}
                        {{-- </form> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (count($users) > 0)
        <div class="container">
            <div class="row member-cards pt-5">
                @foreach ($users as $user)
                    @if($user->status == 'approved')
                    <div class="col-md-6 col-lg-3">
                        <div class="card deals-card">
                            <div class="card-img">
                                @if (empty($user->userProfile->image))
                                    <img src="https://via.placeholder.com/300?text=Black Chamber Network"
                                        class="card-img-top" alt="...">
                                @else
                                    @if ($user->user_type == 'filmmaker')
                                        <img src="{{ asset('uploads/filmmaker/' . @$user->userProfile->image) }}"
                                            {{--   onerror="this.src='https://via.placeholder.com/300?text=Black Chamber Network'" --}} class="card-img-top" alt="...">
                                    @elseif ($user->user_type == 'artist')
                                        <img src="{{ asset('uploads/artist/' . @$user->userProfile->image) }}">
                                    @endif
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->first_name }}</h5>
                                {{-- <h5 class="card-title">{{ $user->user_type }}</h5> --}}
                                <span class="">{{ $user->user_type }}</span>
                                <span class="">{{ @$user->userProfile->city }} {{ @$user->userProfile->state }}</span>
                                {{-- <span class="">{{ @$user->userProfile->state }}</span>
                                <span class="">{{ @$user->userProfile->zip_code }}</span> --}}
                                {{-- <span class="">{{ @$user->userProfile->genres_id }}</span> --}}
                                {{-- <span class="">{{ @$user->userProfile->Genre->title }}</span>
                                <span class="">{{ $user->website }}</span> --}}
                                <p class="card-text">{{ $user->bio_info }}</p>
                                <a href="{{ route('profilePage') . '?id=' . $user->id }}" class=" business-btn">View
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                    {{-- @else
                    <div class=" no-result-text container">
                        <br>
                        <h1>No Result is found</h1>
                    </div> --}}
                    @endif
                @endforeach
            </div>
        </div>
    @else
        <div class=" no-result-text container">
            <br>
            <h1>No Result is found</h1>
        </div>
    @endif

    {{$users->links()}}

</div>

<style>

</style>
