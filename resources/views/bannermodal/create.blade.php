<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
                <input type="hidden" name="id">
            </div>
            <div class="list_form">
                <span class="sec_label">Website</span>
                <input type="text" id="website" name="website" required placeholder="Masukkan Website">
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <input type="text" id="gambar" name="gambar" required placeholder="Masukkan Gambar">
            </div>
            <div class="list_form">
                <span class="sec_label">Switch Active</span>
                <div class="sec_togle">
                    <input type="checkbox" id="switch_active" name="switch_active">
                    <label for="switch_active" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Button Switch</span>
                <div class="sec_togle">
                    <input type="checkbox" id="button_switch" name="button_switch">
                    <label for="button_switch" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Link</span>
                <input type="text" id="link" name="link" required placeholder="Masukkan Link">
            </div>
            <div class="list_form">
                <span class="sec_label">Judul</span>
                <input type="text" id="judul" name="judul" required placeholder="Masukkan Judul">
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Tombol</span>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" placeholder="Masukkan Nama Tombol" required></textarea>
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
                url: "/bannermodal/store",
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
                            $('.aplay_code').load('/bannermodal',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/bannermodal');
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
            $('.aplay_code').load('/bannermodal', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/bannermodal');
            });
        });

    });
</script>
