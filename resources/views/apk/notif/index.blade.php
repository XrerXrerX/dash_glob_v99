<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/themes/prism.css">
<div class="sec_table" id="notifikasiapk">
    <h2>{{ $title }}</h2>
    <div class="notif_group">
        <a href="#" id="pushall">
            <button class="sec_botton btn_submit">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" viewBox="0 0 24 24"
                    stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                </svg>
                Kirim Notifikasi</button>
        </a>
        {{--  --}}
        <table>
            <tbody>
                <tr class="head_table">
                    <th class="check_box">
                        <input type="checkbox" id="myCheckbox" name="myCheckbox">
                    </th>
                    <th>Nama Website</th>
                    {{-- <th>Action</th> --}}
                </tr>
                <tr class="filter_row">
                    <td></td>
                    <td>
                        <div class="grubsearchtable">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path>
                                <path d="M21 21l-6 -6"></path>
                            </svg>
                            <input type="text" placeholder="Cari data..." id="searchData-name"
                                class="searchData-name">
                        </div>
                    </td>
                </tr>
                @foreach ($data as $index => $d)
                    <tr>
                        <td class="check_box">
                            <input type="checkbox" id="myCheckbox-{{ $index }}"
                                name="myCheckbox-{{ $index }}" data-namabo=" {{ $d->nama }}">
                        </td>
                        <td><span class="name">{{ $d->nama }}</span></td>



                        {{-- <td class="kolom_action">
                            <div class="dot_action">
                                <span>•</span>
                                <span>•</span>
                                <span>•</span>
                            </div>
                            <div class="action_crud" id="1">
                                <a href="" id="Notifpush" data-namabo="{{ $d->nama }}">
                                    <div class="list_action">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-edit-circle" viewBox="0 0 24 24"
                                            stroke-width="1.5" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z" />
                                            <path d="M16 5l3 3" />
                                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6" />
                                        </svg>
                                        <span>Push</span>
                                    </div>
                                </a>

                            </div>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Event handler untuk checkbox dengan ID myCheckbox
        $('#myCheckbox').change(function() {
            // Mendapatkan status ceklis checkbox myCheckbox
            var isChecked = $(this).is(':checked');

            // Mengatur status ceklis untuk checkbox myCheckbox-{{ $index }}
            $('[id^="myCheckbox-"]').prop('checked', isChecked);
        });
    });

    $(document).ready(function() {
        // Sembunyikan elemen dengan ID pushall saat halaman dimuat
        // $('#pushall').hide();

        // Event handler untuk checkbox myCheckbox
        $('#myCheckbox, [id^="myCheckbox-"]').change(function() {
            // Periksa apakah setidaknya satu checkbox tercentang
            var isChecked = $('#myCheckbox:checked, [id^="myCheckbox-"]:checked').length > 0;

            // Tampilkan atau sembunyikan elemen pushall berdasarkan status checkbox tercentang
            if (isChecked) {
                // $('#pushall').show();
            } else {
                // $('#pushall').hide();
            }
        });

        $('#pushall').click(function(event) {
            event.preventDefault();

            var checkedValues = [];
            $('input[id^="myCheckbox-"]:checked').each(function() {
                var value = $(this).data('namabo');
                checkedValues.push(value);
            });
            if (checkedValues == 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Silahkan pilih website!',
                    showConfirmButton: false,
                    timer: 1500
                });
            }


            var parameterString = $.param({
                'values[]': checkedValues
            }, true);

            $('.aplay_code').load('/apk/notifikasi/edit/' + parameterString, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/notifikasi/edit/' + parameterString);
            });
        });
    });

    // $(document).on('click', '#Notifpush', function(event) {
    //     event.preventDefault();
    //     var namabo = $(this).data('namabo');
    //     $('.aplay_code').load('/apk/notifikasi/edit/' + namabo, function() {
    //         adjustElementSize();
    //         localStorage.setItem('lastPage', '/apk/notifikasi/edit/' + namabo);
    //     });
    // });
</script>
