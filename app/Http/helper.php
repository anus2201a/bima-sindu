<?php

if(!function_exists('get_cms')){
    function get_cms($slug ,$tag , $property = 'value'){

        $cms = \App\Models\web_cms::where('slug' ,$slug)->where('tag', $tag)->first();

        if(isset($cms)){
            return $cms->$property;
        }
        return '';

    }
}


// if(!function_exists('image_upload')){
// function image_upload($image)
//     {
//     $imagename = 'uploads/' . $image->getClientOriginalName() . '_' . time() . '.' . $image->getClientoriginalExtension();
//     $image->move(public_path('uploads/'), $imagename);
//     return $imagename;
// }

// }

?>
