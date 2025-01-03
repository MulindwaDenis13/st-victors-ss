

   <div class="row">

      <div class="col-md-6">

         <div class="form-group">

            {!! Form::label('name', 'Module Name', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('name', null, array('class'=>'form-control', 'id'=>'name', 'placeholder'=>'Module Name')) !!}

         </div>

      </div>

      <div class="col-md-6">

         <div class="form-group">

            {!! Form::label('term', 'Module Term', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('term', null, array('class'=>'form-control', 'id'=>'term', 'placeholder'=>'Module Term')) !!}

         </div>

      </div>

   </div>

   <div class="row">

      <div class="col-md-12">

        <div class="form-group">

            @php

            $fields = array(

                0 => 'No',

                1 => 'Yes',

            );

            @endphp

            {!! Form::label('is_slug', 'Module Slug', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_slug', $fields, null, array('class'=>'form-control', 'id'=>'is_slug')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            

            {!! Form::label('is_menu', 'Module Menus', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_menu', $fields, null, array('class'=>'form-control', 'id'=>'is_menu')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('is_description', 'Module Description', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_description', $fields, null, array('class'=>'form-control', 'id'=>'is_description')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('is_seo', 'Module Seo', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_seo', $fields, null, array('class'=>'form-control', 'id'=>'is_seo')) !!}

         </div>

        

      </div>



      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('category', 'Module Category', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('category', $fields, null, array('class'=>'form-control', 'id'=>'category')) !!}

         </div>

        

      </div>

      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('parent_id', 'Module Category', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('parent_id', [''=>'Select Category']+$categories, null, array('class'=>'form-control', 'id'=>'parent_id')) !!}

         </div>

        

      </div>

      <div class="col-md-4">

        <div class="form-group">

            {!! Form::label('multiple_category', 'Multiple Categories', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('multiple_category', $fields, null, array('class'=>'form-control', 'id'=>'multiple_category')) !!}

         </div>

        

      </div>

     

      <div class="col-md-12">

        <div class="form-group">

            {!! Form::label('tags', 'Module Tags', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('tags', $fields, null, array('class'=>'form-control', 'id'=>'tags')) !!}

         </div>

        

      </div>

      

  </div>



   <div class="row">

      <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('is_image', 'Module Image', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('is_image', $fields, null, array('class'=>'form-control', 'id'=>'is_image')) !!}

         </div>

        

      </div>



      <div class="col-md-6">

        <div class="form-group">

            {!! Form::label('multi_images', 'Multi Images', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('multi_images', $fields, null, array('class'=>'form-control', 'id'=>'multi_images')) !!}

         </div>

        

      </div>

      <div class="col-md-6 image_section">

         <div class="form-group">

            {!! Form::label('thumbnail_height', 'Thumbnail Height', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('thumbnail_height', null, array('class'=>'form-control', 'id'=>'thumbnail_height', 'placeholder'=>'Thumbnail Height')) !!}

         </div>

      </div>

      <div class="col-md-6 image_section">

         <div class="form-group">

            {!! Form::label('thumbnail_width', 'Thumbnail Width', ['class' => 'font-weight-bold']) !!}

            {!! Form::text('thumbnail_width', null, array('class'=>'form-control', 'id'=>'thumbnail_width', 'placeholder'=>'Thumbnail Width')) !!}

         </div>

      </div>

   </div>

   <div class="row">

      <div class="col-md-12">

         <div class="form-group">

            @php

            $extra_fields = array(

                1 => 1,

                2 => 2,

                3 => 3,

                4 => 4,

                5 => 5,

                6 => 6,

                7 => 7,

                8 => 8,

                9 => 9,

                10 => 10,

                11 => 11,

                12 => 12,

                13 => 13,

                14 => 14,

                15 => 15

            );

            @endphp

            {!! Form::label('extra_fields', 'Extra Fields', ['class' => 'font-weight-bold']) !!}

            {!! Form::select('extra_fields', [''=>'Select Extra Fields']+$extra_fields, null, array('class'=>'form-control', 'id'=>'extra_fields')) !!}

         </div>

      </div>

   </div>
   @php
    $field_types = array(
        'text' => 'text',
        'number' => 'number',
        'select' => 'select',
        'date' => 'date',
    );
    @endphp
   <div class="row">
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_1', 'Extra Field Title 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_1', null, array('class'=>'form-control', 'id'=>'extra_field_title_1', 'placeholder'=>'Extra Field Title 1')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_1', 'Extra Field Type 1', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_1', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_1')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_1', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_1', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_1')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_2', 'Extra Field Title 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_2', null, array('class'=>'form-control', 'id'=>'extra_field_title_2', 'placeholder'=>'Extra Field Title 2')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_2', 'Extra Field Type 2', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_2', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_2')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_2', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_2', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_2')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_3', 'Extra Field Title 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_3', null, array('class'=>'form-control', 'id'=>'extra_field_title_3', 'placeholder'=>'Extra Field Title 3')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_3', 'Extra Field Type 3', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_3', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_3')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_3', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_3', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_3')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_4', 'Extra Field Title 4', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_4', null, array('class'=>'form-control', 'id'=>'extra_field_title_4', 'placeholder'=>'Extra Field Title 4')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_4', 'Extra Field Type 4', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_4', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_4')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_4', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_4', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_4')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_5', 'Extra Field Title 5', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_5', null, array('class'=>'form-control', 'id'=>'extra_field_title_5', 'placeholder'=>'Extra Field Title 5')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_5', 'Extra Field Type 5', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_5', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_5')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_5', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_5', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_5')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_6', 'Extra Field Title 6', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_6', null, array('class'=>'form-control', 'id'=>'extra_field_title_6', 'placeholder'=>'Extra Field Title 6')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_6', 'Extra Field Type 6', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_6', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_6')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_6', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_6', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_6')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_7', 'Extra Field Title 7', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_7', null, array('class'=>'form-control', 'id'=>'extra_field_title_7', 'placeholder'=>'Extra Field Title 7')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_7', 'Extra Field Type 7', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_7', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_7')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_7', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_7', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_7')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_8', 'Extra Field Title 8', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_8', null, array('class'=>'form-control', 'id'=>'extra_field_title_8', 'placeholder'=>'Extra Field Title 8')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_8', 'Extra Field Type 8', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_8', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_8')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_8', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_8', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_8')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_9', 'Extra Field Title 9', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_9', null, array('class'=>'form-control', 'id'=>'extra_field_title_9', 'placeholder'=>'Extra Field Title 9')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_9', 'Extra Field Type 9', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_9', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_9')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_9', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_9', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_9')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_10', 'Extra Field Title 10', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_10', null, array('class'=>'form-control', 'id'=>'extra_field_title_10', 'placeholder'=>'Extra Field Title 10')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_10', 'Extra Field Type 10', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_10', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_10')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_10', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_10', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_10')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_11', 'Extra Field Title 11', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_11', null, array('class'=>'form-control', 'id'=>'extra_field_title_11', 'placeholder'=>'Extra Field Title 11')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_11', 'Extra Field Type 11', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_11', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_11')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_11', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_11', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_11')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_12', 'Extra Field Title 12', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_12', null, array('class'=>'form-control', 'id'=>'extra_field_title_12', 'placeholder'=>'Extra Field Title 12')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_12', 'Extra Field Type 12', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_12', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_12')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_12', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_12', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_12')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_13', 'Extra Field Title 13', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_13', null, array('class'=>'form-control', 'id'=>'extra_field_title_13', 'placeholder'=>'Extra Field Title 13')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_13', 'Extra Field Type 13', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_13', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_13')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_13', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_13', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_13')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_14', 'Extra Field Title 14', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_14', null, array('class'=>'form-control', 'id'=>'extra_field_title_14', 'placeholder'=>'Extra Field Title 14')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_14', 'Extra Field Type 14', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_14', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_14')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_14', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_14', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_14')) !!}
         </div>
      </div>

      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_title_15', 'Extra Field Title 15', ['class' => 'font-weight-bold']) !!}
            {!! Form::text('extra_field_title_15', null, array('class'=>'form-control', 'id'=>'extra_field_title_15', 'placeholder'=>'Extra Field Title 15')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_type_15', 'Extra Field Type 15', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_type_15', [''=>'Select Field Type']+$field_types, null, array('class'=>'form-control', 'id'=>'extra_field_type_15')) !!}
         </div>
      </div>
      <div class="col-md-4 extra_field_title" style="display: none;">
         <div class="form-group">
            {!! Form::label('extra_field_attr_15', 'Extra Field Attr', ['class' => 'font-weight-bold']) !!}
            {!! Form::select('extra_field_attr_15', [''=>'Select Attr']+$categories, null, array('class'=>'form-control', 'id'=>'extra_field_attr_15')) !!}
         </div>
      </div>



      
   </div>

  

