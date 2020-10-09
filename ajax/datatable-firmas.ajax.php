<?php

class TablaFirmas{

    /*=============================================
    MOSTRAR LA TABLA DE FIRMAS
    =============================================*/

    public function mostrarTablaFirmas(){

        echo '{
            "data": [
              [
                "1",
                "vistas/img/firmas/default/firma2.png",
                "20782",
                "2020-10-08 13:58:50",
                "botones"
              ],
              [
                "2",
                "vistas/img/firmas/default/firma2.png",
                "20780",
                "2020-10-08 13:58:50",
                "botones"
              ]
            ]
          }';
    }

}

    /*=============================================
    ACTIVAR LA TABLA DE FIRMAS
    =============================================*/
    $activarFirmas = new TablaFirmas();
    $activarFirmas -> mostrarTablaFirmas();