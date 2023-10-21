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
                <select id="website" name="website">
                    <option value="arwanatoto">arwanatoto</option>
                    <option value="jeeptoto">jeeptoto</option>
                    <option value="tstoto">tstoto</option>
                    <option value="doyantoto">doyantoto</option>
                    <option value="arta4d">arta4d</option>
                    <option value="neon4d">neon4d</option>
                    <option value="zara4d">zara4d</option>
                    <option value="roma4d">roma4d</option>
                    <option value="nero4d">nero4d</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Info</span>
                <textarea name="info" id="info" cols="30" rows="3" placeholder="Masukkan Info"></textarea>
            </div>
            <div class="list_form">
                <span class="sec_label">Switch Active</span>
                <div class="sec_togle">
                    <input type="checkbox" id="switch" name="switch" checked>
                    <label for="switch" class="sec_switch"></label>
                </div>
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
                url: "/mobilenotice/store",
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
                            $('.aplay_code').load('/mobilenotice',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/mobilenotice');
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
            $('.aplay_code').load('/mobilenotice', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/mobilenotice');
            });
        });

    });
</script>
