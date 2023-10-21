<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->strm_nama }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Streamer</span>
                    <input type="hidden" value={{ $item->id }} id="id" name="id[]">
                    <input type="text" id="strm_nama" name="strm_nama[]" required
                        placeholder="Masukkan Nama Streamer" value={{ $item->strm_nama }} {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Foto Streamer</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="strm_foto" name="strm_foto[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Youtube</span>
                    <input type="text" id="strm_youtube" name="strm_youtube[]" required
                        placeholder="Masukkan Link Youtube" value={{ $item->strm_youtube }} {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Facebook</span>
                    <input type="text" id="strm_facebook" name="strm_facebook[]" required
                        placeholder="Masukkan Link Facebook" value={{ $item->strm_facebook }} {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Instagram</span>
                    <input type="text" id="strm_instagram" name="strm_instagram[]" required
                        placeholder="Masukkan Link Instagram" value={{ $item->strm_instagram }} {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Tiktok</span>
                    <input type="text" id="strm_tiktok" name="strm_tiktok[]" required
                        placeholder="Masukkan Link Tiktok" value={{ $item->strm_tiktok }} {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Promo</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="bannerup" name="bannerup[]" value={{ $item->bannerup }}
                            {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Web Rekomendasi</span>
                    <input type="text" id="webrekomen" name="webrekomen[]" required
                        placeholder="Masukkan Link Web Rekomendasi" required value={{ $item->webrekomen }}
                        {{ $disabled }}>
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

            var formData = new FormData(this);
            $('input[type="checkbox"]', this).each(function() {
                var isChecked = $(this).is(':checked') ? 1 : 0;
                formData.append($(this).attr('name'), isChecked);
            });

            $.ajax({
                url: "/web/mediastream/update",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
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
                            $('.aplay_code').load('/web/mediastream', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediastream');
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
            $('.aplay_code').load('/web/mediastream', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediastream');
            });
        });
    });
</script>
