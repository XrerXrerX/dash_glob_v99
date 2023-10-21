<div class="sec_box hgi-100">
    <form method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Pilih Pasaran</span>
                <select id="" name="nm_pasar" id="nm_pasar">
                    <option class="sec_selected" value="arwanatoto" selected="" place="">Pilih Pasaran</option>

                    @foreach ($pasarans as $pasaran)
                        @if (old('category_id') == $pasaran->id)
                            <option value="{{ $pasaran->name }}" selected>{{ strtoupper($pasaran->name) }}</option>
                        @else
                            <option value="{{ $pasaran->name }}">{{ strtoupper($pasaran->name) }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Pilih Tanggal</span>
                <select name="datepost" id="datepost">
                    <option class="sec_selected" value="arwanatoto" selected="" place="">Pilih Tanggal</option>
                    <option value="{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(1)->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(2)->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(3)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(3)->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(4)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(4)->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(5)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(5)->format('d F Y') }}</option>
                    <option value="{{ \Carbon\Carbon::now()->addDays(6)->format('Y-m-d H:i:s') }}">
                        {{ \Carbon\Carbon::now()->addDays(6)->format('d F Y') }}</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Pasaran Text</span>
                <input type="text"id="slug" name="slug" readonly>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="artaimage" name="artaimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="doyanimage" name="doyanimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="duoimage" name="duoimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="neonimage" name="neonimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="tokeimage" name="tokeimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="zaraimage" name="zaraimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="neroimage" name="neroimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="romaimage" name="romaimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="tsimage" name="tsimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="arwanaimage" name="arwanaimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
            </div>
            <div class="list_form">
                <span class="sec_label">Gambar</span>
                <div class="pilihan_gambar">
                    <input type="file" id="jeepimage" name="jeepimage">
                    <button type="button" class="img_gallery">Pilih Gallery</button>
                </div>
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

        const datepost = document.querySelector('#datepost');
        const slug = document.querySelector('#slug');
        datepost.addEventListener('change', function() {

            fetch('/syair/checkSlug?datepost=' + datepost.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });


        $('#form').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/syair/tablesyair/store",
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
                            $('.aplay_code').load('/syair/tablesyair', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/syair/tablesyair');
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
            $('.aplay_code').load('/syair/tablesyair', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/tablesyair');
            });
        });
    });
</script>
