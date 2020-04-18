@extends('layouts.app')

@section('head')
    <!-- Styles -->





@endsection

@section('content')

    <!-- Content Wrapper -->


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Covid19 Backend Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Applications (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Infections</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1,000</div>
                            </div>
                            <div class="col-auto">
                                <i color="blue" class="fas fa-file-alt fa-2x  "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Approved (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Recovered</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i color="blue" class="fas fa-file-alt fa-2x  "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Active</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i color="blue" class="fas fa-file-alt fa-2x  "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Rejected Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Deaths</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                            </div>
                            <div class="col-auto">
                                <i color="blue" class="fas fa-file-alt fa-2x  "></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->


        <div class="card">
            <div class="card-header">Record a new Case</div>
            <div class="card-body">

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="form-group"><label for="exampleFormControlInput1">Case No</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="MAV021" name="case"></div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Infected from</label><select class="form-control"
                                                                                            id="exampleFormControlSelect1"
                                                                                            name="parent">
                            <option value="0">Unknown</option>
                            @foreach($return['trace'] as $v)
                                <option value="{{$v->id}}">{{$v->case}}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group"><label for="exampleFormControlInput1">Color Code Hex</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="case_color"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Full Name</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="full_name"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Nationality</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="nationality"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Location of infection</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="location"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Permanent Address</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="perm_add"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Current Address</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="curr_add"></div>

                    <div class="form-group"><label for="exampleFormControlInput1">Work Address</label><input
                            class="form-control" id="exampleFormControlInput1" type="text"
                            placeholder="" name="work_add"></div>


                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Status</label><select class="form-control"
                                                                                     id="exampleFormControlSelect1"
                                                                                     name="status">
                            <option value="0">Active</option>
                            <option value="1">Recovered</option>
                            <option value="2">Dead</option>
                        </select>
                    </div>

                    <div class="form-group"><label for="exampleFormControlInput1">Bubble Radius</label><input
                            class="form-control" id="exampleFormControlInput1" type="number"
                            placeholder="" name="radius"></div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>
        </div>
        <br>


        <!-- Area Chart -->
        <div class="container-fluid mt-n10">
            <div class="card mb-4">
                <div class="card-header">Extended DataTables</div>
                <div class="card-body">
                    <div class="datatable table-responsive">
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                                <td>
                                    <div class="badge badge-primary badge-pill">Full-time</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i
                                            data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                            data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                                <td>
                                    <div class="badge badge-warning badge-pill">Pending</div>
                                </td>
                                <td>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark mr-2"><i
                                            data-feather="more-vertical"></i></button>
                                    <button class="btn btn-datatable btn-icon btn-transparent-dark"><i
                                            data-feather="trash-2"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

                <!-- Project Card Example -->


                <!-- Color System -->


            </div>

            <div class="col-lg-6 mb-4">

                <!-- Illustrations -->
                <!-- /.container-fluid -->

                <!-- End of Main Content -->
                <!-- Page level plugins -->
                <script src="{{asset('dashboard/vendor/chart.js/Chart.min.js')}}"></script>

                <!-- Page level custom scripts -->
                <script src="{{asset('dashboard/js/demo/chart-area-demo.js')}}"></script>
                <script src="{{asset('dashboard/js/demo/chart-pie-demo.js')}}"></script>


@endsection

@push('js')





@endpush

