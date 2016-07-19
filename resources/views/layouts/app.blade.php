<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adam Gleisner</title>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/all.js"></script>
    <link rel="stylesheet" property="stylesheet" type="text/css" href="css/app.css">
    @yield('head')
  </head>
  <body>
    <div class="container-fluid">
      <div class="row nav-row">
        <div class="col-sm-4">
          <h1 class="name">Adam Gleisner</h1>
        </div>
        <div class="col-sm-7 col-md-offset-1 button-col">
          <div class="button-container">
            <span class="buttons">
              <a href="about" class="btn btn-default btn-lg">About Me</a>
            </span>
            <span class="buttons">
              <div class="btn-group">
                <button type="button" class="btn btn-default btn-lg dropdown-toggle" data-toggle="dropdown">My Projects <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="flushr">Flushr</a></li>
                  <li><a href="codingconnection">Coding Connection</a></li>
                  <li><a href="opensource">Open Source</a></li>
                  <li><a href="summer">Summer Internship</a></li>
                </ul>
              </div>
            </span>
            <span class="buttons">
              <a href="skills" class="btn btn-default btn-lg">My Skills</a>
            </span>
            <span class="buttons">
              <a href="resume" class="btn btn-default btn-lg">Resume</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    @yield('content')
  </body>
</html>
