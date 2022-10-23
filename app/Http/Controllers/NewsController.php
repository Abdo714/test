<?php

namespace App\Http\Controllers;
use App\Models\Logo;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addnews(){

        $date = request("date");
        $newsname=request("newsname");
        $title=request("title");
        $news=request("news");

        $x=new News();
        $x->date=$date;
        $x->newsname=$newsname;
        $x->title=$title;
        $x->news=$news;
        $files=[];
        if (count(\request('img'))){

            for ($i=0;$i<count(\request("img")); $i++){
                $file=\request()->file("img")[$i];
                $extention=$file->getClientOriginalExtension();
                $filename=time().mt_rand(1000,9999).".".$extention;
                $file->move(public_path("img/imgs/"),$filename);
                $files[]="img/imgs/".$filename;

            }//end for

            $x->img=serialize($files);

        }//end if


        $x->save();

        return back();
//        $data = request()->all();
//        $x =  News::create($data);
//        return redirect()->back();


    }  public function addlogo(){


        $newsname=request("newsname");

        $x=new Logo();

        $x->newsname=$newsname;

        $files=[];
        if (count(\request('img'))){

            for ($i=0;$i<count(\request("img")); $i++){
                $file=\request()->file("img")[$i];
                $extention=$file->getClientOriginalExtension();
                $filename=time().mt_rand(1000,9999).".".$extention;
                $file->move(public_path("img/imgs/"),$filename);
                $files[]="img/logo/".$filename;

            }//end for

            $x->img=serialize($files);

        }//end if


        $x->save();

        return back();
//        $data = request()->all();
//        $x =  News::create($data);
//        return redirect()->back();


    }

    public function view_report(){
        $x=News::all();
        return view("viewreport",["x"=>$x]);

    }
    public function delete(){
        $id=\request("id");
        News::Find($id)->delete();

        return back();

    }


}
