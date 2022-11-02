<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimony extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "rating",
        "comment",
        "timestamp"
    ];

    private static array $header = [
        [
            'id' => 1,
            'name' => "t*****h",
            'img_people' => "people.svg",
            'rating' => "5",
            'comment' => "Kualitasnya dan designnya bagus. Ukurannya juga pas yang ini kalau untuk orang dewasa. Proses pengemasan dan pengiriman cepat.",
            'timestamp' => "2021-02-25 | 16:20",
        ],
        [
            'id' => 2,
            'name' => "rachmawatias",
            'img_people' => "people.svg",
            'rating' => "5",
            'comment' => "Lucu banget kalendernya. Moodbooster banget ngeliatnya doang juga 😍, Kolom-kolom di kalender nya juga note-able buat nulis schedule kerja bulanan. Gemes banget 😍",
            'timestamp' => "2021-01-05 | 07:16",
        ],
        [
            'id' => 3,
            'name' => "prelovedpunyajiwa",
            'img_people' => "people.svg",
            'rating' => "5",
            'comment' => "Kalendernya lucu banget! Sesuai sama kebutuhanku buat nyatat2 kegiatan/janji ketemuan. Udah lama nyari model kalender seperti ini. Seneng banget udah ketemu. 2022 bikin lagi seperti ini yah!",
            'timestamp' => "2021-03-16 | 08:50",
        ],
        [
            'id' => 4,
            'name' => "a*****h",
            'img_people' => "people.svg",
            'rating' => "5",
            'comment' => "Alhamdulillaah pengemasan pengiriman cepat, bahannya tebal bagus, bisa ditulis pake pensil jg, penyangganya kokoh.. Terimakasih seller semoga berkah",
            'timestamp' => "2022-01-11 | 15:23",
        ],
        [
            'id' => 5,
            'name' => "triane12 ",
            'img_people' => "people.svg",
            'rating' => "5",
            'comment' => "Bagus kalendernya...kalender kokoh berdiri, kertas lumayan agak tebal, ada catatan hariannya jg... langsung saya gunakan.... Mudah2an dengan adanya kalender ini, memudahkan saya melaksanakan target2 di tahun 2021.... Terima kasih....",
            'timestamp' => "2021-01-09 | 18:17",
        ],
        [
            'id' => 6,
            'name' => "n*****a",
            'img_people' => "people.svg",
            'rating' => "4",
            'comment' => "Ukuran lebarnya sekitar 20/21cm ya jd sesuai ukuran kertas A4 (dipotong 2). Tampak depan n blkg spt foto ya. Fyi, seller ini cut off jam 8 pagi jd kl order lwt jam 7/8 pagi akan dikirim bsknya ya.",
            'timestamp' => "2021-01-15 | 08:32",
        ],
    ];

    public static function index(){
        return collect(self::$header);
    }
}
