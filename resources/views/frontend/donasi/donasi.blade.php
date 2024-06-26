<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ jcms()->name }}</title>
    <meta name="description" content="{{ jcms()->description }}" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link href="{{ asset('assets') }}/dist/css/style.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/dist/css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="hk-wrapper hk-pg-auth" data-footer="simple">

        {{-- <div class="chat-popover shadow-xl"><p></p></div> --}}

        <div class="hk-pg-wrapper py-0">
            <div class="hk-pg-body py-0">
                <div class="container-fluid">
                    <div class="row auth-split">
                        <div class="col position-relative mx-auto">
                            <div class="pt-lg-8 pt-md-8 pt-3 pb-md-8 pb-13">
                                <div class="text-center mb-4">
                                    <a class="navbar-brand me-0" href="/">
                                        <img class="brand-img d-inline-block" src="{{ jcms()->logo }}" alt="brand">
                                    </a>
                                </div>
                                <form class="w-100">
                                    <div class="row">
                                        <div class="col-xxl-7 col-xl-7 col-lg-10 mx-auto">
                                            <h3 class="text-center fw-bold mb-4 text-uppercase">Bayar Infaq & Sedekah</h4>
                                            <div class="row gx-3 p-3 m-1 mb-4" id="body-donation">
                                                <div class="form-group col-lg-12 p-0">
                                                    <label for="forTo" class="form-label fw-bold">Tujuan <sup
                                                            class="text-danger">*</sup></label>
                                                    <div>
                                                        <div class="form-check mb-1">
                                                            <input id="radio_1" name="objective"
                                                                class="form-check-input" value="Infaq & Sedekah" type="radio" required>
                                                            <label class="form-check-label" for="radio_1">Pengembangan NU Online Jakarta</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 p-0">
                                                    <label for="amount" class="form-label fw-bold">Nominal Sedekah
                                                        <sup class="text-danger">*</sup></label>
                                                    <span class="input-affix-wrapper">
                                                        <span class="input-prefix">Rp</span>
                                                        <input type="number" id="amount" name="amount"
                                                            class="form-control form-control-lg text-end fw-bold"
                                                            placeholder="0" value="0" aria-label="Nominal"
                                                            aria-describedby="basic-addon1" required>
                                                    </span>
                                                </div>
                                                <div class="form-group">

                                                    <div class="row mt-2 p-0">
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_1" name="amount_r" value="10000" type="radio">
                                                                <label class="form-check-label" for="amount_r_1">10.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_2" name="amount_r" class="form-check-input" value="25000" type="radio">
                                                                <label class="form-check-label" for="amount_r_2">25.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_3" name="amount_r" class="form-check-input" value="35000" type="radio">
                                                                <label class="form-check-label" for="amount_r_3">35.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_4" name="amount_r" class="form-check-input" value="50000" type="radio">
                                                                <label class="form-check-label" for="amount_r_4">50.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_5" name="amount_r" class="form-check-input" value="70000" type="radio">
                                                                <label class="form-check-label" for="amount_r_5">70.000</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-4 p-0">
                                                            <div class="radiobtn">
                                                                <input id="amount_r_6" name="amount_r" class="form-check-input" value="100000" type="radio">
                                                                <label class="form-check-label" for="amount_r_6">100.000</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group col-lg-12 p-0">
                                                    <label for="name" class="form-label fw-bold">Atas Nama <sup
                                                            class="text-danger">*</sup></label>
                                                    <input type="text" id="name" name="name"
                                                        class="form-control form-control-lg" placeholder="Hamba Allah"
                                                        required>
                                                </div>
                                                {{-- <div class="form-group col-lg-12 p-0">
                                                    <label for="email" class="form-label fw-bold">Email (opsional)</label>
                                                    <input type="email" id="email" name="email"
                                                        class="form-control form-control-lg" placeholder="username@gmail.com">
                                                </div> --}}
                                                <button id="pay-button" class="btn btn-primary btn-uppercase btn-block mt-4 mb-2">Lanjutkan Pembayaran</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            var email = $('#email').val();

            if(amount < 10000) {
                alert('Minimal donasi Rp 10.000');
                return;
            }

            $.post("{{ route('donation.pay') }}", {
                    _method: 'POST',
                    _token: '{{ csrf_token() }}',
                    name: $('#name').val(),
                    email: email == null ? 'nuonlinejakarta@gmail.com' : email,
                    amount: amount,
                    objective: objName
                },
                function(data, status) {
                    snap.pay(data.snap_token, {
                        onSuccess: function(result) {
                            // location.reload();
                            location.href = "/donation/detail?transaction_id="+data.snap_token;
                        },
                        onPending: function(result) {
                            location.href = "/donation/detail?transaction_id="+data.snap_token;
                        },
                        onError: function(result) {
                            location.href = "/donation/detail?transaction_id="+data.snap_token;
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
