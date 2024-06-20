<!DOCTYPE html>
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ jcms()->name }}</title>
    <meta name="description" content="{{ jcms()->description }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- CSS -->
    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/dist/css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="hk-wrapper hk-pg-auth" data-footer="simple">
        <!-- Main Content -->
        <div class="hk-pg-wrapper py-0">
            <div class="hk-pg-body py-0">
                <!-- Container -->
                <div class="container-fluid">
                    <!-- Row -->
                    <div class="row auth-split">
                        <div
                            class="col-xl-5 col-lg-6 col-md-5 d-md-block d-none bg-primary-dark-5 bg-opacity-50 position-relative">
                            <img class="bg-img" src="{{ asset('assets') }}/dist/img/donate.png" alt="bg-img">
                            <div class="auth-content py-8">
                                <div class="row">
                                    <div class="col-xxl-8 mx-auto">
                                        <div class="text-center">
                                            <h3 class="text-white mb-2">Berikan dampak positif bagi diri sendiri maupun bagi masyarakat luas.</h3>
                                        </div>
                                        <ul class="list-icon text-white mt-4">
                                            <li class="mb-1">
                                                <p><i class="ri-check-fill"></i><span>Dengan setiap sumbangan kecil, kita bisa membuat perubahan besar. Mari berbagi dan jadikan dunia tempat yang lebih baik!</span></p>
                                            </li>
                                            <li class="mb-1">
                                                <p><i class="ri-check-fill"></i><span>Kebaikanmu adalah harapan bagi mereka yang membutuhkan. Ayo donasi sekarang, karena setiap bantuanmu berarti!</span></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-7 col-sm-10 position-relative mx-auto">
                            <div class="pt-lg-8 pt-md-8 pt-3 pb-md-8 pb-13">
                                <div class="text-center mb-4">
                                    <a class="navbar-brand me-0" href="index.html">
                                        <img class="brand-img d-inline-block" src="{{ jcms()->logo }}" alt="brand">
                                    </a>
                                </div>
                                <form class="w-100">
                                    <div class="row">
                                        <div class="col-xxl-7 col-xl-7 col-lg-10 mx-auto">
                                            <h4 class="text-center mb-4 text-uppercase">Bayar Infaq & Sedekah</h4>
                                            <div class="row gx-3 border rounded border-primary p-2 m-1 mb-4">
                                                <div class="form-group col-lg-12">
                                                    <label for="forTo" class="form-label fw-bold">Tujuan <sup
                                                            class="text-danger">*</sup></label>
                                                    <div>
                                                        <div class="form-check mb-1">
                                                            <input id="radio_1" name="objective"
                                                                class="form-check-input" value="Infaq & Sedekah" type="radio" required>
                                                            <label class="form-check-label" for="radio_1">Infaq &
                                                                Sedekah</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio_2" name="objective"
                                                                class="form-check-input" value="Pembangunan" type="radio">
                                                            <label class="form-check-label"
                                                                for="radio_2">Pembangunan</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="amount" class="form-label fw-bold">Nominal Sedekah
                                                        <sup class="text-danger">*</sup></label>
                                                    <span class="input-affix-wrapper">
                                                        <span class="input-prefix">Rp</span>
                                                        <input type="number" id="amount" name="amount"
                                                            class="form-control form-control-lg text-end fw-bold"
                                                            placeholder="0" value="0" aria-label="Nominal"
                                                            aria-describedby="basic-addon1" required>
                                                    </span>
                                                    <div class="row mt-2">
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_1" name="amount_r" value="10000" type="radio">
                                                                <label class="form-check-label" for="amount_r_1">10.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_2" name="amount_r" class="form-check-input" value="25000" type="radio">
                                                                <label class="form-check-label" for="amount_r_2">25.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_3" name="amount_r" class="form-check-input" value="35000" type="radio">
                                                                <label class="form-check-label" for="amount_r_3">35.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_4" name="amount_r" class="form-check-input" value="50000" type="radio">
                                                                <label class="form-check-label" for="amount_r_4">50.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_5" name="amount_r" class="form-check-input" value="70000" type="radio">
                                                                <label class="form-check-label" for="amount_r_5">70.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_6" name="amount_r" class="form-check-input" value="100000" type="radio">
                                                                <label class="form-check-label" for="amount_r_6">100.000</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="name" class="form-label fw-bold">Atas Nama <sup
                                                            class="text-danger">*</sup></label>
                                                    <input type="text" id="name" name="name"
                                                        class="form-control form-control-lg" placeholder="Hamba Allah"
                                                        required>
                                                </div>
                                                <button id="pay-button" class="btn btn-primary btn-uppercase btn-block mt-4 mb-2">Lanjutkan Pembayaran</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Page Footer -->
                            <div class="hk-footer border-0">
                                <footer class="container-xxl footer">
                                    <div class="row">
                                        <div class="col-xl-8 text-center">
                                            <p class="footer-text pb-0"><span class="copy-text">{{ jcms()->name }} © 2024 All
                                                    rights reserved.</span> <a href="#" class=""
                                                    target="_blank">Privacy Policy</a><span
                                                    class="footer-link-sep">|</span><a href="#" class=""
                                                    target="_blank">T&C</a><span class="footer-link-sep">|</span><a
                                                    href="#" class="" target="_blank">System Status</a>
                                            </p>
                                        </div>
                                    </div>
                                </footer>
                            </div>
                            <!-- / Page Footer -->
                        </div>
                    </div>
                    <!-- /Row -->
                </div>
                <!-- /Container -->
            </div>
            <!-- /Page Body -->
        </div>
        <!-- /Main Content -->
    </div>

    <!-- jQuery -->
    {{-- <script src="{{ asset('assets') }}/vendors/jquery/dist/jquery.min.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
    <script type="text/javascript">
        $('#amount_r_1').click(function() {
            let amount_r_1 = $('#amount_r_1').val();
            let changeAmount = $('#amount').val(amount_r_1)
        });
        $('#amount_r_2').click(function() {
            let amount_r_2 = $('#amount_r_2').val();
            let changeAmount = $('#amount').val(amount_r_2)
        });
        $('#amount_r_3').click(function() {
            let amount_r_3 = $('#amount_r_3').val();
            let changeAmount = $('#amount').val(amount_r_3)
        });
        $('#amount_r_4').click(function() {
            let amount_r_4 = $('#amount_r_4').val();
            let changeAmount = $('#amount').val(amount_r_4)
        });
        $('#amount_r_5').click(function() {
            let amount_r_5 = $('#amount_r_5').val();
            let changeAmount = $('#amount').val(amount_r_5)
        });
        $('#amount_r_6').click(function() {
            let amount_r_6 = $('#amount_r_6').val();
            let changeAmount = $('#amount').val(amount_r_6)
        });

        $('#pay-button').click(function(event) {
            event.preventDefault();

            // Check if required fields are filled
            if (!$('input[name="objective"]:checked').val()) {
                alert("Pilih tujuan donasi anda.");
                return;
            }
            if (!$('#amount').val() && !$('input[name="amount_r"]:checked').val()) {
                alert("Masukan atau pilih jumlah donasi anda.");
                return;
            }
            if (!$('#name').val()) {
                alert("Isi nama anda.");
                return;
            }

            var objName = $('input[name="objective"]:checked').val();
            var amount = $('#amount').val();

            if(amount < 10000) {
                alert('Minimal donasi Rp 10.000');
                return;
            }

            $.post("{{ route('donation.pay') }}", {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    name: $('#name').val(),
                    // email: 'jarwonozt@gmail.com',
                    amount: amount,
                    objective: objName
                },
                function(data, status) {
                    snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            location.reload();
                        },
                        onPending: function(result) {
                            location.reload();
                        },
                        onError: function(result) {
                            location.reload();
                        }
                    });
                    return false;
                });
        });
    </script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets') }}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FeatherIcons JS -->
    <script src="{{ asset('assets') }}/dist/js/feather.min.js"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('assets') }}/dist/js/dropdown-bootstrap-extended.js"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets') }}/vendors/simplebar/dist/simplebar.min.js"></script>
    <!-- Apex JS -->

    <!-- Init JS -->
    <script src="{{ asset('assets') }}/dist/js/init.js"></script>

</body>

</html>
