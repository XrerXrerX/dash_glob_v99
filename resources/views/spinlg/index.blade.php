<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L21 - Superspin</title>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <section class="bgwheel">
        <div class="outspinwheel">
            <img class="bgspn" src="assets/img/red_bingkai.png" alt="">
            <img class="rodaspn" src="assets/img/red_wheel.png" alt="">
            <img class="pointerspn" src="assets/img/red_pointer.png" alt="">
        </div>
    </section>
    <div class="buttonwheel" data-target="modalspin">
        <img src="assets/img/red_button_1.png" alt="Superspin">
    </div>
    <div id="modalspin" class="moodalspinwl" style="display: none;">
        <div class="bodymodalspin">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="groupspin">
                <div class="listwheel">
                    <img class="bgroda" src="assets/img/red_bingkai.png" alt="">
                    <img class="bagianroda" src="assets/img/red_wheel.png" alt="">
                    <img class="bagianpointer" src="assets/img/red_pointer.png" alt="">
                </div>
            </div>
            <h3>CLAIM HADIAH</h3>
            <form class="formredeem" role="form" action="/spinner/auth" method="post">
                @csrf
                <div class="redduser">
                    <label for="username" class="text-white">USERNAME</label>
                    <input type="username" name="username" class="form-control  @error('username') is-invalid @enderror"
                        id="username" placeholder="User ID" autofocus required value="{{ old('username') }}">
                    <i style="padding: 10px 17px;" class='fas fa-user'></i>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="redduser">
                    <label for="voucher" class="text-white">VOUCHER</label>
                    <input type="voucher" name="voucher" class="form-control" id="voucher" placeholder="Kode Voucher"
                        required> <i class='fas fa-ticket'></i>
                </div>



                <div class="ruangbtn">
                    <button type="submit" class="btn bg-gradient-primary w-100 mt-4 mb-0"
                        style="
                    background-color: transparent;
                    border: 0;
                ">
                        <img src="assets/img/red_button_1.png" alt=""></button>
                </div>
                <p>Note: Silahkan klik Hubungi Admin Lotto21Group untuk informasi lanjut dan jika terjadi kendala.
                    <a class="kontkadmin" href=""><i class='fab fa-whatsapp'></i>Hubungi Admin</a>
                </p>
            </form>
            <div class="logol21">
                <img src="assets/img/l21-logo-1.png" alt="">
            </div>
        </div>
    </div>

    <script src="assets/script.js"></script>
</body>

</html>
