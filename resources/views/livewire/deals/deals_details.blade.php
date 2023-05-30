   <!-- The Modal -->
   <div id="myModal_{{ $data->id }}" class="modal" role="dialog">>

       <div class="modal-dialog">
           <div class="modal-content dealmodal">
               <!-- Modal Header -->
               <div class="modal-header">
                   <h4 class="modal-title"> {{ @$data->user->b_name }}</h4>
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <!-- Modal body -->
               <div class="modal-body">
                   <div class="card-img row">
                       <div class="col-4 text-center">
                       <img class="cardimginner" src="{{ asset('uploads/company/logo/' .$data->logo) }}"></div>

                       <div class="card-text col-8 dealtxtcard">
                           <div class="card-txt-modal">
                               <b>Deal Type :</b>
                                @php
                                    $deal_type = '';
                                    $count = 1;
                                    $subcount = 1;
                                    $subDCategory = '';
                                    $subCategory = '';
                                @endphp 
                                
                                    @foreach($data->category as $cat)
                                        @php         
                                            foreach($cat->subcategories as $subcatData){
                                                foreach($subcatData->subcategory as $subCatData){
                                                    $subcomma = ' ';
                                                    if($count > 1){
                                                        $subcomma = ', ';
                                                    }
                                                    $subDCategory .= $subcomma.''.$subCatData->name;
                                                    $subcount++;
                                                }
                                            }
                                        @endphp  
                                        <br/> <b> {{$cat->categories->category_name}} :</b> {{$subDCategory}} 
                                        
                                    @endforeach
                                
                             {{$subCategory}}
                            </div>
                           <div class="card-txt-modal">
                               <b>Business Name :</b> {{$data->user->b_name}}
                           </div>
                           <div class="card-txt-modal">
                               <b>Description :</b> {{$data->description}}
                           </div>
                           <div class="card-txt-modal">
                              <b> Discount:</b> {{$data->discount}} %
                           </div>
                           <div class="card-txt-modal">
                              <b>Contact Email :</b>  {{$data->user->email}}
                           </div>
                           <div class="card-txt-modal">
                               <b>Contact Phone :</b> {{$data->user->phone}}
                           </div>
                           <div class="card-txt-modal">
                               <b>Business Address :</b> {{$data->user->address}}, {{$data->user->city}}, {{$data->user->state}}, {{$data->user->zip_code}}
                           </div>

                       </div>
                   </div>
               </div>

               <!-- Modal footer
               <div class="modal-footer">
                   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div> -->
           </div>
       </div>
   </div>