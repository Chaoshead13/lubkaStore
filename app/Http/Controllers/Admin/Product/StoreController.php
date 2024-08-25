<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {   
        $data = $request->validated();
        $data["preview_image"] = Storage::disk("public")->put("/images", $data["preview_image"]);
        Product::FirstOrCreate($data);
        return redirect()->route("admin.products.index");
    }
}
