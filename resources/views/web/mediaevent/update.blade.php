<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->nama_event }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Event</span>
                    <input type="hidden" id="id" name="id[]" value={{ $item->id }}>
                    <input type="text" id="nama_event" name="nama_event[]" placeholder="Masukkan Nama Event"
                        {{ $disabled }} value="{{ $item->nama_event }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">Banner Event</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="gambar_event" name="gambar_event[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Durasi Event</span>
                    <input type="text" id="durasi_event" name="durasi_event[]" required
                        placeholder="Masukkan Nama Event" {{ $disabled }} value="{{ $item->durasi_event }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi Event</span>
                    <textarea name="desk_event[]" id="desk_event" cols="30" rows="3" placeholder="Masukkan Deskripsi Event"
                        required="" {{ $disabled }}>{{ $item->durasi_event }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Tanggal Postingan</span>
                    <input type="datetime-local" id="tgl_event" name="tgl_event[]"
                        value="{{ date('Y-m-d H:i', strtotime($item->tgl_event)) }}"
                        placeholder="{{ date('Y-m-d H:i') }}" required="" {{ $disabled }}>
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
                url: "/web/mediaevent/update",
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
                            $('.aplay_code').load('/web/mediaevent', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediaevent');
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
            $('.aplay_code').load('/web/mediaevent', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediaevent');
            });
        });
    });
</script>
