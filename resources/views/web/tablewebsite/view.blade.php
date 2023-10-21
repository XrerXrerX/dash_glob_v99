@foreach ($data as $idx => $dt)
    @foreach ($dt as $index => $d)
        <tr>
            <td class="check_box">
                <input type="checkbox" id="myCheckbox-{{ $index }}" name="myCheckbox-{{ $index }}"
                    data-id=" {{ $d['id'] }}">
            </td>
            <td><span class="name">{{ $d['website'] }}</span></td>
            <td class="show_img_tbl">
                <span class="td_img_show gambar">{{ substr($d['gambar'], 0, 10) }}</span>
                <img class="table_img" src="#" alt="" style="display: none;">
            </td>
            <td class="show_img_tbl2">
                <span class="td_img_show gambar">{{ substr($d['img'], 0, 10) }}</span>
                <img class="table_img" src="#" alt="" style="display: none;">
            </td>
            <td><span class="name">{{ $d['pasaran'] }}</span></td>
            <td><span class="name">{{ $d['deposit'] }}</span></td>
            <td><span class="name">{{ $d['withdraw'] }}</span></td>
            <td><span class="name">{{ $d['promourl'] }}</span></td>
            <td><span class="name">{{ $d['buktijp'] }}</span></td>
            <td><span class="name">{{ $d['linkbutton'] }}</span></td>
            <td><span class="name">{{ $d['linkapk'] }}</span></td>
            <td><span class="name">{{ $d['linkalternatif1'] }}</span></td>
            <td><span class="name">{{ $d['linkalternatif2'] }}</span></td>
            <td><span class="name">{{ $d['linkalternatif3'] }}</span></td>
            <td class="show_img_tbl">
                <span class="td_img_show gambar">{{ $d['promotogel'] }}</span>
                <img class="table_img" src="#" alt="" style="display: none;">
            </td>
            <td class="show_img_tbl2">
                <span class="td_img_show gambar">{{ $d['promoslot'] }}</span>
                <img class="table_img" src="#" alt="" style="display: none;">
            </td>
            <td class="kolom_action">
                <div class="dot_action">
                    <span>•</span>
                    <span>•</span>
                    <span>•</span>
                </div>
                <div class="action_crud" id="1" style="display: none;">
                    <a href="#" id="view" data-id="{{ $d['id'] }}">
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
                        data-id="{{ $d['id'] }}">
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
                    <a href="#" id="delete" data-id="{{ $d['id'] }}">
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
                    </a>
                </div>
            </td>
        </tr>
    @endforeach
@endforeach
