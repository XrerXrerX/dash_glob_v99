<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/themes/prism.css">
<div class="sec_table">
    <h2>{{ $title }}</h2>
    <a href="#" onclick="handleButtonEditClick(this.id)" id="update-titlebody">
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
                <th>Nama Pasaran</th>
                <th>Tanggal Post</th>
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
            </tr>
            <tr>
                <td class="check_box">
                    <input type="checkbox" id="myCheckbox-1" name="myCheckbox-1" data-id=" {{ $data->id }}">
                </td>
                <td><span class="name">{{ $data->title }}</span></td>
                <td><span class="name">{{ $data->body }}</span></td>
                <td class="kolom_action">
                    <div class="dot_action">
                        <span>•</span>
                        <span>•</span>
                        <span>•</span>
                    </div>
                    <div class="action_crud" id="1" style="display: none;">
                        <a href="#" id="view" data-id="{{ $data->id }}">
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
                            data-id="{{ $data->id }}">
                            <div class="list_action">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
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
                        {{-- <a href="#" id="delete" data-id="{{ $data->id }}">
                            <div class="list_action">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 7l16 0"></path>
                                    <path d="M10 11l0 6"></path>
                                    <path d="M14 11l0 6"></path>
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12"></path>
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3"></path>
                                </svg>
                                <span>Delete</span>
                            </div>
                        </a> --}}
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>


<script>
    $(document).ready(function() {
        // Event handler untuk checkbox dengan ID myCheckbox
        $('#myCheckbox').change(function() {
            // Mendapatkan status ceklis checkbox myCheckbox
            var isChecked = $(this).is(':checked');

            // Mengatur status ceklis untuk checkbox myCheckbox
            $('[id^="myCheckbox-"]').prop('checked', isChecked);
        });
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

        $('#update-titlebody').off('click').click(function(event) {
            event.preventDefault();

            var checkedValues = [];
            $('input[id^="myCheckbox-"]:checked').each(function() {
                var value = $(this).data('id');
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

            $('.aplay_code').load('/syair/titlebody/edit/' + parameterString, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/titlebody/edit/' + parameterString);
            });
        });


        $(document).off('click', '#add-titlebody').on('click', '#add-titlebody', function(event) {
            event.preventDefault();
            $('.aplay_code').load('/syair/titlebody/add', function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/titlebody/add');
            });
        });


        $(document).off('click', '#view').on('click', '#view', function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            $('.aplay_code').empty();
            $('.aplay_code').load('/syair/titlebody/view/' + id, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/titlebody/view/' + id);
            });
        });


        $(document).off('click', '#edit').on('click', '#edit', function(event) {

            event.preventDefault();
            var id = $(this).data('id');
            $('.aplay_code').empty();
            $('.aplay_code').load('/syair/titlebody/edit/' + id, function() {
                adjustElementSize();
                localStorage.setItem('lastPage', '/syair/titlebody/edit/' + id);
            });
        });



    });
</script>
