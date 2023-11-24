<?php

namespace Database\Seeders;

use App\Models\gejala as Modelsgejala;
use Illuminate\Database\Seeder;
use Illuminate\Console\seed\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;

class gejala extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Modelsgejala::created([
            "kode_gejala" => "G001",
            "gejala" => "Keluar Darah"

        ]);
        Modelsgejala::created([
            "kode_gejala" => "G002",
            "gejala" => "Darah keluar bukan disebabkan melahirkan"

        ]);
        Modelsgejala::created([
            "kode_gejala" => "G003",
            "gejala" => "Pertama kali keluar darah diluar melahirkan atau haid"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G004",
            "gejala" => "Darah keluar setelah memasuki usia 9 tahun"

        ]);
        Modelsgejala::created([
            "kode_gejala" => "G005",
            "gejala" => "Darah keluar sudah terjadi selama beberapa hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G006",
            "gejala" => "Darah yang keluar hanya sedikit selama beberapa hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G007",
            "gejala" => "Darah yang keluar sudah 24 jam atau lebih"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G008",
            "gejala" => "Darah sempat berhenti di selama darah keluar dalam beberapa hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G009",
            "gejala" => "Massa suci kurang dari 15 hari 15 malam"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G010",
            "gejala" => "Total lama darah keluar dalam beberapa hari tidak lebih dari 15 hari 15 malam"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G011",
            "gejala" => "Total lama darah yang keluar lebih dari 15 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G012",
            "gejala" => "Darah yang keluar memiliki 2 sifat"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G013",
            "gejala" => "Darah yang berwarna gelap keluar lebih dari 24 jam"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G014",
            "gejala" => "Darah yang berwarna gelap keluar selama beberapa hari dan kurang dari 15 hari 15 malam"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G015",
            "gejala" => "Darah yang berwarna lebih cerah keluar secara terus-menerus selama lebih dari 15 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G016",
            "gejala" => "Darah yang keluar berwarna gelap, lalu cerah, lalu gelap kembali"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G017",
            "gejala" => "Sudah pernah haid"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G018",
            "gejala" => "Mengingat adat haid pada haid sebelumnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G019",
            "gejala" => "Mengingat lama haid dan waktu haid keluar pada haid sebelumnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G020",
            "gejala" => "Hanya mengingat waktu pada haid sebelumnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G021",
            "gejala" => "Darah haid keluar secara teratur"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G022",
            "gejala" => "darah haid keluar sebanyak 20-80 ml"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G023",
            "gejala" => "Terdapat rasa sakit yang berlebihan dan keluhan lainnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G024",
            "gejala" => "Darah keluar seperti adat haid sebelumnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G025",
            "gejala" => "Siklus menstruasi terlalu pendek atau terlalu panjang"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G027",
            "gejala" => "Pertama kali nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G028",
            "gejala" => "Darah keluar setelah keguguran"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G029",
            "gejala" => "Darah keluar setelah melahirkan"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G030",
            "gejala" => "Darah sempat tidak keluar setelah mengalami keguguran atau melahirkan"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G031",
            "gejala" => "Lama darah yang tidak keluar diawal masa nifas lebih dari 15 hari 15 malam"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G032",
            "gejala" => "Darah berhenti ditengah-tengah masa nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G033",
            "gejala" => "Darah nifas keluar lebih dari 60 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G034",
            "gejala" => "Darah nifas yang bersifat kuat keluar kurang dari 60 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G035",
            "gejala" => "Darah nifas yang keluar memiliki 3 sifat"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G036",
            "gejala" => "Darah kuat keluar diantara atau ditengah-tengah darah darah lemah"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G037",
            "gejala" => "Darah kuat keluar diawal masa nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G038",
            "gejala" => "Darah kuat keluar diakhir masa nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G039",
            "gejala" => "Darah  nifas yang keluar hanya memiliki 1 sifat"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G040",
            "gejala" => "Darah kuat keluar dari awal sampai akhir masa nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G041",
            "gejala" => "Darah nifas yang bersifat kuat keluar melebihi 60 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G042",
            "gejala" => "Sudah pernah mengalami nifas"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G043",
            "gejala" => "Darah nifas yang keluar sama seperti nifas sebelumnya"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G044",
            "gejala" => "Mengingat lama nifas dan kapan nifas sebelumnya keluar"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G045",
            "gejala" => "Total kedua darah nifas keluar kurang dari 60 hari"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G047",
            "gejala" => "Darah yang keluar tidak dapat dibedakan atau hanya memiliki satu sifat"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G048",
            "gejala" => "Mengingat waktu atau kapan darah nifas itu keluar"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G049",
            "gejala" => "Mengingat lama nifas tetapi lupa waktu atau kapan darah nifas keluar"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G051",
            "gejala" => "Mengetahui cara menentukan adat haid"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G052",
            "gejala" => "Memiliki kebiasaan haid yang berbeda dalam beberapa bulan tetapi teratur dan sudah terjadi dua kali atau lebih"
        ]);
        Modelsgejala::created([
            "kode_gejala" => "G053",
            "gejala" => "Darah sudah dipastikan memenuhi syarat tamyiz"
        ]);
    }
}
