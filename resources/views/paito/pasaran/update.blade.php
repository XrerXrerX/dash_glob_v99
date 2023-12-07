<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->pasaran_nama }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Pasaran Nama</span>
                    <input type="text" id="pasaran_nama" name="pasaran_nama[]" value="{{ $item->pasaran_nama }}"
                        {{ $disabled }}>
                    <input type="hidden" name="id[]" value="{{ $item->id }}">
                </div>

                <div class="list_form">
                    <span class="sec_label">Pasaran Text</span>
                    <input type="text" id="pasaran_text" name="pasaran_text[]" value="{{ $item->pasaran_text }}"
                        {{ $disabled }}>
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
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "/paitoback/pasaran/update",
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
                            $('.aplay_code').load('/paitoback/pasaran', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/paitoback/pasaran');
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
            $('.aplay_code').load('/paitoback/pasaran', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/paitoback/pasaran');
            });
        });
    });
</script>
