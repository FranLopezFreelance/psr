<nav class="navbar navbar-default main-menu container-fluid">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand hidden-xs" href="/"><img class="logo"src="{{$path}}/img/logo.png" alt="" /></a>
      <a class="navbar-brand visible-xs" href="/"><img  src="{{$path}}/img/logo_2.png" alt="" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        @foreach($sections as $section)
            @if($section->topnav != 1)@continue
            @elseif($section->getSubSections())
            <li class="dropdown">
              <a href="#" class=""  role="button" aria-haspopup="true" aria-expanded="false">{{$section->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                @foreach($section->getSubSections() as $subsection)
                <li><a href="{{$subsection->getFullUrl()}}">{{$subsection->name}}</a></li>
                @endforeach
              </ul>
            </li>
          @else
          <li><a href="/{{$section->url}}">{{$section->name}}</a></li>
          @endif
        @endforeach


      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="site-content">
