<div class="sec_logo">
    <a href="" id="codeDashboardLink"><img class="gmb_logo" src="{{ asset('img/utama/Logo-Lotto21.png') }}"
            alt="l21" /></a>
    <svg id="icon_expand" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-category"
        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
        <path d="M4 4h6v6h-6z" />
        <path d="M14 4h6v6h-6z" />
        <path d="M4 14h6v6h-6z" />
        <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
    </svg>
</div>
<div class="sec_list_sidemenu">
    <div class="bagsearch side">
        <div class="grubsearchnav">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" viewBox="0 0 24 24"
                stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                <path d="M21 21l-6 -6" />
            </svg>
            <input type="text" placeholder="Cari Tabel..." id="searchTabel" />
        </div>
    </div>
    @if (auth()->user()->divisi == 'superadmin')
        <div class="nav_group">
            <span class="title_Nav">General</span>
            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                            <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                            <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                        </svg>
                        <span class="nav_title1">Dashboard</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" id="codeDashboardLink">
                        <div class="list_subdata active">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Dashboard</span>
                        </div>
                    </a>
                    <a href="#" id="testloader">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Data IP</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Data Users</span>
                        </div>
                    </a>
                    <a href="#">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">History Activity Users</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endif
    <div class="nav_group">
        <span class="title_Nav">WEBSITE L21</span>
        <div class="list_sidejsx">
            @if (auth()->user()->divisi == 'superadmin')
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="tablewebsite"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-world-www"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M19.5 7a9 9 0 0 0 -7.5 -4a8.991 8.991 0 0 0 -7.484 4" />
                            <path d="M11.5 3a16.989 16.989 0 0 0 -1.826 4" />
                            <path d="M12.5 3a16.989 16.989 0 0 1 1.828 4" />
                            <path d="M19.5 17a9 9 0 0 1 -7.5 4a8.991 8.991 0 0 1 -7.484 -4" />
                            <path d="M11.5 21a16.989 16.989 0 0 1 -1.826 -4" />
                            <path d="M12.5 21a16.989 16.989 0 0 0 1.828 -4" />
                            <path d="M2 10l1 4l1.5 -4l1.5 4l1 -4" />
                            <path d="M17 10l1 4l1.5 -4l1.5 4l1 -4" />
                            <path d="M9.5 10l1 4l1.5 -4l1.5 4l1 -4" />
                        </svg>
                        <span class="nav_title1">Tabel Website</span>
                    </a>
                </div>
            @endif
            @if (auth()->user()->divisi == 'superadmin' || auth()->user()->divisi == 'maintenance')
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-gift"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 8m0 1a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1z" />
                            <path d="M12 8l0 13" />
                            <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                            <path
                                d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" />
                        </svg>
                        <span class="nav_title1">Tabel Hadiah & Diskon</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    @foreach (getDataWebsite() as $index => $item)
                        <a href="#" class="Menuleft" data-jenismenu="web"
                            data-menuid="hadiah/{{ strtolower($item) }}" data-menu1="WEBSITE L21"
                            data-menu2="Tabel Hadiah & Diskon" data-menu3="{{ strtolower($item) }}">
                            <div class="list_subdata">
                                <div class="dotsub"></div>
                                <span class="sub_title1">{{ ucfirst(strtolower($item)) }}</span>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-photo-search"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M15 8h.01" />
                            <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />
                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M20.2 20.2l1.8 1.8" />
                            <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l2 2" />
                        </svg>
                        <span class="nav_title1">Tabel Media</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediaslider"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Slider">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Slider</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="medianews"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="News">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">News</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediaevent"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Event">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Event</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediastream"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Stream">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Stream</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="medialivestream"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Kontent Live Stream">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Konten Live Stream</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediapanduan"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Panduan">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Panduan</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediagalleryfoto"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Gallery Foto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Gallery Foto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="mediagalleryvideo"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Media" data-menu3="Gallery Video">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Gallery Video</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="promosiofficial"
                        data-menu1="WEBSITE L21" data-menu2="Promosi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tags"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M7.859 6h-2.834a2.025 2.025 0 0 0 -2.025 2.025v2.834c0 .537 .213 1.052 .593 1.432l6.116 6.116a2.025 2.025 0 0 0 2.864 0l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-6.117 -6.116a2.025 2.025 0 0 0 -1.431 -.593z" />
                            <path d="M17.573 18.407l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-7.117 -7.116" />
                            <path d="M6 9h-.01" />
                        </svg>
                        <span class="nav_title1">Promosi</span>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="jadwalpools"
                        data-menu1="WEBSITE L21" data-menu2="Tabel Jadwal Pools">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-time"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11.795 21h-6.795a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v4" />
                            <path d="M18 18m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                            <path d="M15 3v4" />
                            <path d="M7 3v4" />
                            <path d="M3 11h16" />
                            <path d="M18 16.496v1.504l1 1" />
                        </svg>
                        <span class="nav_title1">Tabel Jadwal Pools</span>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="contactl21"
                        data-menu1="WEBSITE L21" data-menu2="Contact">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-address-book"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M20 6v12a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2z">
                            </path>
                            <path d="M10 16h6"></path>
                            <path d="M13 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                            <path d="M4 8h3"></path>
                            <path d="M4 12h3"></path>
                            <path d="M4 16h3"></path>
                        </svg>
                        <span class="nav_title1">Contact</span>
                    </a>
                </div>
            @endif
        </div>
        @if (auth()->user()->divisi == 'superadmin')
            <div class="data_sidejsx">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-brand-google-analytics" viewBox="0 0 24 24"
                        stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path
                            d="M10 9m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v9.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z" />
                        <path
                            d="M17 3m0 1.105a1.105 1.105 0 0 1 1.105 -1.105h1.79a1.105 1.105 0 0 1 1.105 1.105v15.79a1.105 1.105 0 0 1 -1.105 1.105h-1.79a1.105 1.105 0 0 1 -1.105 -1.105z" />
                        <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    </svg>
                    <span class="nav_title1">Data Analytics</span>
                    <div class="arrow_side">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </div>
                </a>
            </div>

            <div class="sub_data_sidejsx">
                <a href="#" id="a1" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Arwanatoto</span>
                    </div>
                </a>
                <a href="#" id="a2" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Duogaming</span>
                    </div>
                </a>
                <a href="#" id="a3" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Jeeptoto</span>
                    </div>
                </a>
                <a href="#" id="a4" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Tstoto</span>
                    </div>
                </a>
                <a href="#" id="a5" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Doyantoto</span>
                    </div>
                </a>
                <a href="#" id="a6" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Arta4d</span>
                    </div>
                </a>
                <a href="#" id="a7" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Neon4d</span>
                    </div>
                </a>
                <a href="#" id="a8" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Zara4d</span>
                    </div>
                </a>
                <a href="#" id="a9" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Roma4d</span>
                    </div>
                </a>
                <a href="#" id="a10" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Nero4d</span>
                    </div>
                </a>
                <a href="#" id="a11" class="loadanalitic">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Toke4d</span>
                    </div>
                </a>
            </div>
        @endif
    </div>
    @if (auth()->user()->divisi == 'superadmin')
        <div class="nav_group">
            <span class="title_Nav">PROJECT</span>
            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-nintendo"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 20v-16h-3a4 4 0 0 0 -4 4v8a4 4 0 0 0 4 4h3z" />
                            <path d="M14 20v-16h3a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-3z" />
                            <circle cx="17.5" cy="15.5" r="1" fill="currentColor" />
                            <circle cx="6.5" cy="8.5" r="1" fill="currentColor" />
                        </svg>
                        <span class="nav_title1">RTP</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="pp" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="Pragmatic">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Pragmatic</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="hb" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="Habanero">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Habanero</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="mic" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="Microgaming">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Microgaming</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="rtp" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="PG Soft">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">PG Soft</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="ttr" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="Top Gaming">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Top Gaming</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="idn" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="IDN Slot">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">IDN Slot</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="rtp" data-menuid="sg" data-menu1="PROJECT"
                        data-menu2="RTP" data-menu3="GMW">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">GMW</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="web" data-menuid="promosi"
                        data-menu1="PROJECT" data-menu2="Promosi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-tags"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                                d="M7.859 6h-2.834a2.025 2.025 0 0 0 -2.025 2.025v2.834c0 .537 .213 1.052 .593 1.432l6.116 6.116a2.025 2.025 0 0 0 2.864 0l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-6.117 -6.116a2.025 2.025 0 0 0 -1.431 -.593z" />
                            <path d="M17.573 18.407l2.834 -2.834a2.025 2.025 0 0 0 0 -2.864l-7.117 -7.116" />
                            <path d="M6 9h-.01" />
                        </svg>
                        <span class="nav_title1">Promosi</span>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-sport-billard"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
                        </svg>
                        <span class="nav_title1">SYAIR</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="syair" data-menuid="tablesyair"
                        data-menu1="PROJECT" data-menu2="Syair" data-menu3="Tabel Syair">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Table Syair</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="syair" data-menuid="titlebody"
                        data-menu1="PROJECT" data-menu2="Syair" data-menu3="Title & Body Syair">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Title & Body Syair</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-device-mobile-search" viewBox="0 0 24 24"
                            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 21h-4a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v6" />
                            <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                            <path d="M20.2 20.2l1.8 1.8" />
                            <path d="M11 4h2" />
                            <path d="M12 17v.01" />
                        </svg>
                        <span class="nav_title1">APK</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="apk" data-menuid="notifikasi"
                        data-menu1="PROJECT" data-menu2="APK" data-menu3="Notifikasi APK">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Notifikasi APK</span>
                        </div>
                    </a>
                    <a href="#"class="Menuleft" data-jenismenu="apk" data-menuid="contact"
                        data-menu1="PROJECT" data-menu2="APK" data-menu3="Contact APK">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Contact APK</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="apk" data-menuid="link" data-menu1="PROJECT"
                        data-menu2="APK" data-menu3="Link APK">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Link APK</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="apk" data-menuid="setting"
                        data-menu1="PROJECT" data-menu2="APK" data-menu3="Setting APK">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Setting APK</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="apk" data-menuid="pemberitahuan"
                        data-menu1="PROJECT" data-menu2="APK" data-menu3="Pemberitahuan APK">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Pemberitahuan APK</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="apk" data-menuid="bo" data-menu1="PROJECT"
                        data-menu2="APK" data-menu3="List Website">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">List Website</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-list-numbers"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M11 6h9" />
                            <path d="M11 12h9" />
                            <path d="M12 18h8" />
                            <path d="M4 16a2 2 0 1 1 4 0c0 .591 -.5 1 -1 1.5l-3 2.5h4" />
                            <path d="M6 10v-6l-2 2" />
                        </svg>
                        <span class="nav_title1">Paito</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="paitoback" data-menuid="pasaran"
                        data-menu1="PROJECT" data-menu2="Paito" data-menu3="Pasaran Paito">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Pasaran Paito</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="paitoback" data-menuid="result"
                        data-menu1="PROJECT" data-menu2="APK" data-menu3="Result Paito">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Result Paito</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-carousel-horizontal" viewBox="0 0 24 24"
                            stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 5m0 1a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1z" />
                            <path d="M22 17h-1a1 1 0 0 1 -1 -1v-8a1 1 0 0 1 1 -1h1" />
                            <path d="M2 17h1a1 1 0 0 0 1 -1v-8a1 1 0 0 0 -1 -1h-1" />
                        </svg>
                        <span class="nav_title1">Slider Page</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="slider" data-menuid="banner"
                        data-menu1="PROJECT" data-menu2="Slider Page" data-menu3="Banner Slider">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Banner Slider</span>
                        </div>
                    </a>
                </div>

                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-vip"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 5h18" />
                            <path d="M3 19h18" />
                            <path d="M4 9l2 6h1l2 -6" />
                            <path d="M12 9v6" />
                            <path d="M16 15v-6h2a2 2 0 1 1 0 4h-2" />
                        </svg>
                        <span class="nav_title1">VIP Page</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Arwanatotovip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Arwanatoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Arwanatoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Arta4dvip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Arta4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Arta4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Doyantotovip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Doyantoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Doyantoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Jeeptotovip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Jeeptoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Jeeptoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Neon4dvip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Neon4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Neon4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Nero4dvip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Nero4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Nero4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Roma4dvip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Roma4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Roma4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Tstotovip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Tstoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Tstoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="vip" data-menuid="member/Zara4dvip"
                        data-menu1="PROJECT" data-menu2="VIP Page" data-menu3="Zara4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Zara4d</span>
                        </div>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-link"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 15l6 -6"></path>
                            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464"></path>
                            <path
                                d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463">
                            </path>
                        </svg>
                        <span class="nav_title1">Link PGA</span>
                        <div class="arrow_side">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                                viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M13 18l6 -6" />
                                <path d="M13 6l6 6" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="sub_data_sidejsx">
                    <a href="#" id="#Pga_arwana"class="Menuleft" data-jenismenu="link"
                        data-menuid="pga/arwanatoto" data-menu1="PROJECT" data-menu2="Link PGA"
                        data-menu3="Arwanatoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Arwanatoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/arta4d"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Arta4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Arta4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/doyantoto"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Doyantoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Doyantoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/jeeptoto"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Jeeptoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Jeeptoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/neon4d"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Neon4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Neon4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/nero4d"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Nero4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Nero4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/roma4d"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Roma4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Roma4d</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/tstoto"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Tstoto">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Tstoto</span>
                        </div>
                    </a>
                    <a href="#" class="Menuleft" data-jenismenu="link" data-menuid="pga/zara4d"
                        data-menu1="PROJECT" data-menu2="Link PGA" data-menu3="Zara4d">
                        <div class="list_subdata">
                            <div class="dotsub"></div>
                            <span class="sub_title1">Zara4d</span>
                        </div>
                    </a>

                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="" data-menuid="bannermodal"
                        data-menu1="PROJECT" data-menu2="Banner Modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-snowflake"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 4l2 1l2 -1"></path>
                            <path d="M12 2v6.5l3 1.72"></path>
                            <path d="M17.928 6.268l.134 2.232l1.866 1.232"></path>
                            <path d="M20.66 7l-5.629 3.25l.01 3.458"></path>
                            <path d="M19.928 14.268l-1.866 1.232l-.134 2.232"></path>
                            <path d="M20.66 17l-5.629 -3.25l-2.99 1.738"></path>
                            <path d="M14 20l-2 -1l-2 1"></path>
                            <path d="M12 22v-6.5l-3 -1.72"></path>
                            <path d="M6.072 17.732l-.134 -2.232l-1.866 -1.232"></path>
                            <path d="M3.34 17l5.629 -3.25l-.01 -3.458"></path>
                            <path d="M4.072 9.732l1.866 -1.232l.134 -2.232"></path>
                            <path d="M3.34 7l5.629 3.25l2.99 -1.738"></path>
                        </svg>
                        <span class="nav_title1">Banner Modal</span>
                    </a>
                </div>
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="" data-menuid="mobilenotice"
                        data-menu1="PROJECT" data-menu2="Mobile Notice">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-snowflake"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M10 4l2 1l2 -1"></path>
                            <path d="M12 2v6.5l3 1.72"></path>
                            <path d="M17.928 6.268l.134 2.232l1.866 1.232"></path>
                            <path d="M20.66 7l-5.629 3.25l.01 3.458"></path>
                            <path d="M19.928 14.268l-1.866 1.232l-.134 2.232"></path>
                            <path d="M20.66 17l-5.629 -3.25l-2.99 1.738"></path>
                            <path d="M14 20l-2 -1l-2 1"></path>
                            <path d="M12 22v-6.5l-3 -1.72"></path>
                            <path d="M6.072 17.732l-.134 -2.232l-1.866 -1.232"></path>
                            <path d="M3.34 17l5.629 -3.25l-.01 -3.458"></path>
                            <path d="M4.072 9.732l1.866 -1.232l.134 -2.232"></path>
                            <path d="M3.34 7l5.629 3.25l2.99 -1.738"></path>
                        </svg>
                        <span class="nav_title1">Mobile Notice</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
    {{-- <div class="nav_group">
        <span class="title_Nav">Component</span>
        <div class="list_sidejsx">
            <div class="data_sidejsx">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-components"
                        viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M3 12l3 3l3 -3l-3 -3z" />
                        <path d="M15 12l3 3l3 -3l-3 -3z" />
                        <path d="M9 6l3 3l3 -3l-3 -3z" />
                        <path d="M9 18l3 3l3 -3l-3 -3z" />
                    </svg>
                    <span class="nav_title1">Components</span>
                    <div class="arrow_side">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-right"
                            viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M5 12l14 0" />
                            <path d="M13 18l6 -6" />
                            <path d="M13 6l6 6" />
                        </svg>
                    </div>
                </a>
            </div>
            <div class="sub_data_sidejsx">
                <a href="#" id="codeBoxLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Box</span>
                    </div>
                </a>
                <a href="#" id="codeTableLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Tabel</span>
                    </div>
                </a>
                <a href="#" id="codeFormLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Form</span>
                    </div>
                </a>
                <a href="#" id="codeModalLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Modal</span>
                    </div>
                </a>
                <a href="#" id="codeButtonLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Button</span>
                    </div>
                </a>
                <a href="#" id="codeCardLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Card</span>
                    </div>
                </a>
                <a href="#" id="codeOtherLink">
                    <div class="list_subdata">
                        <div class="dotsub"></div>
                        <span class="sub_title1">Code_Other</span>
                    </div>
                </a>
            </div>
        </div>
    </div> --}}
    @if (auth()->user()->divisi == 'superadmin')
        <div class="nav_group">
            <span class="title_Nav">Config</span>
            <div class="list_sidejsx">
                <div class="data_sidejsx">
                    <a href="#" class="Menuleft" data-jenismenu="user" data-menuid="/" data-menu1="CONFIG"
                        data-menu2="Promosi">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path
                                d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                            </path>
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                        </svg>
                        <span class="nav_title1">User Management</span>
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
