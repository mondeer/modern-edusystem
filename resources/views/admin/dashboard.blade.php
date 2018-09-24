<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modern Education Portal</title>
    <meta name="description" content="Education solutions, imond.co.ke">
    <meta name="keywords" content="Education system for Kenyan education system">
    <!-- Bootstrap core CSS -->
    <link href="/dash/css/bootstrap.min.css" rel="stylesheet">
    <link href="/dash/css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Edusystem</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Dashboard</a></li>
            <li><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, {{Auth::user()->name}}</a></li>
            <li>
              <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>


    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-4">
            <div class="create text-right">
              <p>Today: {{ Carbon\Carbon::now()->format('l j F Y')}} </p>
            </div>
          </div>
        </div>
      </div>
    </header>
    </nav>

    <section id="breadcrumb" style="margin-top: 20vh;">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="/topical-quiz/create" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>Topical Questions <span class="badge">33</span></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              <a href="#" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">203</span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            @yield('content')
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      &copy; 2018
      <a href="#" target="_blank">Modern Edusystem Portal</a>.
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="POST" action="/newblog">
        {{ csrf_field() }}
        <div class="form-group">
          <label>Doc Title</label>
          <input type="text" name="title" class="form-control" placeholder="Document Title" value="{{old('title')}}">
        </div>
        <div class="form-group">
          <label>Doc Subject</label>
          <input type="text" name="subject" class="form-control" placeholder="Document Subject" value="{{old('subject')}}">
        </div>
        <div class="form-group">
          <label>Doc Class</label>
          <input type="text" name="class" class="form-control" placeholder="Document Class" value="{{old('class')}}">
        </div>
        <div class="form-group">
          <label class="control-label">Document</label>
          <textarea id="message" rows="13" placeholder="{{Auth::user()->name}}, your content goes here, at the bottom right of this canvas, expand" name="document"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="published" checked> Published
          </label>
        </div>
        <input type="submit" class="btn btn-default" value="Submit">
      </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'content');
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/dash/js/bootstrap.min.js"></script>
  </body>
</html>
