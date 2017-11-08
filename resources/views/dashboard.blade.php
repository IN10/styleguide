<!doctype html>
<html lang="nl" dir="ltr">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Styleguide</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- styleguide styling only! -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background: #eee;
            color:#444;
        }
        a {
            color:#666;
        }
        a .fa-external-link {
            position: relative;
            top: 2px;
        }
        #sg-nav, #sg-nav-interface {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            overflow-y: auto;
            width: 260px;
            padding: 20px;
            font-size:16px;
            font-family:"Helvetica Neue", Helvetica, arial, sans-serif;
            /*box-shadow: 0 0 4px rgba(0,0,0,.4);*/

            transform:translateX(0);
            transition: transform ease .5s;
            z-index:999;
        }
        #sg-nav ul {
            margin: 0;
            padding:0 0 20px;
        }
        #sg-nav > ul > li {
            list-style: none;
            padding-left: 0;
            margin: 0;
        }
        #sg-nav > ul ul li {
            margin-left: 20px;
            padding-top:5px;
        }
        #sg-nav > ul ul ul li {
            margin-left: 35px;
            padding-top:5px;
        }
        .sg-title {
            display: block;
            padding-top:15px;
            padding-bottom:30px;
            font-size:1.4em;
        }
        #sg-preview {
            width: calc(100% - 260px);
            margin-left:260px;
            transition: width ease .5s, margin-left ease .5s;
            min-height: calc(100% - 85px);
            position: fixed;
            left: 0;
            top: 85px;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 0 0 4px rgba(0,0,0,.2);
            background-color: #fff;
        }

        #sg-nav-interface {
            bottom: auto;
            height: 85px;
            padding-top: 11px;
            padding-bottom: 0;
            width:100%;
            text-align: right;
            z-index:998;
        }
        .btn-toggle {
            background: transparent;
            border: 0;
            padding: 45px 12px 6px;
            position: relative;
            color: #999;
            cursor: pointer;
        }
        .btn-toggle:focus {
            outline:none;
        }
        .btn-toggle.active {
            color: #5fbd7e;
        }
        .btn-toggle .fa {
            display: block;
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
        }
        .btn-toggle .fa-arrows-alt { font-size:26px; padding-bottom:4px; }
        .btn-toggle .fa-desktop { font-size:35px; }
        .btn-toggle .fa-desktop.icon-small { font-size:27px; }
        .btn-toggle .fa-tablet { font-size:38px; }
        .btn-toggle .fa-mobile { font-size:42px; }
        .btn-toggle .fa-mobile.icon-small { font-size:30px; }

        .view-full #sg-nav {
            transform:translateX(-260px);
        }
        .view-full #sg-preview {
            width: 100%;
            margin-left:0;
        }


        /* add 17px for scrollbar */
        .view-desktop #sg-preview {
            width: 1457px;
        }
        .view-desktop-small #sg-preview {
            width: 1041px;
        }
        .view-tablet #sg-preview {
            width: 785px;
        }
        .view-mobile #sg-preview {
            width: 497px;
        }
        .view-mobile-small #sg-preview {
            width: 337px;
        }

        body:after {
            content:'';
            width: 20px;
            position: fixed;
            right: 0;
            top: 85px;
            bottom: 0;
            pointer-events: none;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ff0000+0,ff0000+100&0+0,0.4+99 */
            background: -moz-linear-gradient(left,  rgba(255,0,0,0) 0%, rgba(255,0,0,0.4) 99%, rgba(255,0,0,0.4) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(left,  rgba(255,0,0,0) 0%,rgba(255,0,0,0.4) 99%,rgba(255,0,0,0.4) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to right,  rgba(255,0,0,0) 0%,rgba(255,0,0,0.4) 99%,rgba(255,0,0,0.4) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

            opacity: 0;
            transition: opacity ease .5s;
        }
        .preview-exceeds:after {
            opacity: .7;
        }
        .is-active {
            font-weight: bold;
        }
    </style>
</head>

<body class="">

<div id="sg-nav">
    <strong class="sg-title">
        Styleguide
    </strong>
    <ul>
        @foreach ($sections as $section)
            <li>
                <strong>{{ ucfirst($section['name']) }}</strong>
                <ul>
                    @foreach ($section['items'] as $view => $name)
                        <li>
                            <a target="preview" href="{{ route('styleguide.show', $view) }}">{{ $name }}</a>
                            &nbsp;&nbsp;|&nbsp;&nbsp;
                            <a target="_blank" href="{{ route('styleguide.show', $view) }}"><span class="fa fa-external-link"></span></a>
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

</div>

<div id="sg-nav-interface">
    <button class="btn-toggle" data-toggle="full"><span class="fa fa-arrows-alt"></span>full width</button>
    <button class="btn-toggle" data-toggle="desktop"><span class="fa fa-desktop"></span>1440px</button>
    <button class="btn-toggle" data-toggle="desktop-small"><span class="fa fa-desktop icon-small"></span>1024px</button>
    <button class="btn-toggle" data-toggle="tablet"><span class="fa fa-tablet"></span>768px</button>
    <button class="btn-toggle" data-toggle="mobile"><span class="fa fa-mobile"></span>480px</button>
    <button class="btn-toggle" data-toggle="mobile-small"><span class="fa fa-mobile icon-small"></span>320px</button>
</div>

<iframe src="{{ route('styleguide.show', '_layout') }}" id="sg-preview" name="preview" frameborder="0"></iframe>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

<script>
    var sgInterface = {
        viewWidthClassPrefix : 'view-',
        init : function() {
            $('.btn-toggle').each(function() {
                $(this).on('click', function() {
                    sgInterface.setViewWidthClass($(this));
                })
            });
            $('#sg-nav a[target="preview"]').each(function() {
                $(this).on('click', function(e) {
                    sgInterface.saveCurrentPage($(this).attr('href'));
                });
            });
            sgInterface.setInitialPage();
            sgInterface.checkIframeInViewport();

            $('#sg-nav a').on('click', function() {
                $('#sg-nav a').removeClass('is-active');
                $(this).addClass('is-active');
            });
        },
        setViewWidthClass: function($btn) {
            var toggleOff = false;
            if ($('body').hasClass(sgInterface.viewWidthClassPrefix + $btn.data('toggle'))) {
                toggleOff = true;
                $btn.removeClass('active');
            }
            // remove all classes that start with viewWidthClassPrefix
            if ($('body')[0].className.length > 0) {
                var classes = $('body')[0].className.split(" ").filter(function (c) {
                    return c.lastIndexOf(sgInterface.viewWidthClassPrefix, 0) !== 0;
                });
                $('body')[0].className = $.trim(classes.join(" "));
                $btn.siblings().removeClass('active');
            }

            if (!toggleOff) {
                // apply toggle class
                $('body').addClass(sgInterface.viewWidthClassPrefix + $btn.data('toggle'));
                $btn.addClass('active');
            }

            setTimeout(function() {
                sgInterface.checkIframeInViewport();
            }, 550);
        },
        checkIframeInViewport: function() {

            var sgPreviewRight = $('#sg-preview').offset().left + $('#sg-preview').width();

            if(sgPreviewRight > $(window).width()) {
                $('body').addClass('preview-exceeds');
            } else {
                $('body').removeClass('preview-exceeds');
            }
        },
        saveCurrentPage: function(url){
            sessionStorage.setItem('styleguide-current', url);
        },
        getCurrentPage: function(){
            return sessionStorage.getItem('styleguide-current');
        },
        setInitialPage: function() {
            var lastVisitedPage = sgInterface.getCurrentPage();

            if(lastVisitedPage != null){
                $('#sg-preview').attr('src', lastVisitedPage);
            }
        }
    };
    $(function() {
        sgInterface.init();
    });
</script>

</body>
</html>
