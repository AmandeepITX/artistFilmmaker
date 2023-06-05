<div>
    <div class="discounts-services-inner ">
        <div class="grey-bg container-fluid">
            <div class="container px-0">
                <div class="discounts-services-titel">
                    <h2>Member Services</h2>


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


                    <div class="col-md-5 sm-px-3">
                        <!-- <input type="search" class="form-control my-0" placeholder="search by city,name,zipcode etc.." > -->
                        <form class="search-form">
                            <input type="search" class="form-control my-0"
                                placeholder="Search by name, zip code & role" wire:model="searchTerm"
                                placeholder="Search" class="searchTerm">
                            <button class="search-btn"><img src="./img/search.png"></button>
                        </form>
                    </div>
                </div>

                <select id="genre-filter" wire:model="searchGenre" wire:loading.attr="disabled" wire:target="searchGenre">
                    <option>Filter by genre</option>

                    @foreach ($genreTypes as $genreType)
                        <option value="{{ $genreType->id }}">{{ $genreType->title }}</option>
                    @endforeach
                </select>

                {{-- <select value = "{{$users->user_type}}">
                    <option value = 'filmmaker' {{$users->user_type == 'filmmaker' ? 'selected' :''}}> Film Maker </option>
                    <option value = 'artist' {{$users->user_type == 'artist' ? 'selected' : ''}}> Artist </option>
                </select> --}}

            </div>
        </div>
    </div>

    @if (count($users) > 0)
        <div class="container">
            <div class="row member-cards pt-5">
                @foreach ($users as $user)
                    <div class="col-md-6 col-lg-3">
                        <div class="card deals-card">
                            <div class="card-img">
                                @if (empty($user->userProfile->image))
                                    <img src="https://via.placeholder.com/300?text=Black Chamber Network"
                                        class="card-img-top" alt="...">
                                @else
                                    <img src="{{ asset('uploads/filmmaker/' . @$user->userProfile->image) }}"
                                        {{--   onerror="this.src='https://via.placeholder.com/300?text=Black Chamber Network'" --}} class="card-img-top" alt="...">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->first_name }}</h5>
                                {{-- <h5 class="card-title">{{ $user->user_type }}</h5> --}}
                                <span class="">{{ @$user->userProfile->city }}</span>
                                <span class="">{{ @$user->userProfile->state }}</span>
                                <span class="">{{ @$user->userProfile->zip_code }}</span>
                                {{-- <span class="">{{ @$user->userProfile->genres_id }}</span> --}}
                                <span class="">{{ @$user->userProfile->Genre->title }}</span>
                                <span class="">{{ $user->website }}</span>
                                {{-- @php
                                    //$industrysId = explode(',', $show->industry ?? []);
                                    //$industrys = App\models\Industry::whereIn('id', $industrysId)->get();
                                @endphp
                                <span>
                                    @if (@$user->industries)
                                        @foreach ($user->industries as $i => $industryData)
                                            {{ @$i > 0 ? ', ' : '' }}{{ $industryData->industries->industry_name }}
                                        @endforeach
                                    @endif
                                </span></strong> --}}
                                <p class="card-text">{{ $user->bio_info }}</p>
                                <a href="{{ route('profilePage') . '?id=' . $user->id }}" class=" business-btn">View
                                    Profile</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class=" no-result-text container">
            <br>
            <h1>No Result is found</h1>
        </div>
    @endif
</div>

<style>

</style>
{{-- <script>
    document.getElementById('genre-filter').addEventListener('change', function() {
        // debugger;
        var selectedValue = this.value;
        var options = document.getElementsByTagName('option');
                console.log(options);
        for (var i = 0; i < options.length; i++) {
            var option = options[i];
            if (option.textContent === selectedValue) {
                option.selected = true;
            } else {
                option.selected = false;
            }
        }
    });
</script> --}}
