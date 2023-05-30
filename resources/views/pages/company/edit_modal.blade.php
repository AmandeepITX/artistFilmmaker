<!-- <div id="editModal_{{ $data->id }}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    
    <form method="POST" action="{{ route('update-deal', $data->id) }}" class="login-form" enctype="multipart/form-data">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Deal</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col-md-12">
              <label>Percent Discount</label>
              <input type="number" name="discount" max=100 min=0 class="Percent-discount" value="{{ @$data->discount }}">
              @if($errors->has('discount'))
              <span class="error error-message">{{ $errors->first('discount') }}</span>
              @endif
            </div>

            


            @if(!empty($catSubCat) )
                
                @foreach($catSubCat as $kry => $catSub)
                    @php
                        $selected = $data->category->toArray();
                        $selectedCategory = [];
                        if( !empty($selected) ){
                            foreach($selected as $selectedCat){
                                if($catSub->id == $selectedCat['category_id']){
                                    $selectedCategory = $selectedCat;
                                }
                            }
                        }
                    
                    @endphp
                    <div class="custom-dropdown-div-wrap service-div">
                        <div class="heading_checkbox-title">
                            <input type='checkbox' name='deal_type[]' value='{{$catSub->id}}' {{ (!empty($selectedCategory) && $selectedCategory['category_id'] == $catSub->id )? 'checked': ''; }}>
                            <button class="cstm_dropdown-btn">{{$catSub->category_name}}</button>
                        </div>
                        <div class="cstm_dropdown-ment {{(!empty($selectedCategory) && $selectedCategory['category_id'] ==$catSub->id )? 'active': '' }}">
                            <h4>Sub Categories</h4>
                            <ul class="list-unstyled">
                                @php
                                    $selectedSubCategory = [];
                                @endphp
                                @foreach ($catSub->subcategories as $subcategory)
                                    @php

                                        $checked = '';
                                        if(isset($selectedCategory['subcategories']) && !empty($selectedCategory['subcategories']) ){
                                            foreach($selectedCategory['subcategories'] as $selectedSubCat){
                                                if($subcategory->id == $selectedSubCat['deal_category_id']){
                                                    $selectedSubCategory = $selectedSubCat;
                                                }
                                            }
                                        }
                                        
                                        if(isset($selectedSubCategory['deal_category_id']) && $selectedSubCategory['deal_category_id'] == $subcategory->id){
                                            $checked = 'checked';
                                        }
                                    @endphp
                                    
                                    <li class="position-relative">
                                        <input type="checkbox" class="description deal_type category_deal_type"  name="sub_category[{{$catSub->id}}][]" id="category{{ @$subcategory->id}}"  value="{{ $subcategory->id }}" {{$checked}}>
                                        <label class="cstm-checkbox_btn" for="Airsoft">{{ @$subcategory->name}}</label>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            @endif

            <div class="col-md-12">
              <label for="username">Describe the free servies you would to offer</label>
              <textarea class="personalization" name="description">{{ @$data->description }}</textarea>
              @if($errors->has('description'))
              <span class="error error-message">{{ $errors->first('description') }}</span>
              @endif

            </div>

            <div class="row Upload-btn">
              <div class="col-md-12">
                <p>Upload Company Logo or Picture of Business Front</p>
              </div>
              <div class="col-md-12 Upload-img">
                   <input type="file" class="" name="update_logo">
        
              </div>
             
              
                <div class="col-md-12 company_logo">
                <img src="{{ asset('uploads/company/logo/' . $data->logo) }}" name="logo updated_preview" alt="previewimage" style="height:100px; width:150px">
              </div>

            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Save</button>
        </div>
      </div>
    </form>

  </div>
</div> -->

<script>


  // sub category 
  $('.deal_type').on('change', function() {
    $.ajaxSetup({
      headers: {
        'X-CSSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    });
    var category_id = this.value;
    $.ajax({
      url: "/get-sub-category",
      type: "POST",
      data: {
        "_token": "{{ csrf_token() }}",
        category_id: category_id
      },
      success: function(dataResult) {
        let html = '';
        if (dataResult.data.length) {
          for (let ky of dataResult.data) {
            html += `<option value="${ky.id}">${ky.name}</option>`;
          }
        }
        $(".appned_deal_type").html(html);
        $(".display_deal_type").removeAttr("style").show();
        $(".selected_sub").hide();
      }
    });
  });
</script>