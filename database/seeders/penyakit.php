<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;
use Illuminate\Console\seed\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;

class penyakit extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        post::created([
            'name' => 'Haid',
            'keterangan' => ''
        ]);
        post::created([
            'name' => 'Nifas',
            'keterangan' => ''
        ]);
        post::created([
            'name' => 'Istihadhah Mubtada`ah Mumayyizah',
            'keterangan' => 'Darah yang keluar selain haid dan nifas, darah mempunyai 2 sifat yaitu, lemah dan kuat. Maka darahkuatnya dalah haid dan darah lemahnya adalah istihadhah'
        ]);
        post::created([
            'name' => 'Istihadhah Mubtada`ah Ghoriu Mumayyizah',
            'keterangan' => ' Haidnya dalah sehari semalam, sisanya adalah istihadhah. Istihadhah Mubtada`ah Ghoriu Mumayyizah adalah darah mempunyai 1 sifat (karakteristik darah sama dari awal sampai akhir) atau lebih dari 1 sifat tetapi tidak memenuhi syarat tamyiz.'
        ]);
        post::created([
            'name' => 'Istihadhah Mu`tadah Mumayyizah',
            'keterangan' => 'Haidnya adalah darah kuat dan istihadhah-nya adalah darah lemah. Istihadhah Mu`tadah Mumayyizah adalah darah yang keluar dengan mempunyai 2 sifat yaitu, lemah dan kuat atau lemah dan lebih lemah yang memenuhi syarat tamyiz dan sudah pernah haid dan suci dari haid'
        ]);
        post::created([
            'name' => 'Istihadhah Mu`tadah Ghoriu Mumayyizah',
            'keterangan' => 'Maka haidnya dikembalikan ke kebiasaanya ketika haid dan suci adapun jika darah masih tetap keluar diselain kebiasaan haid dan suci maka darah tersebut adalah darah istihahdhah. Istihadhah Mu`tadah Ghoiru Mumayyizah adalah darah yang keluar selain haid dan nifas dan mempunyai 1 sifat saja atau lebih tapi tidak memenuhi syarat tamyiz'
        ]);
        post::created([
            'name' => 'Istihadhah Mutahayyiroh Mutlaqoh',
            'keterangan' => 'Maka jika mengingat haid sebelumnya berakhir pada waktu siang atau malam atau pagi hari, maka wajib mandi setiap hari seperti berakhirnya haid sebelumnya dan tak perlu mandi wajib diselain waktu tersebut. jika tidak mengetahui, maka wajib mandi disetiap sholat fardhu dan tah harus langsung melakukan sholat setelah mandi'
        ]);
        post::created([
            'name' => 'Nifas–Haid–Istihadhah',
            'keterangan' => 'Maka masa nifasnya disesuaikan dengan nifas, haid, dan suci sebelumnya dan darah yang tidak sesuai dengan nifas, haid, dan suci sebelumnya, dihukumi istihadhah'
        ]);
        post::created([
            'name' => 'Nifas–Istihadhah Mubtada`ah Mumayyizah',
            'keterangan' => 'Darah kuatnya adalah nifas, sedangkan darah lemah adalah istihadhah'
        ]);
        post::created([
            'name' => 'Haid – istihadhah Mu`tadah Ghoiru Mumayyizah',
            'keterangan' => 'Maka haidnya dikembalikan pada haid sebelumnya (adat haid), darah lebihnya adalah Istihadhah Ghoiru Mumayyizah'
        ]);
        post::created([
            'name' => 'Istihadhah Penyempurna Suci',
            'keterangan' => 'Jika darah masih berlanjut melebihi batas suci, maka darah yang melebihi batas suci tersebut adalah haid. Istihadhah Penyempurna Suci adalah Darah yang keluar sebelum sempurna suci selama 15 hari 15 malam'
        ]);
        post::created([
            'name' => 'Istihadhah Mutahayyiroh',
            'keterangan' => 'Dihukumi haid ketika merasa yakin darah tersebut adalah haid dan dihukumi istihadhah jika merasa sedang berada di masa suci, jika ragu haid atau istihadhah maka wajib mandu setiap sholat fardhu'
        ]);
        post::created([
            'name' => 'Nifas - Istihadhah Mubtada`ah Mumayyizah 3 sifat darah kuat di tengah-tengah darah lemah ',
            'keterangan' => '2 darah awal adalah nifas sedangkan darah yang terakhir adalah istihadhah Mumayyizah'
        ]);
        post::created([
            'name' => 'Nifas-Istihadhah Mubtada`ah Mumayyizah 3 sifat darah, darah kuat berada di awal ',
            'keterangan' => 'Darah kuat adalah Nifas, dan lainnya adalah Istihadhah'
        ]);
        post::created([
            'name' => 'Istihadhah Mubtada`ah Ghoiru Mumayyizah binnifas ',
            'keterangan' => 'nifasnya hanya sekejap sisanya istihadhah'
        ]);
        post::created([
            'name' => 'Nifas dan sudah pernah mengalami nifas (Mu`tadah)',
            'keterangan' => 'Maka darah tersebut adalah nifas, dan lama nifasnya disesuaikan dengan nifas sebelumnya'
        ]);
        post::created([
            'name' => 'Istihadhah mu`tadah mumayyizah binnifas',
            'keterangan' => 'darah kuat adalah nifas dan darah lemah adalah istihadhah'
        ]);
        post::created([
            'name' => 'Istihadhah Mutahayyiroh Mutlaqoh,tidak  ingat jumlah & waktu nifas',
            'keterangan' => 'maka wajib berhati-hati dan wajib mandi disetiap sholat fardhu'
        ]);
        post::created([
            'name' => 'Istihadhah Mutahayyiroh, ingat jml lupa waktu (nifas)',
            'keterangan' => 'lama nifasnya disesuaikan dengan nifas sebelumnya'
        ]);
        post::created([
            'name' => 'Istihadhah Mutahyyiroh, mengingat jml dan waktu nifas keluar',
            'keterangan' => 'nifasnya adlah darah yang sekejap keluar setelah melahirkan atau kegugurab, lalu ketika darah berhenti maka diwajibkan untuk mandi disetiap sholat fardhu'
        ]);
        post::created([
            'name' => 'Istihadhah Mu’tadah Ghoiru Mumayyizah mengingat adat nifas dan haid ',
            'keterangan' => 'Nifasnya sesuai nifas sebelumnya, lalu selanjutnya disesuaikan dengan ebiasaan haid dan suci dari haid'
        ]);
        post::created([
            'name' => 'Haid Normal',
            'keterangan' => 'Haid dalam keadaan lancar dan tidak terputus-putus, sesuai rata-rata haid dan tidak melebihi masa maksimal haid'
        ]);
        post::created([
            'name' => 'Haid Abnormal',
            'keterangan' => 'Darah terputus-putus. Dalam artian darah yang keluar hanya sedikit setiap harinya atau kadang keluar kadang berhenti darahnya. Biasanya disebabkan oleh stres, gangguan pola tidur dan pola hidup yang tidak sehat'
        ]);
        post::created([
            'name' => 'Istihadhadhah Mu’tadah Mumayyizah - haid',
            'keterangan' => ' Istihadhadhah Mu’tadah Mumayyizah, lalu darah haid setelah suci adalah darah haid'
        ]);
        post::created([
            'name' => 'keibiasaan haidnya /3 bulan ',
            'keterangan' => 'Maka adat haid nya adalah seperti kebiasaaanya '
        ]);
        post::created([
            'name' => 'adat haidnya disamakan dengan haid sebelumnya ',
            'keterangan' => 'Kebiasaan haidnya disesuaikan dengan haid sebelumnya'
        ]);
        post::created([
            'name' => 'Maka adat haidnya yaitu sesuai dengan darah yang berwarna gelap',
            'keterangan' => ''
        ]);
    }
}
