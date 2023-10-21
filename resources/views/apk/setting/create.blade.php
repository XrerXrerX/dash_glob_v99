<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="settingForm">
        @csrf
        @foreach ($namabo as $index => $nbo)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $nbo }}</h3>
                    <span>Setting</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">New Home</span>
                    <input type="text" id="newhome" name="newhome[]" value="{{ $newhome[$index] }}"
                        {{ $disabled }}>
                    <input type="hidden" name="namabo[]" value="{{ $nbo }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">New Home 1</span>
                    <input type="text" id="newhome1" name="newhome1[]" value="{{ $newhome1[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">New Home 2</span>
                    <input type="text" id="newhome2" name="newhome2[]" value="{{ $newhome2[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">New Home 3</span>
                    <input type="text" id="newhome3" name="newhome3[]" value="{{ $newhome3[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Home</span>
                    <input type="text" id="home" name="home[]" value="{{ $home[$index] }}"
                        {{ $disabled }}>

                </div>
                <div class="list_form">
                    <span class="sec_label">Syair</span>
                    <input type="text" id="syair" name="syair[]" value="{{ $syair[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Hadiah</span>
                    <input type="text" id="hadiah" name="hadiah[]" value="{{ $hadiah[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Jadwal</span>
                    <input type="text" id="jadwal" name="jadwal[]" value="{{ $jadwal[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Promo</span>
                    <input type="text" id="promo" name="promo[]" value="{{ $promo[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Content</span>
                    <input type="text" id="content" name="content[]" value="{{ $content[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Rtp</span>
                    <input type="text" id="rtp" name="rtp[]" value="{{ $rtp[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Vesion APK</span>
                    <input type="text" id="version_apk" name="version_apk[]" value="{{ $version_apk[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">PWA</span>
                    <input type="text" id="pwa" name="pwa[]" value="{{ $pwa[$index] }}"
                        {{ $disabled }}>
                </div>

            </div>
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Settingsubmit">Submit</button>
            <a href="#" id="Settingcancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#settingForm').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/apk/setting/update",
                method: "POST",
                data: formData,
                processData: false, // Menonaktifkan pengolahan data otomatis
                contentType: false, // Menonaktifkan tipe konten otomatis
                success: function(result) {
                    if (result.errors) {
                        $('.alert-danger').html('');

                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        $('.alert-danger').hide();

                        // Tampilkan SweetAlert untuk sukses
                        Swal.fire({
                            icon: 'success',
                            title: 'Settingikasi berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            // Lakukan perubahan halaman atau tindakan lainnya setelah setting berhasil dikirim
                            $('.aplay_code').load('/apk/setting', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/apk/setting');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim setting.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#Settingcancel').on('click', '#Settingcancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/apk/setting', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/setting');
            });
        });
    });
</script>
