@extends('layouts.admin.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Registrant Master Data</h4>
                    <h6 class="card-subtitle">Master data is the data content of a table that has been previously inputted.
                    </h6>
                    <a href="{{ route('admin.registrant.export.excel') }}"><button type="button"
                            class="btn waves-effect waves-light btn-primary mb-3">Download Registrant Report</button>
                    </a>

                    <a href="{{ route('admin.registrant.export.excel', 'Regular') }}"><button type="button"
                            class="btn waves-effect waves-light btn-warning mb-3">Download Regular Registrant Report</button>
                    </a>

                    <a href="{{ route('admin.registrant.export.excel', 'Unggulan') }}"><button type="button"
                            class="btn waves-effect waves-light btn-warning mb-3">Download Unggulan Registrant
                            Report</button>
                    </a>
                    <div class="table-responsive">
                        <table id="default_order_desc" class="table table-striped table-bordered display"
                            style="width:100%">
                            <thead>
                                <tr>
                                    <th>Reg ID</th>
                                    <th>Action</th>
                                    <th>Daftar Ulang</th>
                                    <th>Name</th>
                                    <th>Kelas</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Parent Name</th>
                                    <th>Scholl Origin</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrant as $item)
                                    <tr>
                                        <td>{{ $item->id_registrant }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-dark dropdown-toggle"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ti-settings"></i>
                                                </button>
                                                <div class="dropdown-menu animated slideInUp" x-placement="bottom-start"
                                                    style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 35px, 0px);">
                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registrant.detail', $item->id) }}">
                                                        <i class="ti-eye"></i> Open
                                                    </a>

                                                    {{-- <a class="dropdown-item" href="{{ route('admin.registrant.card', $item->id) }}">
												<i class="ti-layout-slider-alt "></i> Download Card
											</a> --}}

                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registrant.detail', $item->id) }}">
                                                        <i class="ti-pencil-alt"></i> Edit
                                                    </a>

                                                    <a class="dropdown-item"
                                                        href="{{ route('admin.registrant.update.re.register', $item->id) }}">
                                                        <i class="ti-pencil-alt"></i> {{ $item->re_register ? 'Cancel' : '' }} Daftar Ulang
                                                    </a>

                                                    <a class="dropdown-item bg-danger"
                                                        href="{{ route('admin.registrant.delete', $item->id) }}">
                                                        <i class="ti-trash"></i> Delete
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($item->re_register)
                                            <span class="badge badge-primary">{{cb($item->re_register, 'd M Y')}}</span>
                                            @else
                                            <span class="badge badge-warning">Belom Daftar Ulang</span>
                                            @endif
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->lane }}</td>
                                        <td>{{ $item->get['gender'] }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->parent_name }}</td>
                                        <td>{{ $item->school_origin }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Reg ID</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Kelas</th>
                                    <th>Gender</th>
                                    <th>Phone</th>
                                    <th>Parent Name</th>
                                    <th>Scholl Origin</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link href="{{ asset('adm/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">
@endpush
@push('js')
    <script src="{{ asset('adm/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adm/dist/js/pages/datatable/datatable-basic.init.js') }}"></script>
@endpush
