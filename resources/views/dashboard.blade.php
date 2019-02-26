<!doctype html>
<html lang="nl" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>IN10 Styleguide</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        *,::after,::before{background-repeat:no-repeat;box-sizing:inherit}::after,::before{text-decoration:inherit;vertical-align:inherit}html{box-sizing:border-box;cursor:default;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}article,aside,footer,header,nav,section{display:block}body{margin:0}h1{font-size:2em;margin:0.67em 0}figcaption,figure,main{display:block}figure{margin:1em 40px}hr{box-sizing:content-box;height:0;overflow:visible}nav ol,nav ul{list-style:none}pre{font-family:monospace, monospace;font-size:1em}a{background-color:transparent;-webkit-text-decoration-skip:objects}abbr[title]{border-bottom:none;text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted}b,strong{font-weight:inherit}b,strong{font-weight:bolder}code,kbd,samp{font-family:monospace, monospace;font-size:1em}dfn{font-style:italic}mark{background-color:#ffff00;color:#000000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}::selection{background-color:#b3d4fc;color:#000000;text-shadow:none}audio,canvas,iframe,img,svg,video{vertical-align:middle}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg{fill:currentColor}svg:not(:root){overflow:hidden}table{border-collapse:collapse}button,input,optgroup,select,textarea{margin:0}button,input,select,textarea{background-color:transparent;color:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}button,html [type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type="button"]:-moz-focusring,[type="reset"]:-moz-focusring,[type="submit"]:-moz-focusring,button:-moz-focusring{outline:1px dotted ButtonText}legend{box-sizing:border-box;color:inherit;display:table;max-width:100%;padding:0;white-space:normal}progress{display:inline-block;vertical-align:baseline}textarea{overflow:auto;resize:vertical}[type="checkbox"],[type="radio"]{box-sizing:border-box;padding:0}[type="number"]::-webkit-inner-spin-button,[type="number"]::-webkit-outer-spin-button{height:auto}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}[type="search"]::-webkit-search-cancel-button,[type="search"]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}details,menu{display:block}summary{display:list-item}canvas{display:inline-block}template{display:none}[tabindex],a,area,button,input,label,select,summary,textarea{touch-action:manipulation}[hidden]{display:none}[aria-busy="true"]{cursor:progress}[aria-controls]{cursor:pointer}[aria-hidden="false"][hidden]:not(:focus){clip:rect(0, 0, 0, 0);display:inherit;position:absolute}[aria-disabled]{cursor:default}nav ol,nav ul{margin-bottom:0;padding-left:0}img{height:auto;max-width:100%}::selection{background:#b4d5fe;color:#000}::-ms-clear{display:none}.container{margin-right:auto;margin-left:auto;padding-left:0;padding-right:0}.container::after{clear:both;content:"";display:block}@media (min-width: 768px){.container{width:750px}}@media (min-width: 980px){.container{width:970px}}@media (min-width: 1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:0;padding-right:0}.container-fluid::after{clear:both;content:"";display:block}.row{width:auto;clear:both}.row::after{clear:both;content:"";display:block}blockquote,dd,fieldset,figure,h1,h2,h3,h4,h5,h6,hgroup,hr,ol,p,pre,table,ul{margin:0 0 5px}@media (min-width: 768px){blockquote,dd,fieldset,figure,h1,h2,h3,h4,h5,h6,hgroup,hr,ol,p,pre,table,ul{margin-bottom:10px}}@media (min-width: 980px){blockquote,dd,fieldset,figure,h1,h2,h3,h4,h5,h6,hgroup,hr,ol,p,pre,table,ul{margin-bottom:15px}}html{font-size:0.625rem}body{font-size:1.6rem;font-family:Arial, sans-serif;line-height:1.625;color:#000;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-tap-highlight-color:rgba(0, 0, 0, 0)}@media (min-width: 768px){body{font-size:1.7rem}}@media (min-width: 980px){body{font-size:1.8rem}}h1,h2,h3,h4,h5,h6{font-family:Helvetica, sans-serif;line-height:1.2;font-weight:700}h1{font-size:2.9rem}@media (min-width: 768px){h1{font-size:4.2rem}}@media (min-width: 980px){h1{font-size:5rem}}h2{font-size:2.5rem}@media (min-width: 768px){h2{font-size:3.3rem}}@media (min-width: 980px){h2{font-size:4.2rem}}h3{font-size:2.2rem}@media (min-width: 768px){h3{font-size:2.7rem}}@media (min-width: 980px){h3{font-size:3.2rem}}h4{font-size:1.9rem}@media (min-width: 768px){h4{font-size:2.1rem}}@media (min-width: 980px){h4{font-size:2.4rem}}h5{font-size:1.6rem}@media (min-width: 768px){h5{font-size:1.7rem}}@media (min-width: 980px){h5{font-size:1.8rem}}h6{font-size:1.4rem}@media (min-width: 768px){h6{font-size:1.4rem}}@media (min-width: 980px){h6{font-size:1.4rem}}p:last-child{margin-bottom:0}strong{font-weight:700}button,input[type=button],input[type=file]::-webkit-file-upload-button,input[type=reset],input[type=submit]{border-radius:0}button{background-color:transparent;border:0;padding:0;cursor:pointer}.btn{display:inline-block;cursor:pointer;touch-action:manipulation;vertical-align:middle;white-space:nowrap}.icon{display:inline-block;width:1em;height:1em;stroke-width:0;stroke:currentColor;fill:currentColor}.icon use > svg{fill:currentColor}a{color:#000;transition:color ease 0.3s}a:hover{color:#000}a:active{color:#000}a[href^=tel]{color:inherit;text-decoration:none}table{width:100%}td{vertical-align:top;padding:0}th{text-align:left}.slide-button{position:absolute;display:flex;justify-content:center;align-items:center;font-size:14px;color:lightgray;width:28px;height:28px;background:white;border-radius:50%;border:1px solid lightgray;transition:background-color 0.3s ease-in-out, -webkit-transform 0.3s ease;transition:transform 0.3s ease, background-color 0.3s ease-in-out;transition:transform 0.3s ease, background-color 0.3s ease-in-out, -webkit-transform 0.3s ease;cursor:pointer;z-index:1}.slide-button--primary{background-color:#FFC729;border-color:#FFC729;color:white}.slide-button--primary:hover{background-color:#ffbc00;border-color:#ffbc00;color:white}.slide-button--vertical{-webkit-transform:translateY(-50%) rotate(-90deg);transform:translateY(-50%) rotate(-90deg)}.dashboard-logo{width:100%;display:flex;justify-content:center;align-items:center;min-height:80px}.dashboard-logo svg{width:50px;height:50px}.dashboard-search{width:100%;margin:10px 0 20px;padding:0 30px}.dashboard-search__svg{position:absolute;fill:#a1a1a1;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);left:15px}.dashboard-search__input{font-family:"Graphik", sans-serif;font-size:16px;display:block;width:100%;padding:10px 20px 10px 50px;background:#fff;color:#ACACAC;outline:0;border:1px solid #E1E1E1}.dashboard-input-wrapper{position:relative}.dashboard-frame{position:relative;left:0;top:15px;overflow-y:auto;background-color:#fff;z-index:1;transition:all 0.3s ease;width:100%;height:calc(100vh - 15px);padding:0 15px}@media (min-width: 768px){.dashboard-frame{width:calc(100vw - 15px);left:15px;height:100vh;position:fixed;top:0;padding:0 60px}}.dashboard-frame__header-wrapper{display:flex;align-items:center;margin:40px 0;flex-wrap:wrap;padding-bottom:20px;border-bottom:1px solid #E1E1E1}.dashboard-frame__header{display:flex;align-items:center;width:100%}.dashboard-frame__tag-list{list-style:none;display:flex;margin-bottom:0}.dashboard-frame__tag-item{margin-right:10px;background:#F3F3F3;padding:3px 6px;font-size:1.2rem;color:#a7a7a7}.dashboard-frame__link svg{width:18px;height:18px}.dashboard-frame__title{margin-left:50px;margin-bottom:0;font-family:"Graphik-light", sans-serif;max-width:100%;color:#191417}.dashboard-frame__description{font-family:"Graphik", sans-serif;color:#ACACAC;font-size:16px;line-height:1.8;margin-top:15px;margin-bottom:0;max-width:100%}@media (min-width: 768px){.dashboard--open .dashboard-frame{top:0;height:100vh;width:calc(100vw - 300px);left:300px}}.dashboard-viewport{position:absolute;bottom:0;right:15px}@media (min-width: 768px){.dashboard-viewport{top:0;right:120px}}.dashboard-viewport__select{padding:8px 20px;position:relative;cursor:pointer;border-top-right-radius:5px;border-top-left-radius:5px;background-color:#FFC729;color:white;transition:background-color 0.3s ease-in-out;font-size:1.4rem;min-width:125px;display:flex;justify-content:center;align-items:center}@media (min-width: 768px){.dashboard-viewport__select{border-bottom-right-radius:5px;border-bottom-left-radius:5px;border-top-right-radius:0;border-top-left-radius:0}}.dashboard-viewport__select:hover{background-color:#ffc010}.dashboard-viewport__list{list-style:none;position:relative;padding:0;width:100%;left:0;top:0;right:0;display:none;background-color:#FFC729;margin:-5px 0 0;border-bottom-right-radius:5px;border-bottom-left-radius:5px;z-index:5}.dashboard-viewport__list--is-open{display:block}.dashboard-viewport__item{padding:8px 20px;display:flex;justify-content:center;color:white;font-size:1.4rem;text-transform:uppercase;cursor:pointer}.dashboard-viewport__item:hover{background-color:#ffc010}.dashboard-viewport__item:last-child{border-bottom-right-radius:5px;border-bottom-left-radius:5px}.component{position:relative;width:100%;display:flex;justify-content:space-between;flex-flow:column nowrap;overflow:scroll;border:1px solid #E1E1E1;height:70vh;transition:width 0.4s ease-in-out;margin-bottom:15px}@media (min-width: 768px){.component{margin-bottom:30px}}@media (min-width: 980px){.component{margin-bottom:45px}}.dashboard-navigation{position:fixed;z-index:2;background:white;display:flex;flex-direction:column;float:left;border-right:1px solid #E1E1E1;-webkit-transform:translateY(calc(-100% + 15px));transform:translateY(calc(-100% + 15px));transition:-webkit-transform 0.3s ease;transition:transform 0.3s ease;transition:transform 0.3s ease, -webkit-transform 0.3s ease;width:100vw;height:calc(100vh - 15px)}.dashboard-navigation h1{font-size:16px;padding:15px 0;margin:0 15px;border-bottom:1px solid darkgray}.dashboard-navigation .slide-button{left:50%;bottom:0;-webkit-transform:translateX(-50%) translateY(50%) rotate(90deg);transform:translateX(-50%) translateY(50%) rotate(90deg);background:#FFC729;border:0;transition:background 0.3s ease}.dashboard-navigation .slide-button:hover{background:#ffbc00}.dashboard-navigation .slide-button svg{fill:white}@media (min-width: 768px){.dashboard-navigation .slide-button{top:50%;left:auto;right:-15px;-webkit-transform:translateY(-50%);transform:translateY(-50%)}}.dashboard-navigation .dashboard-section{margin:0 30px 40px}.dashboard-navigation .dashboard-section--first{margin-top:30px}.dashboard-navigation .dashboard-section--last{margin-bottom:0}.dashboard-navigation .dashboard-section__title{font-size:1.8rem;font-family:"Graphik-semibold", sans-serif;color:#191417;margin-bottom:10px}.dashboard-navigation__list{list-style-type:none;margin:0;padding:0 30px 0 15px;width:100%;display:block}.dashboard-navigation__sublist{list-style-type:none;padding:0;margin:10px 0 0 10px;width:100%;display:none}.dashboard-navigation__sublist li{display:flex;width:100%;justify-content:space-between;font-family:"Graphik", sans-serif;font-size:16px;font-weight:400}.dashboard-navigation__sublist--active{display:block;color:#191417}.dashboard-navigation__component,.dashboard-navigation__item{margin:0;padding:6px 0}.dashboard-navigation__toggle{font-family:"Graphik", sans-serif;text-decoration:none;color:#ACACAC;cursor:pointer;font-size:16px;margin:0;transition:color 0.3s ease-out}.dashboard-navigation__toggle:hover{font-family:"Graphik", sans-serif;color:#191417}.dashboard-navigation__link{font-family:"Graphik", sans-serif;color:#ACACAC;font-size:1.6rem;padding:5px 0;transition:color 0.3s ease-out;text-decoration:none}.dashboard-navigation__link:hover{font-family:"Graphik", sans-serif;color:#191417;text-decoration:none}.component-link--active,.dashboard-navigation__item--active span.dashboard-navigation__toggle{color:black;font-weight:600}.dashboard-search__delete{position:absolute;width:18px;top:7px;right:11px;opacity:0;transition:opacity 0.3s ease;outline:0}.dashboard--open .dashboard-navigation{-webkit-transform:translateY(0);transform:translateY(0)}.dashboard--open .dashboard-navigation .slide-button{-webkit-transform:translateX(-50%) translateY(50%) rotate(-90deg);transform:translateX(-50%) translateY(50%) rotate(-90deg)}@media (min-width: 768px){.dashboard-navigation{position:relative;width:300px;height:100vh;-webkit-transform:translateX(calc(-100% + 15px));transform:translateX(calc(-100% + 15px))}.dashboard--open .dashboard-navigation{-webkit-transform:translateX(0);transform:translateX(0)}.dashboard--open .dashboard-navigation .slide-button{-webkit-transform:translateY(-50%) rotate(180deg);transform:translateY(-50%) rotate(180deg)}}
    </style>
</head>

<body class="dashboard dashboard--open" id="js-dashboard">

<div class="dashboard-navigation">

    <div class="dashboard-logo">
        <svg role="img" class="icon ">
            <svg id="in10-logo" viewBox="0 0 207 207" width="100%" height="100%"><title>in10-logo</title><circle cx="103.5" cy="103.5" r="103.5"></circle><path fill="#FFF" d="M51.7 82.9c0-1.2 1-2.2 2.2-2.2s2.2 1 2.2 2.2v41.3c0 1.2-1 2.2-2.2 2.2s-2.2-1-2.2-2.2V82.9zM71.8 90.4v33.7c0 1.2-1 2.2-2.2 2.2s-2.2-1-2.2-2.2V83.2c0-1.5 1.1-2.6 2.5-2.6.9 0 1.8.5 2.3 1.3L91 116.6V82.9c0-1.2 1-2.2 2.2-2.2 1.1 0 2.2 1 2.2 2.2v40.9c0 1.5-1.1 2.6-2.6 2.6-.9 0-1.8-.5-2.2-1.3L71.8 90.4zM113.7 124.2V85.9l-7.5 4.4c-.3.2-.7.3-1.1.3-1.1 0-2-.7-2-1.9 0-.8.4-1.5 1.1-1.9l10-5.8c.4-.3.8-.3 1.3-.3 1.5 0 2.6 1.1 2.6 2.6v41c0 1.2-.9 2.2-2.1 2.2-1.4-.2-2.3-1.1-2.3-2.3zM141.8 80.7c-8 0-13.4 5.3-13.4 13.4v18.8c0 8 5.4 13.4 13.4 13.4s13.4-5.3 13.4-13.4V94.1c0-8-5.4-13.4-13.4-13.4zm9.1 32.6c0 2.8-.8 5.1-2.4 6.7-1.6 1.6-3.9 2.4-6.7 2.4-2.8 0-5.1-.8-6.7-2.4-1.6-1.6-2.4-3.9-2.4-6.7V93.8c0-2.8.8-5.1 2.4-6.7 1.6-1.6 3.9-2.4 6.7-2.4 2.8 0 5.1.8 6.7 2.4 1.6 1.6 2.4 3.9 2.4 6.7v19.5z"></path></svg>
        </svg>
    </div>

    <div class="dashboard-search">
        <div class="dashboard-input-wrapper">
            <svg role="img" class="dashboard-search__svg icon"><svg id="search" viewBox="0 0 25 25" width="100%" height="100%"><title>search</title><path d="M9 16c-3.859 0-7-3.14-7-7s3.141-7 7-7 7 3.14 7 7-3.141 7-7 7zm15.707 7.293l-8.682-8.682A8.948 8.948 0 0 0 18 9c0-4.962-4.037-9-9-9S0 4.038 0 9s4.037 9 9 9a8.95 8.95 0 0 0 5.611-1.975l8.682 8.682 1.414-1.414z"></path></svg></svg>
            <input type="search" placeholder="Find a component" name="s" class="dashboard-search__input js-search-input">

            <button class="dashboard-search__delete js-search-delete">
                <svg viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><path fill="#373737" d="M123.543 11.594l-7.066-7.075L64.002 56.93 11.56 4.488 4.488 11.56l52.44 52.437-52.471 52.408 7.067 7.076L64 71.068l52.443 52.444 7.07-7.07-52.439-52.44z"/></svg>
            </button>
        </div>
    </div>

    <div class="slide-button" id="js-open-dashboard-navigation">
        <svg role="img" class="icon"><svg id="arrow-right" viewBox="0 0 14 25" width="100%" height="100%"><title>arrow-right</title><path fill-rule="evenodd" d="M.5 1.873L11.107 12.48.5 23.086 1.914 24.5l12.021-12.02L1.914.459z"></path></svg></svg>
    </div>

    <div class="dashboard-section dashboard-section--first">
        <h2 class="dashboard-section__title">Getting started</h2>

        <ul class="dashboard-navigation__list">
            <li class="dashboard-navigation__component">
                <a href="#" class="dashboard-navigation__link" target="_blank" rel="noopener">- Coding standards <svg role="img" class="icon"><svg id="external-link" viewBox="0 0 24 24" width="100%" height="100%"><title>external-link</title><path d="M18.277 6.321a1.1 1.1 0 0 0-1.556 0L15 8.043l-.308-.308c-1.168-1.168-3.216-1.168-4.384 0l-4.172 4.172c-.584.584-.906 1.363-.906 2.192s.322 1.608.906 2.192l.308.308-1.722 1.722a1.1 1.1 0 1 0 1.556 1.556L8 18.155l.308.308c.584.584 1.362.906 2.192.906s1.608-.322 2.192-.906l4.172-4.172c.584-.584.906-1.362.906-2.192s-.322-1.608-.906-2.192l-.308-.308 1.722-1.722a1.1 1.1 0 0 0-.001-1.556zm-2.969 6.414l-4.172 4.172c-.168.168-.402.253-.636.253s-.468-.084-.636-.253l-.308-.308.722-.722a1.1 1.1 0 1 0-1.556-1.556L8 15.043l-.308-.308c-.168-.168-.261-.395-.261-.636s.093-.468.261-.636l4.172-4.172c.168-.168.394-.261.636-.261s.468.093.636.261l.308.308-.722.722a1.1 1.1 0 1 0 1.556 1.556l.722-.722.308.308c.168.168.261.395.261.636s-.093.468-.261.636z"></path></svg></svg></a>
            </li>
        </ul>

    </div>

    <div class="dashboard-section dashboard-section--last">
        <h2 class="dashboard-section__title">Components</h2>
        <ul class="dashboard-navigation__list">
            @foreach ($sections as $section)
                <li class="dashboard-navigation__item js-search-index">
                    <span class="dashboard-navigation__toggle js-component-category">{{ ucfirst($section['name']) }}</strong>
                        <ul class="dashboard-navigation__sublist">
                        @foreach ($section['items'] as $view => $name)
                            <li>
                                <a class="dashboard-navigation__link js-component-link js-search-index" target="preview" href="{{ route('styleguide.show', $view) }}">{{ $name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</div>

<div class="dashboard-frame">
    <div class="dashboard-frame__header-wrapper">
        <div class="dashboard-frame__header">
            <a class="dashboard-frame__link slide-button slide-button--primary" href="https://componentlibrary.in10projecten.nl/demo/cookie-notification/cookie-notification" target="_blank"><svg role="img" class="icon"><svg id="external-link" viewBox="0 0 24 24" width="100%" height="100%"><title>external-link</title><path d="M18.277 6.321a1.1 1.1 0 0 0-1.556 0L15 8.043l-.308-.308c-1.168-1.168-3.216-1.168-4.384 0l-4.172 4.172c-.584.584-.906 1.363-.906 2.192s.322 1.608.906 2.192l.308.308-1.722 1.722a1.1 1.1 0 1 0 1.556 1.556L8 18.155l.308.308c.584.584 1.362.906 2.192.906s1.608-.322 2.192-.906l4.172-4.172c.584-.584.906-1.362.906-2.192s-.322-1.608-.906-2.192l-.308-.308 1.722-1.722a1.1 1.1 0 0 0-.001-1.556zm-2.969 6.414l-4.172 4.172c-.168.168-.402.253-.636.253s-.468-.084-.636-.253l-.308-.308.722-.722a1.1 1.1 0 1 0-1.556-1.556L8 15.043l-.308-.308c-.168-.168-.261-.395-.261-.636s.093-.468.261-.636l4.172-4.172c.168-.168.394-.261.636-.261s.468.093.636.261l.308.308-.722.722a1.1 1.1 0 1 0 1.556 1.556l.722-.722.308.308c.168.168.261.395.261.636s-.093.468-.261.636z"></path></svg></svg>
            </a>
            <h1 class="dashboard-frame__title">Styleguide</h1>
        </div>
    </div>

    <div class="dashboard-viewport">
        <div class="dashboard-viewport__select js-viewport-open">
            <span class="js-viewport-current">Viewport...</span>

            <svg role="img" class="icon">
                <svg id="arrow-down" viewBox="0 0 48 48" width="100%" height="100%"><title>arrow-down</title><path d="M14 20l10 10 10-10z"></path><path d="M0 0h48v48H0z" fill="none"></path></svg>
            </svg>
        </div>

        <ul class="dashboard-viewport__list js-viewport-list">
            <li class="dashboard-viewport__item js-viewport-item" data-width="default">
                100%
            </li>
            <li class="dashboard-viewport__item js-viewport-item" data-width="1440">
                XL
            </li>
            <li class="dashboard-viewport__item js-viewport-item" data-width="1200">
                LG
            </li>
            <li class="dashboard-viewport__item js-viewport-item" data-width="980">
                MD
            </li>
            <li class="dashboard-viewport__item js-viewport-item" data-width="768">
                SM
            </li>
            <li class="dashboard-viewport__item js-viewport-item" data-width="480">
                XS
            </li>
        </ul>
    </div>

    <iframe class="component" src="{{ route('styleguide.show', '_layout') }}" name="preview"></iframe>
</div>

<script>
    const components = [...document.querySelectorAll('.js-component-link')];

    components.forEach(component => {
        component.addEventListener('click', function() {
            document.querySelector('.component').src = component.href;
            document.querySelector('.dashboard-frame__title').innerHTML = `${component.innerHTML}`;
            document.querySelector('.dashboard-frame__link').href = component.href;
        })
    });


    const lastMenuItem = document.querySelector('.dashboard-section--last .dashboard-navigation__list .dashboard-navigation__item:last-child');
    if(lastMenuItem) {
        lastMenuItem.classList.add('dashboard-navigation__item--active');
    }

    const lastSubMenu = lastMenuItem.querySelector('.dashboard-navigation__sublist');
    if(lastSubMenu) {
        lastSubMenu.classList.add('dashboard-navigation__sublist--active');
    }


    const NavigationToggle = {
        init() {
            const navigationWrapper = document.querySelector('#js-dashboard');
            const navigationToggleButton = document.querySelector('#js-open-dashboard-navigation');
            if (navigationToggleButton && navigationWrapper) {
                navigationToggleButton.addEventListener('click', () => {

                    if(navigationWrapper.classList.contains('dashboard--open')) {
                        [...document.querySelectorAll('.dashboard-navigation__sublist--active')].forEach(item => item.classList.remove('dashboard-navigation__sublist--active'));
                        [...document.querySelectorAll('.dashboard-navigation__item--active')].forEach(item => item.classList.remove('dashboard-navigation__item--active'));
                    };

                    navigationWrapper.classList.toggle('dashboard--open');
                });
            }

            const componentButtons = [...document.querySelectorAll('.js-component-link')];
            // TODO correct way to test for mobile width, maybe add is_mobile helper!
            if (componentButtons && window.innerWidth < 768) {
                componentButtons.forEach(componentButton => {
                    componentButton.addEventListener('click', () => {
                        if(navigationWrapper.classList.contains('dashboard--open')) {
                            [...document.querySelectorAll('.dashboard-navigation__sublist--active')].forEach(item => item.classList.remove('dashboard-navigation__sublist--active'));
                            [...document.querySelectorAll('.dashboard-navigation__item--active')].forEach(item => item.classList.remove('dashboard-navigation__item--active'));
                        };

                        navigationWrapper.classList.remove('dashboard--open');
                    });
                });
            }
        },
    };

    const ListBehaviour = {
        init() {
            const categories = [...document.querySelectorAll('.js-component-category')];
            const components = [...document.querySelectorAll('.js-component-link')];

            if (categories) {
                categories.forEach(category => {
                    category.addEventListener('click', this.toggleCategoryList.bind(this));
                });
            }

            if (components) {
                components.forEach(component => {
                    component.addEventListener('click', this.toggleComponentLink.bind(this));
                });
            }
        },

        toggleComponentLink(e) {
            e.preventDefault();
            const el = e.target;

            // Remove all active classes
            const components = [...document.querySelectorAll('.js-component-link')];
            components.forEach(component => {
                if (component.classList.contains('component-link--active')) {
                    component.classList.remove('component-link--active');
                }
            });

            el.classList.toggle('component-link--active');
            el.closest('.dashboard-navigation__item').classList.toggle('dashboard-navigation__item--active');
            el.closest('.dashboard-navigation__item')
                .querySelector('.dashboard-navigation__sublist')
                .classList.toggle('dashboard-navigation__sublist--active');
        },

        toggleCategoryList(e) {
            e.preventDefault();
            const el = e.target;

            el.closest('.dashboard-navigation__item').classList.toggle('dashboard-navigation__item--active');
            el.closest('.dashboard-navigation__item')
                .querySelector('.dashboard-navigation__sublist')
                .classList.toggle('dashboard-navigation__sublist--active');
        },
    };

    const ComponentSearch = {
        init() {
            const searchField = document.querySelector('.js-search-input');
            const deleteInput = document.querySelector('.js-search-delete');

            if (searchField) {
                searchField.addEventListener('keyup', this.search.bind(this));
            }
            if(deleteInput) {
                deleteInput.addEventListener('click', this.removeInput);
            }
        },

        removeInput() {
            document.querySelector('.js-search-input').value = null;
            document.querySelector('.js-search-delete').style.opacity = 0;
            document.querySelectorAll('.js-search-index').forEach(item => {item.removeAttribute('style');});
        },

        search(e) {
            const searchField = document.querySelector('.js-search-input');

            if(searchField.value.length) {
                document.querySelector('.js-search-delete').style.opacity = 1;
            } else {
                document.querySelector('.js-search-delete').style.opacity = 0;
            }

            const items = [...document.querySelectorAll('.js-search-index')];

            items.forEach(item => {
                if (item.textContent.toUpperCase().includes(e.target.value.toUpperCase())) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        },
    };

    const Viewport = {
        init() {
            const viewPortOpenBtn = document.querySelector('.js-viewport-open');
            const viewPortItems = [...document.querySelectorAll('.js-viewport-item')];
            const viewPortList = document.querySelector('.js-viewport-list');
            const viewPort = document.querySelector('.dashboard-viewport');

            document.addEventListener('click', e => {
                if (viewPort !== e.target && !viewPort.contains(e.target)) {
                    viewPortList.classList.remove('dashboard-viewport__list--is-open');
                }
            });

            viewPortOpenBtn.addEventListener('click', this.toggleList.bind(this));

            viewPortItems.forEach(viewPortItem => {
                viewPortItem.addEventListener('click', this.toggleViewPort.bind(this));
            });
        },

        toggleList() {
            const viewPortList = document.querySelector('.js-viewport-list');
            viewPortList.classList.toggle('dashboard-viewport__list--is-open');
        },

        toggleViewPort(e) {
            const viewPortCurrent = document.querySelector('.js-viewport-current');
            const { target } = e;
            const { width } = target.dataset;
            const window = document.querySelector('.component');
            if (width === 'default') {
                window.removeAttribute('style');
            } else {
                window.style.width = `${width}px`;
            }
            viewPortCurrent.innerHTML = target.innerHTML;

            this.toggleList();
        },
    };

    NavigationToggle.init();
    ListBehaviour.init();
    ComponentSearch.init();
    Viewport.init();
</script>

</body>
</html>
