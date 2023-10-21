<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->nm_pasar }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Pilih Pasaran</span>
                    <input type="hidden" id="id[]" name="id[]" value={{ $item->id }}>
                    <select id="" name="nm_pasar[]" id="nm_pasar[]" {{ $disabled }}>
                        <option class="sec_selected" value="arwanatoto" selected="" place="">Pilih Pasaran
                        </option>

                        @foreach ($pasarans as $pasaran)
                            <option value="{{ $pasaran->name }}"
                                {{ $item->nm_pasar == $pasaran->name ? 'selected' : '' }}>
                                {{ strtoupper($pasaran->name) }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Pilih Tanggal</span>
                    <select name="datepost[]" id="datepost[]" {{ $disabled }}>
                        <option class="sec_selected" value="arwanatoto" selected="" place="">Pilih Tanggal
                        </option>
                        <option value="{{ $item->datepost }}" selected>{{ $item->datepost }}</option>
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
                    <input type="text"id="slug[]" name="slug[]" value="{{ $item->slug }}" readonly
                        {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Arta</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldartaimage[]" value="{{ $item->artaimage }}">
                        <input type="file" id="artaimage[]" name="artaimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Doyan</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="olddoyanimage[]" value="{{ $item->doyanimage }}">
                        <input type="file" id="doyanimage[]" name="doyanimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Duo</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldduoimage[]" value="{{ $item->duoimage }}">
                        <input type="file" id="duoimage[]" name="duoimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Neon</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldneonimage[]" value="{{ $item->neonimage }}">
                        <input type="file" id="neonimage[]" name="neonimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Toke</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldtokeimage[]" value="{{ $item->tokeimage }}">
                        <input type="file" id="tokeimage[]" name="tokeimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Zara</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldzaraimage[]" value="{{ $item->zaraimage }}">
                        <input type="file" id="zaraimage[]" name="zaraimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Nero</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldneroimage[]" value="{{ $item->neroimage }}">
                        <input type="file" id="neroimage[]" name="neroimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Roma</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldromaimage[]" value="{{ $item->romaimage }}">
                        <input type="file" id="romaimage[]" name="romaimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Ts</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldtsimage[]" value="{{ $item->tsimage }}">
                        <input type="file" id="tsimage[]" name="tsimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Arwana</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldarwanaimage[]" value="{{ $item->arwanaimage }}">
                        <input type="file" id="arwanaimage[]" name="arwanaimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>
                <div class="list_form">
                    <span class="sec_label">Gambar Jeep</span>
                    <div class="pilihan_gambar">
                        <input type='hidden' name="oldjeepimage[]" value="{{ $item->jeepimage }}">
                        <input type="file" id="jeepimage[]" name="jeepimage[]" {{ $disabled }}>
                        <button type="button" class="img_gallery">Pilih Gallery</button>
                    </div>
                </div>


            </div>
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

        const datepost = document.querySelector('#datepost');
        const slug = document.querySelector('#slug');

        if (datepost) {
            datepost.addEventListener('change', function() {
                fetch('/syair/checkSlug?datepost=' + datepost.value)
                    .then(response => response.json())
                    .then(data => slug.value = data.slug);
            });
        }


        $('#form').off('submit').on('submit', function(event) {
            event.stopPropagation();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/syair/tablesyair/update",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    if (result.errors) {
                        // Menampilkan pesan kesalahan jika ada
                        $('.alert-danger').html('');

                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        // Menampilkan pesan sukses atau melakukan tindakan lain
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
                    // Menampilkan pesan kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim contact.'
                    });

                    console.log(xhr.responseText);
                }
            });

            return false; // Mencegah default form submission behavior
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
