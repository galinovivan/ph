<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $photos = Photo::all();
        return view('main', compact('photos'));
    }

    /**
     * @param Request $request
     */
    public function uploadPhoto(Request $request)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('image')) {
                $label = $request->photo_label;
                $file = $request->file('image');
                $file = $file->move(public_path() . '/photo', $file->getClientOriginalName());
                $fileName = $file->getFilename();
                $photo = new Photo();
                $photo->label = $label;
                $photo->filename = $fileName;
                $photo->save();
                return response()->json(['success' => 'ok'], 200);
            } else {
                return response()->json(['error' => 'Не добавлено фото', 'st' => $request->hasFile('image')], 422);

            }
        }
        return false;
    }

    public function getRandomPhoto()
    {

    }
}
