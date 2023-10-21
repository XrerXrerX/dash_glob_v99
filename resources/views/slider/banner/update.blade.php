<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf

        @foreach ($data as $index => $dt)
            <input type="hidden" id="id" name="id[]" value="{{ $id[$index] }}">
            @foreach ($dt as $idx => $d)
                <div class="sec_form">
                    <div class="sec_head_form">
                        <h3>{{ $title . ' ' . $d['bo'] }}</h3>
                        <span>Edit {{ $title . ' ' . $d['bo'] }}</span>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Nama Bo</span>
                        <input type="text" id="bo" name="bo[]" placeholder="Nama Bo"
                            value="{{ $d['bo'] }}" required {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link 1</span>
                        <input type="text" id="link1" name="link1[]" placeholder="Link 1"
                            value="{{ $d['link1'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link 2</span>
                        <input type="text" id="link2" name="link2[]" placeholder="Link 2"
                            value="{{ $d['link2'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link 3</span>
                        <input type="text" id="link3" name="link3[]" placeholder="Link 3"
                            value="{{ $d['link3'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link 4</span>
                        <input type="text" id="link4" name="link4[]" placeholder="Link 4"
                            value="{{ $d['link4'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link 5</span>
                        <input type="text" id="link5" name="link5[]" placeholder="Link 5"
                            value="{{ $d['link5'] }}" {{ $disabled }}>
                    </div>

                    <div class="list_form">
                        <span class="sec_label">Switch button 1</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="idn_switchbutton1_{{ $index }}_{{ $idx }}"
                                name="idn_switchbutton1[{{ $index }}][{{ $idx }}]"
                                {{ $d['idn_switchbutton1'] == 1 ? 'checked' : '' }} value="1"
                                {{ $disabled }}>
                            <label for="idn_switchbutton1_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Switch button 2</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="idn_switchbutton2_{{ $index }}_{{ $idx }}"
                                name="idn_switchbutton2[{{ $index }}][{{ $idx }}]"
                                {{ $d['idn_switchbutton2'] == 1 ? 'checked' : '' }} value="1"
                                {{ $disabled }}>
                            <label for="idn_switchbutton2_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Switch button 3</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="idn_switchbutton3_{{ $index }}_{{ $idx }}"
                                name="idn_switchbutton3[{{ $index }}][{{ $idx }}]"
                                {{ $d['idn_switchbutton3'] == 1 ? 'checked' : '' }} value="1"
                                {{ $disabled }}>
                            <label for="idn_switchbutton3_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Switch button 4</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="idn_switchbutton4_{{ $index }}_{{ $idx }}"
                                name="idn_switchbutton4[{{ $index }}][{{ $idx }}]"
                                {{ $d['idn_switchbutton4'] == 1 ? 'checked' : '' }} value="1"
                                {{ $disabled }}>
                            <label for="idn_switchbutton4_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Switch button 5</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="idn_switchbutton5_{{ $index }}_{{ $idx }}"
                                name="idn_switchbutton5[{{ $index }}][{{ $idx }}]"
                                {{ $d['idn_switchbutton5'] == 1 ? 'checked' : '' }} value="1"
                                {{ $disabled }}>
                            <label for="idn_switchbutton5_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>

                    <div class="list_form">
                        <span class="sec_label">Show Slideshow 1</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="show_slideshow1_{{ $index }}_{{ $idx }}"
                                name="show_slideshow1[{{ $index }}][{{ $idx }}]"
                                {{ $d['show_slideshow1'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="show_slideshow1_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Show Slideshow 2</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="show_slideshow2_{{ $index }}_{{ $idx }}"
                                name="show_slideshow2[{{ $index }}][{{ $idx }}]"
                                {{ $d['show_slideshow2'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="show_slideshow2_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Show Slideshow 3</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="show_slideshow3_{{ $index }}_{{ $idx }}"
                                name="show_slideshow3[{{ $index }}][{{ $idx }}]"
                                {{ $d['show_slideshow3'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="show_slideshow3_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Show Slideshow 4</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="show_slideshow4_{{ $index }}_{{ $idx }}"
                                name="show_slideshow4[{{ $index }}][{{ $idx }}]"
                                {{ $d['show_slideshow4'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="show_slideshow4_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Show Slideshow 5</span>
                        <div class="sec_togle">
                            <input type="checkbox" id="show_slideshow5_{{ $index }}_{{ $idx }}"
                                name="show_slideshow5[{{ $index }}][{{ $idx }}]"
                                {{ $d['show_slideshow5'] == 1 ? 'checked' : '' }} value="1" {{ $disabled }}>
                            <label for="show_slideshow5_{{ $index }}_{{ $idx }}"
                                class="sec_switch"></label>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Priority</span>
                        <select id="priority" name="priority[]" {{ $disabled }}>
                            <option class="sec_selected" value="" selected="" place="">Pilih Priority
                            </option>
                            <option value="image1" {{ $d['priority'] == 'image1' ? 'selected' : '' }}>Image 1</option>
                            <option value="image2" {{ $d['priority'] == 'image2' ? 'selected' : '' }}>Image 2</option>
                            <option value="image3" {{ $d['priority'] == 'image3' ? 'selected' : '' }}>Image 3</option>
                            <option value="image4" {{ $d['priority'] == 'image4' ? 'selected' : '' }}>Image 4</option>
                            <option value="image5" {{ $d['priority'] == 'image5' ? 'selected' : '' }}>Image 5
                            </option>
                        </select>
                    </div>
                    {{-- <div class="list_form">
                        <span class="sec_label">Image 1</span>
                        <div class="pilihan_gambar">
                            <input type="hidden" id="imageold1" name="imageold1[]" value="{{ $d['image1'] }}">
                            <input type="file" id="image1_{{ $index }}"
                                name="image1[{{ $index }}]" {{ $disabled }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Image 2</span>
                        <div class="pilihan_gambar">
                            <input type="hidden" id="imageold2" name="imageold2[]" value="{{ $d['image2'] }}">
                            <input type="file" id="image2_{{ $index }}"
                                name="image2[{{ $index }}]" {{ $disabled }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Image 3</span>
                        <div class="pilihan_gambar">
                            <input type="hidden" id="imageold3" name="imageold3[]" value="{{ $d['image3'] }}">
                            <input type="file" id="image3_{{ $index }}"
                                name="image3[{{ $index }}]" {{ $disabled }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Image 4</span>
                        <div class="pilihan_gambar">
                            <input type="hidden" id="imageold4" name="imageold4[]" value="{{ $d['image4'] }}">
                            <input type="file" id="image4_{{ $index }}"
                                name="image4[{{ $index }}]" {{ $disabled }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Image 5</span>
                        <div class="pilihan_gambar">
                            <input type="hidden" id="imageold5" name="imageold5[]" value="{{ $d['image5'] }}">
                            <input type="file" id="image5_{{ $index }}"
                                name="image5[{{ $index }}]" {{ $disabled }}>
                            <button type="button" class="img_gallery">Pilih Gallery</button>
                        </div>
                    </div> --}}
                    <div class="list_form">
                        <span class="sec_label">Nama Image 1</span>
                        <input type="text" id="image1" name="image1[]" placeholder="Nama Image 1"
                            value="{{ $d['image1'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Nama Image 2</span>
                        <input type="text" id="image2" name="image2[]" placeholder="Nama Image 2"
                            value="{{ $d['image2'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Nama Image 3</span>
                        <input type="text" id="image3" name="image3[]" placeholder="Nama Image 3"
                            value="{{ $d['image3'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Nama Image 4</span>
                        <input type="text" id="image4" name="image4[]" placeholder="Nama Image 4"
                            value="{{ $d['image4'] }}" {{ $disabled }}>
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Nama Image 5</span>
                        <input type="text" id="image5" name="image5[]" placeholder="Nama Image 5"
                            value="{{ $d['image5'] }}" {{ $disabled }}>
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
            console.log()
            $.ajax({
                url: "/slider/banner/update",
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
                            $('.aplay_code').load('/slider/banner', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/slider/banner');
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
            $('.aplay_code').load('/slider/banner', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/slider/banner');
            });
        });
    });
</script>
