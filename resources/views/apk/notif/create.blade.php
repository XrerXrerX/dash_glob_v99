<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="notificationForm">
        @csrf
        @foreach ($namabo as $nbo)
            <div class="sec_form">
                <div class="sec_head_form">
                    <h3>{{ $nbo }}</h3>
                    <span>Push Notifikasi</span>
                </div>
                <div class="list_form">
                    <span class="sec_label">Title</span>
                    <input type="text" id="title" name="title[]">
                    <input type="hidden" name="namabo[]" value="{{ $nbo }}">
                </div>
                <div class="list_form">
                    <span class="sec_label">Body</span>
                    <textarea rows="5" id="body-{{ $nbo }}" name="body[]"></textarea>
                </div>
            </div>
        @endforeach
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Notifsubmit">Submit</button>
            <a href="#" id="Notifcancel"><button type="button" class="sec_botton btn_cancel">Cancel</button></a>
        </div>
    </form>
</div>

<script>
    $(document).ready(function() {
        $('#notificationForm').submit(function(event) {
            event.preventDefault();

            // Menggunakan variabel FormData untuk mengumpulkan data formulir
            var formData = new FormData(this);

            $.ajax({
                url: "/apk/notifikasi/push",
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
                            title: 'Notifikasi berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            // Lakukan perubahan halaman atau tindakan lainnya setelah notifikasi berhasil dikirim
                            $('.aplay_code').load('/apk/notifikasi', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/apk/notifikasi');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim notifikasi.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#Notifcancel').on('click', '#Notifcancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/apk/notifikasi', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/notifikasi');
            });
        });
    });
</script>
