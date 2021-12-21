@extends('layouts.admin')

@section('title', 'Data Keuangan Hadiyani & Partners Law Firm')

@section('head-link')
<!-- Custom fonts for this template-->
<link href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ URL::asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
{{-- <link href="{{ URL::asset('vendor/datatables/bootstrap.css') }}" rel="stylesheet"> --}}
<link href="{{ URL::asset('vendor/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('css/bootstrap-editable.css') }}" rel="stylesheet">

<style>
    .table>tbody>tr>td {
        vertical-align: middle;
    }
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Keuangan Hadiyani & Partners Law Firm</h1>
    <p class="mb-4">Seluruh data keuangan yang ada di Database Aplikasi E-Payroll Hadiyani & Partners Law Firm</p>

    {{-- <div class="col-5 justify-content-end">
        <form action={{ url('admin/keuangan') }} method="post">
            <div class="input-group daterange mr-3 mt-3" style="height: 48px;">
                @csrf
                <input type="date" name="tanggalAwal" style="text-align: center; font-weight: bolder;"
                     class="form-control text-primary" value="{{ $first }}">
                <button class="btn btn-sm btn-secondary" style="height: 38px; font-weight:900; padding-bottom: 5px;"
                    disabled>-</button>
                <input type="date" name="tanggal" style="text-align: center; font-weight: bolder;" class="form-control text-primary mr-3" value="{{ $last }}">
                <input type="submit" class="btn btn-sm btn-primary" style="height: 38px;" value="submit">
            </div>
        </form>
    </div> --}}
    
    @if (session()->has('deleted'))
    <div class="alert alert-info alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('deleted') }}
    </div>
    @endif
    @if (session()->has('finance_store'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('finance_store') }}
    </div>
    @endif
    @if (session()->has('presensi_update'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session()->get('presensi_update') }}
    </div>
    @endif

    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataKeuangan" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th>Pemasukan</th>
                            <th>Pengeluaran</th>
                            <th>Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $saldo = 0;
                            $no = 1;
                        @endphp
                        @foreach ($finance as $keuangan)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($keuangan->created_at))->isoFormat('D MMMM Y') }}</td>
                            <td>{{ $keuangan->keterangan }}</td>
                            {{-- <td>{{ $keuangan->jumlah }}</td> --}}
                            <td class="text-success text-right"> @if($keuangan->status == 0)Rp. {{ number_format($keuangan->jumlah,0,'','.') }}@else - @endif</td>
                            <td class="text-danger text-right"> @if($keuangan->status == 1)Rp. {{ number_format($keuangan->jumlah,0,'','.') }}@else - @endif</td>
                            {{-- <td
                                class="font-weight-bold align-middle text-center @if($keuangan->status == 0) text-success @else text-danger  @endif">
                                @if($keuangan->status == 0) Pemasukan @else Pengeluaran
                                @endif
                            </td> --}}
                            <td class="text-right">
                                Rp.  @if($keuangan->status == 0) {{ number_format(($saldo = $saldo + $keuangan->jumlah),0,'','.') }} @else 
                                {{ number_format(($saldo = $saldo - $keuangan->jumlah),0,'','.') }}
                                @endif
                                </td>
                              
                        </tr>

                        {{-- Delete Modal --}}
                        {{-- <div class="modal fade" id="exampleModalCenter{{ $keuangan->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Yakin ingin menghapus akun
                                            ?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Seluruh data akun akan dihapus secara permanen dan tidak dapat dikembalikan.
                                    </div>
                                    <div class="modal-footer p-0 px-3">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Cancel</button>
                                        <form method="POST" action="{{ url('/admin/keuangan/'.$keuangan->id) }}">
                                            @csrf
                                            @method('delete')
                                            <div class="form-group">
                                                <input type="submit" class="mt-3 btn btn-danger" value="Hapus">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@section('foot-link')
<!-- Bootstrap core JavaScript-->
<script src="{{ URL::asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ URL::asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ URL::asset('js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ URL::asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/buttons.colVis.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ URL::asset('js/demo/datatables-demo.js') }}"></script>

<script>
    $(function(){
            $(".alert").delay(3000).slideUp(300);
        });
</script>
@endsection