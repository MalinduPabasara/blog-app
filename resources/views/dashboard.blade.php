<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Add Bootstrap and Popper.js CDN scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-4 card">
            <form method="POST" action="{{ route('addBlog') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tag</label>
                                <input type="text" class="form-control" id="tag" name="tag" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Blog Content</label>
                                <textarea class="form-control" id="blog_content" name="blog_content" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="btn btn-success my-4 mx-4">Submit</button>
            </form>
        </div>


        <div class="my-4 mx-4 card">
            <div class="card-body">

                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Date</th>
                            <th>Tag</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bogls as $blog)
                        <tr>
                            <td>{{ $blog->title }}</td>
                            <td>{{ $blog->blog_content }}</td>
                            <td>{{ $blog->date }}</td>
                            <td>{{ $blog->tag }}</td>
                            <td>{{ $blog->status }}</td>
                            <td>
                                <a class="py-2 px-5"
                                    href="{{ route('update.blog', ['id' => $blog->id]) }}"><i
                                        class="fas fa-download">Update</i></a>
                            </td>
                            <td>
                                <a class="py-2 px-5 text-danger"
                                    href="{{ route('deleteBlog', ['id' => $blog->id]) }}"><i
                                        class="fas fa-trash">Delete</i></a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </x-app-layout>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#myTable');
    </script>

</body>

</html>
