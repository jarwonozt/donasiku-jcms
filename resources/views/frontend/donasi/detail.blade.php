<x-layouts.app title="Detail Donasi">
    <div class="hk-pg-body py-0">
        <div class="blogapp-wrap">
            <div class="blogapp-content">
                <div class="blogapp-detail-wrap">
                    <x-error-alert />
                    <div class="blog-body">
                        <div class="invoice-body">
                            <div data-simplebar class="nicescroll-bar">
                                <div class="template-invoice-wrap border mt-xxl-5 p-md-5 p-3">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-5 order-md-0 order-1">
                                            <img src="{{ jcms()->logo }}" alt="logo" width="170"
                                                height="40">
                                        </div>
                                        <div
                                            class="col-lg-4 offset-lg-5 offset-md-3 col-md-4 mb-md-0 mb-2">
                                            <h3 class="d-flex justify-content-md-end mb-0">{{ $data->code }}</h3>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-md-4 order-md-0 order-1">
                                            <div class="address-wrap">
                                                <span class="fs-5 fw-bold">{{ $data->name }}</span>
                                                <p>{{ $data->email }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-5 offset-md-3 mb-4 mb-md-0">
                                            <div class="d-flex justify-content-md-end">
                                                <div class="text-dark">
                                                    <div class="mb-1">{{ $data->dateTime }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator separator-light"></div>
                                    <div class="table-wrap mt-6">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead class="thead-primary">
                                                    <tr>
                                                        <th>Kode</th>
                                                        <th>Status</th>
                                                        <th>Nama</th>
                                                        <th>Jumlah</th>
                                                        <th>Tujuan</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{ $data->code }}</td>
                                                        <td class="text-uppercase fw-bold">{{ $data->status }}</td>
                                                        <td>{{ $data->name }}</td>
                                                        <td>{{ $data->amountRupiah }}</td>
                                                        <td>{{ $data->objective }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-lg-5">
                                            <h6>Catatan</h6>
                                            <p>{{ $data->note }}</p>
                                        </div>
                                        <div class="col-lg-7 text-lg-end mt-lg-0 mt-3">
                                            <h5 class="mt-lg-7">{{ jcms()->author->name }}</h5>
                                            <p>Co-founder, {{ jcms()->name }}</p>
                                        </div>
                                    </div>
                                    <div class="separator separator-light mt-7"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')

    @endpush
</x-layouts.app>
