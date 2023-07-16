<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="antialiased">
    <div id="notification">Test</div>


    <section style="background-color: #eee;">
  <div class="container py-5">

    <div class="row">

      <div class="col-md-6 col-lg-5 col-xl-4 mb-4 mb-md-0">

        <h5 class="font-weight-bold mb-3 text-center text-lg-start">Member</h5>

        <div class="card">
          <div class="card-body">

            <ul class="list-unstyled mb-0">
              <li class="p-2 border-bottom" style="background-color: #eee;">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-8.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">John Doe</p>
                      <p class="small text-muted">Hello, Are you there?</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">Just now</p>
                    <span class="badge bg-danger float-end">1</span>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-1.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Danny Smith</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">5 mins ago</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-2.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Alex Steward</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-3.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Ashley Olsen</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-4.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Kate Moss</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2 border-bottom">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Lara Croft</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">Yesterday</p>
                  </div>
                </a>
              </li>
              <li class="p-2">
                <a href="#!" class="d-flex justify-content-between">
                  <div class="d-flex flex-row">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
                      class="rounded-circle d-flex align-self-center me-3 shadow-1-strong" width="60">
                    <div class="pt-1">
                      <p class="fw-bold mb-0">Brad Pitt</p>
                      <p class="small text-muted">Lorem ipsum dolor sit.</p>
                    </div>
                  </div>
                  <div class="pt-1">
                    <p class="small text-muted mb-1">5 mins ago</p>
                    <span class="text-muted float-end"><i class="fas fa-check" aria-hidden="true"></i></span>
                  </div>
                </a>
              </li>
            </ul>

          </div>
        </div>

      </div>

      <div class="col-md-6 col-lg-7 col-xl-8">

        <ul class="list-unstyled">
          <li class="d-flex justify-content-between mb-4">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Brad Pitt</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 12 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="d-flex justify-content-between mb-4">
            <div class="card w-100">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Lara Croft</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 13 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                  laudantium.
                </p>
              </div>
            </div>
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-5.webp" alt="avatar"
              class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
          </li>
          <li class="d-flex justify-content-between mb-4">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-6.webp" alt="avatar"
              class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
            <div class="card">
              <div class="card-header d-flex justify-content-between p-3">
                <p class="fw-bold mb-0">Brad Pitt</p>
                <p class="text-muted small mb-0"><i class="far fa-clock"></i> 10 mins ago</p>
              </div>
              <div class="card-body">
                <p class="mb-0">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </p>
              </div>
            </div>
          </li>
          <li class="bg-white mb-3">
            <div class="form-outline">
              <textarea class="form-control" id="textAreaExample2" rows="4"></textarea>
              <label class="form-label" for="textAreaExample2">Message</label>
            </div>
          </li>
          <button type="button" class="btn btn-info btn-rounded float-end">Send</button>
        </ul>

      </div>

    </div>

  </div>
</section>
</body>

<script>
    window.laravel_echo_port = "{{env('LARAVEL_ECHO_PORT')}}"
</script>

<script src="http://127.0.0.1:6001/socket.io/socket.io.js"></script>
<script src=".\js\laravel-echo-setup.js" type="text/javascript"></script>

<script type="text/javascript">
    var i = 0;
    window.Echo.channel("users").listen("SendMessage", (data) => {
        i++;
        $("#notification").append('<div class="alert alert-success">' + i + '.' + data.data["message"] + '</div>')
    });
</script>

</html>