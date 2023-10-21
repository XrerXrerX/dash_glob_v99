{{-- trix editor --}}
<link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
<script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

<div class="sec_box hgi-100">
    <form class="syair_titlebody" action="" method="POST" enctype="multipart/form-data" id="form">
        @csrf
        <div class="sec_form">
            <div class="sec_head_form">
                <h3>{{ $title }}</h3>
                <span>Tambah {{ $title }}</span>
            </div>
            <div class="list_form">
                <span class="sec_label">Title</span>
                <input id="title" type="hidden" name="title" value="{{ old('title', $data->title) }}">
                <trix-editor input="title" {{ $disabled }}></trix-editor>
            </div>
            <div class="list_form">
                <span class="sec_label">Body</span>
                <input id="body" type="hidden" name="body" value="{{ old('body', $data->body) }}">
                <trix-editor input="body"></trix-editor>
            </div>

        </div>
        <div class="sec_button_form">
            <button class="sec_botton btn_submit" type="submit" id="Contactsubmit" {{ $disabled }}>Submit</button>
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
                url: "/syair/titlebody/update",
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
                            $('.aplay_code').load('/syair/titlebody', function() {
                                adjustElementSize();
                                localStorage.setItem('lastPage',
                                    '/syair/titlebody');
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
            $('.aplay_code').load('/syair/titlebody', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/titlebody');
            });
        });
    });
</script>
