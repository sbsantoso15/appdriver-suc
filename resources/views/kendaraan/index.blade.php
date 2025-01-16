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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        {{-- {{ csrf_token()}} --}}
                                        <div class="table-responsive">
                                            <div style="text-align: right;" class="mb-2">
                                                <a href="#" id="refreshData" class="btn btn-success btn-sm">
                                                    {{-- <i class="mdi mdi-reload font-size-22 align-middle me-1 text-primary"></i>  --}}
                                                    <span>refresh</span>
                                                </a>
                                                <a href="{{route('kendaraan.addunit')}}" class="btn btn-primary btn-sm">
                                                    {{-- <i class="mdi mdi-reload align-middle me-1 text-primary"></i> --}}
                                                    <span>add data</span> 
                                                </a>
                                            </div>

                                            <table id="data-kendaraan" class="table table-hover table-striped table-bordered datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr class="bg-success">
                                                        <th scope="col">No</th>
                                                        <th scope="col">No plat</th>
                                                        <th scope="col">Driver</th>
                                                        <th scope="col">Awal sewa</th>
                                                        <th scope="col">Akhir sewa</th>
                                                        <th scope="col">Tgl pajak</th>
                                                        <th scope="col">Vendor</th>
                                                        <th scope="col">#</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
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
        $(document).ready(function () {
            var table = $('#data-kendaraan').DataTable({ 
                processing: true,
                serverside: true,
                ajax: '{{route('kendaraan.show')}}',
                "destroy": true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        width: '6%',
                        className: 'text-center'
                    },
                    {
                        data: 'noplat',
                        name: 'noplat',
                        orderable: true,
                        searchable: true,
                        width: '12%',
                        className: 'text-center'
                    },
                    {
                        data: 'name',
                        name: 'name',
                        orderable: true,
                        searchable: true,
                        width: '20%'
                    },
                    {
                        data: 'masasewa1',
                        name: 'masasewa1',
                        render: function(data, type, row) {
                            var date = moment(data, 'YYYY-MM-DD');
                            if (date.isValid()) {
                                return date.format('DD-MM-YYYY');
                            }
                            return '';
                        },
                        orderable: true,
                        searchable: true,
                        width: '10%',
                        className: 'text-center'
                    },
                    {
                        data: 'masasewa2',
                        name: 'masasewa2',
                        render: function(data, type, row) {
                            var date = moment(data, 'YYYY-MM-DD');
                            if (date.isValid()) {
                                return date.format('DD-MM-YYYY');
                            }
                            return '';
                        },
                        orderable: true,
                        searchable: true,
                        width: '10%',
                        className: 'text-center'
                    },
                    {
                        data: 'tglpajak',
                        name: 'tglpajak',
                        render: function(data, type, row) {
                            var date = moment(data, 'YYYY-MM-DD');
                            if (date.isValid()) {
                                return date.format('DD-MM-YYYY');
                            }
                            return '';
                        },
                        orderable: true,
                        searchable: true,
                        width: '12%',
                        className: 'text-center'
                    },
                    {
                        data: 'nmvendor',
                        name: 'nmvendor',
                        orderable: true,
                        searchable: true,
                        wrap: true,
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '10%',
                        className: 'text-center'
                    },
                ]
            });

            $('#refreshData').on('click', function(e) {
                e.preventDefault(); // Mencegah aksi default link
                table.ajax.reload(); // Me-refresh DataTables
            }); 

            // $(".edit").click(function(){
            //     $.redirect("/someUrl",{val:$(this).val()});
            // });

            $(document).on('click', '.edit', function() {
                var id = $(this).data('id');
                var url = '/kendaraan/e-form/' + id;
                console.log(url);
                window.location.href = url;
            });
            // $(document).on('click', '.edit', function() {
            //     var id = $(this).data('id');
            //     var url = '/kendaraan/e-form/' + id;
                
            //     // localStorage.setItem('id',id);
            //     // console.log(localStorage.getItem('id'));
            //     // $.ajax({
                    
            //     //     data: {
            //     //         _token: $('meta[name="csrf-token"]').attr('content')
            //     //     },
            //     //     url: url,
            //     //     method: 'GET',
                    
            //     //     // success: function(response) {
            //     //     //     console.log(response);
            //     //     //     // window.location.href = response.redirectUrl; // If server returns a redirect URL
            //     //     // },
            //     //     // error: function(xhr, status, error) {
            //     //     //     console.error("Error: " + status + ", " + error);
            //     //     // }
            //     // });
            // }); 

            $(document).on('click', '.delete', function() {
                var id = $(this).data('id');
                var uid = id.split('|')[0];
                var nplat = id.split('|')[1];
                // console.log('ID yang dipilih: ' + id + '\n' + uid + '\n' + nplat);
                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Yakin ingin menonaktifkan '+ nplat +' ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Nonaktifkan!',
                }).then ((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '/kendaraan/'+uid+'/deactive',
                            type: 'GET',
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content'),
                            },
                            success: function(response){
                                Swal.fire('Success', response.message, 'success');
                                table.ajax.reload();
                            }, 
                            error: function(xhr){
                                // Swal.fire('Gagal!', xhr.responseJSON.message, 'error');
                                Swal.fire('Gagal! No plat  not found');
                            }
                            
                        })
                    }
                })
            });

        });
    </script>
@endsection