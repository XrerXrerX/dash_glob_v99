<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Tipe</span>
                <select id="tipe_website" name="tipe_website">
                    <option value="IDN">IDN</option>
                    <option value="G21">G21</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Website</span>
                <input type="text" id="website" name="website" required placeholder="Masukkan Nama Website">
            </div>
            <div class="list_form">
                <span class="sec_label">Facebook</span>
                <input type="text" id="facebook" name="facebook" required placeholder="Masukkan Facebook">
            </div>
            <div class="list_form">
                <span class="sec_label">Whatsapp</span>
                <input type="text" id="whatsapp" name="whatsapp" required placeholder="Masukkan Whatsapp">
            </div>
            <div class="list_form">
                <span class="sec_label">Telegram</span>
                <input type="text" id="telegram" name="telegram" required placeholder="Masukkan Telegram">
            </div>
            <div class="list_form">
                <span class="sec_label">Line</span>
                <input type="text" id="line" name="line" required placeholder="Masukkan Line">
            </div>
            <div class="list_form">
                <span class="sec_label">Livechat</span>
                <input type="text" id="livechat" name="livechat" required placeholder="Masukkan Link Livechat">
            </div>
            <div class="list_form">
                <span class="sec_label">Instagram</span>
                <input type="text" id="instagram" name="instagram" required placeholder="Masukkan Instagram">
            </div>
            <div class="list_form">
                <span class="sec_label">Youtube</span>
                <input type="text" id="youtube" name="youtube" required placeholder="Masukkan Youtube">
            </div>
            <div class="list_form">
                <span class="sec_label">Banner Utama</span>
                <div class="pilihan_gambar">
                    <input type="file" id="gambar" name="gambar" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Logo</span>
                <div class="pilihan_gambar">
                    <input type="file" id="img" name="img" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Banner Promo Togel</span>
                <div class="pilihan_gambar">
                    <input type="file" id="promotogel" name="promotogel" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Banner Promo Togel</span>
                <div class="pilihan_gambar">
                    <input type="file" id="promoslot" name="promoslot" required>
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Deskripsi</span>
                <textarea name="deskripsi" id="deskripsi" rows="4" cols="40" required placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div class="list_form">
                <span class="sec_label">Pasaran</span>
                <input type="text" id="pasaran" name="pasaran" required placeholder="Masukkan Nama Pasaran">
            </div>
            <div class="list_form">
                <span class="sec_label">Deposit</span>
                <input type="number" id="deposit" name="deposit" required placeholder="0">
            </div>
            <div class="list_form">
                <span class="sec_label">Withdraw</span>
                <input type="number" id="withdraw" name="withdraw" required placeholder="0">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Promo</span>
                <input type="text" id="promourl" name="promourl" required placeholder="Masukkan Link Promosi">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Bukti JP</span>
                <input type="text" id="buktijp" name="buktijp" required
                    placeholder="Masukkan Link Bukti Jackpot">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Tombol</span>
                <input type="text" id="linkbutton" name="linkbutton" required placeholder="Masukkan Link Tombol">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Apk</span>
                <input type="text" id="linkapk" name="linkapk" required placeholder="Masukkan Link Aplikasi">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Alternatif 1</span>
                <input type="text" id="linkalternatif1" name="linkalternatif1" required
                    placeholder="Masukkan Link Alternatif 1">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Alternatif 2</span>
                <input type="text" id="linkalternatif2" name="linkalternatif2" required
                    placeholder="Masukkan Link Alternatif 2">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Alternatif 3</span>
                <input type="text" id="linkalternatif3" name="linkalternatif3" required
                    placeholder="Masukkan Link Alternatif 3">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Alternatif 4</span>
                <input type="text" id="linkalternatif4" name="linkalternatif4" required
                    placeholder="Masukkan Link Alternatif 4">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Alternatif 5</span>
                <input type="text" id="linkalternatif5" name="linkalternatif5" required
                    placeholder="Masukkan Link Alternatif 5">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Calonical</span>
                <input type="text" id="url_canolical" name="url_canolical" required
                    placeholder="Masukkan Link Canolical">
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
            console.log(formData);

            $.ajax({
                url: "/web/tablewebsite/store",
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
                            $('.aplay_code').load('/web/tablewebsite', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/tablewebsite');
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
            $('.aplay_code').load('/web/tablewebsite', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/tablewebsite');
            });
        });
    });
</script>
