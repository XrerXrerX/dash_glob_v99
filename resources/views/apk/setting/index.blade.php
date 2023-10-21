<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/themes/prism.css">
<div class="sec_table">
    <h2>{{ $title }}</h2>
    <a href="#" id="update">
        <div class="sec_edit">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" viewBox="0 0 24 24"
                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                <path d="M16 5l3 3" />
            </svg>
            <span>Edit</span>
        </div>
    </a>
    <table>
        <tbody>
            <tr class="head_table">
                <th class="check_box">
                    <input type="checkbox" id="myCheckbox" name="myCheckbox">
                </th>
                <th>Bo</th>
                <th>Action</th>
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
                        <input type="text" placeholder="Cari data..." id="searchData-name" class="searchData-name">
                    </div>
                </td>
                <td>
                </td>
            </tr>
            @foreach ($data as $index => $d)
                <tr>
                    <td class="check_box">
                        <input type="checkbox" id="myCheckbox-{{ $index }}" name="myCheckbox-{{ $index }}"
                            data-namabo=" {{ $d->nama }}">
                    </td>
                    <td><span class="name">{{ $d->nama }}</span></td>
                    <td class="kolom_action">
                        <div class="dot_action">
                            <span>•</span>
                            <span>•</span>
                            <span>•</span>
                        </div>
                        <div class="action_crud" id="1" style="display: none;">
                            <a href="#" id="view" data-namabo="{{ $d->nama }}">
                                <div class="list_action">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-eye"
                                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6">
                                        </path>
                                    </svg>
                                    <span>View</span>
                                </div>
                            </a>
                            <a href="#" onclick="handleButtonEditClick(this.id)" id="edit"
                                data-namabo="{{ $d->nama }}">
                                <div class="list_action">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-edit-circle" viewBox="0 0 24 24"
                                        stroke-width="1.5" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z">
                                        </path>
                                        <path d="M16 5l3 3"></path>
                                        <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                                    </svg>
                                    <span>Edit</span>
                                </div>
                            </a>

                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
        // Sembunyikan elemen dengan ID update saat halaman dimuat
        $('.all_act_butt').hide();
        $('#update').hide();

        // Event handler untuk checkbox myCheckbox
        $('#myCheckbox, [id^="myCheckbox-"]').change(function() {
            // Periksa apakah setidaknya satu checkbox tercentang
            var isChecked = $('#myCheckbox:checked, [id^="myCheckbox-"]:checked').length > 0;

            // Tampilkan atau sembunyikan elemen update berdasarkan status checkbox tercentang
            if (isChecked) {
                $('.all_act_butt').css('display', 'flex');
                $('#update').css('display', 'flex');
            } else {
                $('.all_act_butt').hide();
                $('#update').hide();
            }
        });

        $('#update').click(function(event) {

            event.preventDefault();

            var checkedValues = [];
            $('input[id^="myCheckbox-"]:checked').each(function() {
                var value = $(this).data('namabo');
                checkedValues.push(value);
            });
            if (checkedValues == 0) {
                Swal.fire({
                    icon: 'warning',
                    title: 'Silahkan pilih Data!',
                    showConfirmButton: false,
                    timer: 1500
                });
            }


            var parameterString = $.param({
                'values[]': checkedValues
            }, true);

            $('.aplay_code').load('/apk/setting/edit/' + parameterString, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/setting/edit/' + parameterString);
            });
        });

        $(document).off('click', '#view').on('click', '#view', function(event) {

            event.preventDefault();
            var id = $(this).data('namabo');
            $('.aplay_code').empty();
            $('.aplay_code').load('/apk/setting/view/' + id, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/setting/view/' + id);
            });
        });


        $(document).off('click', '#edit').on('click', '#edit', function(event) {

            event.preventDefault();
            var id = $(this).data('namabo');
            $('.aplay_code').empty();
            $('.aplay_code').load('/apk/setting/edit/' + id, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/apk/setting/edit/' + id);
            });
        });
    });
</script>
