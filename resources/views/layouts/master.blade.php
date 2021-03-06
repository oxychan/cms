<!DOCTYPE HTML>
<html>
<head>
    <title>{{ $title }} | Opik Shop</title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('assets/css/style.css') }}" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
   
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/fwslider.css') }}" media="all">
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/fwslider.js') }}"></script> --}}
    
    @if ($title == "Home")
        <!--start slider -->
        <link rel="stylesheet" href="{{ asset('assets/css/fwslider.css') }}" media="all">
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/fwslider.js') }}"></script>
        <!--end slider -->
    @elseif ($title == "Team")
        <!-- Add fancyBox main JS and CSS files -->
        <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>
        <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet" type="text/css">
        <script>
        $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
            });
        });
        </script>
    @elseif ($title == "Events" || $title == "Experience")
        <!-- light-box -->
        <script type="text/javascript" src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.css') }}" media="screen" />
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                *  Simple image gallery. Uses default settings
                */

                $('.fancybox').fancybox();

            });
	    </script>   
    
    @elseif ($title == "Single")
        <!----details-product-slider--->
        <!-- Include the Etalage files -->
        <link rel="stylesheet" href="{{ asset('assets/css/etalage.css') }}">
        <script src="{{ asset('assets/js/jquery.etalage.min.js') }}"></script>
        <!-- Include the Etalage files -->
        <script>
        jQuery(document).ready(function($){

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,
                
                show_hint: true,
                click_callback: function(image_anchor, instance_id){
                    alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                }
            });
            // This is for the dropdown list example:
            $('.dropdownlist').change(function(){
                etalage_show( $(this).find('option:selected').attr('class') );
            });

        });
        </script>
        <!----//details-product-slider--->	
    @endif

    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
</head>
<body>
    @include('partials.header')

    <div>            
        @yield('container')
    </div>
    
    @include('partials.footer')
</body>
</html>