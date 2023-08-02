<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="/"><img src="/images/mini.png" width="30" height="30" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#page-one">01. A propos <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page-two">02. Expérience</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page-three">03. Travaux</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#page-four">04. Contact</a>
              </li>
            </ul>
          </div>
        </nav>
        </header>
    @yield('content')
</body>
</html>