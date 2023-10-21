<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->nama_berita }}</h3>
                    <span>Edit {{ $title }}</span>
                    <input type="hidden" name="id[]" value="{{ $item->id }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Berita</span>
                    <input type="text" id="nama_berita" name="nama_berita[]" value="{{ $item->nama_berita }}"
                        {{ $disabled }} required placeholder="Masukkan Nama Berita">
                </div>
                <div class="list_form">
                    <span class="sec_label">Deskripsi</span>
                    <textarea name="desk_berita[]" id="desk_berita" cols="30" rows="3" required placeholder="Masukkan Deskripsi"
                        {{ $disabled }}>{{ $item->desk_berita }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Tanggal Post Berita</span>
                    <input type="datetime-local" id="tgl_berita" name="tgl_berita[]"
                        value="{{ date('Y-m-d H:i', strtotime($item->tgl_berita)) }}"
                        placeholder="{{ date('Y-m-d H:i') }}" required="">
                </div>
                <div class="list_form">
                    <span class="sec_label">News Whatsapp</span>
                    <input type="text" id="news_wa" name="news_wa[]" value="{{ $item->news_wa }}"
                        {{ $disabled }} required placeholder="Masukkan News Whatsapp">
                </div>
                <div class="list_form">
                    <span class="sec_label">News Twitter</span>
                    <input type="text" id="news_twit" name="news_twit[]" value="{{ $item->news_twit }}"
                        {{ $disabled }} required placeholder="Masukkan News Twitter">
                </div>
                <div class="list_form">
                    <span class="sec_label">News Youtube</span>
                    <input type="text" id="news_youtube" name="news_youtube[]" value="{{ $item->news_youtube }}"
                        {{ $disabled }} required placeholder="Masukkan News Youtube">
                </div>
                <div class="list_form">
                    <span class="sec_label">News Facebook</span>
                    <input type="text" id="news_facebook" name="news_facebook[]" value="{{ $item->news_facebook }}"
                        {{ $disabled }} required placeholder="Masukkan News Facebook">
                </div>
                <div class="list_form">
                    <span class="sec_label">News Instagram</span>
                    <input type="text" id="news_instagram" name="news_instagram[]"
                        value="{{ $item->news_instagram }}" {{ $disabled }} required
                        placeholder="Masukkan News Instagram">
                </div>

            </div>

            <script>
                $(document).ready(function() {
                    var valuesToSet = "{{ $item->harilibur }}";
                    var arrayValues = valuesToSet.split(", ");

                    console.log(arrayValues);
                    $('#harilibur_{{ $index }}').val(arrayValues);
                    $('#harilibur_{{ $index }}').select2();
                });
            </script>
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
                url: "/web/medianews/update",
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
                            $('.aplay_code').load('/web/medianews', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/medianews');
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
            $('.aplay_code').load('/web/medianews', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/medianews');
            });
        });
    });
</script>
