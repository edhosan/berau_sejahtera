<div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
   <div class="navigation-trigger__inner">
       <i class="navigation-trigger__line"></i>
       <i class="navigation-trigger__line"></i>
       <i class="navigation-trigger__line"></i>
   </div>
</div>

<div class="header__logo hidden-sm-down">
    <h1><a href="index.html">{{ config('app.name', 'Laravel') }}</a></h1>
</div>

<form class="search">
   <div class="search__inner">
       <input type="text" class="search__text" placeholder="Search for people, files, documents...">
       <i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
   </div>
</form>

<ul class="top-nav">
    <li class="hidden-xl-up"><a href="" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

    <li class="dropdown hidden-xs-down">
        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

        <div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
            <div class="row app-shortcuts">
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-calendar bg-red"></i>
                    <small class="">Calendar</small>
                </a>
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-file-text bg-blue"></i>
                    <small class="">Files</small>
                </a>
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-email bg-teal"></i>
                    <small class="">Email</small>
                </a>
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-trending-up bg-blue-grey"></i>
                    <small class="">Reports</small>
                </a>
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-view-headline bg-orange"></i>
                    <small class="">News</small>
                </a>
                <a class="col-4 app-shortcuts__item" href="">
                    <i class="zmdi zmdi-image bg-light-green"></i>
                    <small class="">Gallery</small>
                </a>
            </div>
        </div>
    </li>

    <li class="dropdown hidden-xs-down">
        <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

        <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-item theme-switch">
                Theme Switch

                <div class="btn-group btn-group--colors mt-2" data-toggle="buttons">
                    <label class="btn bg-green active"><input type="radio" value="green" autocomplete="off" checked></label>
                    <label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
                    <label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
                    <label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
                    <label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

                    <br>

                    <label class="btn bg-cyan"><input type="radio" value="cyan" autocomplete="off"></label>
                    <label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
                    <label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
                    <label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
                    <label class="btn bg-lime"><input type="radio" value="lime" autocomplete="off"></label>
                </div>
            </div>
            <a href="" class="dropdown-item">Fullscreen</a>
            <a href="" class="dropdown-item">Clear Local Storage</a>
        </div>
    </li>
</ul>
