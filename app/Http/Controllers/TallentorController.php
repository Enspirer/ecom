<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Upload;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\Request;

class TallentorController extends Controller
{
    public function index()
    {

    }

    public function productAPI(Request $request)
    {
      $details = Product::inRandomOrder()
          ->limit(5)
          ->get();
      $outFunction = [];
      foreach ($details as $detail)
      {
          $fileManager = Upload::where('id',$detail->thumbnail_img)->first();
          $item = [
            'name' => $detail->name,
            'thumbnail_img' => $detail->thumbnail_img,
            'slug' => $detail->slug,
            'file_image' => $fileManager->file_name
          ];
          array_push($outFunction,$item);
      }

      return json_encode($outFunction);
    }
}
