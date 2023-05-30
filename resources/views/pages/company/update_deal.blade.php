<h4 id="update_deal_view">Update Deal</h4>

<form method="POST" class="login-form" enctype="multipart/form-data">
    @csrf

    <div class="row">

        <input type="hidden" name="update_id" id="update_id" class="personalization">
        <div class="col-md-4">
            <label>Percent Discount</label>
            <input type="number" name="discount" id="discount" max=100 min=0 class="Percent-discount">
            @if($errors->has('discount'))
            <span class="error error-message">{{ $errors->first('discount') }}</span>
            @endif
        </div>

        <div class="col-md-4">
            <label>Deal Type</label>
            <select class="deal_type" name="category_id" id="category_id">
                <option value="null" disabled selected>{{ __('Please select Deal') }}</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ @$category->category_name}}</option>
                @endforeach

            </select>
            @if($errors->has('category_id'))
            <span class="error error-message">{{ $errors->first('category_id') }}</span>
            @endif

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <label for="username">Describe the free servies you would to offer</label>
            <textarea class="personalization" name="description" id="description"></textarea>
            @if($errors->has('description'))
            <span class="error error-message">{{ $errors->first('description') }}</span>
            @endif

        </div>
    </div>
    <!-- Add Image -->



    <div class="row Upload-btn">
        <div class="col-md-3">
            <p>Other ID (drivers license, School ID, State ID)</p>
        </div>
        <div class="col-md-3 Upload-img">
            <input type="file" class="real-file" name="logo_update" id="logo_update" hidden="hidden">
            <a type="button" class="custom-button" onclick="openfileUpdate()">UPLOAD FILE</a><br>
            <span class="custom-text" id="hide_text">No file chosen.</span>
            <div class="custom-text" id="show_text"></div>
            @if($errors->has('other_id'))
            <div class="error error-message">{{ $errors->first('other_id') }}</div>
            @endif
        </div>


    </div>
    <div class="col-md-3 Upload-img">

        <img src="{{ asset('uploads/company/logo') }}" id="logo" style="height:100px; width:150px">
    </div>
    <div class="col-md-5 Upload-img" id="logo_view" style="display:none;">
        <img id="updated_preview" alt="previewimage" style="height:100px; width:150px">
    </div>

    </div>


    @if(Auth::user()->status == "pending" || Auth::user()->status == "unapproved")
    <button disabled class="btn btn-danger">Update</button>
    @else
    <button type="submit" class="btn btn-danger" id="update_deal">Update</button>
    @endif

</form>
