<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->website }}</h3>
                    <span>Edit Promosi {{ $title }}</span>
                    <input type="hidden" id="id[]" name="id[]" value="{{ $item->id }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Website</span>
                    <input type="text" id="website[]" name="website[]" value="{{ $item->website }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Website Url</span>
                    <input type="text" id="website_url[]" name="website_url[]" value="{{ $item->website_url }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Promosi</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="image_url[]" name="image_url[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi</span>
                    <textarea id="deskripsi[]" name="deskripsi[]" rows="6" {{ $disabled }}>{{ $item->deskripsi }}</textarea>
                </div>

            </div>
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit">Submit</button>
            <a href="#" onclick="handleButtonCancelClick(this.id)" id="cancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#form').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/web/promosi/update",
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
                            $('.aplay_code').load('/web/promosi', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/promosi');
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
            $('.aplay_code').load('/web/promosi', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/promosi');
            });
        });
    });
</script>
