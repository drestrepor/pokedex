<?php

namespace App\Http\Controllers;

class PokeneaController extends Controller
{
    public static $pokeneas = array(
        array(
            'id' => 1,
            'nombre' => 'Ferxxo',
            'altura' => '1.70',
            'habilidad' => 'Bellakiar',
            'imagen' => 'https://pbs.twimg.com/media/FF3FKnBWYAQI2KQ.jpg',
            'frase' => 'El te tiene en un Mercedes y yo voy por ti en la DT'
        ),
        array(
            'id' => 2,
            'nombre' => 'Ryan Castro',
            'altura' => '1.75',
            'habilidad' => 'Tirar flow',
            'imagen' => 'https://pbs.twimg.com/media/FP7jKK6WYAQf-mY.jpg',
            'frase' => 'Que chimba sog'
        ),
        array(
            'id' => 3,
            'nombre' => 'Lali',
            'altura' => '1.72',
            'habilidad' => 'Arruyar',
            'imagen' => 'https://www.eafit.edu.co/EafitCn/images/lalinde.jpg',
            'frase' => 'Y eso es una heuristica'
        ),
        array(
            'id' => 4,
            'nombre' => 'Blesd',
            'altura' => '1.42',
            'habilidad' => 'Perriar',
            'imagen' => 'https://images.squarespace-cdn.com/content/v1/5a39684364b05fa8570b6896/1631550514545-60D18U1SWEMIICES0CYE/Blessd.jpg?format=1000w',
            'frase' => 'Dime y yo planeo la huida'
        ),
        array(
            'id' => 5,
            'nombre' => 'Juanes',
            'altura' => '1.70',
            'habilidad' => 'La cursileria',
            'imagen' => 'https://i.scdn.co/image/ab6761610000e5eb250f1e78d9f8b375b33e5ad6',
            'frase' => 'Tengo la camisa negra'
        ),
        array(
            'id' => 6,
            'nombre' => 'KarolG',
            'altura' => '1.57',
            'habilidad' => 'Ser una bichota',
            'imagen' => 'https://www.semana.com/resizer/S675zSkQJAhjyF3o-RhO4tTrUDU=/1200x675/filters:format(jpg):quality(50)//cloudfront-us-east-1.images.arcpublishing.com/semana/R5PRIG42URFL5BSRCNMCUAOSTE.jpg',
            'frase' => 'Hace rato que no se na\' de ti'
        ),
        array(
            'id' => 7,
            'nombre' => 'McCormick',
            'altura' => '1.62',
            'habilidad' => 'Enseñar por telepatía',
            'imagen' => 'https://avatars.githubusercontent.com/u/14790501?v=4',
            'frase' => 'Hoy ese codigo solo lo entendemos Dios y yo, y dentro de dos meses solo lo va a entender Dios'
        ),
        array(
            'id' => 8,
            'nombre' => 'JBalvin',
            'altura' => '1.70',
            'habilidad' => 'Los negocios socio',
            'imagen' => 'https://estaticos-cdn.elperiodico.com/clip/df5ef5bd-72af-4ba2-a38b-7f7e108bddf7_alta-libre-aspect-ratio_default_0.jpg',
            'frase' => 'Respeto tu opinion'
        ),
    );

    public function getRandom()
    {
        $pokeneaIndex = array_rand(PokeneaController::$pokeneas);

        return response()->json([
            'data' => PokeneaController::$pokeneas[$pokeneaIndex],
            'viewData' => [
                'ip' => $_SERVER['REMOTE_ADDR'],
                'contenedor' => gethostbyname(gethostname()),
            ],
        ]);
    }

    public function getRandomImage()
    {
        $pokeneaIndex = array_rand(PokeneaController::$pokeneas);

        return response()->json(
            $viewData = [
                'pokenea' => PokeneaController::$pokeneas[$pokeneaIndex],
                'contenedor' => gethostbyname(gethostname()),
            ]
        );
    }
}
