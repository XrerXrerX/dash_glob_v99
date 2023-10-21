<div class="sec_box hgi-100">
    <div class="sec_form">
        <div class="sec_head_form">
            <h3>{{ $data->website }}</h3>
            <span>Edit {{ $title }}</span>
        </div>
        <div style="margin-bottom: 10px">
            <select id="dataSelect" name="" disabled>
                <option value="datahadiahbb" {{ $tipe == 'datahadiahbb' ? 'selected' : '' }}>BOLAK BALIK</option>
                <option value="datahadiahdsk" {{ $tipe == 'datahadiahdsk' ? 'selected' : '' }}>BET DISKON</option>
                <option value="datahadiahfull" {{ $tipe == 'datahadiahfull' ? 'selected' : '' }}>BET FULL</option>
                <option value="datahadiahprize" {{ $tipe == 'datahadiahprize' ? 'selected' : '' }}>BET PRIZE 123</option>
                <option value="datahadiahv2" {{ $tipe == 'datahadiahv2' ? 'selected' : '' }}>BET V2</option>
            </select>
        </div>
        <form action="" method="POST" enctype="multipart/form-data" id="form"
            style="max-height: 65vh; padding-bottom: 50px;">
            @csrf
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


                    </tr>
                    @if ($tipe == 'datahadiahbb')
                        @php
                            $dataInputsbb = [
                                'betbb4dtptmin',
                                'betbb4dtptdisk',
                                'betbb4dtpthd',
                                'betbb4dtptket',
                                'betbb4dblkmin',
                                'betbb4dblkdisk',
                                'betbb4dblkhd',
                                'betbb4dblkket',
                                'betbb3dtptmin',
                                'betbb3dtptdisk',
                                'betbb3dtpthd',
                                'betbb3dtptket',
                                'betbb3dblkmin',
                                'betbb3dblkdisk',
                                'betbb3dblkhd',
                                'betbb3dblkket',
                                'betbb2dtptblkmin',
                                'betbb2dtptblkdisk',
                                'betbb2dtptblkhd',
                                'betbb2dtptblkket',
                                'betbb2dblkmin',
                                'betbb2dblkdisk',
                                'betbb2dblkhd',
                                'betbb2dblkket',
                                'betbbcbmin',
                                'betbbcbdisk',
                                'betbbcbhd',
                                'betbbcbket',
                                'betbbcb2dmin',
                                'betbbcb2ddisk',
                                'betbbcb2dhd',
                                'betbbcb2dket',
                                'betbbcb2d3min',
                                'betbbcb2d3disk',
                                'betbbcb2d3hd',
                                'betbbcb2d3ket',
                                'betbbcb2d4min',
                                'betbbcb2d4disk',
                                'betbbcb2d4hd',
                                'betbbcb2d4ket',
                                'betbbcbnagamin',
                                'betbbcbnagadisk',
                                'betbbcbnagahd',
                                'betbbcbnagaket',
                                'betbbcbnaga4min',
                                'betbbcbnaga4disk',
                                'betbbcbnaga4hd',
                                'betbbcbnaga4ket',
                                'betbbcjitumin',
                                'betbbcjitudisk',
                                'betbbcjituhd',
                                'betbbcjituket',
                                'betbbttepimin',
                                'betbbttepidisk',
                                'betbbttepihd',
                                'betbbttepiket',
                                'betbbdsrmin',
                                'betbbdsrdisk',
                                'betbbdsrhd',
                                'betbbdsrket',
                                'betbbkombmin',
                                'betbbkombdisk',
                                'betbbkombhd',
                                'betbbkombket',
                                'betbb5050min',
                                'betbb5050disk',
                                'betbb5050hd',
                                'betbb5050ket',
                                'betbbshiomin',
                                'betbbshiodisk',
                                'betbbshiohd',
                                'betbbshioket',
                                'betbbshomomin',
                                'betbbshomodisk',
                                'betbbshomohd',
                                'betbbshomoket',
                                'betbbkkempismin',
                                'betbbkkempisdisk',
                                'betbbkkempishd',
                                'betbbkkempisket',
                            ];
                            
                            $jenisbb = ['4D (TEPAT)', '4D (TERBALIK)', '3D (TEPAT)', '3D (TERBALIK)', '2D (TEPAT)', '2D (TERBALIK)', 'Colok Bebas', 'Colok Bebas 2D', 'Colok Bebas 2D 3 Angka', 'Colok Bebas 2D 4 Angka', 'Colok Naga', 'Colok Naga 4 Angka', 'Colok Jitu', 'Tengah Tepi', 'Dasar', 'Kombinasi', '50-50', 'Shio', 'Silang Homo', 'Kembang Kempis'];
                        @endphp
                        <input type="hidden" id="website" name="website" value="{{ $data->website }}">

                        <input type="hidden" id="tipe" name="tipe" value="{{ $tipe }}">
                        <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                        @foreach ($dataInputsbb as $index => $input)
                            @if ($index % 4 === 0)
                                <tr class="jenisbetdsk-row dynamic_row">
                                    <td><span class="name">{{ $jenisbb[$index / 4] }}</span></td>
                            @endif
                            <td><span class="name">{!! '<input type="text" id="' . $input . '" name="' . $input . '" value="' . $data->$input . '">' !!}</span></td>
                            @if (($index + 1) % 4 === 0)
                                </tr>
                            @endif
                        @endforeach

                        @if (count($dataInputsbb) % 4 !== 0)
                            </tr>
                        @endif
                </tbody>
            @elseif($tipe == 'datahadiahdsk')
                @php
                    $dataInputsbb = [
                        'disc4dmin',
                        'disc4ddisk',
                        'disc4dhd',
                        'disc4dket',
                        'disc3dmin',
                        'disc3ddisk',
                        'disc3dhd',
                        'disc3dket',
                        'disc2dblkmin',
                        'disc2dblkdisk',
                        'disc2dblkhd',
                        'disc2dblkket',
                        'disc2ddpnmin',
                        'disc2ddpndisk',
                        'disc2ddpnhd',
                        'disc2ddpnket',
                        'disc2dtghmin',
                        'disc2dtghdisk',
                        'disc2dtghhd',
                        'disc2dtghket',
                        'disccbmin',
                        'disccbdisk',
                        'disccbhd',
                        'disccbket',
                        'disccb2dmin',
                        'disccb2ddisk',
                        'disccb2dhd',
                        'disccb2dket',
                        'disccb2d3min',
                        'disccb2d3disk',
                        'disccb2d3hd',
                        'disccb2d3ket',
                        'disccb2d4min',
                        'disccb2d4disk',
                        'disccb2d4hd',
                        'disccb2d4ket',
                        'disccbnagamin',
                        'disccbnagadisk',
                        'disccbnagahd',
                        'disccbnagaket',
                        'disccbnaga4min',
                        'disccbnaga4disk',
                        'disccbnaga4hd',
                        'disccbnaga4ket',
                        'disccjitumin',
                        'disccjitudisk',
                        'disccjituhd',
                        'disccjituket',
                        'discttepimin',
                        'discttepidisk',
                        'discttepihd',
                        'discttepiket',
                        'discdsrmin',
                        'discdsrdisk',
                        'discdsrhd',
                        'discdsrket',
                        'disckombmin',
                        'disckombdisk',
                        'disckombhd',
                        'disckombket',
                        'disc5050min',
                        'disc5050disk',
                        'disc5050hd',
                        'disc5050ket',
                        'discshiomin',
                        'discshiodisk',
                        'discshiohd',
                        'discshioket',
                        'discshomomin',
                        'discshomodisk',
                        'discshomohd',
                        'discshomoket',
                        'disckkempismin',
                        'disckkempisdisk',
                        'disckkempishd',
                        'disckkempisket',
                    ];
                    
                    $jenisbb = ['4D', '3D', '2D Belakang', '2D Depan', '2D Tengah', 'Colok Bebas', 'Colok Bebas 2D', 'Colok Bebas 2D 3 Angka', 'Colok Bebas 2D 4 Angka', 'Colok Naga', 'Colok Naga 4 Angka', 'Colok Jitu', 'Tengah Tepi', 'Dasar', 'Kombinasi', '50-50', 'siho', 'Silang Homo', 'Kembang Kempis'];
                @endphp
                <input type="hidden" id="website" name="website" value="{{ $data->website }}">

                <input type="hidden" id="tipe" name="tipe" value="{{ $tipe }}">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                @foreach ($dataInputsbb as $index => $input)
                    @if ($index % 4 === 0)
                        <tr class="jenisbetdsk-row dynamic_row">
                            <td><span class="name">{{ $jenisbb[$index / 4] }}</span></td>
                    @endif
                    <td><span class="name">{!! '<input type="text" id="' . $input . '" name="' . $input . '" value="' . $data->$input . '">' !!}</span></td>
                    @if (($index + 1) % 4 === 0)
                        </tr>
                    @endif
                @endforeach

                @if (count($dataInputsbb) % 4 !== 0)
                    </tr>
                @endif
            @elseif($tipe == 'datahadiahfull')
                @php
                    $dataInputsbb = [
                        'full4dmin',
                        'full4ddisk',
                        'full4dhd',
                        'full4dket',
                        'full3dmin',
                        'full3ddisk',
                        'full3dhd',
                        'full3dket',
                        'full2dblkmin',
                        'full2dblkdisk',
                        'full2dblkhd',
                        'full2dblkket',
                        'fullcbmin',
                        'fullcbdisk',
                        'fullcbhd',
                        'fullcbket',
                        'fullcb2dmin',
                        'fullcb2ddisk',
                        'fullcb2dhd',
                        'fullcb2dket',
                        'fullcb2d3min',
                        'fullcb2d3disk',
                        'fullcb2d3hd',
                        'fullcb2d3ket',
                        'fullcb2d4min',
                        'fullcb2d4disk',
                        'fullcb2d4hd',
                        'fullcb2d4ket',
                        'fullcbnagamin',
                        'fullcbnagadisk',
                        'fullcbnagahd',
                        'fullcbnagaket',
                        'fullcbnaga4min',
                        'fullcbnaga4disk',
                        'fullcbnaga4hd',
                        'fullcbnaga4ket',
                        'fullcjitumin',
                        'fullcjitudisk',
                        'fullcjituhd',
                        'fullcjituket',
                        'fullttepimin',
                        'fullttepidisk',
                        'fullttepihd',
                        'fullttepiket',
                        'fulldsrmin',
                        'fulldsrdisk',
                        'fulldsrhd',
                        'fulldsrket',
                        'fullkombmin',
                        'fullkombdisk',
                        'fullkombhd',
                        'fullkombket',
                        'full5050min',
                        'full5050disk',
                        'full5050hd',
                        'full5050ket',
                        'fullshiomin',
                        'fullshiodisk',
                        'fullshiohd',
                        'fullshioket',
                        'fullshomomin',
                        'fullshomodisk',
                        'fullshomohd',
                        'fullshomoket',
                        'fullkkempismin',
                        'fullkkempisdisk',
                        'fullkkempishd',
                        'fullkkempisket',
                    ];
                    
                    $jenisbb = ['4D', '3D', '2D Belakang', 'Colok Bebas', 'Colok Bebas 2D', 'Colok Bebas 2D 3 Angka', 'Colok Bebas 2D 4 Angka', 'Colok Naga', 'Colok Naga 4 Angka', 'Colok Jitu', 'Tengah Tepi', 'Dasar', 'Kombinasi', '50-50', 'Shino', 'Silang Homo', 'Kembang Kempis'];
                @endphp
                <input type="hidden" id="website" name="website" value="{{ $data->website }}">

                <input type="hidden" id="tipe" name="tipe" value="{{ $tipe }}">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                @foreach ($dataInputsbb as $index => $input)
                    @if ($index % 4 === 0)
                        <tr class="jenisbetdsk-row dynamic_row">
                            <td><span class="name">{{ $jenisbb[$index / 4] }}</span></td>
                    @endif
                    <td><span class="name">{!! '<input type="text" id="' . $input . '" name="' . $input . '" value="' . $data->$input . '">' !!}</span></td>
                    @if (($index + 1) % 4 === 0)
                        </tr>
                    @endif
                @endforeach

                @if (count($dataInputsbb) % 4 !== 0)
                    </tr>
                @endif
            @elseif($tipe == 'datahadiahprize')
                @php
                    $dataInputsbb = [
                        'prize4dp1min',
                        'prize4dp1disk',
                        'prize4dp1hd',
                        'prize4dp1ket',
                        'prize4dp2min',
                        'prize4dp2disk',
                        'prize4dp2hd',
                        'prize4dp2ket',
                        'prize4dp3min',
                        'prize4dp3disk',
                        'prize4dp3hd',
                        'prize4dp3ket',
                        'prize3dp1min',
                        'prize3dp1disk',
                        'prize3dp1hd',
                        'prize3dp1ket',
                        'prize3dp2min',
                        'prize3dp2disk',
                        'prize3dp2hd',
                        'prize3dp2ket',
                        'prize3dp3min',
                        'prize3dp3disk',
                        'prize3dp3hd',
                        'prize3dp3ket',
                        'prize2dp1min',
                        'prize2dp1disk',
                        'prize2dp1hd',
                        'prize2dp1ket',
                        'prize2dp2min',
                        'prize2dp2disk',
                        'prize2dp2hd',
                        'prize2dp2ket',
                        'prize2dp3min',
                        'prize2dp3disk',
                        'prize2dp3hd',
                        'prize2dp3ket',
                        'prizecbmin',
                        'prizecbdisk',
                        'prizecbhd',
                        'prizecbket',
                        'prizecb2dmin',
                        'prizecb2ddisk',
                        'prizecb2dhd',
                        'prizecb2dket',
                        'prizecb2d3min',
                        'prizecb2d3disk',
                        'prizecb2d3hd',
                        'prizecb2d3ket',
                        'prizecb2d4min',
                        'prizecb2d4disk',
                        'prizecb2d4hd',
                        'prizecb2d4ket',
                        'prizecbnagamin',
                        'prizecbnagadisk',
                        'prizecbnagahd',
                        'prizecbnagaket',
                        'prizecbnaga4min',
                        'prizecbnaga4disk',
                        'prizecbnaga4hd',
                        'prizecbnaga4ket',
                        'prizecjitumin',
                        'prizecjitudisk',
                        'prizecjituhd',
                        'prizecjituket',
                        'prizettepimin',
                        'prizettepidisk',
                        'prizettepihd',
                        'prizettepiket',
                        'prizedsrmin',
                        'prizedsrdisk',
                        'prizedsrhd',
                        'prizedsrket',
                        'prizekombmin',
                        'prizekombdisk',
                        'prizekombhd',
                        'prizekombket',
                        'prize5050min',
                        'prize5050disk',
                        'prize5050hd',
                        'prize5050ket',
                        'prizeshiomin',
                        'prizeshiodisk',
                        'prizeshiohd',
                        'prizeshioket',
                        'prizeshomomin',
                        'prizeshomodisk',
                        'prizeshomohd',
                        'prizeshomoket',
                        'prizekkempismin',
                        'prizekkempisdisk',
                        'prizekkempishd',
                        'prizekkempisket',
                    ];
                    
                    $jenisbb = ['4D (PRIZE 1)', '4D (PRIZE 2)', '4D (PRIZE 3)', '3D (PRIZE 1)', '3D (PRIZE 2)', '3D (PRIZE 3)', '2D Depan/Tengah/Belakang (PRIZE 1)', '2D Depan/Tengah/Belakang (PRIZE 2)', '2D Depan/Tengah/Belakang (PRIZE 3)', 'Colok Bebas', 'Colok Bebas 2D', 'Colok Bebas 2D 3 Angka', 'Colok Bebas 2D 4 Angka', 'Colok Naga', 'Colok Naga 4 Angka', 'Colok Jitu', 'Tengah Tepi', 'Dasar', 'Kombinasi', '50-50', 'Siho', 'Silang Homo', 'Kembang Kempis'];
                @endphp
                <input type="hidden" id="website" name="website" value="{{ $data->website }}">

                <input type="hidden" id="tipe" name="tipe" value="{{ $tipe }}">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                @foreach ($dataInputsbb as $index => $input)
                    @if ($index % 4 === 0)
                        <tr class="jenisbetdsk-row dynamic_row">
                            <td><span class="name">{{ $jenisbb[$index / 4] }}</span></td>
                    @endif
                    <td><span class="name">{!! '<input type="text" id="' . $input . '" name="' . $input . '" value="' . $data->$input . '">' !!}</span></td>
                    @if (($index + 1) % 4 === 0)
                        </tr>
                    @endif
                @endforeach

                @if (count($dataInputsbb) % 4 !== 0)
                    </tr>
                @endif
            @elseif($tipe == 'datahadiahv2')
                @php
                    $dataInputsbb = [
                        'betv24dmin',
                        'betv24ddisk',
                        'betv24dhd',
                        'betv24dket',
                        'betv23dmin',
                        'betv23ddisk',
                        'betv23dhd',
                        'betv23dket',
                        'betv22dmin',
                        'betv22ddisk',
                        'betv22dhd',
                        'betv22dket',
                        'betv2cbmin',
                        'betv2cbdisk',
                        'betv2cbhd',
                        'betv2cbket',
                        'betv2cb2dmin',
                        'betv2cb2ddisk',
                        'betv2cb2dhd',
                        'betv2cb2dket',
                        'betv2cb2d3min',
                        'betv2cb2d3disk',
                        'betv2cb2d3hd',
                        'betv2cb2d3ket',
                        'betv2cb2d4min',
                        'betv2cb2d4disk',
                        'betv2cb2d4hd',
                        'betv2cb2d4ket',
                        'betv2cbnagamin',
                        'betv2cbnagadisk',
                        'betv2cbnagahd',
                        'betv2cbnagaket',
                        'betv2cbnaga4min',
                        'betv2cbnaga4disk',
                        'betv2cbnaga4hd',
                        'betv2cbnaga4ket',
                        'betv2cjitumin',
                        'betv2cjitudisk',
                        'betv2cjituhd',
                        'betv2cjituket',
                        'betv2ttepimin',
                        'betv2ttepidisk',
                        'betv2ttepihd',
                        'betv2ttepiket',
                        'betv2dsrmin',
                        'betv2dsrdisk',
                        'betv2dsrhd',
                        'betv2dsrket',
                        'betv2kombmin',
                        'betv2kombdisk',
                        'betv2kombhd',
                        'betv2kombket',
                        'betv25050min',
                        'betv25050disk',
                        'betv25050hd',
                        'betv25050ket',
                        'betv2shiomin',
                        'betv2shiodisk',
                        'betv2shiohd',
                        'betv2shioket',
                        'betv2shomomin',
                        'betv2shomodisk',
                        'betv2shomohd',
                        'betv2shomoket',
                        'betv2kkempismin',
                        'betv2kkempisdisk',
                        'betv2kkempishd',
                        'betv2kkempisket',
                    ];
                    
                    $jenisbb = ['4D', '3D', '2D', 'Colok Bebas', 'Colok Bebas 2D', 'Colok Bebas 2D 3 Angka', 'Colok Bebas 2D 4 Angka', 'Colok Naga', 'Colok Naga 4 Angka', 'Colok Jitu', 'Tengah Tepi', 'Dasar', 'Kombinasi', '50-50', 'Siho', 'Silang Homo', 'Kembang Kempis'];
                @endphp
                <input type="hidden" id="website" name="website" value="{{ $data->website }}">

                <input type="hidden" id="tipe" name="tipe" value="{{ $tipe }}">
                <input type="hidden" id="id" name="id" value="{{ $data->id }}">
                @foreach ($dataInputsbb as $index => $input)
                    @if ($index % 4 === 0)
                        <tr class="jenisbetdsk-row dynamic_row">
                            <td><span class="name">{{ $jenisbb[$index / 4] }}</span></td>
                    @endif
                    <td><span class="name">{!! '<input type="text" id="' . $input . '" name="' . $input . '" value="' . $data->$input . '">' !!}</span></td>
                    @if (($index + 1) % 4 === 0)
                        </tr>
                    @endif
                @endforeach

                @if (count($dataInputsbb) % 4 !== 0)
                    </tr>
                @endif
                @endif
            </table>
            <div class="sec_button_form">
                <button class="sec_botton btn_submit" type="submit" id="Contactsubmit"
                    {{ $disabled }}>Submit</button>
                <a href="#" onclick="handleButtonCancelClick(this.id)" id="cancel"><button type="button"
                        class="sec_botton btn_cancel">Cancel</button></a>
            </div>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#form').submit(function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            $.ajax({
                url: "/web/hadiah/update",
                method: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(result) {
                    if (result.errors) {
                        $('.alert-danger').html('');

                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<li>' + value + '</li>');
                        });
                    } else {
                        $('.alert-danger').hide();

                        Swal.fire({
                            icon: 'success',
                            title: 'Contactikasi berhasil dikirim!',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(function() {
                            var namabo =
                                "<?php echo $website; ?>"; // Perbaiki variabel dari $namabo menjadi namabo
                            $('.aplay_code').load('/web/hadiah/' +
                                namabo, // Perbaiki dari $namabo menjadi namabo
                                function() {
                                    adjustElementSize();
                                    localStorage.setItem('lastPage',
                                        '/web/hadiah/' + namabo
                                    ); // Perbaiki dari '/web/hadiah' menjadi '/web/hadiah/' + namabo
                                });
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Terjadi kesalahan saat mengirim contact.'
                    });

                    console.log(xhr.responseText);
                }
            });
        });

    });

    $(document).off('click', '#cancel').on('click', '#cancel', function(event) {
        event.preventDefault();
        var namabo = "<?php echo $website; ?>";
        var requestParam = "tipe=<?php echo $tipe; ?>";
        $('.aplay_code').load('/web/hadiah/' + namabo + '?' + requestParam, function() {
            adjustElementSize();
            localStorage.setItem('lastPage', '/web/hadiah/' + namabo + '?' + requestParam);
        });
    });
</script>
