<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf

        @foreach ($data as $indexs => $items)
            @foreach ($items as $index => $item)
                <div class="sec_form">
                    <div class="sec_head_form">
                        <h3>{{ $item['link_pga'] }}</h3>
                        <span>Edit {{ $title }}</span>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Pasaran Nama</span>
                        <input type="text" id="link_pga" name="link_pga[]" value="{{ $item['link_pga'] }}"
                            {{ $disabled }}>
                        <input type="hidden" name="id[]" value="{{ $item['id'] }}">
                    </div>

                    <div class="list_form">
                        <span class="sec_label">Toggle</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="switch_active_{{ $indexs }}" name="switch_active[]"
                                {{ $item['switch_active'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="switch_active_{{ $indexs }}" class="sec_switch"></label>
                        </div>
                    </div>
                </div>
            @endforeach
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

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $('input[type="checkbox"]', this).each(function() {
                var isChecked = $(this).is(':checked') ? 1 : 0;
                formData.append($(this).attr('name'), isChecked);
            });

            $.ajax({
                url: "/link/pga/{{ $bo }}/update",
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
                            $('.aplay_code').load('/link/pga/{{ $bo }}',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/link/pga/{{ $bo }}');
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
            $('.aplay_code').load('/link/pga/{{ $bo }}', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/link/pga/{{ $bo }}');
            });
        });
    });
</script>
