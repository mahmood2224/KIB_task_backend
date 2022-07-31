<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\InvoiceCollection;
use App\Http\Resources\ItemResource;
use App\Interfaces\UserInterface;
use App\Models\Invoice;
use App\Models\Items;
use App\Reposatries\ItemsRepo;
use App\Traits\ApiResponseTrait;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator,Auth,Artisan,Hash,File,Crypt;
use App\Models\User;

class ApiController extends Controller
{
    use ApiResponseTrait;

    public function add(Request $request){
        $lang = getLang($request);

        $input = $request->all();
        $validationMessages = [
            'name.required' => $lang == 'ar' ?  'من فضلك اضف اسم العنصر' :" name is required" ,
            'desc.required' => $lang == 'ar' ?  'من فضلك اضف وصف العنصر' :" description is required" ,
        ];

        $validator = Validator::make($input, [
            'name' => 'required',
            'desc' => 'required',
        ], $validationMessages);

        if ($validator->fails()) {
            return $this->apiResponseMessage(0,$validator->messages()->first(), 400);
        }

        $item = new Items();
        $item->name = $request->name ;
        $item->desc = $request->desc ;


        $item->save() ;

        $data = new ItemResource($item);
        $msg = $lang == "ar" ? "تمت العملية بنجاح"  : "Operation Success";
        return $this->apiResponseData($data , $msg );

    }
    public function edit(Request $request , $id){
        $lang = getLang($request);
        $item = Items::find($id) ;
        $check = $this->not_found($item , "العنصر" , "Item" , $lang);
        if($check) return $check ;

        $input = $request->all();
        $validationMessages = [
            'name.required' => $lang == 'ar' ?  'من فضلك اضف اسم العنصر' :" name is required" ,
            'desc.required' => $lang == 'ar' ?  'من فضلك اضف وصف العنصر' :" description is required" ,
        ];

        $validator = Validator::make($input, [
            'name' => 'required',
            'desc' => 'required',
        ], $validationMessages);

        if ($validator->fails()) {
            return $this->apiResponseMessage(0,$validator->messages()->first(), 400);
        }

        $item->name = $request->name ;
        $item->desc = $request->desc ;


        $item->save() ;

        $data = new ItemResource($item);
        $msg = $lang == "ar" ? "تمت العملية بنجاح"  : "Operation Success";
        return $this->apiResponseData($data , $msg );

    }
    public function delete(Request $request , $id){
        $lang = getLang($request);
        $item = Items::find($id) ;
        $check = $this->not_found($item , "العنصر" , "Item" , $lang);
        if($check) return $check ;

        $item->delete() ;

        $msg = $lang == "ar" ? "تمت العملية بنجاح"  : "Operation Success";
        return $this->apiResponseMessage(1 , $msg );

    }

    public function get(Request $request){
        $lang  = $request->header("lang") ;
        $item = Items::all() ;

        $msg = $lang == "ar" ?"تمت العملية بنجاح" : "Operation Success" ;
        return $this->apiResponseData(ItemResource::collection($item) , $msg);

    }
}

