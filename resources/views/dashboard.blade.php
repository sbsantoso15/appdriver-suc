@extends('include.layout')

@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18"> {{$header}}</h4>

                                    <div class="page-title-right">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->                       

                        <div class="row">
                            <div class="col-9">
                                <div class="card">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#on-site" role="tab" id="refreshOnsite">
                                                    Onstie Unit
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#off-site" role="tab" id="refreshOffsite">
                                                    Offstie Unit
                                                </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content p-3">
                                            <div class="tab-pane active" id="on-site" role="tabpanel">
                                                <form>
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <div style="text-align: right;">
                                                                <a href="#" id="refreshDataOnsite" class="btn btn-success btn-sm mb-2">
                                                                    <span>refresh</span>
                                                                    {{-- <i class="mdi mdi-reload font-size-22 align-middle me-1 text-primary"></i>  --}}
                                                                </a>
                                                            </div>
                                                            <table id="data-onsite" class="table table-hover table-striped table-bordered datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                <thead>
                                                                    <tr class="bg-success">
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">No plat</th>
                                                                        <th scope="col">Driver</th>
                                                                        {{-- <th scope="col">Action</th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                                    
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="tab-pane" id="off-site" role="tabpanel">
                                                <form>
                                                    <div class="row">
                                                        <div class="table-responsive">
                                                            <div style="text-align: right;">
                                                                <a href="#" id="refreshDataOffsite" class="btn btn-success btn-sm mb-2">
                                                                    <span>refresh</span>
                                                                    {{-- <i class="mdi mdi-reload font-size-22 align-middle me-1 text-primary"></i>  --}}
                                                                </a>
                                                            </div>

                                                            <table id="data-offsite" class="table table-hover table-striped table-bordered datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                                <thead>
                                                                    <tr class="bg-danger">
                                                                        <th scope="col">No</th>
                                                                        <th scope="col">No plat</th>
                                                                        <th scope="col">Driver</th>
                                                                        {{-- <th scope="col">Action</th> --}}
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                                    
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-2">Unit</p>
                                                <h5 class="mb-0"> {{ $countUnit}}</h5>
                                            </div>

                                            <div class="avatar-sm ms-auto">
                                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                    <i class="bx bxs-car"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-2">Driver</p>
                                                <h5 class="mb-0"> {{$countDriver}} </h5>
                                            </div>

                                            <div class="avatar-sm ms-auto">
                                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                                    <i class="bx bxs-user"></i>
                                                </div>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-2">Onsite unit</p>
                                                <h5 class="mb-0"> {{$onsiteUnit}} </h5>
                                            </div>

                                            <div class="avatar-sm ms-auto">
                                                <div class="avatar-title bg-light rounded-circle text-success font-size-20">
                                                    <i class="bx bxs-car"></i>
                                                </div>
                                            </div>
                                        </div>                                                                                
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap">
                                            <div class="me-3">
                                                <p class="text-muted mb-2">Offsite unit</p>
                                                <h5 class="mb-0"> {{$offsiteUnit}} </h5>
                                            </div>

                                            <div class="avatar-sm ms-auto">
                                                <div class="avatar-title bg-light rounded-circle text-danger font-size-20">
                                                    <i class="bx bxs-car"></i>
                                                </div>
                                            </div>
                                        </div>                                                                                
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            @include('include.footer')
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
@endsection

@section('script')
    <script type="text/javascript">
        var refreshTime = 60000;
        $(document).ready(function () {
            var tableOn = $('#data-onsite').DataTable({ 
                processing: true,
                serverside: true,
                ajax: '{{route('kendaraan.onsite')}}',
                "destroy": true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '8%',
                        className: 'text-center'
                    },
                    {
                        data: 'noplat',
                        name: 'noplat',
                        orderable: true,
                        searchable: true,
                        width: '15%'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true,
                    },
                ]
            });

            $('#refreshOnsite').on('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link
                tableOn.ajax.reload(); // Me-refresh DataTables
            });            
            
            $('#refreshDataOnsite').on('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link
                tableOn.ajax.reload(); // Me-refresh DataTables
            });            
            setInterval(function() {
                tableOn.ajax.reload();
            }, refreshTime);

            var tableOff = $('#data-offsite').DataTable({ 
                processing: true,
                serverside: true,
                ajax: '{{route('kendaraan.offsite')}}',
                "destroy": true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '8%',
                        className: 'text-center'
                    },
                    {
                        data: 'noplat',
                        name: 'noplat',
                        orderable: true,
                        searchable: false,
                        width: '15%'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true,
                    },
                ]
            });

            $('#refreshOffsite').on('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link
                tableOff.ajax.reload(); // Me-refresh DataTables
            });            

            $('#refreshDataOffsite').on('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link
                tableOff.ajax.reload(); // Me-refresh DataTables
            });            
        
            setInterval(function() {
                tableOff.ajax.reload();
            }, refreshTime);
        });
    </script>
@endsection