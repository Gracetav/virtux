<!DOCTYPE html>
<html>
<head>
    @include('admin.css')
    <title>Add Category - Dark Admin</title>
</head>
<body>
    <div class="page">
        @include('admin.header')
        
        <div class="d-flex align-items-stretch">
            <!-- Sidebar Navigation -->
            @include('admin.sidebar')
            
            <div class="page-content">
                <div class="container-fluid">
                    <div class="card p-4">
                        <h3 class="h5 no-margin-bottom">Add Category</h3>
                        <form action="{{ route('add_category') }}" method="POST">
    @csrf
    <div class="mb-3">
        <input type="text" name="category" class="form-control" placeholder="Nama Kategori">
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="Add Category">
    </div>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript files -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/popper.js/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery.cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
</body>
</html>