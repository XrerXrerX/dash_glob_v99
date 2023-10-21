<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Judul Promosi</span>
                <input type="text" id="judul_promo" name="judul_promo">
            </div>
            <div class="list_form">
                <span class="sec_label">Banner Promo</span>
                <div class="pilihan_gambar">
                    <input type="file" id="banner_promo" name="banner_promo">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Start Promo</span>
                <input type="date" id="start_promo" name="start_promo" value="{{ date('Y-m-d') }}">
            </div>
            <div class="list_form">
                <span class="sec_label">Close Promo</span>
                <input type="date" id="close_promo" name="close_promo" value="{{ date('Y-m-d') }}">
            </div>
            <div class="list_form">
                <span class="sec_label">Togel</span>
                <div class="sec_togle">
                    <input type="checkbox" id="tipe_togel" name="tipe_togel">
                    <label for="tipe_togel" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Slot</span>
                <div class="sec_togle">
                    <input type="checkbox" id="tipe_slot" name="tipe_slot">
                    <label for="tipe_slot" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Casino</span>
                <div class="sec_togle">
                    <input type="checkbox" id="tipe_livegames" name="tipe_livegames">
                    <label for="tipe_livegames" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Sportbook</span>
                <div class="sec_togle">
                    <input type="checkbox" id="tipe_soirtgames" name="tipe_soirtgames">
                    <label for="tipe_soirtgames" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Fishing</span>
                <div class="sec_togle">
                    <input type="checkbox" id="tipe_fishing" name="tipe_fishing">
                    <label for="tipe_fishing" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Deskripsi</span>
                <textarea id="desk_singkat" name="desk_singkat" rows="3"></textarea>
            </div>
            <div class="list_form">
                <span class="sec_label">Deskripsi</span>
                <textarea id="desk_lengkap" name="desk_lengkap" rows="6"></textarea>
            </div>
            <div class="list_form">
                <span class="sec_label">Link Web Rekom</span>
                <input type="text" id="link_web_rekom" name="link_web_rekom">
            </div>
            <div class="list_form">
                <span class="sec_label">Urutan Promosi</span>
                <select id="urutan_promo" name="urutan_promo">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/web/promosiofficial/store",
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
                            $('.aplay_code').load('/web/promosiofficial',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/web/promosiofficial');
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
            $('.aplay_code').load('/web/promosiofficial', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/promosiofficial');
            });
        });
    });
</script>
