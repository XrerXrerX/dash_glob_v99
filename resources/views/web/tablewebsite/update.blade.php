<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf

        @foreach ($data as $idxs => $dts)
            @foreach ($dts as $index => $d)
                <div class="sec_form">
                    <div class="sec_head_form">
                        <h3>{{ $d['website'] }}</h3>
                        <span>Edit {{ $title }}</span>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Tipe</span>
                        <input type="hidden" name="id[]" id="id" value="{{ $d['id'] }}">
                        <select id="tipe_website" name="tipe_website[]" {{ $disabled }} required>
                            <option value="IDN" {{ $d['tipe_website'] == 'IDN' ? 'selected' : '' }}>IDN</option>
                            <option value="G21" {{ $d['tipe_website'] == 'G21' ? 'selected' : '' }}>G21</option>
                        </select>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Website</span>
                        <input type="text" id="website" name="website[]" value="{{ $d['website'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Facebook</span>
                        <input type="text" id="facebook" name="facebook[]" required placeholder="Masukkan Facebook"
                            {{ $disabled }} value="{{ $d['facebook'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Whatsapp</span>
                        <input type="text" id="whatsapp" name="whatsapp[]" required placeholder="Masukkan Whatsapp"
                            {{ $disabled }} value="{{ $d['whatsapp'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Telegram</span>
                        <input type="text" id="telegram" name="telegram[]" required placeholder="Masukkan Telegram"
                            {{ $disabled }} value="{{ $d['telegram'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Livechat</span>
                        <input type="text" id="livechat" name="livechat[]" required placeholder="Masukkan Livechat"
                            {{ $disabled }} value="{{ $d['livechat'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Line</span>
                        <input type="text" id="line" name="line[]" required placeholder="Masukkan Line"
                            {{ $disabled }} value="{{ $d['line'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Instagram</span>
                        <input type="text" id="instagram" name="instagram[]" required
                            placeholder="Masukkan Instagram" {{ $disabled }} value="{{ $d['instagram'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Youtube</span>
                        <input type="text" id="youtube" name="youtube[]" required placeholder="Masukkan Youtube"
                            {{ $disabled }} value="{{ $d['youtube'] }}">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Banner Utama</span>
                        <div class="pilihan_gambar">
                            <input type="file" id="gambar" name="gambar[]" {{ $disabled }}>
                            <input type="hidden" id="oldgambar" name="oldgambar[]" value={{ $d['gambar'] }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Logo</span>
                        <div class="pilihan_gambar">
                            <input type="file" id="img" name="img[]" {{ $disabled }}>
                            <input type="hidden" id="oldimg" name="oldimg[]" value={{ $d['img'] }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Banner Promo Togel</span>
                        <div class="pilihan_gambar">
                            <input type="file" id="promotogel" name="promotogel[]" {{ $disabled }}>
                            <input type="hidden" id="oldpromotogel" name="oldpromotogel[]"
                                value={{ $d['promotogel'] }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Banner Promo Togel</span>
                        <div class="pilihan_gambar">
                            <input type="file" id="promoslot" name="promoslot[]" {{ $disabled }}>
                            <input type="hidden" id="oldpromoslot" name="oldpromoslot[]"
                                value={{ $d['promoslot'] }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Deskripsi</span>
                        <textarea name="deskripsi[]" id="deskripsi" rows="4" cols="40" {{ $disabled }} required>{{ $d['deskripsi'] }}</textarea>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Pasaran</span>
                        <input type="text" id="pasaran" name="pasaran[]" value="{{ $d['pasaran'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Deposit</span>
                        <input type="number" id="deposit" name="deposit[]" value="{{ $d['deposit'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Withdraw</span>
                        <input type="number" id="withdraw" name="withdraw[]" value="{{ $d['withdraw'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Promo</span>
                        <input type="text" id="promourl" name="promourl[]" value="{{ $d['promourl'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Bukti JP</span>
                        <input type="text" id="buktijp" name="buktijp[]" value="{{ $d['buktijp'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Tombol</span>
                        <input type="text" id="linkbutton" name="linkbutton[]" value="{{ $d['linkbutton'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Apk</span>
                        <input type="text" id="linkapk" name="linkapk[]" value="{{ $d['linkapk'] }}"
                            {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 1</span>
                        <input type="text" id="linkalternatif1" name="linkalternatif1[]"
                            value="{{ $d['linkalternatif1'] }}" {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 2</span>
                        <input type="text" id="linkalternatif2" name="linkalternatif2[]"
                            value="{{ $d['linkalternatif2'] }}" {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 3</span>
                        <input type="text" id="linkalternatif3" name="linkalternatif3[]"
                            value="{{ $d['linkalternatif3'] }}" {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 4</span>
                        <input type="text" id="linkalternatif4" name="linkalternatif4[]"
                            value="{{ $d['linkalternatif4'] }}" {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 5</span>
                        <input type="text" id="linkalternatif5" name="linkalternatif5[]"
                            value="{{ $d['linkalternatif5'] }}" {{ $disabled }} required>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Calonical</span>
                        <input type="text" id="url_canolical" name="url_canolical[]"
                            value="{{ $d['url_canolical'] }}" {{ $disabled }} required>
                    </div>
                </div>
            @endforeach
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit"
                {{ $disabled }}>Submit</button>
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
            console.log(formData);
            $.ajax({
                url: "/web/tablewebsite/update",
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


<a href="#" onclick="handleButtonAddClick(this.id)" id="add-medialivestream">
