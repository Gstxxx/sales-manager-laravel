<?php

namespace App\Http\Controllers;

use App\Models\Bannner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function bannerStatus($bannerId, $status)
    {
        $banner = Banner::find($bannerId);
        $banner->status = $status;
        $banner->save();

        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
