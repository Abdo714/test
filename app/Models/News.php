<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
//    protected $fillable = [
//        'date',
//        'newsname',
//        'title',
//        'news',
//        'img',
//    ];
//
//    public function setImgAttribute($value){
//        $files = [];
//            for ($i=0;$i<count($value); $i++){
//                $file=$value[$i];
//                $extention=$file->getClientOriginalExtension();
//                $filename=time().mt_rand(1000,9999).".".$extention;
//                $file->move(public_path("img/imgs/"),$filename);
//                $files[]="img/imgs/".$filename;
//
//            }//end for
//
//            $this->attributes['img']=serialize($files);
//    }
}
