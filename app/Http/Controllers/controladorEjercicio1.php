
<?php
    

    class controladorEjercicio1 extends Controller
    {
        public function ej1Parametro(){
            return view('primeraView') -> with (['text' =>'Éste es el resultado del primer ejercicio de la práctica hecha por Andres']);
        }

    }

?>