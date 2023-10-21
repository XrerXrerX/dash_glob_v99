<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Pasaran</span>
                <input type="text" id="pasaran" name="pasaran">
            </div>
            <div class="list_form">
                <span class="sec_label">Logo Pasaran</span>
                <div class="pilihan_gambar">
                    <input type="file" id="logo" name="logo">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Jam Tutup</span>
                <input type="time" id="jamtutup" name="jamtutup">
            </div>
            <div class="list_form">
                <span class="sec_label">Jam Result</span>
                <input type="time" id="jamresult" name="jamresult">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Resmi</span>
                <input type="input" id="link" name="link">
            </div>
            <div class="list_form">
                <span class="sec_label">Link Web Rekomendasi</span>
                <input type="input" id="webrekomendasi" name="webrekomendasi">
            </div>

            <div class="list_form">
                <span class="sec_label">Link Prediksi</span>
                <input type="input" id="prediksi" name="prediksi">
            </div>
            <div class="list_form">
                <span class="sec_label">Switch</span>
                <div class="sec_togle">
                    <input type="checkbox" id="switch" name="switch" value="on">
                    <label for="switch" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Hari Libur</span>
                <select class="js-example-basic-multiple" name="harilibur[]" multiple="multiple">
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Senin</span>
                <div class="sec_togle">
                    <input type="checkbox" id="senin" name="senin" value="on">
                    <label for="senin" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Selasa</span>
                <div class="sec_togle">
                    <input type="checkbox" id="selasa" name="selasa" value="on">
                    <label for="selasa" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Rabu</span>
                <div class="sec_togle">
                    <input type="checkbox" id="rabu" name="rabu" value="on">
                    <label for="rabu" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Kamis</span>
                <div class="sec_togle">
                    <input type="checkbox" id="kamis" name="kamis" value="on">
                    <label for="kamis" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Jumat</span>
                <div class="sec_togle">
                    <input type="checkbox" id="jumat" name="jumat" value="on">
                    <label for="jumat" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Sabtu</span>
                <div class="sec_togle">
                    <input type="checkbox" id="sabtu" name="sabtu" value="on">
                    <label for="sabtu" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Minggu</span>
                <div class="sec_togle">
                    <input type="checkbox" id="minggu" name="minggu" value="on">
                    <label for="minggu" class="sec_switch"></label>
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
                url: "/web/mediaslider/store",
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
                            $('.aplay_code').load('/web/mediaslider', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediaslider');
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
            $('.aplay_code').load('/web/mediaslider', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediaslider');
            });
        });

    });
</script>
