<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->pasaran }}</h3>
                    <span>Edit Jadwal Pasaran</span>
                    <input type="hidden" name="id[]" value="{{ $item->id }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Nama Pasaran</span>
                    <input type="text" id="pasaran" name="pasaran[]" value="{{ $item->pasaran }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Logo Pasaran</span>
                    <div class="pilihan_gambar">
                        <input type="file" id="logo" name="logo[]" {{ $disabled }}>
                        <input type="hidden" id="oldlogo" name="oldlogo" value="{{ $item->logo }}">
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Jam Tutup</span>
                    <input type="time" id="jamtutup" name="jamtutup[]" value="{{ $item->jamtutup }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Jam Result</span>
                    <input type="time" id="jamresult" name="jamresult[]" value="{{ $item->jamresult }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Resmi</span>
                    <input type="input" id="link" name="link[]" value="{{ $item->link }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Link Web Rekomendasi</span>
                    <input type="input" id="webrekomendasi" name="webrekomendasi[]"
                        value="{{ $item->webrekomendasi }}" {{ $disabled }}>
                </div>

                <div class="list_form">
                    <span class="sec_label">Link Prediksi</span>
                    <input type="input" id="prediksi" name="prediksi[]" value="{{ $item->prediksi }}"
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Switch</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="switch_{{ $index }}" name="switch[]" value="on"
                            {{ $item->switch == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="switch_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Hari Libur</span>
                    <select class="js-example-basic-multiple" name="harilibur[{{ $index }}][]"
                        id="harilibur_{{ $index }}" multiple="multiple">
                        <option value="Monday">Monday
                        </option>
                        <option value="Tuesday">Tuesday
                        </option>
                        <option value="Wednesday">
                            Wednesday</option>
                        <option value="Thursday">
                            Thursday</option>
                        <option value="Friday">Friday
                        </option>
                        <option value="Saturday">
                            Saturday</option>
                        <option value="Sunday">Sunday
                        </option>
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Senin</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="senin_{{ $index }}" name="senin[]" value="on"
                            {{ $item->senin == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="senin_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Selasa</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="selasa_{{ $index }}" name="selasa[]" value="on"
                            {{ $item->selasa == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="selasa_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Rabu</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="rabu_{{ $index }}" name="rabu[]" value="on"
                            {{ $item->rabu == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="rabu_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Kamis</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="kamis_{{ $index }}" name="kamis[]" value="on"
                            {{ $item->kamis == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="kamis_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Jumat</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="jumat_{{ $index }}" name="jumat[]" value="on"
                            {{ $item->jumat == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="jumat_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Sabtu</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="sabtu_{{ $index }}" name="sabtu[]" value="on"
                            {{ $item->sabtu == 1 ? 'checked' : '' }} {{ $disabled }}>
                        <label for="sabtu_{{ $index }}" class="sec_switch"></label>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Minggu</span>
                    <div class="sec_togle">
                        <input type="checkbox" id="minggu_{{ $index }}" name="minggu[]" value="on"
                            {{ $item->minggu == 1 ? 'checked' : '' }}>{{ $disabled }}
                        <label for="minggu_{{ $index }}" class="sec_switch"></label>
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
                url: "/web/jadwalpools/update",
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
                            $('.aplay_code').load('/web/jadwalpools', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/web/jadwalpools');
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
            $('.aplay_code').load('/web/jadwalpools', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/jadwalpools');
            });
        });
    });
</script>
