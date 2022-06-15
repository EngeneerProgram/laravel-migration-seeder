<?php

use Illuminate\Database\Seeder;
use App\Place;

class PlaceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $places = [
            [
            'destinazione' => 'Cefalù',
            'hotel' => 'Domus Aurea',
            'promozione' => 'Mezza pensione',
            'assicurazione' => 'inclusa',
            'img' => 'https://www.touringclub.it/sites/default/files/styles/gallery_full/public/immagini_georiferite/gettyimages-497312814.jpg?itok=Nswtm7De',
            'intrattenimento' => 'La rocca, Museo Mandralisca, Porta Pescara, Lungomare',
            'descrizione' => '16 m s.l.m. Cefalù (Čifalù in siciliano) è un comune italiano di 13 878 abitanti della città metropolitana di Palermo in Sicilia. È situato sulla costa siciliana settentrionale, a circa 70 km da Palermo, ai piedi di un promontorio roccioso.',
            'prezzo' => '130 euro'],

            [
            'destinazione' => 'AlberoBello',
            'hotel' => 'Resort Trulli',
            'promozione' => 'all inclusive',
            'assicurazione' => 'non inclusa',
            'img' => 'https://smsh-904390-juc1ugur1qwqqqo4.stackpathdns.com/2168990/wp-content/uploads/2021/09/DSC07311-930x620.jpg?lossy=1&strip=1&webp=1',
            'intrattenimento' => 'Valle di itria, zoo safari, scavi di egnatia, locorotondo',
            'descrizione' => 'È un dedalo di vicoli tortuosi, con più di 1000 trulli, il Rione Monti, il più antico della città, insieme al rione Aia Piccola, dove spiccano Casa Pezzolla, un complesso di 15 trulli comunicanti oggi adibito a Museo del Territorio, e il Trullo Sovrano, che ospita spettacoli e concerti.',
            'prezzo' => '100 euro'],

            ['destinazione' => 'Catania',
            'hotel' => 'Ct-domus',
            'promozione' => 'Mezza pensione',
            'assicurazione' => 'assicurazione danni',
            'img' => 'https://cdn.marcopolo.tv/880x550/media/post/3qushsd/Piazza_Duomo_Catania.jpg',
            'intrattenimento' => 'playa, museo, cattedrali, etna, escursioni quad, visite guidate, storia',
            'descrizione' => 'La città di Catania è situata nel sud-est della Sicilia, sulla costa bagnata dal mar Ionio, a soli venti minuti dal vulcano attivo più alto d Europa, l Etna (e il suo Parco) e da Taormina, "la perla dello Ionio". Katane fu fondata dai Greci nel 729 a. C., e conquistata dai Romani nel 263 d.C.',
            'prezzo' => '70 euro'],

            ['destinazione' => 'Madonna di campiglio',
            'hotel' => 'Bonapace',
            'promozione' => 'Mezza pensione',
            'assicurazione' => 'non assicurata',
            'img' => 'https://www.visittrentino.info/assets-database/36000-36999/36700-36799/image-thumb__1476398__lightboximage/madonna-di-campiglio---val-rendena---dolomiti-di-brenta_36758.webp',
            'intrattenimento' => 'dolomiti, parco san vito, colofosco, mondo magico della foresta park',
            'descrizione' => 'Il Trentino-Alto Adige si estende per 13.607 km2 e ha una popolazione, relativamente scarsa, di 1 078 746 abitanti (2020); la densità è pari a poco più di 79 abitanti per km2. I confini corrispondono quasi ovunque a sezioni o sistemi montuosi delle Alpi (Alpi Retiche, Alpi Noriche, Dolomiti)',
            'prezzo' => '80 euro'],

            



        ];

        foreach($places as $place){
            $new_place = new Place();
            $new_place->destinazione = $place['destinazione'];
            $new_place->hotel = $place['hotel'];
            $new_place->promozione = $place['promozione'];
            $new_place->assicurazione = $place['assicurazione'];
            $new_place->img = $place['img'];
            $new_place->intrattenimento = $place['intrattenimento'];
            $new_place->descrizione = $place['descrizione'];
            $new_place->prezzo = $place['prezzo'];
            $new_place->save();
        }
    }
}
