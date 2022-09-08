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
                                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#viewOrder">View</button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="viewOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                <td>{{ $transaction->products->name }}</td>
                                                                                                <td>{{ $transaction->file }}</td>
                                                                                                <td>
                                                                                                    <a href="{{ asset('admin/file/' . $transaction->file) }}" target="_blank">Download</a>
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
                                                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#viewOrder">View</button>

                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="viewOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                                <td>{{ $transaction->products->name }}</td>
                                                                                                <td>{{ $transaction->file }}</td>
                                                                                                <td>
                                                                                                    <a href="{{ asset('admin/file/' . $transaction->file) }}" target="_blank">Download</a>
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
                                                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#viewOrder">View</button>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="viewOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                            <td>{{ $transaction->products->name }}</td>
                                                                                            <td>{{ $transaction->file }}</td>
                                                                                            <td>
                                                                                                <a href="{{ asset('admin/file/' . $transaction->file) }}" target="_blank">Download</a>
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
