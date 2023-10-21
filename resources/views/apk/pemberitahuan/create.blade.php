<div class="sec_box hgi-100">
    <form action="" method="POST" enctype="multipart/form-data" id="notificationForm">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Create Pemberitahuan</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Title</span>
                <input type="text" id="title" name="title">
                <input type="hidden" name="namabo">
            </div>
            <div class="list_form">
                <span class="sec_label">Content</span>
                <textarea rows="5" id="content" name="content"></textarea>
            </div>
        </div>
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Notifsubmit">Submit</button>
            <a href="#" id="PemberitahuanCancel"><button type="button"
                    class="sec_botton btn_cancel">Cancel</button></a>
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
                url: "/apk/pemberitahuan/store",
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
                            title: 'Pemberitahuan berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            // Lakukan perubahan halaman atau tindakan lainnya setelah pemberitahuan berhasil dikirim
                            $('.aplay_code').load('/apk/pemberitahuan', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/apk/pemberitahuan');
                            });
                        });
                    }
                },
                error: function(xhr) {
                    // Tampilkan SweetAlert untuk kesalahan
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim pemberitahuan.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

        $(document).off('click', '#PemberitahuanCancel').on('click', '#PemberitahuanCancel', function(event) {
            event.preventDefault();
            var namabo = $(this).data('namabo');
            $('.aplay_code').load('/apk/pemberitahuan', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/pemberitahuan');
            });
        });
    });
</script>
