<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Mansoura Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nerko+One&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- As a link -->
    <nav class="navbar navbar-expand-lg best position-absolute w-100 top-0">
      <div class="container-fluid">
        <!-- "Manage Posts" button on the left -->
        <a class="navbar-brand btn btn-light lang mx-3 ms-5" href="post">Manage Posts</a>
        
        <!-- Navbar toggle for mobile view -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Right-aligned buttons for login and register inside collapse -->
        <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="login">
                <i class="fa-solid fa-circle-user"></i> login
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register">
                <i class="fa-solid fa-user-plus"></i> register
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
  <h1 class="text-center m-5 text-posts">Posts</h1>
<div class="m-5  border border-black">
    
    <div class="container ">
        
      <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>

          @foreach ($posts as $post)
          <tr>
              <td>{{ $post->id }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->description }}</td>
             
          </tr>
      @endforeach
           
        </tbody>
    </table>
            
            

    </div>
</div>
</body>
</html>

