<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Streamer</span>
                <input type="text" id="strm_nama" name="strm_nama" required placeholder="Masukkan Nama Streamer">
            </div>
            <div class="list_form">
                <span class="sec_label">Foto Streamer</span>
                <div class="pilihan_gambar">
                    <input type="file" id="strm_foto" name="strm_foto" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Link Youtube</span>
                <input type="text" id="strm_youtube" name="strm_youtube" required
                    placeholder="Masukkan Link Youtube">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Facebook</span>
                <input type="text" id="strm_facebook" name="strm_facebook" required
                    placeholder="Masukkan Link Facebook">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Instagram</span>
                <input type="text" id="strm_instagram" name="strm_instagram" required
                    placeholder="Masukkan Link Instagram">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Tiktok</span>
                <input type="text" id="strm_tiktok" name="strm_tiktok" required placeholder="Masukkan Link Tiktok">
            </div>
            <div class="list_form">
                <span class="sec_label">Banner Promo</span>
                <div class="pilihan_gambar">
                    <input type="file" id="bannerup" name="bannerup" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Link Web Rekomendasi</span>
                <input type="text" id="webrekomen" name="webrekomen" required
                    placeholder="Masukkan Link Web Rekomendasi">
            </div>

        </div>
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
            <a href="#" onclick="handleButtonCancelClick(this.id)" id="cancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();

        $('#form').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/web/mediastream/store",
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
                            $('.aplay_code').load('/web/mediastream', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediastream');
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

        $(document).off('click', '#cancel').on('click', '#cancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/web/mediastream', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediastream');
            });
        });

    });
</script>
