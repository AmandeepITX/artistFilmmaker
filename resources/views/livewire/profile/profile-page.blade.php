<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 px-0  left-profile-section">
                
               @if (empty($profilePages->image))
                    <img src="https://via.placeholder.com/300?text=Artist Replugged">
                @else
                <img src="{{ asset("uploads/filmmaker/".@$profilePages->image) }}">
                @endif
                <!--<div class="profile-social-icone">-->
                <!--    @if(@$profilePages->company_deal->facebook_link)-->
                <!--        <p class="facebook"> <a href="{{$profilePages->company_deal->facebook_link}}" target="_blank">{{$profilePages->company_deal->facebook_link}}</a></p>-->
                <!--    @endif-->
                <!--    @if(@$profilePages->company_deal->linkedin_link)-->
                <!--        <p class="linkedin"> <a href="{{$profilePages->company_deal->linkedin_link}}" target="_blank">{{$profilePages->company_deal->linkedin_link}}</a></p>-->
                <!--    @endif-->
                <!--    @if(@$profilePages->company_deal->twitter_link)-->
                <!--        <p class="twitter"><a href="{{$profilePages->company_deal->twitter_link}}" target="_blank">{{$profilePages->company_deal->twitter_link}}</a></p>-->
                <!--    @endif-->
                <!--    @if(@$profilePages->company_deal->instagram_link)-->
                <!--        <p class="instagram"> <a href="{{$profilePages->company_deal->instagram_link}}" target="_blank" >{{$profilePages->company_deal->instagram_link}}</a></p>-->
                <!--    @endif-->
                <!--</div>-->
            </div>
            <div class="col-md-3 m-4 p-0">
                <div class="text-box">  
                    @if(@$profilePages->company_deal->logo)                  
                        <img src="{{ asset($profilePages->company_deal->logo) }}">
                    @endif
                    <h3> {{$profilePages->name}}  </h3>
                    <!-- <h3>{{$profilePages->l_name}}</h3>-->
                    <!--<p><u>{{$profilePages->b_name}}</u></p>-->
                    <span>
                        @if(@$profilePages->industries)
                            @foreach($profilePages->industries as $i => $industryData)
                                {{ @$i>0?', ':''}}{{$industryData->industries->industry_name}}
                            @endforeach
                        @endif
                    </span>
                    <!--<p class="mt-2">{{$profilePages->address}} {{$profilePages->city}},-->
                    <!--    <br>-->
                    <!--    {{$profilePages->state}}-->
                    <!--{{$profilePages->zip_code}} </p>-->
                    
                    @if(@$profilePages->website)
                       
                           <p class="web-link mt-4"><a href="{{@$profilePages->website}}" target="_blank">{{$profilePages->website}}</a></p>
                    @endif
                     @if (@$profilePages->media_url)
                        <p class="web-link mt-4"><a href="{{ @$profilePages->media_url }}"
                                target="_blank">{{ $profilePages->media_url }}</a></p>
                    @endif
                    <p class="email-link"><a href="javascript::void(0)">{{@$profilePages->email}}</a></p>
                    <!--<p class="phone-link" ><a href="javascript::void(0)">{{@$profilePages->phone}}</a></p>-->
                </div>
            </div>
            <div class="col-md-5 mt-4 p-0">
                <div class="text-box">
                    <h4>Business Description
                    </h4>
                    <p>
                    {{@$profilePages->bio_info}}</p>
                </div>
            </div>
        </div>
    </div>
</div>