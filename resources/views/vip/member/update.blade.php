<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <input type="hidden" id="bo" name="bo[]" value="{{ $bo }}">
        @foreach ($data as $index => $dt)
            <input type="hidden" id="id" name="id[]" value="{{ $id[$index] }}">
            @foreach ($dt as $idx => $d)
                <div class="sec_form">
                    <div class="sec_head_form">
                        <h3>{{ $d['userid'] }}</h3>
                        <span>Edit Data VIP Member {{ $bo }}</span>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">User Id</span>
                        <input type="text" id="userid" name="userid[]" placeholder="User Id"
                            value="{{ $d['userid'] }}" required {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Status</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="switch_active_{{ $index }}_{{ $idx }}"
                                name="switch_active[{{ $index }}][{{ $idx }}]"
                                {{ $d['switch_active'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="switch_active_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>

                </div>
            @endforeach
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

            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $('input[type="checkbox"]', this).each(function() {
                var isChecked = $(this).is(':checked') ? 1 : 0;
                formData.append($(this).attr('name'), isChecked);
            });
            $.ajax({
                url: "/vip/member/{{ $bo }}/update",
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
                            $('.aplay_code').load(
                                '/vip/member/{{ $bo }}',
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/vip/member/{{ $bo }}');
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
            $('.aplay_code').load('/vip/member/{{ $bo }}', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/vip/member/{{ $bo }}');
            });
        });
    });
</script>
