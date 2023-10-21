<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $title }}</h3>
                    <span>Edit {{ $title }}</span>
                    <input type="hidden" name="id[]" value="{{ $item->id }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slide News</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="car_news" name="car_news[]" {{ $disabled }}>
                        <input type="hidden" id="oldcar_news" name="oldcar_news" value="{{ $item->car_news }}">
                        <button type="button" class="img_gallery">Pilih Slide News</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slide Event</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="car_event" name="car_event[]" {{ $disabled }}>
                        <input type="hidden" id="oldcar_event" name="oldcar_event" value="{{ $item->car_event }}">
                        <button type="button" class="img_gallery">Pilih Slide Event</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slide Stream</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="car_stream" name="car_stream[]" {{ $disabled }}>
                        <input type="hidden" id="oldcar_stream" name="oldcar_stream" value="{{ $item->car_stream }}">
                        <button type="button" class="img_gallery">Pilih Slide Stream</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slide Panduan</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="car_panduan" name="car_panduan[]" {{ $disabled }}>
                        <input type="hidden" id="oldcar_panduan" name="oldcar_panduan"
                            value="{{ $item->car_panduan }}">
                        <button type="button" class="img_gallery">Pilih Slide Panduan</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Slide Gallery</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="car_gallery" name="car_gallery[]" {{ $disabled }}>
                        <input type="hidden" id="oldcar_gallery" name="oldcar_gallery"
                            value="{{ $item->car_gallery }}">
                        <button type="button" class="img_gallery">Pilih Slide Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Card News</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="card_news" name="card_news[]" {{ $disabled }}>
                        <input type="hidden" id="oldcard_news" name="oldcard_news" value="{{ $item->card_news }}">
                        <button type="button" class="img_gallery">Pilih Card News</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Card Event</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="card_event" name="card_event[]" {{ $disabled }}>
                        <input type="hidden" id="oldcard_event" name="oldcard_event" value="{{ $item->card_event }}">
                        <button type="button" class="img_gallery">Pilih Card Event</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Card stream</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="card_stream" name="card_stream[]" {{ $disabled }}>
                        <input type="hidden" id="oldcard_stream" name="oldcard_stream"
                            value="{{ $item->card_stream }}">
                        <button type="button" class="img_gallery">Pilih Card stream</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Card Panduan</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="card_panduan" name="card_panduan[]" {{ $disabled }}>
                        <input type="hidden" id="oldcard_panduan" name="oldcard_panduan"
                            value="{{ $item->card_panduan }}">
                        <button type="button" class="img_gallery">Pilih Card Panduan</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Card Gallery</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="card_gallery" name="card_gallery[]" {{ $disabled }}>
                        <input type="hidden" id="oldcard_gallery" name="oldcard_gallery"
                            value="{{ $item->card_gallery }}">
                        <button type="button" class="img_gallery">Pilih Card Gallery</button>
                    </div>
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
                url: "/web/mediaslider/update",
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
                            $('.aplay_code').load('/web/mediaslider', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/mediaslider');
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
            $('.aplay_code').load('/web/mediaslider', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/mediaslider');
            });
        });
    });
</script>
