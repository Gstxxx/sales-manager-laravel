Skip to content
DEV Community
Search...
Powered by Algolia
Log in
Create account

1
Jump to Comments
3
Save

Md Anik Islam
Md Anik Islam
Posted on 6 de out. de 2023


6
Simple and Easiest Toast Notifications in Laravel: A Quick Guide
Hi Artisan,
What's up? Hope's all are good. Today, we'll explore the easiest way to show toast notifications in Laravel. We'll be
using the popular JavaScript library called Toastr to achieve this.

You can easily follow this for any laravel version. and for example i am using laravel 10.

Short Introduction of Toast:
Toast notifications are a common feature in web applications that allow you to provide non-intrusive feedback or
information to users. They typically appear as small, temporary messages that slide in from the top or bottom of the
screen. In Laravel, you can easily implement toast notifications to enhance user experience and provide real-time
updates.

Step1 : Install a laravel Project
In first step, If you haven't installed Laravel in your system then you can run bellow command and get fresh Laravel
project.
composer create-project --prefer-dist laravel/laravel laravel-toast
Step2 : Create Master Layout for Toast
Go to Resource/views path and create a simple master layout like below
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Management Solution.</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!--STYLESHEET-->
    @include('layouts.css')

    @stack('ex_js')
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
        <!--NAVBAR-->
        <!--===================================================-->
        @include('layouts.header')
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            @yield('content')
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            @if (Auth::user()->is_super == 1)
                @include('layouts.nav')
            @else
                @include('nav')
            @endif
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            <!--END ASIDE-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer" style=" background-color: #A8A8A8; color: white;">
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.0</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2023 Technical support by <a href="https://www.techlozi.com/" target="_blank"
                    class="btn-link">techlozi</a></p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>

    @include('layouts.js')
    @include('layouts.custom_js')
    @stack('custom_js')
    @yield('scripts')

</body>

</html>

Step3 : Adding CDN Link
In Head Section of Master layout add this below css cdn of Toast
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">

In end Section of Master layout add this below JS cdn of Toast
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

Step4 : Toast Message Script Configuration
Adding this branch of code below JS cdn of Toast
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options.timeOut = 10000;
                toastr.info("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();
                break;
            case 'success':

                toastr.options.timeOut = 10000;
                toastr.success("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'warning':

                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
            case 'error':

                toastr.options.timeOut = 10000;
                toastr.error("{{ Session::get('message') }}");
                var audio = new Audio('audio.mp3');
                audio.play();

                break;
        }
    @endif
</script>
You can modify style or popup time from here. And you can add more case from here as much you need

Step5 : Handle Message From Controller
First I am creating a controller by using below command
php artisan make:controller BannerController
In this Controller i am writing a function which will update status of a banner and my code is below
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

In this branch of code you will find a array name $notification and there is two key here . One is Message or
Notification other one is which type of Alert it it. Alert-type must be same as master layout script code. Other wise it
will fail to work.

OutPut Example
Here is some out screenshot ot toast.
$notification = array(
'message' => 'Successfully Done',
'alert-type' => 'success'
);
Success
$notification = array(
'message' => 'Error Done',
'alert-type' => 'error'
);
Error
$notification = array(
'message' => 'Waring Done',
'alert-type' => 'warning'
);
warning
$notification = array(
'message' => 'Info Done',
'alert-type' => 'info'
);
info

👋 Before you go

Please leave your appreciation by commenting on this post!

It takes just one minute and is worth it for your career.

Get started

Top comments (1)
Subscribe
pic
Add to the discussion


chimaobi_dennis_680eda7ec profile image
Chimaobi Dennis
•
5 de jun.

Very helpful and well explained process. How do i change the position on the notification, like left, right, top and
bottom?


2
likes
Like
Reply
Code of Conduct • Report abuse
profile
Pieces.app
PROMOTED

A Workflow Copilot. Tailored to You.
Pieces.app image

Our desktop app, with its intelligent copilot, streamlines coding by generating snippets, extracting code from
screenshots, and accelerating problem-solving.

Read the docs

Read next
yolosaki profile image
YMIN capacitors: high capacity, long lifespan, low ESR, and wide temperature stability ensure reliable compressor
performance.
YoloSaki - Jun 8

michyking profile image
Glam Up My Markup: Beaches
Michael Onyeabo - Jun 7

southern_lily_43532034fa6 profile image
Step Up Your Style with Trending Sandals for Women in 2024
Southern Lily - Jun 8

gabrielpenteado profile image
A Dentist's Code: My move to Software Development
Gabriel Penteado - Jun 7


Md Anik Islam
Follow
Learner
LOCATION
Dhaka, Bangladesh
EDUCATION
Daffodil International University
WORK
Software Engineer
JOINED
2 de abr. de 2023
More from Md Anik Islam
Droplet/VPS Configuration with Nginx with Https For Node and NextJs
#nginx #mern #javascript #vps
How To Export Unique Barcode to Excel In Laravel
#laravel #excel #javascript #webdev
DEV Community

Become a Moderator!
Check out this survey and help us moderate our community by becoming a tag moderator here at DEV.

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Management Solution.</title>
    <link rel="shortcut icon" href="../img/favicon.ico">
    <!--STYLESHEET-->
    @include('layouts.css')

    @stack('ex_js')
</head>
<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
        <!--NAVBAR-->
        <!--===================================================-->
        @include('layouts.header')
        <!--===================================================-->
        <!--END NAVBAR-->
        <div class="boxed">
            @yield('content')
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->
            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            @if (Auth::user()->is_super == 1)
                @include('layouts.nav')
            @else
                @include('nav')
            @endif
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->
            <!--END ASIDE-->
        </div>
        <!-- FOOTER -->
        <!--===================================================-->
        <footer id="footer" style=" background-color: #A8A8A8; color: white;">
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <div class="hide-fixed pull-right pad-rgt">Currently v2.0</div>
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
            <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <p class="pad-lft">&#0169; 2023 Technical support by <a href="https://www.techlozi.com/" target="_blank"
                    class="btn-link">techlozi</a></p>
        </footer>
        <!--===================================================-->
        <!-- END FOOTER -->
        <!-- SCROLL TOP BUTTON -->
        <!--===================================================-->
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
        <!--===================================================-->
    </div>

    @include('layouts.js')
    @include('layouts.custom_js')
    @stack('custom_js')
    @yield('scripts')

</body>

</html>

DEV Community — A constructive and inclusive social network for software developers. With you every step of your
journey.

Home
Podcasts
Videos
Tags
DEV Help
Forem Shop
Advertise on DEV
DEV Challenges
DEV Showcase
About
Contact
Guides
Software comparisons
Code of Conduct
Privacy Policy
Terms of use
Built on Forem — the open source software that powers DEV and other inclusive communities.

Made with love and Ruby on Rails. DEV Community © 2016 - 2024.
