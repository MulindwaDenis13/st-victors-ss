@push('css')

<script type="text/javascript">

	var thumbnail_height = "{{$module->thumbnail_height}}";

	var thumbnail_width = "{{$module->thumbnail_width}}";

</script>

@endpush

<input type="hidden" name="module_id" value="{{$module->id}}">

<input type="hidden" name="module_term" value="{{$module->term}}">

<input type="hidden" name="module_slug" value="{{$module->slug}}">

<input type="hidden" id="attached_file" <?php if(isset($module_data)){echo 'value="'.$module_data->image.'"';} ?> name="attached_file">

<input type="hidden" id="attached_files" <?php if(isset($module_data)){echo 'value="'.$module_data->images.'"';} ?> name="attached_files">

<div class="row">

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('title', $module->term.' Title', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('title', null, array('class'=>'form-control', 'id'=>'title', 'placeholder'=>$module->term.' Title', 'required'=>'required')) !!}

     </div>

  </div>

  @if($module->is_slug)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('term', $module->term.' Slug', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('slug', null, array('class'=>'form-control', 'id'=>'slug', 'placeholder'=>$module->term.' Slug', 'required'=>'required')) !!}

     </div>

  </div>

  @endif



  @if($module->is_menu)

  @if(null!==($menu_types))

  @foreach($menu_types as $key => $menu_type)

  @php

  if(isset($module_data)){

    $menu = App\Models\Menu::where('post_id',$module_data->id)->where('menu_type_id',$key)->first();

  }

  @endphp

  <div class="col-md-3">

      <div class="form-group border-checkbox-section">



        <div class="border-checkbox-group border-checkbox-group-success">

          <input class="border-checkbox" <?php if(isset($menu) && $menu->id!=''){echo 'checked';} ?> name="menu_{{$key}}" type="checkbox" id="checkbox{{$key}}">

          <label class="border-checkbox-label" for="checkbox{{$key}}">{{$menu_type}}</label>

      </div>

    </div>

  </div>

  @endforeach

  @endif

  @endif

  @if($module->category && $module->multiple_category)

  <div class="col-md-12">

     <div class="form-group">

        @php

            if(isset($module_data)){

              $category_ids = explode(',',$module_data->category_ids);

        

            }

        @endphp

            

        {!! Form::label('category_ids', $module->term.' Categories', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('category_ids[]', $categories, isset($category_ids)?$category_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'category_ids', 'multiple'=>'multiple')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'category_ids') !!}

     </div>

  </div>

  @else

  @if($module->category)

   <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('category', $module->term.' Category', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('category', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'category', 'required'=>'required')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'category') !!}

     </div>

  </div>

  @endif

  @endif



  @if($module->is_description)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('description', $module->term.' Description', ['class' => 'font-weight-bold']) !!}

        {!! Form::textarea('description', null, array('class'=>'form-control', 'id'=>'editor1', 'placeholder'=>$module->term.' Description', 'required'=>'required')) !!}

     </div>

  </div>

  @endif



 @if($module->extra_field_title_1)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_1=='select')

      {!! Form::select('extra_field_1', [''=>'Select '.$module->extra_field_title_1]+dropdown($module->extra_field_attr_1), null, array('class'=>'form-control', 'id'=>'extra_field_1', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_1)?$module->extra_field_type_1:'text';

    @endphp

    {!! Form::$type('extra_field_1', null, array('class'=>'form-control', 'id'=>'extra_field_1', 'placeholder'=>'Enter '.$module->extra_field_title_1, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  

  

  @endif



  @if($module->extra_field_title_2)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_2=='select')

      {!! Form::select('extra_field_2', [''=>'Select '.$module->extra_field_title_2]+dropdown($module->extra_field_attr_2), null, array('class'=>'form-control', 'id'=>'extra_field_2', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_2)?$module->extra_field_type_2:'text';

    @endphp

    {!! Form::$type('extra_field_2', null, array('class'=>'form-control', 'id'=>'extra_field_2', 'placeholder'=>'Enter '.$module->extra_field_title_2, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_3)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_3=='select')

      {!! Form::select('extra_field_3', [''=>'Select '.$module->extra_field_title_3]+dropdown($module->extra_field_attr_3), null, array('class'=>'form-control', 'id'=>'extra_field_3', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_3)?$module->extra_field_type_3:'text';

    @endphp

    {!! Form::$type('extra_field_3', null, array('class'=>'form-control', 'id'=>'extra_field_3', 'placeholder'=>'Enter '.$module->extra_field_title_3, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_4)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_4=='select')

      {!! Form::select('extra_field_4', [''=>'Select '.$module->extra_field_title_4]+dropdown($module->extra_field_attr_4), null, array('class'=>'form-control', 'id'=>'extra_field_4', 'required'=>'required')) !!}

    @else





    @php

    $type = null!==($module->extra_field_type_4)?$module->extra_field_type_4:'text';

    @endphp

    {!! Form::$type('extra_field_4', null, array('class'=>'form-control', 'id'=>'extra_field_4', 'placeholder'=>'Enter '.$module->extra_field_title_4, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_5)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_5=='select')

      {!! Form::select('extra_field_5', [''=>'Select '.$module->extra_field_title_5]+dropdown($module->extra_field_attr_5), null, array('class'=>'form-control', 'id'=>'extra_field_5', 'required'=>'required')) !!}



    @else



    @php

    $type = null!==($module->extra_field_type_5)?$module->extra_field_type_5:'text';

    @endphp

    {!! Form::$type('extra_field_5', null, array('class'=>'form-control', 'id'=>'extra_field_5', 'placeholder'=>'Enter '.$module->extra_field_title_5, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif





  @if($module->extra_field_title_6)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_6=='select')

      {!! Form::select('extra_field_6', [''=>'Select '.$module->extra_field_title_6]+dropdown($module->extra_field_attr_6), null, array('class'=>'form-control', 'id'=>'extra_field_6', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_6)?$module->extra_field_type_6:'text';

    @endphp

    {!! Form::$type('extra_field_6', null, array('class'=>'form-control', 'id'=>'extra_field_6', 'placeholder'=>'Enter '.$module->extra_field_title_6, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_7)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_7=='select')

      {!! Form::select('extra_field_7', [''=>'Select '.$module->extra_field_title_7]+dropdown($module->extra_field_attr_7), null, array('class'=>'form-control', 'id'=>'extra_field_7', 'required'=>'required')) !!}

    @else



    @php

    $type = null!==($module->extra_field_type_7)?$module->extra_field_type_7:'text';

    @endphp

    {!! Form::$type('extra_field_7', null, array('class'=>'form-control', 'id'=>'extra_field_7', 'placeholder'=>'Enter '.$module->extra_field_title_7, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_8)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_8=='select')

      {!! Form::select('extra_field_8', [''=>'Select '.$module->extra_field_title_8]+dropdown($module->extra_field_attr_8), null, array('class'=>'form-control', 'id'=>'extra_field_8', 'required'=>'required')) !!}

    @else



    @php

    $type = null!==($module->extra_field_type_8)?$module->extra_field_type_8:'text';

    @endphp

    {!! Form::$type('extra_field_8', null, array('class'=>'form-control', 'id'=>'extra_field_8', 'placeholder'=>'Enter '.$module->extra_field_title_8, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_9)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_9=='select')

      {!! Form::select('extra_field_9', [''=>'Select '.$module->extra_field_title_9]+dropdown($module->extra_field_attr_9), null, array('class'=>'form-control', 'id'=>'extra_field_9', 'required'=>'required')) !!}

    @else



    @php

    $type = null!==($module->extra_field_type_9)?$module->extra_field_type_9:'text';

    @endphp

    {!! Form::$type('extra_field_9', null, array('class'=>'form-control', 'id'=>'extra_field_9', 'placeholder'=>'Enter '.$module->extra_field_title_9, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif





  @if($module->extra_field_title_10)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_10=='select')

      {!! Form::select('extra_field_10', [''=>'Select '.$module->extra_field_title_10]+dropdown($module->extra_field_attr_10), null, array('class'=>'form-control', 'id'=>'extra_field_10', 'required'=>'required')) !!}

    @else



    @php

    $type = null!==($module->extra_field_type_10)?$module->extra_field_type_10:'text';

    @endphp

    {!! Form::$type('extra_field_10', null, array('class'=>'form-control', 'id'=>'extra_field_10', 'placeholder'=>'Enter '.$module->extra_field_title_10, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_11)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_11=='select')

      {!! Form::select('extra_field_11', [''=>'Select '.$module->extra_field_title_11]+dropdown($module->extra_field_attr_11), null, array('class'=>'form-control', 'id'=>'extra_field_11', 'required'=>'required')) !!}

    @else



    @php

    $type = null!==($module->extra_field_type_11)?$module->extra_field_type_11:'text';

    @endphp

    {!! Form::$type('extra_field_11', null, array('class'=>'form-control', 'id'=>'extra_field_11', 'placeholder'=>'Enter '.$module->extra_field_title_11, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_12)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_12=='select')

      {!! Form::select('extra_field_12', [''=>'Select '.$module->extra_field_title_12]+dropdown($module->extra_field_attr_12), null, array('class'=>'form-control', 'id'=>'extra_field_12', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_12)?$module->extra_field_type_12:'text';

    @endphp

    {!! Form::$type('extra_field_12', null, array('class'=>'form-control', 'id'=>'extra_field_12', 'placeholder'=>'Enter '.$module->extra_field_title_12, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_13)

  <div class="col-lg-6">

    <div class="form-group">

    @if($module->extra_field_type_13=='select')

      {!! Form::select('extra_field_13', [''=>'Select '.$module->extra_field_title_13]+dropdown($module->extra_field_attr_13), null, array('class'=>'form-control', 'id'=>'extra_field_13', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_13)?$module->extra_field_type_13:'text';

    @endphp

    {!! Form::$type('extra_field_13', null, array('class'=>'form-control', 'id'=>'extra_field_13', 'placeholder'=>'Enter '.$module->extra_field_title_13, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif





  @if($module->extra_field_title_14)

  <div class="col-lg-12">

    <div class="form-group">

    @if($module->extra_field_type_14=='select')

      {!! Form::select('extra_field_14', [''=>'Select '.$module->extra_field_title_14]+dropdown($module->extra_field_attr_14), null, array('class'=>'form-control', 'id'=>'extra_field_14', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_14)?$module->extra_field_type_14:'text';

    @endphp

    {!! Form::$type('extra_field_14', null, array('class'=>'form-control', 'id'=>'extra_field_14', 'placeholder'=>'Enter '.$module->extra_field_title_14, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->extra_field_title_15)

  <div class="col-lg-12">

    <div class="form-group">

    @if($module->extra_field_type_15=='select')

      {!! Form::select('extra_field_15', [''=>'Select '.$module->extra_field_title_15]+dropdown($module->extra_field_attr_15), null, array('class'=>'form-control', 'id'=>'extra_field_15', 'required'=>'required')) !!}

    @else

    @php

    $type = null!==($module->extra_field_type_15)?$module->extra_field_type_15:'text';

    @endphp

    {!! Form::$type('extra_field_15', null, array('class'=>'form-control', 'id'=>'extra_field_15', 'placeholder'=>'Enter '.$module->extra_field_title_15, 'required'=>'required')) !!}

    @endif



    </div>

  </div>  



  @endif



  @if($module->is_image)

    <div class="col-md-12">

      <div class="form-group">

	    <div class="sub-title">{{$module->name}} @if($module->multi_images) Images @else Image @endif</div>

	    <input type="file" name="image" id="filer_input1">

	  </div>

	</div>

  @endif



  @if($module->tags)

  <div class="col-md-12">

     <div class="form-group">

        @php

            if(isset($module_data)){

              $tag_ids = explode(',',$module_data->tag_ids);

        

            }

        @endphp

        {!! Form::label('tag_ids', $module->term.' Tags', ['class' => 'font-weight-bold']) !!}

        {!! Form::select('tag_ids[]', $tags, isset($tag_ids)?$tag_ids:null, array('class'=>'js-example-basic-multiple col-sm-12 select2-hidden-accessible', 'id'=>'tag_ids', 'multiple'=>'multiple')) !!}

        {!! APFrmErrHelp::showErrors($errors, 'tag_ids') !!}

     </div>

  </div>

  @endif



  @if($module->is_seo)

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_title', $module->term.' Meta Title', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('meta_title', null, array('class'=>'form-control', 'id'=>'meta_title', 'placeholder'=>$module->term.' Meta Title')) !!}

     </div>

  </div>

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_keywords', $module->term.' Meta Keywords', ['class' => 'font-weight-bold']) !!}

        {!! Form::text('meta_keywords', null, array('class'=>'form-control', 'id'=>'meta_keywords', 'placeholder'=>$module->term.' Meta Keywords')) !!}

     </div>

  </div>

  <div class="col-md-12">

     <div class="form-group">

        {!! Form::label('meta_description', $module->term.' Meta Description', ['class' => 'font-weight-bold']) !!}

        {!! Form::textarea('meta_description', null, array('class'=>'form-control', 'id'=>'meta_description', 'placeholder'=>$module->term.' Meta Description')) !!}

     </div>

  </div>

  @endif



</div>

@push('js')

<script src="{{asset('admin/bower_components/ckeditor/ckeditor.js')}}"></script>

<script src="{{asset('js/jquery.validate.js')}}"></script> 

@include('admin.ckeditor.index')





<script type="text/javascript">

  

  @if($module->multi_images)

  images_limit = 10;

  @endif

	 $(document).ready(function() {})

   @if($module->id==26)

   <?php 
    if(null!==(old('extra_field_5'))){?>
      show_hide("{{title(old('extra_field_5'))}}");
    <?php } else if(isset($module_data)){?>
      show_hide("{{title($module_data->extra_field_5)}}");
    <?php }
    ?>


   $('#extra_field_5').on('change',function(){
     show_hide($('#extra_field_5 option:selected').text());
   })

   function show_hide(val){
    if(val=='YES'){
      $('#sub_ids_div').show();
    }else{
      $('#sub_ids_div').hide();
    }
   }
   @endif

</script>



@endpush