<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="linkForm">
        @csrf
        @foreach ($data as $index => $item)
            p
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $namabo[$index] }}</h3>
                    <span>Edit Links</span>
                </div>
                @foreach ($item as $ind => $itm)
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 1</span>
                        <input type="hidden" name="id[]" value="{{ $itm['id'] }}">
                        <input type="text" id="linkalternatif1" name="linkalternatif1[]"
                            value="{{ $itm['linkalternatif1'] }}" {{ $disabled }}
                            placeholder="Masukkan Link Alternatif 1">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 2</span>
                        <input type="text" id="linkalternatif2" name="linkalternatif2[]"
                            value="{{ $itm['linkalternatif2'] }}" {{ $disabled }}
                            placeholder="Masukkan Link Alternatif 1">
                    </div>
                    <div class="list_form">
                        <span class="sec_label">Link Alternatif 3</span>
                        <input type="text" id="linkalternatif3" name="linkalternatif3[]"
                            value="{{ $itm['linkalternatif3'] }}" {{ $disabled }}
                            placeholder="Masukkan Link Alternatif 1">
                    </div>
                @endforeach
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Notifsubmit">Submit</button>
            <a href="#" onclick="handleButtonCancelClick(this.id)" id="cancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#linkForm').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/apk/link/update",
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
                            title: 'Link berhasil diubah!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            // Lakukan perubahan halaman atau tindakan lainnya setelah link berhasil diubah
                            $('.aplay_code').load('/apk/link', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/apk/link');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim link.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#cancel').on('click', '#cancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/apk/link', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/link');
            });
        });

        // $(".add").click(function() {
        //     $("form > .sec_form:first-child").clone(true).insertBefore("form > p:last-child");
        //     return false;
        // });

        // $(".remove").click(function() {
        //     $(this).parent().remove();
        // });
    });
</script>
