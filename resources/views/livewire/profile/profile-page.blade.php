<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 px-0  left-profile-section">

                @if (empty($profilePages->userProfile->image))
                    <img src="https://via.placeholder.com/300?text=Artist Replugged">
                @else
                    @if ($profilePages->user_type == 'filmmaker')
                        <img src="{{ asset('uploads/filmmaker/' . @$profilePages->userProfile->image) }}">
                    @elseif ($profilePages->user_type == 'artist')
                        <img src="{{ asset('uploads/artist/' . @$profilePages->userProfile->image) }}">
                    @endif
                @endif

                <div class="profile-social-icone">
                    @if (@$profilePages->userProfile->facebook_link)
                        @php
                            $facebookLink = $profilePages->userProfile->facebook_link;

                            $formattedLink = '';

                            if (filter_var($facebookLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($facebookLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $facebookLink : '//' . $facebookLink;
                            } else {
                                $formattedLink = '//' . $facebookLink;
                            }
                        @endphp
                        <p class="facebook">

                            <a href="{{ $formattedLink }}" target="_blank">

                                {{ $profilePages->userProfile->facebook_link }}
                            </a>
                        </p>
                    @endif
                    @if (@$profilePages->userProfile->linkedin_link)
                        @php
                            $linkedinLink = $profilePages->userProfile->linkedin_link;

                            $formattedLink = '';

                            if (filter_var($linkedinLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($linkedinLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $linkedinLink : '//' . $linkedinLink;
                            } else {
                                $formattedLink = '//' . $linkedinLink;
                            }
                        @endphp
                        <p class="linkedin"> <a href="{{ $formattedLink }}"
                                target="_blank">{{ $profilePages->userProfile->linkedin_link }}</a></p>
                    @endif
                    @if (@$profilePages->userProfile->twitter_link)
                        @php
                            $twitterLink = $profilePages->userProfile->twitter_link;

                            $formattedLink = '';

                            if (filter_var($twitterLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($twitterLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $twitterLink : '//' . $twitterLink;
                            } else {
                                $formattedLink = '//' . $twitterLink;
                            }
                        @endphp

                        <p class="twitter"><a href="{{ $formattedLink }}"
                                target="_blank">{{ $profilePages->userProfile->twitter_link }}</a></p>
                    @endif

                    @if (@$profilePages->userProfile->instagram_link)
                        @php
                            $instagramLink = $profilePages->userProfile->instagram_link;

                            $formattedLink = '';

                            if (filter_var($instagramLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($instagramLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $instagramLink : '//' . $instagramLink;
                            } else {
                                $formattedLink = '//' . $instagramLink;
                            }
                        @endphp

                        <p class="instagram"> <a href="{{ $formattedLink }}"
                                target="_blank">{{ $profilePages->userProfile->instagram_link }}</a></p>
                    @endif

                    @if (@$profilePages->userProfile->youtube_link)
                        @php
                            $youtubeLink = $profilePages->userProfile->youtube_link;

                            $formattedLink = '';

                            if (filter_var($youtubeLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($youtubeLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $youtubeLink : '//' . $youtubeLink;
                            } else {
                                $formattedLink = '//' . $youtubeLink;
                            }
                        @endphp

                        <p class="youtube"> <a href="{{ $formattedLink }}"
                                target="_blank">{{ $profilePages->userProfile->youtube_link }}</a></p>
                    @endif
                </div>
            </div>
            <div class="col-md-3 m-sm-4 m-0 p-sm-0 p-4">
                <div class="text-box">
                    @if (@$profilePages->userProfile->logo)
                        <img src="{{ asset($profilePages->userProfile->logo) }}">
                    @endif
                    <h3> {{ $profilePages->first_name }} {{ $profilePages->last_name }} </h3>

                    <!-- <h3>{{ $profilePages->last_name }}</h3> -->
                    <!--<p><u>{{ $profilePages->b_name }}</u></p>-->
                    <span>
                        @if (@$profilePages->industries)
                            @foreach ($profilePages->industries as $i => $industryData)
                                {{ @$i > 0 ? ', ' : '' }}{{ $industryData->industries->industry_name }}
                            @endforeach
                        @endif
                    </span>
                    <p class="mt-2"> {{ @$profilePages->userProfile->city }} ,

                        {{ @$profilePages->userProfile->state }}
                        <br>
                        {{ @$profilePages->userProfile->zip_code }}
                    </p>
                    <p class="mt-2">
                    <ul class="genre-type">
                        @foreach ($genres as $genre)
                            <li>
                                {{ $genre->title }}
                            </li>
                        @endforeach
                    </ul>

                    @if (@$profilePages->website)
                        @php
                            $websiteLink = $profilePages->website;
                            $formattedLink = '';

                            if (filter_var($websiteLink, FILTER_VALIDATE_URL)) {
                                $parsedLink = parse_url($websiteLink);
                                $formattedLink = isset($parsedLink['scheme']) ? $websiteLink : '//' . $websiteLink;
                            } else {
                                $formattedLink = '//' . $websiteLink;
                            }
                        @endphp


                        <p class="web-link mt-4"><a href="{{ $formattedLink }}"
                                target="_blank">{{ $profilePages->website }}</a></p>
                    @endif
                    {{-- @if (@$profilePages->media_url)
                        <p class="web-link mt-4"><a href="{{ @$profilePages->media_url }}"
                                target="_blank">{{ $profilePages->media_url }}</a></p>
                    @endif --}}
                    <p class="email-link"><a href="javascript::void(0)">{{ @$profilePages->email }}</a></p>
                    <!--<p class="phone-link" ><a href="javascript::void(0)">{{ @$profilePages->phone }}</a></p>-->
                </div>
            </div>
            <div class="col-md-5 mt-4 p-sm-0 px-4">
                <div class="text-box">
                    <h4>Bio</h4>
                    <p>
                        {{ @$profilePages->userProfile->bio_info }}</p>
                </div>

            </div>
        </div>
    </div>
</div>
