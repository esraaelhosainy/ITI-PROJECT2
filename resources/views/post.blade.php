{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - New Mansoura Blog</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-bg">
        <div class="container">
            <a class="navbar-brand btn btn-light" href="index">View Posts</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center m-5">Manage Posts</h1>

        <!-- Create Post Form -->
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="card-title">Create a New Post</h2>
                <form action="{{ route('create_post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="post-description" rows="5" required></textarea>
                    </div>
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>

        <!-- List of Existing Posts -->
        <h2 class="mb-4">Existing Posts</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="{{ url('post/'.$post->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('delete', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
        
        
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('css/bootstrap.min.css') }}" />"></script>
</body>
</html> --}}






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Posts - New Mansoura Blog</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* Static Navbar */
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 10px 0;
        }
        .navbar-brand {
            font-weight: 600;
            font-size: 18px;
            color: #333 !important;
            transition: color 0.3s ease-in-out;
        }
        .navbar-brand:hover {
            color: #007bff !important;
        }

        /* Page Layout */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
            padding-top: 80px; /* Offset for fixed navbar */
        }

        h1 {
            font-weight: 600;
            color: #007bff;
        }

        /* Form Styling */
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            padding: 10px 20px;
            transition: background 0.3s ease-in-out;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #003d82);
        }

        /* Table Styling */
        .table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .table th {
            background: #007bff;
            color: white;
            text-align: center;
        }
        .table tbody tr:hover {
            background: rgba(0, 123, 255, 0.1);
            transition: background 0.3s ease-in-out;
        }

        /* Buttons */
        .btn-danger {
            background: #dc3545;
            border: none;
            padding: 8px 12px;
            transition: background 0.3s ease-in-out;
        }
        .btn-danger:hover {
            background: #c82333;
        }
    </style>
</head>
<body>

    <!-- Static Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand btn btn-light" href="index">View Posts</a>
        </div>
    </nav>

    <div class="container">
        <h1 class="text-center my-5">Manage Posts</h1>

        <!-- Create Post Form -->
        <div class="card mb-5">
            <div class="card-body">
                <h2 class="card-title">Create a New Post</h2>
                <form action="{{ route('create_post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="post-title" class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="post-description" class="form-label">Description</label>
                        <textarea name="description" class="form-control" id="post-description" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <!-- List of Existing Posts -->
        <h2 class="mb-4">Existing Posts</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="{{ url('post/'.$post->id.'/edit') }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('delete', $post->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>
