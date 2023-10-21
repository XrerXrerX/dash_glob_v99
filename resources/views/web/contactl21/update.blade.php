<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $title }}</h3>
                    <span>Tambah {{ $title }}</span>
                    <input type="hidden" name="id[]" value="{{ $item['id'] }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Live Chat</span>
                    <input type="text" id="livechat" name="livechat[]" value="{{ $item['livechat'] }}"
                        {{ $disabled }} required placeholder="Masukkan Live Chat">
                </div>
                <div class="list_form">
                    <span class="sec_label">Whatsapp</span>
                    <input type="text" id="whatsapp" name="whatsapp[]" value="{{ $item['whatsapp'] }}"
                        {{ $disabled }} required placeholder="Masukkan Whatsapp">
                </div>
                <div class="list_form">
                    <span class="sec_label">Facebook</span>
                    <input type="text" id="facebook" name="facebook[]" value="{{ $item['facebook'] }}"
                        {{ $disabled }} required placeholder="Masukkan Facebook">
                </div>
                <div class="list_form">
                    <span class="sec_label">Telegram</span>
                    <input type="text" id="telegram" name="telegram[]" value="{{ $item['telegram'] }}"
                        {{ $disabled }} required placeholder="Masukkan Telegram">
                </div>
                <div class="list_form">
                    <span class="sec_label">Line</span>
                    <input type="text" id="line" name="line[]" value="{{ $item['line'] }}"
                        {{ $disabled }} required placeholder="Masukkan Line">
                </div>
                <div class="list_form">
                    <span class="sec_label">Twitter</span>
                    <input type="text" id="twitter" name="twitter[]" value="{{ $item['twitter'] }}"
                        {{ $disabled }} required placeholder="Masukkan Twitter">
                </div>
                <div class="list_form">
                    <span class="sec_label">Instagram</span>
                    <input type="text" id="instagram" name="instagram[]" value="{{ $item['instagram'] }}"
                        {{ $disabled }} required placeholder="Masukkan Instagram">
                </div>
                <div class="list_form">
                    <span class="sec_label">Youtube</span>
                    <input type="text" id="youtube" name="youtube[]" value="{{ $item['youtube'] }}"
                        {{ $disabled }} required placeholder="Masukkan Youtube">
                </div>
                <div class="list_form">
                    <span class="sec_label">Email</span>
                    <input type="text" id="linkemail" name="linkemail[]" value="{{ $item['linkemail'] }}"
                        {{ $disabled }} required placeholder="Masukkan Email">
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Web Rekomendasi</span>
                    <input type="text" id="webrekomen" name="webrekomen[]" value="{{ $item['webrekomen'] }}"
                        {{ $disabled }} required placeholder="Masukkan Link Web Rekomendasi">
                </div>
                <div class="list_form">
                    <span class="sec_label">Running Text</span>
                    <textarea name="runningtext[]" id="runningtext" cols="30" rows="5" {{ $disabled }}>{{ $item['webrekomen'] }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Promo Togel</span>
                    <input type="text" id="namapromo_togel" name="namapromo_togel[]"
                        value="{{ $item['namapromo_togel'] }}" {{ $disabled }} required
                        placeholder="Masukkan Link Web Rekomendasi">
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Promo Togel</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="promotogel" name="promotogel[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Keterangan Promo Togel</span>
                    <textarea name="ket_promotogel[]" id="ket_promotogel" cols="30" rows="5" {{ $disabled }}>{{ $item['ket_promotogel'] }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Detail Promo Togel</span>
                    <textarea name="detailpromo_togel[]" id="detailpromo_togel" cols="30" rows="5" {{ $disabled }}>{{ $item['detailpromo_togel'] }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Promo Slot</span>
                    <input type="text" id="namapromo_slot" name="namapromo_slot[]"
                        value="{{ $item['namapromo_slot'] }}" {{ $disabled }} required
                        placeholder="Masukkan Link Web Rekomendasi">
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Promo Slot</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="promoslot" name="promoslot[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Keterangan Promo Slot</span>
                    <textarea name="ket_promoslot[]" id="ket_promoslot" cols="30" rows="5" {{ $disabled }}>{{ $item['ket_promoslot'] }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Detail Promo Slot</span>
                    <textarea name="detailpromo_slot[]" id="detailpromo_slot" cols="30" rows="5">{{ $item['detailpromo_slot'] }}</textarea>
                </div>

            </div>
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

            var formData = new FormData(this);
            $('input[type="checkbox"]', this).each(function() {
                var isChecked = $(this).is(':checked') ? 1 : 0;
                formData.append($(this).attr('name'), isChecked);
            });

            $.ajax({
                url: "/web/contactl21/update",
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
                            $('.aplay_code').load('/web/contactl21', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/contactl21');
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
            $('.aplay_code').load('/web/contactl21', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/contactl21');
            });
        });
    });
</script>
