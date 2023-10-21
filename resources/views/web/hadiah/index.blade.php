<style>
    #dataSelect {
        border: 1px solid rgba(var(--rgba-primary), 0.2);
        border-radius: 6px;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/themes/prism.css">
<div class="sec_table">
    <h2>{{ $title }}</h2>
    {{-- <a href="#" onclick="handleButtonAddClick(this.id)" id="add-hadiahbb">
        <div class="sec_addnew">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-square-plus" viewBox="0 0 24 24"
                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z"></path>
                <path d="M9 12l6 0"></path>
                <path d="M12 9l0 6"></path>
            </svg>
            <span>Add New</span>
        </div>
    </a> --}}
    <a href="#" onclick="handleButtonEditClick(this.id)" id="update-hadiahbb">
        <div class="sec_edit">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" viewBox="0 0 24 24"
                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                <path d="M16 5l3 3"></path>
            </svg>
            <span>Edit</span>
        </div>
    </a>
    {{-- <a href="#" id="delete-hadiahbb">
        <div class="sec_addnew">
            <button class="sec_botton btn_danger">DELETE</button>
        </div>
    </a> --}}
    {{-- <div class="pencarian">
        <select id="jenisbet" name="jenisbet">
            <option value="bolakbalik" data-data="{{ json_encode($hadiahbb) }}">Bolak Balik</option>
        </select>
    </div> --}}

    <select id="dataSelect" name="">
        <option value="datahadiahbb">BOLAK BALIK</option>
        <option value="datahadiahdsk">BET DISKON</option>
        <option value="datahadiahfull">BET FULL</option>
        <option value="datahadiahprize">BET PRIZE 123</option>
        <option value="datahadiahv2">BET V2</option>
    </select>
    <table>
        <tbody id="trContainer">
            <tr class="head_table">
                <th>Jenis Bet</th>
                <th>Minimum Bet</th>
                <th>Diskon</th>
                <th>Hadiah</th>
                <th>Keterangan</th>
            </tr>
            <tr class="filter_row">
                <td>
                    <div class="grubsearchtable">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                        <input type="text" placeholder="Cari data..." id="searchData-name" class="searchData-name">
                    </div>
                </td>
                <td>
                    <div class="grubsearchtable">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                        <input type="text" placeholder="Cari data..." id="searchData-name" class="searchData-name">
                    </div>
                </td>
                <td>
                    <div class="grubsearchtable">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                            <path d="M21 21l-6 -6"></path>
                        </svg>
                        <input type="text" placeholder="Cari data..." id="searchData-name" class="searchData-name">
                    </div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr class="jenisbetdsk-row">

            </tr>

        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {

        var data = <?php echo $data; ?>;
        showTable("datahadiahbb");
        $("#dataSelect").change(function() {
            var selectedValue = $(this).val();
            showTable(selectedValue);
            var datahadiahbb = data[selectedValue][0];
            var id = datahadiahbb[0].id;
            $("#update-hadiahbb").data("id", id);
            $("#update-hadiahbb").data("table", selectedValue);
        });


        function showTable(selectedValue) {
            var datahadiahbb = data[selectedValue][0];
            var trContainer = document.getElementById('trContainer');
            var id = datahadiahbb[0].id
            $("#update-hadiahbb").attr("data-id", id);
            $("#update-hadiahbb").attr("data-table", selectedValue);
            // Cari elemen dengan class "dynamic_row" untuk dihapus jika sudah ada
            var dynamicRows = document.getElementsByClassName('dynamic_row');
            for (var i = dynamicRows.length - 1; i >= 0; i--) {
                dynamicRows[i].remove();
            }

            // Lakukan loop untuk setiap data dalam datahadiahbb
            for (var i = 0; i < datahadiahbb.length; i++) {
                // Buat elemen <tr> baru dengan class "dynamic_row"
                var trElement = document.createElement('tr');
                trElement.className = 'jenisbetdsk-row dynamic_row';

                // Buat elemen <td> baru untuk menampilkan jenisbet
                var tdJenisbetElement = document.createElement('td');
                tdJenisbetElement.innerHTML = '<span class="name">' + datahadiahbb[i].jenisbet + '</span>';
                trElement.appendChild(tdJenisbetElement);

                // Buat elemen <td> baru untuk menampilkan minbet
                var tdMinbet = document.createElement('td');
                tdMinbet.innerHTML = '<span class="name">Rp ' + datahadiahbb[i].minbet + '</span>';
                trElement.appendChild(tdMinbet);

                // Buat elemen <td> baru untuk menampilkan diskon
                var tdDiskon = document.createElement('td');
                tdDiskon.innerHTML = '<span class="name">' + datahadiahbb[i].diskon + '</span>';
                trElement.appendChild(tdDiskon);

                // Buat elemen <td> baru untuk menampilkan hadiah
                var tdHadiah = document.createElement('td');
                tdHadiah.innerHTML = '<span class="name">' + datahadiahbb[i].hadiah + '</span>';
                trElement.appendChild(tdHadiah);

                // Buat elemen <td> baru untuk menampilkan keterangan
                var tdKeterangan = document.createElement('td');
                tdKeterangan.textContent = datahadiahbb[i].keterangan;
                trElement.appendChild(tdKeterangan);

                // Tambahkan elemen <tr> ke dalam tbody trContainer
                trContainer.appendChild(trElement);
            }
        }

    });

    $(document).ready(function() {
        // Sembunyikan elemen dengan ID update saat halaman dimuat
        $('.all_act_butt').hide();

        // Event handler untuk checkbox myCheckbox
        $('#myCheckbox, [id^="myCheckbox-"]').change(function() {
            // Periksa apakah setidaknya satu checkbox tercentang
            var isChecked = $('#myCheckbox:checked, [id^="myCheckbox-"]:checked').length > 0;

            // Tampilkan atau sembunyikan elemen update berdasarkan status checkbox tercentang
            if (isChecked) {
                $('.all_act_butt').css('display', 'flex');
            } else {
                $('.all_act_butt').hide();
            }
        });

        $('#update-hadiahbb').off('click').click(function(event) {

            event.preventDefault();
            // var data = <?php echo $data; ?>;
            // var datahadiahbb = data["datahadiahbb"][0];
            // var id = datahadiahbb[0].id;
            // $("#update-hadiahbb").attr("data-id", id);
            // $("#update-hadiahbb").attr("data-table", "datahadiahbb");
            // $("#update-hadiahbb").attr("data-website", "arwanatoto");

            var buttonupdate = document.getElementById("update-hadiahbb");
            var jenishadiah = buttonupdate.getAttribute("data-table");
            var id = $("#update-hadiahbb").data("id");

            var website = "<?php echo $bo; ?>";

            var checkedValues = [];
            checkedValues.push(id);
            checkedValues.push(jenishadiah);
            checkedValues.push(website);

            var parameterString = $.param({
                'values[]': checkedValues
            }, true);

            $('.aplay_code').load('/web/hadiah/edit/' + parameterString, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/hadiah/edit/' + parameterString);
            });
        });


        $(document).off('click', '#add-hadiahbb').on('click', '#add-hadiahbb', function(event) {
            event.preventDefault();
            $('.aplay_code').load('/web/hadiahbb/add', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/hadiahbb/add');
            });
        });
        // $(document).on('click', '#delete', function(event) {
        //     event.preventDefault();
        //     $('.aplay_code').load('/web/hadiahbb/delete', function() {
        //         adjustElementSize();
        //         localStorage.setItem('lastPage', '/web/hadiahbb/delete');
        //     });
        // })



        $(document).on('click', '#delete-hadiahbb', function(event) {
            event.preventDefault();

            var checkedValues = [];
            $('input[id^="myCheckbox-"]:checked').each(function() {
                var value = $(this).data('id');
                checkedValues.push(value);
            });

            if (checkedValues.length === 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Silahkan pilih website!',
                    showConfirmButton: false,
                    timer: 1500
                });
                return; // Menghentikan eksekusi jika tidak ada item yang dipilih
            }

            var parameterString = $.param({
                'values[]': checkedValues
            }, true);
            var url = "/web/hadiahbb/delete/"; // Ubah URL sesuai dengan endpoint delete yang sesuai

            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus data ini?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                            values: checkedValues
                        },
                        success: function(result) {
                            // Tampilkan SweetAlert untuk sukses
                            Swal.fire({
                                icon: 'success',
                                title: 'Data berhasil dihapus!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                // Lakukan perubahan halaman atau tindakan lainnya setelah data berhasil dihapus
                                $('.aplay_code').load('/web/hadiahbb',
                                    function() {
                                        adjustElementSize();
                                        localStorage.setItem('lastPage',
                                            '/web/hadiahbb');
                                    });
                            });
                        },
                        error: function(xhr) {
                            // Tampilkan SweetAlert untuk kesalahan
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Terjadi kesalahan saat menghapus data.'
                            });

                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
        $(document).off('click', '#view').on('click', '#view', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $('.aplay_code').empty();
            $('.aplay_code').load('/web/hadiahbb/view/' + id, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/hadiahbb/view/' + id);
            });
        });


        $(document).off('click', '#edit').on('click', '#edit', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var jen = $(this).data('jen');
            $('.aplay_code').empty();
            $('.aplay_code').load('/web/hadiahbb/edit/' + id + '?jen=' + jen, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/web/hadiahbb/edit/' + id);
            });
        });

        $(document).on('click', '#delete', function(event) {
            event.preventDefault();

            var id = $(this).data('id');
            var url = "/web/hadiahbb/delete/"; // Ubah URL sesuai dengan endpoint delete yang sesuai

            Swal.fire({
                title: 'Apakah Anda yakin ingin menghapus data ini?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        method: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}',
                            values: id
                        },
                        success: function(result) {
                            // Tampilkan SweetAlert untuk sukses
                            Swal.fire({
                                icon: 'success',
                                title: 'Data berhasil dihapus!',
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                // Lakukan perubahan halaman atau tindakan lainnya setelah data berhasil dihapus
                                $('.aplay_code').load('/web/hadiahbb',
                                    function() {
                                        adjustElementSize();
                                        localStorage.setItem('lastPage',
                                            '/web/hadiahbb');
                                    });
                            });
                        },
                        error: function(xhr) {
                            // Tampilkan SweetAlert untuk kesalahan
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'Terjadi kesalahan saat menghapus data.'
                            });

                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    });
</script>
