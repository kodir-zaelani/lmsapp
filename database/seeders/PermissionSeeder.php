<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //permission for dashboard
        Permission::create(['name' => 'dashboard.index']);

         //permission for settings
        Permission::create(['name' => 'settings.index']);
        Permission::create(['name' => 'settings.create']);
        Permission::create(['name' => 'settings.edit']);
        Permission::create(['name' => 'settings.delete']);

        //permission for testimonial
        Permission::create(['name' => 'testimonial.index']);
        Permission::create(['name' => 'testimonial.create']);
        Permission::create(['name' => 'testimonial.edit']);
        Permission::create(['name' => 'testimonial.delete']);

        //permission for greetings
        Permission::create(['name' => 'greetings.index']);
        Permission::create(['name' => 'greetings.create']);
        Permission::create(['name' => 'greetings.edit']);
        Permission::create(['name' => 'greetings.delete']);

        //permission for editorial
        Permission::create(['name' => 'editorial.index']);
        Permission::create(['name' => 'editorial.create']);
        Permission::create(['name' => 'editorial.edit']);
        Permission::create(['name' => 'editorial.delete']);

        //permission for menu
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.create']);
        Permission::create(['name' => 'menu.edit']);
        Permission::create(['name' => 'menu.delete']);

        //permission for socialmedia
        Permission::create(['name' => 'socialmedia.index']);
        Permission::create(['name' => 'socialmedia.create']);
        Permission::create(['name' => 'socialmedia.edit']);
        Permission::create(['name' => 'socialmedia.delete']);

        //permission for categories
        Permission::create(['name' => 'categoryposts.index']);
        Permission::create(['name' => 'categoryposts.create']);
        Permission::create(['name' => 'categoryposts.edit']);
        Permission::create(['name' => 'categoryposts.delete']);

        //permission for postsubcategory
        Permission::create(['name' => 'postsubcategory.index']);
        Permission::create(['name' => 'postsubcategory.create']);
        Permission::create(['name' => 'postsubcategory.edit']);
        Permission::create(['name' => 'postsubcategory.delete']);

        //permission for setarticles
        Permission::create(['name' => 'setarticles.index']);
        Permission::create(['name' => 'setarticles.create']);
        Permission::create(['name' => 'setarticles.edit']);
        Permission::create(['name' => 'setarticles.delete']);


        //permission for tags
        Permission::create(['name' => 'tags.index']);
        Permission::create(['name' => 'tags.create']);
        Permission::create(['name' => 'tags.edit']);
        Permission::create(['name' => 'tags.delete']);

        //permission for posts
        Permission::create(['name' => 'posts.index']);
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.edit']);
        Permission::create(['name' => 'posts.delete']);

        //permission for pagecategories
        Permission::create(['name' => 'pagecategories.index']);
        Permission::create(['name' => 'pagecategories.create']);
        Permission::create(['name' => 'pagecategories.edit']);
        Permission::create(['name' => 'pagecategories.delete']);

        //permission for pages
        Permission::create(['name' => 'pages.index']);
        Permission::create(['name' => 'pages.create']);
        Permission::create(['name' => 'pages.edit']);
        Permission::create(['name' => 'pages.delete']);

        //permission for videocategories
        Permission::create(['name' => 'videocategories.index']);
        Permission::create(['name' => 'videocategories.create']);
        Permission::create(['name' => 'videocategories.edit']);
        Permission::create(['name' => 'videocategories.delete']);

        //permission for video
        Permission::create(['name' => 'video.index']);
        Permission::create(['name' => 'video.create']);
        Permission::create(['name' => 'video.edit']);
        Permission::create(['name' => 'video.delete']);

        //permission for albums
        Permission::create(['name' => 'albums.index']);
        Permission::create(['name' => 'albums.create']);
        Permission::create(['name' => 'albums.edit']);
        Permission::create(['name' => 'albums.delete']);

        //permission for photos
        Permission::create(['name' => 'photos.index']);
        Permission::create(['name' => 'photos.create']);
        Permission::create(['name' => 'photos.edit']);
        Permission::create(['name' => 'photos.delete']);

        //permission for sliders
        Permission::create(['name' => 'sliders.index']);
        Permission::create(['name' => 'sliders.create']);
        Permission::create(['name' => 'sliders.edit']);
        Permission::create(['name' => 'sliders.delete']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.create']);
        Permission::create(['name' => 'permissions.edit']);
        Permission::create(['name' => 'permissions.delete']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);

        //permission for advertisements
        Permission::create(['name' => 'advertisements.index']);
        Permission::create(['name' => 'advertisements.create']);
        Permission::create(['name' => 'advertisements.edit']);
        Permission::create(['name' => 'advertisements.delete']);

        //permission for downloadcategories
        Permission::create(['name' => 'downloadcategories.index']);
        Permission::create(['name' => 'downloadcategories.create']);
        Permission::create(['name' => 'downloadcategories.edit']);
        Permission::create(['name' => 'downloadcategories.delete']);

        //permission for downloadfiles
        Permission::create(['name' => 'downloadfiles.index']);
        Permission::create(['name' => 'downloadfiles.create']);
        Permission::create(['name' => 'downloadfiles.edit']);
        Permission::create(['name' => 'downloadfiles.delete']);

        //permission for widgets
        Permission::create(['name' => 'widgets.index']);
        Permission::create(['name' => 'widgets.create']);
        Permission::create(['name' => 'widgets.edit']);
        Permission::create(['name' => 'widgets.delete']);

        //permission for events
        Permission::create(['name' => 'events.index']);
        Permission::create(['name' => 'events.create']);
        Permission::create(['name' => 'events.edit']);
        Permission::create(['name' => 'events.delete']);

        //permission for agendas
        Permission::create(['name' => 'agendas.index']);
        Permission::create(['name' => 'agendas.create']);
        Permission::create(['name' => 'agendas.edit']);
        Permission::create(['name' => 'agendas.delete']);

        //permission for links
        Permission::create(['name' => 'links.index']);
        Permission::create(['name' => 'links.create']);
        Permission::create(['name' => 'links.edit']);
        Permission::create(['name' => 'links.delete']);

        //permission for student
        Permission::create(['name' => 'student.index']);
        Permission::create(['name' => 'student.create']);
        Permission::create(['name' => 'student.edit']);
        Permission::create(['name' => 'student.delete']);

        //permission for tahun ajaran
        Permission::create(['name' => 'tahun ajaran.index']);
        Permission::create(['name' => 'tahun ajaran.create']);
        Permission::create(['name' => 'tahun ajaran.edit']);
        Permission::create(['name' => 'tahun ajaran.delete']);

        //permission for room
        Permission::create(['name' => 'room.index']);
        Permission::create(['name' => 'room.create']);
        Permission::create(['name' => 'room.edit']);
        Permission::create(['name' => 'room.delete']);

        //permission for classroom
        Permission::create(['name' => 'classroom.index']);
        Permission::create(['name' => 'classroom.create']);
        Permission::create(['name' => 'classroom.edit']);
        Permission::create(['name' => 'classroom.delete']);

        //permission for agama
        Permission::create(['name' => 'agama.index']);
        Permission::create(['name' => 'agama.create']);
        Permission::create(['name' => 'agama.edit']);
        Permission::create(['name' => 'agama.delete']);

        //permission for akreditasi
        Permission::create(['name' => 'akreditasi.index']);
        Permission::create(['name' => 'akreditasi.create']);
        Permission::create(['name' => 'akreditasi.edit']);
        Permission::create(['name' => 'akreditasi.delete']);

        //permission for bentuk pendidikan
        Permission::create(['name' => 'bentuk pendidikan.index']);
        Permission::create(['name' => 'bentuk pendidikan.create']);
        Permission::create(['name' => 'bentuk pendidikan.edit']);
        Permission::create(['name' => 'bentuk pendidikan.delete']);

        //permission for jenjang pendidikan
        Permission::create(['name' => 'jenjang pendidikan.index']);
        Permission::create(['name' => 'jenjang pendidikan.create']);
        Permission::create(['name' => 'jenjang pendidikan.edit']);
        Permission::create(['name' => 'jenjang pendidikan.delete']);

        //permission for wali kelas
        Permission::create(['name' => 'wali kelas.index']);
        Permission::create(['name' => 'wali kelas.create']);
        Permission::create(['name' => 'wali kelas.edit']);
        Permission::create(['name' => 'wali kelas.delete']);

        //permission for kurikulum
        Permission::create(['name' => 'kurikulum.index']);
        Permission::create(['name' => 'kurikulum.create']);
        Permission::create(['name' => 'kurikulum.edit']);
        Permission::create(['name' => 'kurikulum.delete']);

        //permission for jenis ptk
        Permission::create(['name' => 'jenis ptk.index']);
        Permission::create(['name' => 'jenis ptk.create']);
        Permission::create(['name' => 'jenis ptk.edit']);
        Permission::create(['name' => 'jenis ptk.delete']);

        //permission for jenis pengaduan
        Permission::create(['name' => 'jenis pengaduan.index']);
        Permission::create(['name' => 'jenis pengaduan.create']);
        Permission::create(['name' => 'jenis pengaduan.edit']);
        Permission::create(['name' => 'jenis pengaduan.delete']);

        //permission for jenis surat permohonan
        Permission::create(['name' => 'jenis surat permohonan.index']);
        Permission::create(['name' => 'jenis surat permohonan.create']);
        Permission::create(['name' => 'jenis surat permohonan.edit']);
        Permission::create(['name' => 'jenis surat permohonan.delete']);

        //permission for jurusan
        Permission::create(['name' => 'jurusan.index']);
        Permission::create(['name' => 'jurusan.create']);
        Permission::create(['name' => 'jurusan.edit']);
        Permission::create(['name' => 'jurusan.delete']);

        //permission for lingkup pengaduan
        Permission::create(['name' => 'lingkup pengaduan.index']);
        Permission::create(['name' => 'lingkup pengaduan.create']);
        Permission::create(['name' => 'lingkup pengaduan.edit']);
        Permission::create(['name' => 'lingkup pengaduan.delete']);

        //permission for semester
        Permission::create(['name' => 'semester.index']);
        Permission::create(['name' => 'semester.create']);
        Permission::create(['name' => 'semester.edit']);
        Permission::create(['name' => 'semester.delete']);

        //permission for mapel kurikulum
        Permission::create(['name' => 'mapel kurikulum.index']);
        Permission::create(['name' => 'mapel kurikulum.create']);
        Permission::create(['name' => 'mapel kurikulum.edit']);
        Permission::create(['name' => 'mapel kurikulum.delete']);

        //permission for mapel
        Permission::create(['name' => 'mapel.index']);
        Permission::create(['name' => 'mapel.create']);
        Permission::create(['name' => 'mapel.edit']);
        Permission::create(['name' => 'mapel.delete']);

        //permission for master wilayah
        Permission::create(['name' => 'master wilayah.index']);
        Permission::create(['name' => 'master wilayah.create']);
        Permission::create(['name' => 'master wilayah.edit']);
        Permission::create(['name' => 'master wilayah.delete']);

        //permission for prasarana
        Permission::create(['name' => 'prasarana.index']);
        Permission::create(['name' => 'prasarana.create']);
        Permission::create(['name' => 'prasarana.edit']);
        Permission::create(['name' => 'prasarana.delete']);

        //permission for akses internet
        Permission::create(['name' => 'akses internet.index']);
        Permission::create(['name' => 'akses internet.create']);
        Permission::create(['name' => 'akses internet.edit']);
        Permission::create(['name' => 'akses internet.delete']);

        //permission for angkatan pd
        Permission::create(['name' => 'angkatan pd.index']);
        Permission::create(['name' => 'angkatan pd.create']);
        Permission::create(['name' => 'angkatan pd.edit']);
        Permission::create(['name' => 'angkatan pd.delete']);

        //permission for payment type
        Permission::create(['name' => 'payment type.index']);
        Permission::create(['name' => 'payment type.create']);
        Permission::create(['name' => 'payment type.edit']);
        Permission::create(['name' => 'payment type.delete']);

        //permission for ptk
        Permission::create(['name' => 'ptk.index']);
        Permission::create(['name' => 'ptk.create']);
        Permission::create(['name' => 'ptk.edit']);
        Permission::create(['name' => 'ptk.delete']);

        //permission for course
        Permission::create(['name' => 'course.index']);
        Permission::create(['name' => 'course.create']);
        Permission::create(['name' => 'course.edit']);
        Permission::create(['name' => 'course.delete']);

        //permission for member
        Permission::create(['name' => 'member.index']);
        Permission::create(['name' => 'member.create']);
        Permission::create(['name' => 'member.edit']);
        Permission::create(['name' => 'member.delete']);

        //permission for hero
        Permission::create(['name' => 'hero.index']);
        Permission::create(['name' => 'hero.create']);
        Permission::create(['name' => 'hero.edit']);
        Permission::create(['name' => 'hero.delete']);
        //permission for program
        Permission::create(['name' => 'program.index']);
        Permission::create(['name' => 'program.create']);
        Permission::create(['name' => 'program.edit']);
        Permission::create(['name' => 'program.delete']);

        //permission for alasan izin
        Permission::create(['name' => 'alasan izin.index']);
        Permission::create(['name' => 'alasan izin.create']);
        Permission::create(['name' => 'alasan izin.edit']);
        Permission::create(['name' => 'alasan izin.delete']);

        //permission for alasan layakPIP
        Permission::create(['name' => 'alasan layakPIP.index']);
        Permission::create(['name' => 'alasan layakPIP.create']);
        Permission::create(['name' => 'alasan layakPIP.edit']);
        Permission::create(['name' => 'alasan layakPIP.delete']);

        //permission for alat transportasi
        Permission::create(['name' => 'alat transportasi.index']);
        Permission::create(['name' => 'alat transportasi.create']);
        Permission::create(['name' => 'alat transportasi.edit']);
        Permission::create(['name' => 'alat transportasi.delete']);

        //permission for bank
        Permission::create(['name' => 'bank.index']);
        Permission::create(['name' => 'bank.create']);
        Permission::create(['name' => 'bank.edit']);
        Permission::create(['name' => 'bank.delete']);

        //permission for batas wakturaport
        Permission::create(['name' => 'batas wakturaport.index']);
        Permission::create(['name' => 'batas wakturaport.create']);
        Permission::create(['name' => 'batas wakturaport.edit']);
        Permission::create(['name' => 'batas wakturaport.delete']);

        //permission for beasiswa
        Permission::create(['name' => 'beasiswa.index']);
        Permission::create(['name' => 'beasiswa.create']);
        Permission::create(['name' => 'beasiswa.edit']);
        Permission::create(['name' => 'beasiswa.delete']);

        //permission for bidang studi
        Permission::create(['name' => 'bidang studi.index']);
        Permission::create(['name' => 'bidang studi.create']);
        Permission::create(['name' => 'bidang studi.edit']);
        Permission::create(['name' => 'bidang studi.delete']);

        //permission for bidang usaha
        Permission::create(['name' => 'bidang usaha.index']);
        Permission::create(['name' => 'bidang usaha.create']);
        Permission::create(['name' => 'bidang usaha.edit']);
        Permission::create(['name' => 'bidang usaha.delete']);

        //permission for cita cita
        Permission::create(['name' => 'cita cita.index']);
        Permission::create(['name' => 'cita cita.create']);
        Permission::create(['name' => 'cita cita.edit']);
        Permission::create(['name' => 'cita cita.delete']);

        //permission for diklat
        Permission::create(['name' => 'diklat.index']);
        Permission::create(['name' => 'diklat.create']);
        Permission::create(['name' => 'diklat.edit']);
        Permission::create(['name' => 'diklat.delete']);

        //permission for ekstrakurikuler
        Permission::create(['name' => 'ekstrakurikuler.index']);
        Permission::create(['name' => 'ekstrakurikuler.create']);
        Permission::create(['name' => 'ekstrakurikuler.edit']);
        Permission::create(['name' => 'ekstrakurikuler.delete']);

        //permission for gelar akademik
        Permission::create(['name' => 'gelar akademik.index']);
        Permission::create(['name' => 'gelar akademik.create']);
        Permission::create(['name' => 'gelar akademik.edit']);
        Permission::create(['name' => 'gelar akademik.delete']);

        //permission for group mapel
        Permission::create(['name' => 'group mapel.index']);
        Permission::create(['name' => 'group mapel.create']);
        Permission::create(['name' => 'group mapel.edit']);
        Permission::create(['name' => 'group mapel.delete']);

        //permission for gugus
        Permission::create(['name' => 'gugus.index']);
        Permission::create(['name' => 'gugus.create']);
        Permission::create(['name' => 'gugus.edit']);
        Permission::create(['name' => 'gugus.delete']);

        //permission for hapus buku
        Permission::create(['name' => 'hapus buku.index']);
        Permission::create(['name' => 'hapus buku.create']);
        Permission::create(['name' => 'hapus buku.edit']);
        Permission::create(['name' => 'hapus buku.delete']);

        //permission for hoby
        Permission::create(['name' => 'hoby.index']);
        Permission::create(['name' => 'hoby.create']);
        Permission::create(['name' => 'hoby.edit']);
        Permission::create(['name' => 'hoby.delete']);

        //permission for jabatan fungsional
        Permission::create(['name' => 'jabatan fungsional.index']);
        Permission::create(['name' => 'jabatan fungsional.create']);
        Permission::create(['name' => 'jabatan fungsional.edit']);
        Permission::create(['name' => 'jabatan fungsional.delete']);

        //permission for jabatam tugaspegawai
        Permission::create(['name' => 'jabatam tugaspegawai.index']);
        Permission::create(['name' => 'jabatam tugaspegawai.create']);
        Permission::create(['name' => 'jabatam tugaspegawai.edit']);
        Permission::create(['name' => 'jabatam tugaspegawai.delete']);

        //permission for jenis bantuan
        Permission::create(['name' => 'jenis bantuan.index']);
        Permission::create(['name' => 'jenis bantuan.create']);
        Permission::create(['name' => 'jenis bantuan.edit']);
        Permission::create(['name' => 'jenis bantuan.delete']);

        //permission for jenis bukualat
        Permission::create(['name' => 'jenis bukualat.index']);
        Permission::create(['name' => 'jenis bukualat.create']);
        Permission::create(['name' => 'jenis bukualat.edit']);
        Permission::create(['name' => 'jenis bukualat.delete']);

        //permission for jenis rombel
        Permission::create(['name' => 'jenis rombel.index']);
        Permission::create(['name' => 'jenis rombel.create']);
        Permission::create(['name' => 'jenis rombel.edit']);
        Permission::create(['name' => 'jenis rombel.delete']);

        //permission for jenis sertifikasi
        Permission::create(['name' => 'jenis sertifikasi.index']);
        Permission::create(['name' => 'jenis sertifikasi.create']);
        Permission::create(['name' => 'jenis sertifikasi.edit']);
        Permission::create(['name' => 'jenis sertifikasi.delete']);

        //permission for jenis test
        Permission::create(['name' => 'jenis test.index']);
        Permission::create(['name' => 'jenis test.create']);
        Permission::create(['name' => 'jenis test.edit']);
        Permission::create(['name' => 'jenis test.delete']);

        //permission for jenis tinggal
        Permission::create(['name' => 'jenis tinggal.index']);
        Permission::create(['name' => 'jenis tinggal.create']);
        Permission::create(['name' => 'jenis tinggal.edit']);
        Permission::create(['name' => 'jenis tinggal.delete']);

        //permission for keahlian laboratorium
        Permission::create(['name' => 'keahlian laboratorium.index']);
        Permission::create(['name' => 'keahlian laboratorium.create']);
        Permission::create(['name' => 'keahlian laboratorium.edit']);
        Permission::create(['name' => 'keahlian laboratorium.delete']);

        //permission for kebutuhan khusus
        Permission::create(['name' => 'kebutuhan khusus.index']);
        Permission::create(['name' => 'kebutuhan khusus.create']);
        Permission::create(['name' => 'kebutuhan khusus.edit']);
        Permission::create(['name' => 'kebutuhan khusus.delete']);

        //permission for kelompok bidang
        Permission::create(['name' => 'kelompok bidang.index']);
        Permission::create(['name' => 'kelompok bidang.create']);
        Permission::create(['name' => 'kelompok bidang.edit']);
        Permission::create(['name' => 'kelompok bidang.delete']);

        //permission for kelompok usaha
        Permission::create(['name' => 'kelompok usaha.index']);
        Permission::create(['name' => 'kelompok usaha.create']);
        Permission::create(['name' => 'kelompok usaha.edit']);
        Permission::create(['name' => 'kelompok usaha.delete']);

        //permission for keluar
        Permission::create(['name' => 'keluar.index']);
        Permission::create(['name' => 'keluar.create']);
        Permission::create(['name' => 'keluar.edit']);
        Permission::create(['name' => 'keluar.delete']);

        //permission for kepanitiaan
        Permission::create(['name' => 'kepanitiaan.index']);
        Permission::create(['name' => 'kepanitiaan.create']);
        Permission::create(['name' => 'kepanitiaan.edit']);
        Permission::create(['name' => 'kepanitiaan.delete']);

        //permission for kesejahteraan
        Permission::create(['name' => 'kesejahteraan.index']);
        Permission::create(['name' => 'kesejahteraan.create']);
        Permission::create(['name' => 'kesejahteraan.edit']);
        Permission::create(['name' => 'kesejahteraan.delete']);

        //permission for lambang pengangkat
        Permission::create(['name' => 'lambang pengangkat.index']);
        Permission::create(['name' => 'lambang pengangkat.create']);
        Permission::create(['name' => 'lambang pengangkat.edit']);
        Permission::create(['name' => 'lambang pengangkat.delete']);

        //permission for lingkungan
        Permission::create(['name' => 'lingkungan.index']);
        Permission::create(['name' => 'lingkungan.create']);
        Permission::create(['name' => 'lingkungan.edit']);
        Permission::create(['name' => 'lingkungan.delete']);

        //permission for literasi
        Permission::create(['name' => 'literasi.index']);
        Permission::create(['name' => 'literasi.create']);
        Permission::create(['name' => 'literasi.edit']);
        Permission::create(['name' => 'literasi.delete']);

        //permission for pengkat golongan
        Permission::create(['name' => 'pengkat golongan.index']);
        Permission::create(['name' => 'pengkat golongan.create']);
        Permission::create(['name' => 'pengkat golongan.edit']);
        Permission::create(['name' => 'pengkat golongan.delete']);

        //permission for pekerjaan
        Permission::create(['name' => 'pekerjaan.index']);
        Permission::create(['name' => 'pekerjaan.create']);
        Permission::create(['name' => 'pekerjaan.edit']);
        Permission::create(['name' => 'pekerjaan.delete']);

        //permission for pemakai prasarana
        Permission::create(['name' => 'pemakai prasarana.index']);
        Permission::create(['name' => 'pemakai prasarana.create']);
        Permission::create(['name' => 'pemakai prasarana.edit']);
        Permission::create(['name' => 'pemakai prasarana.delete']);

        //permission for pendaftaran
        Permission::create(['name' => 'pendaftaran.index']);
        Permission::create(['name' => 'pendaftaran.create']);
        Permission::create(['name' => 'pendaftaran.edit']);
        Permission::create(['name' => 'pendaftaran.delete']);

        //permission for penghasilan ortu
        Permission::create(['name' => 'penghasilan ortu.index']);
        Permission::create(['name' => 'penghasilan ortu.create']);
        Permission::create(['name' => 'penghasilan ortu.edit']);
        Permission::create(['name' => 'penghasilan ortu.delete']);

        //permission for peran user
        Permission::create(['name' => 'peran user.index']);
        Permission::create(['name' => 'peran user.create']);
        Permission::create(['name' => 'peran user.edit']);
        Permission::create(['name' => 'peran user.delete']);

        //permission for ref prasarana
        Permission::create(['name' => 'ref prasarana.index']);
        Permission::create(['name' => 'ref prasarana.create']);
        Permission::create(['name' => 'ref prasarana.edit']);
        Permission::create(['name' => 'ref prasarana.delete']);

        //permission for ref sarana
        Permission::create(['name' => 'ref sarana.index']);
        Permission::create(['name' => 'ref sarana.create']);
        Permission::create(['name' => 'ref sarana.edit']);
        Permission::create(['name' => 'ref sarana.delete']);

        //permission for standar sarana
        Permission::create(['name' => 'standar sarana.index']);
        Permission::create(['name' => 'standar sarana.create']);
        Permission::create(['name' => 'standar sarana.edit']);
        Permission::create(['name' => 'standar sarana.delete']);

        //permission for status anak
        Permission::create(['name' => 'status anak.index']);
        Permission::create(['name' => 'status anak.create']);
        Permission::create(['name' => 'status anak.edit']);
        Permission::create(['name' => 'status anak.delete']);

        //permission for statusdik kurikulum
        Permission::create(['name' => 'statusdik kurikulum.index']);
        Permission::create(['name' => 'statusdik kurikulum.create']);
        Permission::create(['name' => 'statusdik kurikulum.edit']);
        Permission::create(['name' => 'statusdik kurikulum.delete']);

        //permission for status keaftipanpegawai
        Permission::create(['name' => 'status keaftipanpegawai.index']);
        Permission::create(['name' => 'status keaftipanpegawai.create']);
        Permission::create(['name' => 'status keaftipanpegawai.edit']);
        Permission::create(['name' => 'status keaftipanpegawai.delete']);

        //permission for status kepmilikansarpras
        Permission::create(['name' => 'status kepmilikansarpras.index']);
        Permission::create(['name' => 'status kepmilikansarpras.create']);
        Permission::create(['name' => 'status kepmilikansarpras.edit']);
        Permission::create(['name' => 'status kepmilikansarpras.delete']);

        //permission for statsu kepemilikan
        Permission::create(['name' => 'statsu kepemilikan.index']);
        Permission::create(['name' => 'statsu kepemilikan.create']);
        Permission::create(['name' => 'statsu kepemilikan.edit']);
        Permission::create(['name' => 'statsu kepemilikan.delete']);

        //permission for status tugaskepsek
        Permission::create(['name' => 'status tugaskepsek.index']);
        Permission::create(['name' => 'status tugaskepsek.create']);
        Permission::create(['name' => 'status tugaskepsek.edit']);
        Permission::create(['name' => 'status tugaskepsek.delete']);

        //permission for sumber air
        Permission::create(['name' => 'sumber air.index']);
        Permission::create(['name' => 'sumber air.create']);
        Permission::create(['name' => 'sumber air.edit']);
        Permission::create(['name' => 'sumber air.delete']);

        //permission for sumber listrik
        Permission::create(['name' => 'sumber listrik.index']);
        Permission::create(['name' => 'sumber listrik.create']);
        Permission::create(['name' => 'sumber listrik.edit']);
        Permission::create(['name' => 'sumber listrik.delete']);

        //permission for sumber dana
        Permission::create(['name' => 'sumber dana.index']);
        Permission::create(['name' => 'sumber dana.create']);
        Permission::create(['name' => 'sumber dana.edit']);
        Permission::create(['name' => 'sumber dana.delete']);

        //permission for sumber gaji
        Permission::create(['name' => 'sumber gaji.index']);
        Permission::create(['name' => 'sumber gaji.create']);
        Permission::create(['name' => 'sumber gaji.edit']);
        Permission::create(['name' => 'sumber gaji.delete']);

        //permission for tingkat penghargaan
        Permission::create(['name' => 'tingkat penghargaan.index']);
        Permission::create(['name' => 'tingkat penghargaan.create']);
        Permission::create(['name' => 'tingkat penghargaan.edit']);
        Permission::create(['name' => 'tingkat penghargaan.delete']);

        //permission for tingkat prestasi
        Permission::create(['name' => 'tingkat prestasi.index']);
        Permission::create(['name' => 'tingkat prestasi.create']);
        Permission::create(['name' => 'tingkat prestasi.edit']);
        Permission::create(['name' => 'tingkat prestasi.delete']);

        //permission for tunjangan
        Permission::create(['name' => 'tunjangan.index']);
        Permission::create(['name' => 'tunjangan.create']);
        Permission::create(['name' => 'tunjangan.edit']);
        Permission::create(['name' => 'tunjangan.delete']);

        //permission for waktu penyelenggaraan
        Permission::create(['name' => 'waktu penyelenggaraan.index']);
        Permission::create(['name' => 'waktu penyelenggaraan.create']);
        Permission::create(['name' => 'waktu penyelenggaraan.edit']);
        Permission::create(['name' => 'waktu penyelenggaraan.delete']);

        //permission for status kepegawaian
        Permission::create(['name' => 'status kepegawaian.index']);
        Permission::create(['name' => 'status kepegawaian.create']);
        Permission::create(['name' => 'status kepegawaian.edit']);
        Permission::create(['name' => 'status kepegawaian.delete']);

        //permission for tingkat pendidikan
        Permission::create(['name' => 'tingkat pendidikan.index']);
        Permission::create(['name' => 'tingkat pendidikan.create']);
        Permission::create(['name' => 'tingkat pendidikan.edit']);
        Permission::create(['name' => 'tingkat pendidikan.delete']);

        //permission for sekolah
        Permission::create(['name' => 'sekolah.index']);
        Permission::create(['name' => 'sekolah.create']);
        Permission::create(['name' => 'sekolah.edit']);
        Permission::create(['name' => 'sekolah.delete']);

        //permission for yayasan
        Permission::create(['name' => 'yayasan.index']);
        Permission::create(['name' => 'yayasan.create']);
        Permission::create(['name' => 'yayasan.edit']);
        Permission::create(['name' => 'yayasan.delete']);

        //permission for sertifikasi iso
        Permission::create(['name' => 'sertifikasi iso.index']);
        Permission::create(['name' => 'sertifikasi iso.create']);
        Permission::create(['name' => 'sertifikasi iso.edit']);
        Permission::create(['name' => 'sertifikasi iso.delete']);

        //permission for lembaga akreditasi
        Permission::create(['name' => 'lembaga akreditasi.index']);
        Permission::create(['name' => 'lembaga akreditasi.create']);
        Permission::create(['name' => 'lembaga akreditasi.edit']);
        Permission::create(['name' => 'lembaga akreditasi.delete']);

        //permission for level wilayah
        Permission::create(['name' => 'level wilayah.index']);
        Permission::create(['name' => 'level wilayah.create']);
        Permission::create(['name' => 'level wilayah.edit']);
        Permission::create(['name' => 'level wilayah.delete']);

        //permission for provinsi
        Permission::create(['name' => 'provinsi.index']);
        Permission::create(['name' => 'provinsi.create']);
        Permission::create(['name' => 'provinsi.edit']);
        Permission::create(['name' => 'provinsi.delete']);

        //permission for kab-kota
        Permission::create(['name' => 'kab-kota.index']);
        Permission::create(['name' => 'kab-kota.create']);
        Permission::create(['name' => 'kab-kota.edit']);
        Permission::create(['name' => 'kab-kota.delete']);

        //permission for kecamatan
        Permission::create(['name' => 'kecamatan.index']);
        Permission::create(['name' => 'kecamatan.create']);
        Permission::create(['name' => 'kecamatan.edit']);
        Permission::create(['name' => 'kecamatan.delete']);

        //permission for desa-kelurahan
        Permission::create(['name' => 'desa-kelurahan.index']);
        Permission::create(['name' => 'desa-kelurahan.create']);
        Permission::create(['name' => 'desa-kelurahan.edit']);
        Permission::create(['name' => 'desa-kelurahan.delete']);


    }
}