@extends('admin.layouts.app')

@section('title')
    Transaksi
@endsection

@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Transaksi</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-home">
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="flaticon-home"></i>
                            </a>
                        </li>
                        <li class="separator">
                            <i class="flaticon-right-arrow"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.transaksi.index') }}">Transaksi</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-head-row">
                                    <div class="card-title">
                                        Daftar Transaksi

                                        <div class="card-category">
                                            Menampilkan semua data transaksi yang tersedia.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="order-tab" data-toggle="pill" href="#order" role="tab" aria-controls="order" aria-selected="true">Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="process-tab" data-toggle="pill" href="#process" role="tab" aria-controls="process" aria-selected="false">Proses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="finish-tab" data-toggle="pill" href="#finish" role="tab" aria-controls="finish" aria-selected="false">Selesai</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-2 mb-3" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="order-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Pelanggan</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Note</th>
                                                    <th scope="col">No Telp (WA)</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 0)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->users->name }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->total }}</td>
                                                            <td>{{ $transaction->note }}</td>
                                                            <td>{{ $transaction->phone_number }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <form action="{{ url('admin/transaction/update-process/' . $transaction->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <button type="submit" class="btn btn-primary">Proses</button>
                                                                    <button type="button" class="btn btn-warning" id="viewDetail1" data-toggle="modal" data-target="#viewOrder1" data-jobdesc1="{{ $transaction->products->name }}" data-filename1="{{ $transaction->file }}">View</button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="viewOrder1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <table width="100%">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Nama Pekerjaan</th>
                                                                                                <th>File</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td id="jobdesc1"></td>
                                                                                                <td id="filename1"></td>
                                                                                                <td>
                                                                                                    <button type="button" class="btn btn-success" id="file1">Download</button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="process" role="tabpanel" aria-labelledby="process-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Pelanggan</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Note</th>
                                                    <th scope="col">No Telp (WA)</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 1)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->users->name }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->total }}</td>
                                                            <td>{{ $transaction->note }}</td>
                                                            <td>{{ $transaction->phone_number }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <form action="{{ url('admin/transaction/update-finish/' . $transaction->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')

                                                                    <button type="submit" class="btn btn-primary">Selesai</button>
                                                                    <button type="button" class="btn btn-warning" id="viewDetail2" data-toggle="modal" data-target="#viewOrder2" data-jobdesc2="{{ $transaction->products->name }}" data-filename2="{{ $transaction->file }}">View</button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="viewOrder2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <table width="100%">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>Nama Pekerjaan</th>
                                                                                                <th>File</th>
                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td id="jobdesc2"></td>
                                                                                                <td id="filename2"></td>
                                                                                                <td>
                                                                                                    <button type="button" class="btn btn-success" id="file2">Download</button>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="finish" role="tabpanel" aria-labelledby="finish-tab">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No</th>
                                                    <th scope="col">Nama Pelanggan</th>
                                                    <th scope="col">Order Number</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">Note</th>
                                                    <th scope="col">No Telp (WA)</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php $no = 1 @endphp
                                                @foreach ($transactions as $transaction)
                                                    @if ($transaction->process == 2)
                                                        <tr>
                                                            <td>{{ $no++ }}</td>
                                                            <td>{{ $transaction->users->name }}</td>
                                                            <td>{{ $transaction->order_number }}</td>
                                                            <td>{{ $transaction->total }}</td>
                                                            <td>{{ $transaction->note }}</td>
                                                            <td>{{ $transaction->phone_number }}</td>
                                                            <td>{{ $transaction->created_at }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" id="viewDetail3" data-toggle="modal" data-target="#viewOrder3" data-jobdesc3="{{ $transaction->products->name }}" data-filename3="{{ $transaction->file }}">View</button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="viewOrder3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <table width="100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th>Nama Pekerjaan</th>
                                                                                            <th>File</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td id="jobdesc3"></td>
                                                                                            <td id="filename3"></td>
                                                                                            <td>
                                                                                                <button type="button" class="btn btn-success" id="file3">Download</button>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $(document).on('click', '#viewDetail1', function() {
            var jobdesc = $(this).data('jobdesc1')
            var filename = $(this).data('filename1')

            $('#jobdesc1').text(jobdesc)
            $('#filename1').text(filename)

            $('#file1').on('click', function () {
                $.ajax({
                    url: `{{ asset('admin/file') }}/${filename}`,
                    method: 'GET',
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function (data) {
                        var a = document.createElement('a')
                        var url = window.URL.createObjectURL(data)
                        a.href = url
                        a.download = filename + '.pdf'
                        document.body.append(a)
                        a.click()
                        a.remove()
                        window.URL.revokeObjectURL(url)
                    }
                })
            })
        })



        $(document).on('click', '#viewDetail2', function() {
            var jobdesc = $(this).data('jobdesc2')
            var filename = $(this).data('filename2')

            $('#jobdesc2').text(jobdesc)
            $('#filename2').text(filename)

            $('#file2').on('click', function () {
                $.ajax({
                    url: `{{ asset('admin/file') }}/${filename}`,
                    method: 'GET',
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function (data) {
                        var a = document.createElement('a')
                        var url = window.URL.createObjectURL(data)
                        a.href = url
                        a.download = filename + '.pdf'
                        document.body.append(a)
                        a.click()
                        a.remove()
                        window.URL.revokeObjectURL(url)
                    }
                })
            })
        })

        $(document).on('click', '#viewDetail3', function() {
            var jobdesc = $(this).data('jobdesc3')
            var filename = $(this).data('filename3')

            $('#jobdesc3').text(jobdesc)
            $('#filename3').text(filename)

            $('#file3').on('click', function () {
                $.ajax({
                    url: `{{ asset('admin/file') }}/${filename}`,
                    method: 'GET',
                    xhrFields: {
                        responseType: 'blob'
                    },
                    success: function (data) {
                        var a = document.createElement('a')
                        var url = window.URL.createObjectURL(data)
                        a.href = url
                        a.download = filename + '.pdf'
                        document.body.append(a)
                        a.click()
                        a.remove()
                        window.URL.revokeObjectURL(url)
                    }
                })
            })
        })
    })
</script>
@endpush
