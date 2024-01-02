<?php

use App\Http\Controllers\DashboardAdminController;

//bagian akademik
use App\Http\Controllers\AkTahunAjarSemesterController;
use App\Http\Controllers\AkProfilSekolahController;
use App\Http\Controllers\AkProgramKeahlianController;
use App\Http\Controllers\AkGuruTataUsahaController;
use App\Http\Controllers\AkKepalaSekolahController;
use App\Http\Controllers\AkWakilKepsekController;
use App\Http\Controllers\AkKaprodiController;
use App\Http\Controllers\AkJabatanLainController;
use App\Http\Controllers\AkKelasController;
use App\Http\Controllers\AkWaliKelasController;
use App\Http\Controllers\AkPesertaDidikController;

//bagian proses kbm
use App\Http\Controllers\KbmMataPelajaranController;
use App\Http\Controllers\KbmCPTPController;
use App\Http\Controllers\KbmSiswaPerKelasController;
use App\Http\Controllers\KbmBagiJamNgajarController;
use App\Http\Controllers\KbmPerKelasController;
use App\Http\Controllers\KbmPerGuruController;
use App\Http\Controllers\KbmPenilaianController;
use App\Http\Controllers\KbmRemedialController;

//bagian guru mapel
use App\Http\Controllers\GuruAdministrasiController;
use App\Http\Controllers\GuruDataKBMController;
use App\Http\Controllers\GuruCPTPController;
use App\Http\Controllers\GuruAbsensiSiswaController;
use App\Http\Controllers\GuruPenilaianController;
use App\Http\Controllers\GuruRemedialSiswaController;
use App\Http\Controllers\GuruArsipController;

//bagian wali kelas
use App\Http\Controllers\WkDataKelasController;
use App\Http\Controllers\WkIdentitasSiswaController;
use App\Http\Controllers\WkAbsensiController;
use App\Http\Controllers\WkEskulController;
use App\Http\Controllers\WkPrestasiController;
use App\Http\Controllers\WkPrakerinController;
use App\Http\Controllers\WkCatatanController;
use App\Http\Controllers\WkRaporController;

use App\Http\Controllers\BimbinganKarirController;


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [DashboardAdminController::class, 'index'])->name('beranda');

Route::get('/ak-tahunajar', [AkTahunAjarSemesterController::class, 'index'])->name('tahu_najar');
Route::get('/ak-profil-sekolah', [AkProfilSekolahController::class, 'index'])->name('profil_sekolah');
Route::get('/ak-program-keahlian', [AkProgramKeahlianController::class, 'index'])->name('program_keahlian');
Route::get('/ak-guru-tata-usaha', [AkGuruTataUsahaController::class, 'index'])->name('guru_tata_usaha');
Route::get('/ak-kepala-sekolah', [AkKepalaSekolahController::class, 'index'])->name('kepsek');
Route::get('/ak-wakasek', [AkWakilKepsekController::class, 'index'])->name('wakasek');
Route::get('/ak-kaprodi', [AkKaprodiController::class, 'index'])->name('kaprodi');
Route::get('/ak-jabatan-lain', [AkJabatanLainController::class, 'index'])->name('jabatan_lain');
Route::get('/ak-kelas', [AkKelasController::class, 'index'])->name('kelas');
Route::get('/ak-wali-kelas', [AkWaliKelasController::class, 'index'])->name('wali_kelas');
Route::get('/ak-peserta-didik', [AkPesertaDidikController::class, 'index'])->name('peserta_didik');

//proses kbm
Route::get('/kbm-mata-pelajaran', [KbmMataPelajaranController::class, 'index'])->name('matapelajaran');
Route::get('/kbm-cp-tp', [KbmCPTPController::class, 'index'])->name('cptp');
Route::get('/kbm-siswa-perkelas', [KbmSiswaPerKelasController::class, 'index'])->name('siswa_perkelas');
Route::get('/kbm-bagi-jam-kbm', [KbmBagiJamNgajarController::class, 'index'])->name('bagi_jam_kbm');
Route::get('/kbm-proses-perkelas', [KbmPerKelasController::class, 'index'])->name('kbm_perkelas');
Route::get('/kbm-proses-perguru', [KbmPerGuruController::class, 'index'])->name('kbm_perguru');
Route::get('/kbm-proses-penilaian', [KbmPenilaianController::class, 'index'])->name('kbm_penilaian');
Route::get('/kbm-proses-remedial', [KbmRemedialController::class, 'index'])->name('kbm_remedial');

//guru
Route::get('/guru-administrasi', [GuruAdministrasiController::class, 'index'])->name('administrasi_guru');
Route::get('/guru-data-kbm', [GuruDataKBMController::class, 'index'])->name('data_kbm_guru');
Route::get('/guru-cp-tp', [GuruCPTPController::class, 'index'])->name('cp_tp_guru');
Route::get('/guru-kbm-proses-penilaian', [GuruPenilaianController::class, 'index'])->name('nilai_guru');
Route::get('/guru-kbm-proses-absensi', [GuruAbsensiSiswaController::class, 'index'])->name('absensi_guru');
Route::get('/guru-kbm-proses-remedial', [GuruRemedialSiswaController::class, 'index'])->name('remedial_guru');
Route::get('/guru-kbm-proses-arsip', [GuruArsipController::class, 'index'])->name('arsip_guru');

//wali kelas
Route::get('/wk-data-kelas', [WkDataKelasController::class, 'index'])->name('wk_data_kelas');
Route::get('/wk-ident-siswa', [WkIdentitasSiswaController::class, 'index'])->name('wk_ident_siswa');
Route::get('/wk-absensi-siswa', [WkAbsensiController::class, 'index'])->name('wk_abensi_siswa');
Route::get('/wk-eskul-siswa', [WkEskulController::class, 'index'])->name('wk_eskul_siswa');
Route::get('/wk-prestasi-siswa', [WkPrestasiController::class, 'index'])->name('wk_prestasi_siswa');
Route::get('/wk-prakerin-siswa', [WkPrakerinController::class, 'index'])->name('wk_prakerin_siswa');
Route::get('/wk-catatan-siswa', [WkCatatanController::class, 'index'])->name('wk_catatan_siswa');
Route::get('/wk-raport-siswa', [WkRaporController::class, 'index'])->name('wk_raport_siswa');

Route::get('/bp-bk', [BimbinganKarirController::class, 'index'])->name('bpbk');
