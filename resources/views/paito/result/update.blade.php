<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        @foreach ($data as $index => $item)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $item->pasaran }}</h3>
                    <span>Edit {{ $title }}</span>
                </div>


                <div class="list_form">
                    <span class="sec_label">Pasaran</span>
                    <select name="pasaran[]" {{ $disabled }}>
                        {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                        @foreach ($pasarans as $index => $pasaran)
                            <option value="{{ $pasaran->pasaran_nama }}"
                                {{ $pasaran->pasaran_nama == $item->pasaran ? 'selected' : '' }}>
                                {{ $pasaran->pasaran_nama }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" name="id[]" value="{{ $item->id }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">Result</span>
                    <input type="text" name="result[]" value="{{ $item->result }}" {{ $disabled }}>
                </div>
                <div class="list_form">
                    <span class="sec_label">Hari</span>
                    <select id="hari" name="hari[]" {{ $disabled }}>
                        {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                        <option value="Senin" {{ $item->hari == 'Senin' ? 'selected' : '' }}>Senin</option>
                        <option value="Selasa" {{ $item->hari == 'Selasa' ? 'selected' : '' }}>Selasa</option>
                        <option value="Rabu" {{ $item->hari == 'Rabu' ? 'selected' : '' }}>Rabu</option>
                        <option value="Kamis" {{ $item->hari == 'Kamis' ? 'selected' : '' }}>Kamis</option>
                        <option value="Jumat" {{ $item->hari == 'Jumat' ? 'selected' : '' }}>Jumat</option>
                        <option value="Sabtu" {{ $item->hari == 'Sabtu' ? 'selected' : '' }}>Sabtu</option>
                        <option value="Minggu" {{ $item->hari == 'Minggu' ? 'selected' : '' }}>Minggu</option>
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Bulan</span>
                    <select id="bulan" name="bulan[]" {{ $disabled }}>
                        {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                        <option value="January" {{ $item->bulan == 'January' ? 'selected' : '' }}>January</option>
                        <option value="February" {{ $item->bulan == 'February' ? 'selected' : '' }}>February</option>
                        <option value="March" {{ $item->bulan == 'March' ? 'selected' : '' }}>March</option>
                        <option value="April" {{ $item->bulan == 'April' ? 'selected' : '' }}>April</option>
                        <option value="May" {{ $item->bulan == 'May' ? 'selected' : '' }}>May</option>
                        <option value="June" {{ $item->bulan == 'June' ? 'selected' : '' }}>June</option>
                        <option value="July" {{ $item->bulan == 'July' ? 'selected' : '' }}>July</option>
                        <option value="August" {{ $item->bulan == 'August' ? 'selected' : '' }}>August</option>
                        <option value="September" {{ $item->bulan == 'September' ? 'selected' : '' }}>September
                        </option>
                        <option value="October" {{ $item->bulan == 'October' ? 'selected' : '' }}>October</option>
                        <option value="November" {{ $item->bulan == 'November' ? 'selected' : '' }}>November</option>
                        <option value="December" {{ $item->bulan == 'December' ? 'selected' : '' }}>December</option>
                    </select>
                </div>
                <div class="list_form">
                    <span class="sec_label">Tahun</span>
                    <select id="tahun" name="tahun[]" {{ $disabled }}>
                        {{-- <option class="sec_selected" value="arwanatoto" selected="" place="">arwanatoto</option> --}}
                        <option value="2023" {{ $item->tahun == '2023' ? 'selected' : '' }}>2023</option>
                        <option value="2024" {{ $item->tahun == '2024' ? 'selected' : '' }}>2024</option>
                        <option value="2025" {{ $item->tahun == '2025' ? 'selected' : '' }}>2025</option>
                    </select>
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
        $('#form').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);
            formData.append('_token', '{{ csrf_token() }}');

            $.ajax({
                url: "/paito/result/update",
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
                            $('.aplay_code').load('/paito/result', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/paito/result');
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
            $('.aplay_code').load('/paito/result', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/paito/result');
            });
        });
    });
</script>
