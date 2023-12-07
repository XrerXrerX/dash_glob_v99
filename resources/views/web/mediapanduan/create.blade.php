<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Judul</span>
                <input type="text" id="panduan_judul" name="panduan_judul" required
                    placeholder="Masukkan Panduan Judul">
            </div>
            <div class="list_form">
                <span class="sec_label">Panduan Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="panduan_gambar" name="panduan_gambar" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Video</span>
                <div class="pilihan_gambar">
                    <input type="file" id="p1080_panduan" name="p1080_panduan" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Deskripsi Panduan</span>
                <input type="text" id="panduan_desk" name="panduan_desk" required
                    placeholder="Masukkan Panduan Deskripsi">
            </div>
            <div class="list_form">
                <span class="sec_label">Tanggal Post Kontent</span>
                <input type="datetime-local" id="panduan_tgl" name="panduan_tgl" value="{{ date('Y-m-d H:i') }}"
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

            var formData = new FormData(this);

            $.ajax({
                url: "/web/mediapanduan/store",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    // Enable kembali tombol submit
                    $submitButton.prop('disabled', false);

                    if (result.errors) {
                        // Logika untuk menangani error
                    } else {
                        // Logika untuk menangani success
                        Swal.fire({
                            icon: 'success',
                            title: 'Contactikasi berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            $('.aplay_code').load('/web/mediapanduan', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediapanduan');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Enable kembali tombol submit
                    $submitButton.prop('disabled', false);

                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim Data.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#cancel').on('click', '#cancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/web/mediapanduan', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediapanduan');
            });
        });

    });
</script>
