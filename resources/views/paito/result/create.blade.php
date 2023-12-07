<div class="sec_box hgi-100">
    <form action="" method="POST" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Pasaran</span>
                <select name="pasaran">
                    {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                    @foreach ($pasarans as $index => $pasaran)
                        <option value="{{ $pasaran->pasaran_nama }}">{{ $pasaran->pasaran_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Result</span>
                <input type="text" name="result" maxlength="5">
            </div>
            <div class="list_form">
                <span class="sec_label">Hari</span>
                <select id="hari" name="hari">
                    {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Bulan</span>
                <select id="bulan" name="bulan">
                    {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
            <div class="list_form">
                <span class="sec_label">Tahun</span>
                <select id="tahun" name="tahun">
                    {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                </select>
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
                url: "/paitoback/result/store",
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
                            $('.aplay_code').load('/paitoback/result', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/paitoback/result');
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
            $('.aplay_code').empty();
            $('.aplay_code').load('/paitoback/result', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/paitoback/result');
            });
        });
    });
</script>
