<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Berita</span>
                <input type="text" id="nama_berita" name="nama_berita" placeholder="Masukkan Nama Berita" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Deskripsi</span>
                <textarea name="desk_berita" id="desk_berita" cols="30" rows="3" placeholder="Masukkan Deskripsi" required></textarea>
            </div>

            <div class="list_form">
                <span class="sec_label">Tanggal Post Berita</span>
                <input type="datetime-local" id="tgl_berita" name="tgl_berita" value="{{ date('Y-m-d H:i') }}"
                    placeholder="{{ date('Y-m-d H:i') }}" required>
            </div>
            <div class="list_form">
                <span class="sec_label">News Whatsapp</span>
                <input type="text" id="news_wa" name="news_wa" placeholder="Masukkan Link News Whatsapp" required>
            </div>
            <div class="list_form">
                <span class="sec_label">News Twitter</span>
                <input type="text" id="news_twit" name="news_twit" placeholder="Masukkan Link News Twitter" required>
            </div>
            <div class="list_form">
                <span class="sec_label">News Youtube</span>
                <input type="text" id="news_youtube" name="news_youtube" placeholder="Masukkan Link News Youtube"
                    required>
            </div>
            <div class="list_form">
                <span class="sec_label">News Facebook</span>
                <input type="text" id="news_facebook" name="news_facebook" placeholder="Masukkan Link News Facebook"
                    required>
            </div>
            <div class="list_form">
                <span class="sec_label">News Instagram</span>
                <input type="text" id="news_instagram" name="news_instagram"
                    placeholder="Masukkan Link News Instagram" required>
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

            // Mengambil token CSRF dari meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Menambahkan token CSRF dalam data formData
            formData.append('_token', csrfToken);

            $.ajax({
                url: "/web/hadiahbb/store",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
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
                            $('.aplay_code').load('/web/hadiahbb', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/hadiahbb');
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
            $('.aplay_code').load('/web/hadiahbb', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/hadiahbb');
            });
        });

    });
</script>
