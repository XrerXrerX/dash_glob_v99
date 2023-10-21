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
                    <span class="sec_label">Website</span>
                    <input type="text" id="website" name="website[]" value="{{ $item['website'] }}"
                        {{ $disabled }} required placeholder="Masukkan Website">
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar</span>
                    <input type="text" id="gambar" name="gambar[]" value="{{ $item['gambar'] }}"
                        {{ $disabled }} required placeholder="Masukkan Gambar">
                </div>
                <div class="list_form">
                    <span class="sec_label">Switch Active</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="switch_active_{{ $index }}" name="switch_active[]"
                            {{ $item['switch_active'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                        <label for="switch_active_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Button Switch</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="button_switch_{{ $index }}" name="button_switch[]"
                            {{ $item['button_switch'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                        <label for="button_switch_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link</span>
                    <input type="text" id="link" name="link[]" value="{{ $item['link'] }}"
                        {{ $disabled }} required placeholder="Masukkan Link">
                </div>
                <div class="list_form">
                    <span class="sec_label">Judul</span>
                    <input type="text" id="judul" name="judul[]" value="{{ $item['judul'] }}"
                        {{ $disabled }} required placeholder="Masukkan Judul">
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Tombol</span>
                    <textarea name="deskripsi[]" id="deskripsi" cols="30" rows="1">{{ $item['deskripsi'] }}</textarea>
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


            $.ajax({
                url: "/bannermodal/update",
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
                            $('.aplay_code').load('/bannermodal', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/bannermodal');
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
            $('.aplay_code').load('/bannermodal', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/bannermodal');
            });
        });
    });
</script>
