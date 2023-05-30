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
                            <input type="search" class="form-control my-0" placeholder="Search by name"
                                wire:model="searchTerm" placeholder="Search" class="searchTerm">
                            <button class="search-btn"><img src="./img/search.png"></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- @if (count($lists) > 0) --}}
    {{-- @dd($filmMakers) --}}
    @if (count($filmMakers) > 0)
        <div class="container">
            <div class="row member-cards pt-5">
                @foreach ($filmMakers as $user)
                    <div class="col-md-6 col-lg-3">
                        <div class="card deals-card">
                            <div class="card-img">
                                @if (empty($user->image))
                                    <img src="https://via.placeholder.com/300?text=Black Chamber Network"
                                        class="card-img-top" alt="...">
                                @else
                                    <img src="{{asset('uploads/filmmaker/' .@$user->image)}}"
                                       {{--   onerror="this.src='https://via.placeholder.com/300?text=Black Chamber Network'"--}}
                                        class="card-img-top" alt="...">
                                @endif
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $user->name }}</h5>
                                <span class="">{{ $user->media_url }}</span>
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
                                <a href="{{ route('profilePage') . '?id=' . $user->id }}" class=" business-btn">FILM MAKER
                                    PROFILE</a>
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
