<li class="nav-title">Tools & Website</li>
<li class="{{ Request::is('tools-*') ? 'active open' : '' }}">
    <a href="#" title="Tools App" data-filter-tags="tools app">
        <i class="fal fa-cog"></i>
        <span class="nav-link-text" data-i18n="nav.tools_app">Tools App</span>
    </a>
    <ul>
        <li class="{{ Request::is('tools-dashboard-web') ? 'active' : '' }}">
            <a href="/websakola" title="Profil Aplikasi" data-filter-tags="tools dashboard web">
                <span class="nav-link-text" data-i18n="nav.tools_dashboard_web">Dashboard Web</span>
            </a>
        </li>
        <li class="{{ Request::is('tools-profil-aplikasi') ? 'active' : '' }}">
            <a href="/tools-profil-aplikasi" title="Profil Aplikasi" data-filter-tags="tools profil aplikasi">
                <span class="nav-link-text" data-i18n="nav.tools_profil_aplikasi">Profil Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools-data*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Data Master" data-filter-tags="tols data master">
                <span class="nav-link-text" data-i18n="nav.tools_data_master">Data Master</span>
            </a>
            <ul>
                <li class="{{ Request::is('tools-data-jabatan') ? 'active' : '' }}">
                    <a href="/tools-data-jabatan" title="Jenis Jabatan" data-filter-tags="data master jenis jabatan">
                        <span class="nav-link-text" data-i18n="nav.data_master_jenis_jabatan">Jenis Jabatan</span>
                    </a>
                </li>
                <li class="{{ Request::is('tools-data-eskul') ? 'active' : '' }}">
                    <a href="/tools-data-eskul" title="Jenis Eskul" data-filter-tags="data master jenis eskul">
                        <span class="nav-link-text" data-i18n="nav.data_master_jenis_eskul">Jenis Eskul</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('tools-manajemen-users') ? 'active' : '' }}">
            <a href="/tools-manajemen-users" title="Manajemen Users" data-filter-tags="tools manajemen users">
                <span class="nav-link-text" data-i18n="nav.tools_manajemen_users">Manajemen Users</span>
            </a>
        </li>
        <li class="{{ Request::is('tools-opsi-aplikasi') ? 'active' : '' }}">
            <a href="/tools-opsi-aplikasi" title="Opsi Aplikasi" data-filter-tags="tools opsi aplikasi">
                <span class="nav-link-text" data-i18n="nav.tools_opsi_aplikasi">Opsi Aplikasi</span>
            </a>
        </li>
        <li class="{{ Request::is('tools-ekspor-impor') ? 'active' : '' }}">
            <a href="/tools-ekspor-impor" title="Ekspor Impor" data-filter-tags="tools ekspor impor">
                <span class="nav-link-text" data-i18n="nav.tools_ekspor_impor">Ekspor Impor</span>
            </a>
        </li>
        <li class="{{ Request::is('tools-statistik-data') ? 'active' : '' }}">
            <a href="/tools-statistik-data" title="Statistik Data" data-filter-tags="tools statistik data">
                <span class="nav-link-text" data-i18n="nav.tools_statistik_data">Statistik Data</span>
            </a>
        </li>

    </ul>
</li>
<li class="{{ Request::is('web-*') ? 'active open' : '' }}">
    <a href="#" title="Manajemen Website" data-filter-tags="manajemen website">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.manajemen_website">Manajemen Website</span>
    </a>
    <ul>
        <li class="{{ Request::is('web-pengumuman') ? 'active' : '' }}">
            <a href="/web-pengumuman" title="Pengumuman" data-filter-tags="web pengumuman">
                <span class="nav-link-text" data-i18n="nav.web_pengumuman">Pengumuman</span>
            </a>
        </li>
        <li class="{{ Request::is('web-kesiswaan') ? 'active' : '' }}">
            <a href="/web-kesiswaan" title="Kesiswaan" data-filter-tags="web kesiswaan">
                <span class="nav-link-text" data-i18n="nav.web_kesiswaan">Kesiswaan</span>
            </a>
        </li>
        <li class="{{ Request::is('web-sarana-prasarana') ? 'active' : '' }}">
            <a href="/web-sarana-prasarana" title="Sarana Prasarana" data-filter-tags="web sarana prasarana">
                <span class="nav-link-text" data-i18n="nav.web_sarana_prasarana">Sarana Prasarana</span>
            </a>
        </li>
        <li class="{{ Request::is('web-agenda-kegiatan') ? 'active' : '' }}">
            <a href="/web-agenda-kegiatan" title="Agenda Kegiatan" data-filter-tags="web agenda kegiatan">
                <span class="nav-link-text" data-i18n="nav.web_agenda_kegiatan">Agenda Kegiatan</span>
            </a>
        </li>
        <li class="{{ Request::is('web-blog') ? 'active' : '' }}">
            <a href="/web-blog" title="Blog" data-filter-tags="web blog">
                <span class="nav-link-text" data-i18n="nav.web_blog">Blog / Berita</span>
            </a>
        </li>
        <li class="{{ Request::is('web-galeri') ? 'active' : '' }}">
            <a href="/web-galeri" title="Galeri" data-filter-tags="web galeri">
                <span class="nav-link-text" data-i18n="nav.web_galeri">Galeri</span>
            </a>
        </li>
        <li class="{{ Request::is('web-catatan-personal') ? 'active' : '' }}">
            <a href="/web-catatan-personal" title="Catatan Personal" data-filter-tags="web catatan personal">
                <span class="nav-link-text" data-i18n="nav.web_catatan_personal">Statistik Data</span>
            </a>
        </li>
    </ul>
</li>
