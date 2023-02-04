@extends('layouts.base_admin.base_dashboard')@section('judul', 'List Akun')
@section('script_head')
<link
    rel="stylesheet"
    type="text/css"
    href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>GITHUB JOBS</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="breadcrumb-item active">Jobs</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="row">
            <div class="container" style="margin-top:20px">
                <form class="form-inline" action="next_page.php" method="GET">
                    <div class="form-group" >
                        <input type="text" id="search_field" class="form-control" name="search_title" placeholder="Search By Job">
                        <!-- close the "form-group" div and start a new div -->
                    </div>
                    <!-- here we use "input-group" to get the submit tight "against" the input -->
                    <div class="input-group" style="margin-left:20px">
                        <input type="text" class="form-control" placeholder="Search By Location">
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" style="margin-left:20px;margin-rigth:20px">
                        <label for="vehicle1" style="margin: left 20px;"> Full Time Only</label><br>
                        <span class="input-group-btn" style="margin-left:100px">
                            <button type="submit" id="search_button" class="btn btn-default">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-header">
            <h3 class="card-title">
                 Job List
            </h3>
        </div>
        <div class="card-body p-0" style="margin: 20px">
            <table id="table_users">
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                @foreach ($users as $item)
                <tr>
                    <td>{{$item['company']}}</td>
                    <td>{{$item['title']}}</td>
                    <td>{{$item['type']}}</td>
                    <td>{{$item['location']}}</td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
@endsection @section('script_footer')
<script
    type="text/javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script
    type="text/javascript"
    src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script>
   
</script>
@endsection
