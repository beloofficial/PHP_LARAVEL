<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use Validator;
class COntentEditController extends Controller
{
    public function execute(Content $content,Request $request){

        if($request->isMethod('delete')){
            $content->delete();
            return redirect('admin')->with('status','Контент удален'); 
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator::make($input,[
                'name'=>'required|max:255|unique:contents,name,'.$input['id'],
    			'voice' => 'required|max:255',
    			'release' => 'required|max:255',
    			'author' => 'required|max:255',
    			'text' => 'required'
    			

            ]);
           
            if($validator->fails()){
                return redirect()
                        ->route('main',['content'=>$input['id']])
                        ->withErrors($validator);
            }

            if($request->hasFile('images')){
                $file = $request->file('images');
                $file->move(public_path().'/assets/img',$file->getClientOriginalName());
                $input['images'] = $file->getClientOriginalName();
            }

            else{
                $input['images'] = $input['old_images'];    
            }

                unset($input['old_images']);


                $content->fill($input);
                if($content->update()){
                    return redirect('admin')->with('status','Контент обновлен');
                }
        }


    	$old = $content->toArray();
    	if(view()->exists('admin.content_edit')){
    		$data = [
    					'title' =>'Редактирование контента - '.$old['name'],
    					'data' =>$old
    				];
    		return view('admin.content_edit',$data);
    	}
    }
}
