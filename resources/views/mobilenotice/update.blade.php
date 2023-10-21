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
                    <select id="website" name="website[]">
                        <option value="arwanatoto" {{ $item['website'] == 'arwanatoto' ? 'selected' : '' }}>arwanatoto
                        </option>
                        <option value="jeeptoto" {{ $item['website'] == 'jeeptoto' ? 'selected' : '' }}>jeeptoto
                        </option>
                        <option value="tstoto" {{ $item['website'] == 'tstoto' ? 'selected' : '' }}>tstoto</option>
                        <option value="doyantoto" {{ $item['website'] == 'doyantoto' ? 'selected' : '' }}>doyantoto
                        </option>
                        <option value="arta4d" {{ $item['website'] == 'arta4d' ? 'selected' : '' }}>arta4d</option>
                        <option value="neon4d" {{ $item['website'] == 'neon4d' ? 'selected' : '' }}>neon4d</option>
                        <option value="zara4d" {{ $item['website'] == 'zara4d' ? 'selected' : '' }}>zara4d</option>
                        <option value="roma4d" {{ $item['website'] == 'roma4d' ? 'selected' : '' }}>roma4d</option>
                        <option value="nero4d" {{ $item['website'] == 'nero4d' ? 'selected' : '' }}>nero4d</option>
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Info</span>
                    <textarea name="info[]" id="info" cols="30" rows="3" placeholder="Masukkan Info">{{ $item['info'] }}</textarea>
                </div>
                <div class="list_form">
                    <span class="sec_label">Switch Active</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="switch_{{ $index }}" name="switch[]"
                            {{ $item['switch'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                        <label for="switch_{{ $index }}" class="sec_switch"></label>
                    </div>
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
                url: "/mobilenotice/update",
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
                            $('.aplay_code').load('/mobilenotice', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/mobilenotice');
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
            $('.aplay_code').load('/mobilenotice', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/mobilenotice');
            });
        });
    });
</script>
