<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->website }}</h3>
                    <span>Edit Promosi {{ $title }}</span>
                    <input type="hidden" id="id" name="id[]" value="{{ $item->id }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Judul Promo</span>
                    <input type="text" id="judul_promo" name="judul_promo[]" value="{{ $item->judul_promo }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Promo</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="banner_promo" name="banner_promo[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Start Promo</span>
                    <input type="date" id="start_promo" name="start_promo[]" value="{{ $item->start_promo }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Close Promo</span>
                    <input type="date" id="close_promo" name="close_promo[]" value="{{ $item->close_promo }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Togel</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="tipe_togel_{{ $item->id }}" name="tipe_togel[]"
                            {{ $item->tipe_togel == '1' ? 'checked' : '' }} {{ $disabled }}>
                        <label for="tipe_togel_{{ $item->id }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slot</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="tipe_slot_{{ $item->id }}" name="tipe_slot[]"
                            {{ $item->tipe_slot == '1' ? 'checked' : '' }} {{ $disabled }}>
                        <label for="tipe_slot_{{ $item->id }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slot</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="tipe_livegames_{{ $item->id }}" name="tipe_livegames[]"
                            {{ $item->tipe_livegames == '1' ? 'checked' : '' }} {{ $disabled }}>
                        <label for="tipe_livegames_{{ $item->id }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slot</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="tipe_soirtgames_{{ $item->id }}" name="tipe_soirtgames[]"
                            {{ $item->tipe_soirtgames == '1' ? 'checked' : '' }} {{ $disabled }}>
                        <label for="tipe_soirtgames_{{ $item->id }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slot</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="tipe_fishing_{{ $item->id }}" name="tipe_fishing[]"
                            {{ $item->tipe_fishing == '1' ? 'checked' : '' }} {{ $disabled }}>
                        <label for="tipe_fishing_{{ $item->id }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi Singkat</span>
                    <textarea id="desk_singkat" name="desk_singkat[]" rows="6" {{ $disabled }}>{{ $item->desk_singkat }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi Lengkap</span>
                    <textarea id="desk_lengkap" name="desk_lengkap[]" rows="6" {{ $disabled }}>{{ $item->desk_lengkap }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Web Rekom</span>
                    <input type="text" id="link_web_rekom" name="link_web_rekom[]"
                        value="{{ $item->link_web_rekom }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Urutan Promosi</span>
                    <select id="urutan_promo" name="urutan_promo[]" {{ $disabled }}>
                        <option value="0" {{ $item->urutan_promo == '0' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $item->urutan_promo == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $item->urutan_promo == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ $item->urutan_promo == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ $item->urutan_promo == '5' ? 'selected' : '' }}>5</option>
                    </select>
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
                url: "/web/promosiofficial/update",
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
