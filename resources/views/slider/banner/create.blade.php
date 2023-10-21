<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Bo</span>
                <input type="text" id="bo" name="bo" placeholder="Nama Bo" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Link 1</span>
                <input type="text" id="link1" name="link1" placeholder="Link 1">
            </div>
            <div class="list_form">
                <span class="sec_label">Link 2</span>
                <input type="text" id="link2" name="link2" placeholder="Link 2">
            </div>
            <div class="list_form">
                <span class="sec_label">Link 3</span>
                <input type="text" id="link3" name="link3" placeholder="Link 3">
            </div>
            <div class="list_form">
                <span class="sec_label">Link 4</span>
                <input type="text" id="link4" name="link4" placeholder="Link 4">
            </div>
            <div class="list_form">
                <span class="sec_label">Link 5</span>
                <input type="text" id="link5" name="link5" placeholder="Link 5">
            </div>

            <div class="list_form">
                <span class="sec_label">Switch button 1</span>
                <div class="sec_togle">
                    <input type="checkbox" id="idn_switchbutton1" name="idn_switchbutton1">
                    <label for="idn_switchbutton1" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Switch button 2</span>
                <div class="sec_togle">
                    <input type="checkbox" id="idn_switchbutton2" name="idn_switchbutton2">
                    <label for="idn_switchbutton2" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Switch button 3</span>
                <div class="sec_togle">
                    <input type="checkbox" id="idn_switchbutton3" name="idn_switchbutton3">
                    <label for="idn_switchbutton3" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Switch button 4</span>
                <div class="sec_togle">
                    <input type="checkbox" id="idn_switchbutton4" name="idn_switchbutton4">
                    <label for="idn_switchbutton4" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Switch button 5</span>
                <div class="sec_togle">
                    <input type="checkbox" id="idn_switchbutton5" name="idn_switchbutton5">
                    <label for="idn_switchbutton5" class="sec_switch"></label>
                </div>
            </div>

            <div class="list_form">
                <span class="sec_label">Show Slideshow 1</span>
                <div class="sec_togle">
                    <input type="checkbox" id="show_slideshow1" name="show_slideshow1">
                    <label for="show_slideshow1" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Show Slideshow 2</span>
                <div class="sec_togle">
                    <input type="checkbox" id="show_slideshow2" name="show_slideshow2">
                    <label for="show_slideshow2" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Show Slideshow 3</span>
                <div class="sec_togle">
                    <input type="checkbox" id="show_slideshow3" name="show_slideshow3">
                    <label for="show_slideshow3" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Show Slideshow 4</span>
                <div class="sec_togle">
                    <input type="checkbox" id="show_slideshow4" name="show_slideshow4">
                    <label for="show_slideshow4" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Show Slideshow 5</span>
                <div class="sec_togle">
                    <input type="checkbox" id="show_slideshow5" name="show_slideshow5">
                    <label for="show_slideshow5" class="sec_switch"></label>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Priority</span>
                <select id="priority" name="priority">

                    <option value="image1">Image 1</option>
                    <option value="image2">Image 2</option>
                    <option value="image3">Image 3</option>
                    <option value="image4">Image 4</option>
                    <option value="image5">Image 5</option>
                </select>
            </div>
            {{-- <div class="list_form">
                <span class="sec_label">Image 1</span>
                <div class="pilihan_gambar">
                    <input type="file" id="image1" name="image1">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Image 2</span>
                <div class="pilihan_gambar">
                    <input type="file" id="image2" name="image2">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Image 3</span>
                <div class="pilihan_gambar">
                    <input type="file" id="image3" name="image3">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Image 4</span>
                <div class="pilihan_gambar">
                    <input type="file" id="image4" name="image4">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Image 5</span>
                <div class="pilihan_gambar">
                    <input type="file" id="image5" name="image5">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div> --}}

            <div class="list_form">
                <span class="sec_label">Nama Image 1</span>
                <input type="text" id="image1" name="image1" placeholder="Nama Image 1" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Image 2</span>
                <input type="text" id="image2" name="image2" placeholder="Nama Image 2" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Image 3</span>
                <input type="text" id="image3" name="image3" placeholder="Nama Image 3" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Image 4</span>
                <input type="text" id="image4" name="image4" placeholder="Nama Image 4" required>
            </div>
            <div class="list_form">
                <span class="sec_label">Nama Image 5</span>
                <input type="text" id="image5" name="image5" placeholder="Nama Image 5" required>
            </div>

        </div>
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

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/slider/banner/store",
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
                            $('.aplay_code').load('/slider/banner', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/slider/banner');
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
            $('.aplay_code').load('/slider/banner', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/slider/banner');
            });
        });
    });
</script>
