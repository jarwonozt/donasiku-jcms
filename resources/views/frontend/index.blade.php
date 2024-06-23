<x-layouts.app title="Home">
    <div class="container-xxl">
        <div class="hk-pg-body">
            <div class="row">
                <div class="col-xl-7 col-lg-6 d-lg-block d-none">
                    <div class="auth-content py-md-0 py-8">
                        <div class="row">
                            <div class="col-xl-12 text-center">
                                <img src="{{ asset('assets') }}/dist/img/donation-layer.png"
                                    class="img-fluid w-sm-80 w-50" alt="login" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 col-md-7 col-sm-10">
                    <div class="auth-content py-md-0 py-8">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-xxl-9 col-xl-8 col-lg-11">
                                    <h1 class="display-4 fw-bold mb-2">{{ jcms()->name }}</h1>
                                    <p class="p-lg">{{ jcms()->description }}</p>
                                    <a href="/donasi" class="btn btn-primary mt-4">Donasi Sekarang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
