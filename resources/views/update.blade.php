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

</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Update') }}
            </h2>
        </x-slot>

        <div class="my-4 mx-4 card">

            <form method="POST" action="{{ route('updateBlog', ['id' => $id]) }}" enctype="multipart/form-data">
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

                    <div class="col-md-6">
                        <div class="card-body">
                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option value="enable">Enable</option>
                                <option value="disable">Disable</option>
                                
                            </select>

                        </div>
                    </div>

                </div>
                <button class="btn btn-success my-4 mx-4">Update</button>
            </form>
        </div>


    </x-app-layout>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


</body>

</html>
