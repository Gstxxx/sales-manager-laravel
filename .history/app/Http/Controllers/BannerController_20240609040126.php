<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner
class BannerController extends Controller
{
    public function bannerStatus($bannerId, $status)
    {
        $banner = Bannner::find($bannerId);
        $banner->status = $status;
        $banner->save();

        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
