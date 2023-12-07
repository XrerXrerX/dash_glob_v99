<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Video</span>
                <input type="text" id="nama_video" name="nama_video" required placeholder="Masukkan Panduan Judul">
            </div>
            <div class="list_form">
                <span class="sec_label">Foto Cover Video</span>
                <div class="pilihan_gambar">
                    <input type="file" id="thumb_video" name="thumb_video" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Video</span>
                <div class="pilihan_gambar">
                    <input type="file" id="p1080_video" name="p1080_video" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>

            <div class="list_form">
                <span class="sec_label">Tanggal Post Kontent</span>
                <input type="datetime-local" id="tgl_video" name="tgl_video" value="{{ date('Y-m-d H:i') }}"
                    placeholder="{{ date('Y-m-d H:i') }}" required>
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
            var $submitButton = $('#Contactsubmit');
            $submitButton.prop('disabled', true); // Menonaktifkan tombol submit

            // Tampilkan loading
            Swal.fire({
                title: 'Uploading...',
                allowOutsideClick: false,
                showCancelButton: false, // Menghilangkan tombol cancel
                showConfirmButton: false, // Menghilangkan tombol OK
                onBeforeOpen: () => {
                    Swal.showLoading();
                }
            });
            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/web/mediagalleryvideo/store",
                method: "POST",
                data: formData,
                processData: false, // Menonaktifkan pengolahan data otomatis
                contentType: false, // Menonaktifkan tipe konten otomatis
                success: function(result) {
                    $submitButton.prop('disabled', false);

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
                            $('.aplay_code').load('/web/mediagalleryvideo',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/web/mediagalleryvideo');
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
            $('.aplay_code').load('/web/mediagalleryvideo', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediagalleryvideo');
            });
        });

    });
</script>
