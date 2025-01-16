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
                                    <h4 class="mb-sm-0 font-size-18"> {{ $header }} </h4>

                                    <div class="page-title-right">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-10">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-3">{{ isset($data) ? 'Update' : 'Tambah' }} unit</h4>
                                        {{-- <form action="{{isset($data) ? route('kendaraan.update', $data->uid) : route('kendaraan.store')}}" method="POST"> --}}
                                        <form action="{{isset($data) ? route('kendaraan.update', $data->uid) : route('kendaraan.store')}}" method="POST">
                                            @csrf
                                            @if(isset($data))
                                                @method('PUT')
                                            @endif
                                            <div class="row mb-3">
                                                <label for="noplat" class="col-sm-3 col-form-label">Nomor plat</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control text-uppercase" id="noplat" 
                                                            {{ isset($data) ? 'disabled' : '' }}
                                                            name="noplat" value="{{ old('noplat', $data->noplat ?? '') }}">  <!-- pattern="[A-Z]{2}-[0-9]{4}-[A-Z]{3}" -->
                                                    </div>
                                                    @error('noplat')<div style="color:red;">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="masasewa1" class="col-sm-3 col-form-label">Tanggal sewa</label>
                                                    <div class="col-sm-4">
                                                        <div class="input-group" id="datepicker2">
                                                            <input type="date" class="form-control" id="masasewa1" name="masasewa1"
                                                            autocomplete="off"
                                                            value="{{ old('masasewa1', $data->masasewa1 ?? '') }}">
                                                        </div>
                                                        @error('masasewa1')<div style="color:red;">{{ $message }}</div>@enderror
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group" id="datepicker2">
                                                            <input type="date" class="form-control" id="masasewa2" name="masasewa2"
                                                            autocomplete="off"
                                                            value="{{ old('masasewa2', $data->masasewa2 ?? '') }}">
                                                        </div>
                                                        @error('masasewa2')<div style="color:red;">{{ $message }}</div>@enderror
                                                    </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="tglpajak" class="col-sm-3 col-form-label">Tanggal pajak</label>
                                                <div class="col-sm-9">
                                                    <div class="input-group" id="datepicker2">
                                                        <input type="date" class="form-control" id="tglpajak" name="tglpajak" autocomplete="off"
                                                        value="{{ old('tglpajak', $data->tglpajak ?? '') }}">
                                                        {{-- <span class="input-group-text"><i class="mdi mdi-calendar"></i></span> --}}
                                                    </div>
                                                    @error('tglpajak')<div style="color:red;">{{ $message }}</div>@enderror
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="vendor" class="col-sm-3 col-form-label">Vendor</label>
                                                <div class="col-sm-9">
                                                    <select id="vendor" name="vendor" class="form-control form-select">
                                                        <option value="" disabled>-select-</option>
                                                        @foreach ($vendors as $vendor)
                                                            <option value="{{$vendor->idvendor}}"> {{$vendor->nmvendor}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>                                            
                                            <div class="row mb-3">
                                                <label for="namaspr" class="col-sm-3 col-form-label">Driver</label>
                                                <div class="col-sm-9">
                                                    <select id="namaspr" name="namaspr" class="form-control form-select">
                                                        <option value="0" disabled>-select-</option>
                                                        @foreach ($drivers as $driver)
                                                            <option value="{{$driver->nik}}"> {{$driver->name}} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="row justify-content-end">
                                                <div class="col-sm-9">
                                                    <div>
                                                        <button type="submit" class="btn btn-primary w-md submit">Submit</button>
                                                        <a href=" {{route('kendaraan.index')}} " class="btn btn-warning w-md">Cancel</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
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

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#namaspr').select2();
            $('#vendor').select2();
        });

        // $('.noplat').inputmask('[A-Z]{2} [0-9]{4} [A-Z]{3}');
    </script>
@endsection