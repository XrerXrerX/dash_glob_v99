<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="contactForm">
        @csrf
        @foreach ($namabo as $index => $nbo)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $nbo }}</h3>
                    <span>Edit Contact</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Telegram</span>
                    <input type="text" id="telegram" name="telegram[]" value="{{ $telegram[$index] }}"
                        {{ $disabled }}>
                    <input type="hidden" name="namabo[]" value="{{ $nbo }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">Whatsapp</span>
                    <input type="text" id="whatsapp" name="whatsapp[]" value="{{ $whatsapp[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Line</span>
                    <input type="text" id="line" name="line[]" value="{{ $line[$index] }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Livechat</span>
                    <input type="text" id="livechat" name="livechat[]" value="{{ $livechat[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Facebook</span>
                    <input type="text" id="facebook" name="facebook[]" value="{{ $facebook[$index] }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Penilaian</span>
                    <input type="text" id="penilaian" name="penilaian[]" value="{{ $penilaian[$index] }}" $disabled>
                </div>
            </div>
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
            <a href="#" id="Contactcancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#contactForm').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/apk/contact/update",
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
                            title: 'Contactikasi berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            // Lakukan perubahan halaman atau tindakan lainnya setelah contact berhasil dikirim
                            $('.aplay_code').load('/apk/contact', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/apk/contact');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim contact.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#Contactcancel').on('click', '#Contactcancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/apk/contact', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/contact');
            });
        });
    });
</script>
