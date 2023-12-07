<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $title }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Judul</span>
                    <input type="hidden" id="id" name="id[]" value={{ $item->id }}>
                    <input type="text" id="panduan_judul" name="panduan_judul[]" required
                        placeholder="Masukkan Panduan Judul" value="{{ $item->panduan_judul }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Panduan Gambar</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="panduan_gambar" name="panduan_gambar[{{ $index }}]"
                            {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Video</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="p1080_panduan" name="p1080_panduan[{{ $index }}]"
                            {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi Panduan</span>
                    <input type="text" id="panduan_desk" name="panduan_desk[]" required
                        placeholder="Masukkan Panduan Deskripsi" value="{{ $item->panduan_desk }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Tanggal Post Kontent</span>
                    <input type="datetime-local" id="panduan_tgl" name="panduan_tgl[]"
                        value="{{ date('Y-m-d H:i', strtotime($item->panduan_tgl)) }}"
                        placeholder="{{ date('Y-m-d H:i') }}" required {{ $disabled }}>
                </div>

            </div>
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit" {{ $disabled }}>Submit</button>
            <a href="#" onclick="handleButtonCancelClick(this.id)" id="cancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#form').submit(function(event) {
            event.preventDefault();
            var $submitButton = $('#Contactsubmit');
            $submitButton.prop('disabled', true);

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
            $('input[type="checkbox"]', this).each(function() {
                var isChecked = $(this).is(':checked') ? 1 : 0;
                formData.append($(this).attr('name'), isChecked);
            });

            $.ajax({
                url: "/web/mediapanduan/update",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
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
            $('.aplay_code').load('/web/mediapanduan', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediapanduan');
            });
        });
    });
</script>
