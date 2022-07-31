<?php
/**
 * @return string
 */
function getLogo(){
    return '/logo-social.png';
}

/**
 * @param $image
 * @return mixed|string
 */
function getAdminImage($image){
    if($image)
        return get_user_lang('Admin',$image);
    return defaultImages(2);
}


function getNameInIndexPage(){
    return 'سهل';
}


/**
 * @param $type
 * @return string
 */
function getIcon($type){
    if($type ==1)
        return 'sl-icon-wrench';
    if($type==2)
        return  'sl-icon-trash';
    if($type==3)
        return  'icon-Eye-Visible';
}

function getCounts($model){
    return $model->count();
}

/***
 * @return bool
 */
function ifHasPermission(){
    return Auth::guard('Admin')->user()->id ==1 ? true :false;
}

/***
 * @return mixed
 */

function getAdmins(){
    return \App\Models\Admin::where('id','!=',1)->get();
}


