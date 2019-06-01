<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use Illuminate\Http\Request;

class ImgUploadController extends Controller
{
    public function img_upload(Request $request,ImageUploadHandler $imageUploadHandler)
    {
        $data = $request->all();

        if ($request->imgupload) {
            $result = $imageUploadHandler->save($request->imgupload, 'img_upload', 'img_upload');
            if ($result) {
                $data['imgupload'] = $result['path'];
                $data['name'] = $result['name'];
            }
        }
        $res = [
            'imgupload'=>$data['imgupload'],
            'name'=>$data['name']
        ];
        return $res;

//        $user->update($data);


    }
}
