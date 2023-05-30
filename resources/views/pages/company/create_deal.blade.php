<!-- <form method="POST" action="{{ route('add_deal') }}"  enctype="multipart/form-data">
    @csrf -->
<!-- Add Image -->
<div class="lawyer_profile-img mb-3">
    <div class="p-image">
        <div class="row">
            {{-- <div class="col-md-6">
                    <label for="logo">Upload Your Logo</label>
                    <input class="file-upload" name="logo" id="upload" type="file" accept="image/*" />
                    <input type="hidden" name="croplogo" id="upload-img" />

                    @if (empty(@$company->company_deal->logo))
                    <img src="" style="display: none;" id="dis-img" height="120" width="120">
                    @else
                    <img src="{{@$company->company_deal->logo}}" id="dis-img" height="120" width="120">
                    @endif
                </div> --}}

            <div class="col-md-6">
                <label for="profile_image">Image</label>

                <img src="{{asset('uploads/filmmaker/'.@$company->image) }}" height="120">

                {{-- <img src="{{ @$company->company_deal->profile_image }}" id="customerimagePreview"> --}}

                <input class="file-upload" name="image" id="profile_image" type="file" accept="image/*" />
                <input type="hidden" name="profileCroplogo" id="profile-upload-img" />
                @if (empty(@$company->company_deal->profile_image))
                    <img src="" style="display: none;" id="dis-pro-img" height="120" width="120">
                @else
                    <img src="{{ @$company->company_deal->profile_image }}" id="dis-pro-img" height="120"
                        width="120">
                @endif
            </div>

        </div>
    </div>
</div>
@include('layouts.crop_image')
<div class="row">

    {{-- <div class="col-md-6">
             @php
                $industries = $company->industries->pluck('industries_id')->toArray() ?? [];
            @endphp
            <label>Industry</label>
            <select class="form-select" name="industryname[]" id="industryname" multiple aria-label="Default select example" value="">
                @foreach ($IDES as $list)
                <option value="{{$list->id}}" {{in_array($list->id, $industries) ? 'selected' : '' }}>{{$list->industry_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label>Website Address</label>
            <input type="text" placeholder="Website Address" class="website" name="website_address" value="{{@$company->company_deal->website_address}}" placeholder="Website Address">
            @if ($errors->has('website_address'))
            <span class="error error-message">{{ $errors->first('website_address') }}</span>
            @endif
        </div>
    </div>
</div>
<div class="create_form">
    <!-- <div class="row">
        <div class="col-md-12">
            <label>Business Description</label>
            <textarea class="personalization" name="description" placeholder="Business Description">{{@$company->company_deal->description}}</textarea>
            @if ($errors->has('description'))
            <span class="error error-message">{{ $errors->first('description') }}</span>
            @endif
        </div>
    </div> -->
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <label>Facebook URL</label>
                <input type="text" placeholder="Facebook" class="facebook" name="facebook_link" value="{{@$company->company_deal->facebook_link}}" placeholder="Facebook">
                @if ($errors->has('facebook_link'))
                <span class="error error-message">{{ $errors->first('facebook_link') }}</span>
                @endif
            </div>
            <div class="col-md-6">
            <label>Twitter URL</label>
                <input type="text" placeholder="Twitter" class="twitter" name="twitter_link" value="{{@$company->company_deal->twitter_link}}" placeholder="twitter">
                @if ($errors->has('twitter_link'))
                <span class="error error-message">{{ $errors->first('twitter_link') }}</span>
                @endif
            </div>
            <div class="col-md-6">
            <label>linkdin URL</label>
                <input type="text" class="linkdin" placeholder="LinkedIn " name="linkedin_link" value="{{@$company->company_deal->linkedin_link}}" placeholder="linkdin">
                @if ($errors->has('linkedin_link'))
                <span class="error error-message">{{ $errors->first('linkedin_link') }}</span>
                @endif
            </div>
            <div class="col-md-6">
            <label>Instagram URL</label>
                <input type="text" placeholder="Instagram" class="instagram" name="instagram_link" value="{{@$company->company_deal->instagram_link}}" placeholder="instagram">
                @if ($errors->has('instagram_link'))
                <span class="error error-message">{{ $errors->first('instagram_link') }}</span>
                @endif
            </div>
        </div>
    </div> --}}
    <button type="submit" class="btn btn-warning mt-2 mb-5">Save</button>
</div>
<!-- </form> -->
