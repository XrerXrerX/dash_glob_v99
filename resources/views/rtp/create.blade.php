<div class="sec_box hgi-100">
    <form method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Game</span>
                <input type="text" id="nama" name="nama">
                <input type="hidden" name="Authorization" value="youk1llmyfvcking3x">
                <input type="hidden" id="divisi" name="divisi" value={{ $divisi }}>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar Game Slot</span>
                <div class="pilihan_gambar">
                    <input type="file" id="gambar" name="gambar">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">HOT GAMES</span>
                <div class="sec_togle">
                    <input type="checkbox" id="priority" name="priority" value="on">
                    <label for="priority" class="sec_switch"></label>
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

        $('#form').submit(function(event) {
            event.preventDefault();

            // Mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "https://www.rtpl21group.com/api/goksuy0k/ko01ls91kj9sjjakf9",
                method: "POST",
                data: formData,
                processData: false, // Menonaktifkan pengolahan data otomatis
                contentType: false, // Menonaktifkan tipe konten otomatis
                success: function(result) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Contactikasi berhasil dikirim!',
                        showConfirmButton: false,
                        timer: 1500
                    }).then(function() {
                        // Lakukan perubahan halaman atau tindakan lainnya setelah contact berhasil dikirim
                        $('.aplay_code').load('/rtp/{{ $divisi }}',
                            function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/rtp/{{ $divisi }}');
                            });
                    });
                },
                error: function(xhr, status, error) {
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
            $('.aplay_code').load('/rtp/{{ $divisi }}', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/rtp/{{ $divisi }}');
            });
        });
    });
</script>
