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
                <select id="nama_live" name="nama_live">
                    <option class="sec_selected" value="" selected="" place="">Pilih Streamer</option>
                    @foreach ($namastreamer as $streamer)
                        <option value="{{ $streamer }}">{{ $streamer }}</option>
                    @endforeach
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Link Content</span>
                <input type="text" id="live_url" name="live_url"
                    placeholder="Masukkan Link Content Youtube { Contoh : ryQkOnbKqY }" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Judul Content</span>
                <input type="text" id="desk_live" name="desk_live" placeholder="Masukkan Judul Content" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Tanggal Post Kontent</span>
                <input type="datetime-local" id="tgl_live" name="tgl_live" value="{{ date('Y-m-d H:i') }}"
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

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            // Mengambil token CSRF dari meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Menambahkan token CSRF dalam data formData
            formData.append('_token', csrfToken);

            $.ajax({
                url: "/web/medialivestream/store",
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
                            $('.aplay_code').load('/web/medialivestream',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/web/medialivestream');
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
            $('.aplay_code').load('/web/medialivestream', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/medialivestream');
            });
        });

    });
</script>
