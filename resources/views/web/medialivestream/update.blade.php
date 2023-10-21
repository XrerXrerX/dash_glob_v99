<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="list_form">
                    <span class="sec_label">Nama Streamer</span>
                    <input type="hidden" id="id" name="id[]" value="{{ $item->id }}">
                    <select id="nama_live" name="nama_live[]" {{ $disabled }}>
                        <option class="sec_selected" value="{{ $item->nama_live }}">Pilih
                            Streamer
                        </option>
                        @foreach ($namastreamer as $streamer)
                            <option value="{{ $streamer }}" {{ $streamer == $item->nama_live ? 'selected' : '' }}>
                                {{ $streamer }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Content</span>
                    <input type="text" id="live_url" name="live_url[]"
                        placeholder="Masukkan Link Content Youtube { Contoh : ryQkOnbKqY }" required
                        value="{{ $item->live_url }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Judul Content</span>
                    <input type="text" id="desk_live" name="desk_live[]" placeholder="Masukkan Judul Content"
                        required value="{{ $item->desk_live }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Tanggal Post Kontent</span>
                    <input type="datetime-local" id="tgl_live" name="tgl_live[]"
                        value="{{ date('Y-m-d H:i', strtotime($item->tgl_live)) }}"
                        placeholder="{{ date('Y-m-d H:i') }}" required>
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
                url: "/web/medialivestream/update",
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
                            $('.aplay_code').load('/web/medialivestream',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/web/medialivestream');
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
            $('.aplay_code').load('/web/medialivestream', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/medialivestream');
            });
        });
    });
</script>
