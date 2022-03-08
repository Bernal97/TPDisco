<?php
    
    
    function preCargaArray(){
        /**
         * Precargamos un arreglo con valores ya establecidos
         */
        $juegoMasVendido[0] = array (
            "juego" => 'Autitos Chocadores',
            "precioTicket" => 50,
            "cantTickets" => 10
        );
        $juegoMasVendido[1] = array (
            "juego" => 'Montania Rusa',
            "precioTicket" => 100,
            "cantTickets" => 40
        );
        $juegoMasVendido[2] = array (
            "juego" => 'Derribar Latas',
            "precioTicket" => 30,
            "cantTickets" => 100
        );
        $juegoMasVendido[3] = array (
            "juego" => 'Gusano',
            "precioTicket" => 42,
            "cantTickets" => 30
        );
        $juegoMasVendido[4] = array (
            "juego" => 'Tiro al Blanco',
            "precioTicket" => 75.3,
            "cantTickets" => 50
        );

        $juegoMasVendido[5] = array (
            "juego" => 'Acetar al Aro',
            "precioTicket" => 20,
            "cantTickets" => 50
        );

        $juegoMasVendido[6] = array (
            "juego" => 'Quads',
            "precioTicket" => 10,
            "cantTickets" => 80
        );

        $juegoMasVendido[7] = array (
            "juego" => 'Karts',
            "precioTicket" => 120.4,
            "cantTickets" => 75
        );

        $juegoMasVendido[8] = array (
            "juego" => 'Montaña Rusa',
            "precioTicket" => 100,
            "cantTickets" => 65
        );

        $juegoMasVendido[9] = array (
            "juego" => 'Rueda de la Fortuna',
            "precioTicket" => 54.6,
            "cantTickets" => 45
        );

        $juegoMasVendido[10] = array (
            "juego" => 'Tiro al Blanco',
            "precioTicket" => 75.3,
            "cantTickets" => 50
        );

        $juegoMasVendido[11] = array (
            "juego" => 'Calesita',
            "precioTicket" => 34.5,
            "cantTickets" => 50

        );

        return $juegoMasVendido;
    }

    function preCargaMes ($juegoMasVendido){
        /**
         * Pre cargamos los valores del total vendido usando
         * los valores ya precargados anteriormente
         */
        $tickets[0] = array (
            "Mes" => 'Enero',
            "Monto" => $juegoMasVendido[0]["precioTicket"] * $juegoMasVendido[0]["cantTickets"]
        );
        $tickets[1] = array (
            "Mes" => 'Febrero',
            "Monto" => $juegoMasVendido[1]["precioTicket"] * $juegoMasVendido[1]["cantTickets"]
            
        );
        $tickets[2] = array (
            "Mes" => 'Marzo',
            "Monto" => $juegoMasVendido[2]["precioTicket"] * $juegoMasVendido[2]["cantTickets"]
            
        );
        $tickets[3] = array (
            "Mes" => 'Abril',
            "Monto" => $juegoMasVendido[3]["precioTicket"] * $juegoMasVendido[3]["cantTickets"]
            
        );
        $tickets[4] = array (
            "Mes" => 'Mayo',
            "Monto" => $juegoMasVendido[4]["precioTicket"] * $juegoMasVendido[4]["cantTickets"]
            
        );
        $tickets[5] = array (
            "Mes" => 'Junio',
            "Monto" => $juegoMasVendido[5]["precioTicket"] * $juegoMasVendido[5]["cantTickets"]
            
        );
        $tickets[6] = array (
            "Mes" => 'Julio',
            "Monto" => $juegoMasVendido[6]["precioTicket"] * $juegoMasVendido[6]["cantTickets"]
            
        );
        $tickets[7] = array (
            "Mes" => 'Agosto',
            "Monto" => $juegoMasVendido[7]["precioTicket"] * $juegoMasVendido[7]["cantTickets"]
            
        );
        $tickets[8] = array (
            "Mes" => 'Septiembre',
            "Monto" => $juegoMasVendido[8]["precioTicket"] * $juegoMasVendido[8]["cantTickets"]
            
        );
        $tickets[9] = array (
            "Mes" => 'Octubre',
            "Monto" => $juegoMasVendido[9]["precioTicket"] * $juegoMasVendido[9]["cantTickets"]
            
        );
        $tickets[10] = array (
            "Mes" => 'Noviembre',
            "Monto" => $juegoMasVendido[10]["precioTicket"] * $juegoMasVendido[10]["cantTickets"]
            
        );
        $tickets[11] = array (
            "Mes" => 'Diciembre',
            "Monto" => $juegoMasVendido[11]["precioTicket"] * $juegoMasVendido[11]["cantTickets"]
            
        );
        return $tickets;
       
    }
       
    function obtenerMes ($tickets, $mes){
        /**
         * Con esta funcion obtenes la posicion del mes del arreglo tickets
         * mediante el ingreso de una cadena string
         */
        $i = 0;
        while($i < count($tickets) && (strtolower($tickets[$i]['Mes']) != strtolower($mes))){
            $i++;
        }
        if($i >= count($tickets)){
            $i = -1;
        }
        return $i;
    }


    function solicitarMes($tickets){
        //solicitar mes lo que hace retornar el numero de la posicion
        //de dicho mes, si el mes no existe, se volvera a pedirle hasta
        //que ingrese uno valido
        $pos = -1;
        $esMes = false;
        do{
           $mes = trim(fgets(STDIN));
           $pos = obtenerMes($tickets, $mes);
           if ($pos != -1){
               $esMes = true;
           } else{
               echo "Este mes no existe, ingrese un mes valido \n";
           }
        }while($esMes == false);
        return $pos;
    } 
    function ingresarVentas($aux, $pos, $tickets){
        /**
         * 
         */
            echo "Ingrese la informacion de la venta del juego \n";
            echo "Nombre del juego: ";
            $name = trim(fgets((STDIN)));
            echo "ingrese el precio del ticket: ";
            $price = trim(fgets(STDIN));
            echo "Ingrese la cantidad de tickets vendidos: ";
            $cant = trim(fgets(STDIN));
            $total = $price * $cant;
                if ($total > $tickets[$pos]["Monto"]){
                    $aux["nombre"] = $name;
                    $aux["cantTickets"] = $cant;
                    $aux["precioTicket"] = $price;
                    $aux["total"] = $total;
                    $aux["Update"] = true;                            
                }else{
                    $aux["total"] = $total;
                    $aux["Update"] = false;
                }          
        return $aux;
        }
       
    

   
    function actualizarMonto($tickets, $mes, $aux){
        /**
         * Creó con antelacion una variable if donde se compara el monto anterior con el
         * nuevo basandose en un monto total
         */
        $tickets[$mes]["Monto"] = $tickets[$mes]["Monto"] + $aux["total"];
        return $tickets;
    }
    function actualizarJuegos($juegoMasVendido, $mes, $aux){
        
        $juegoMasVendido[$mes]["juego"] = $aux["nombre"];
        $juegoMasVendido[$mes]["cantTickets"] = $aux["cantTickets"];
        $juegoMasVendido[$mes]["precioTicket"] = $aux["precioTicket"];
        return $juegoMasVendido;
    }
    function mesMayorVentas($juegoMasVendido, $tickets){
        $mayor = 0;
        $pos = 0;
        foreach ($tickets as $key => $value){
            /**
             * Mediante el foreach, se recorre cada posicion del arreglo y va buscando
             * el mes con mayor venta y actualizando la posicion donde se encontraria. Cuando
             * termina de recorrer todos los arreglos, muestra toda la informacion del mes que
             * tiene la mayor monto
             */
            if($value["Monto"] > $mayor ){
                $mayor = $value["Monto"];
                $pos = $key;
            }
        }
        mostrarInfoMes($pos, $tickets, $juegoMasVendido);
    }

    function mejorVentaMes($juegoMasVendido, $tickets, $monto){
        /**
         * Se actualizo a un while para que haga un recorrido parcial
         */
        $mayor = false;
        $pos = 0;
        while($mayor = false && $pos < count($tickets)){
            if ($tickets[$pos]["Monto"] > $monto){
                mostrarInfoMes($pos, $tickets, $juegoMasVendido);
                $mayor = true;
            }else{
                $pos++;
            }
        }
        if ($mayor == false){
            echo "No se encontro un mes que superara el monto escrito";
        }
    }


    function mostrarInfoMes($pos, $tickets, $juegoMasVendido){
        /**
         * La hace corta, si se cumple lo del if, muestra toda la info por pantalla, sino
         * muestra que no existe ese mes;
         */
            if ($pos > -1 && $pos < count($tickets)){
                echo "<" . $tickets[$pos]["Mes"] . "> \n";
                echo "Juego con mayor monto de venta: " . $juegoMasVendido[$pos]["juego"] . "\n";
                echo "Precio de cada Ticket: $" . $juegoMasVendido[$pos]["precioTicket"] . "\n";
                echo "Numero de Tickets Vendidos: " . $juegoMasVendido[$pos]["cantTickets"] . "\n";
                echo "Venta total de tickets del mes: $" . $tickets[$pos]["Monto"] . "\n";
            }else{
                echo "El mes no existe \n";

    }
}

    function juegosVendidosOrdenados($a, $b){
        /**
         * Esta funcion lo que hace es comparar el total del mes
         * (como el monto total esta en $tickets, me crea conflictos para
         * llamarlo asi que directamente lo que hice fue traer la cuenta
         * del monto que esta en $ticekts y aplicarlo aca)
         * y basandose en el resultado, lo acomoda del juego con menor venta total
         * al que tiene mayor venta
         */
        if($a['cantTickets']*$a['precioTicket'] == $b['cantTickets']*$b['precioTicket']){
            return 0;
        }
        return ($a['cantTickets'] * $a['precioTicket'] < $b['cantTickets'] * $b['precioTicket']) ? -1 : 1;
    }


    function mesesOrdenados($juegoMasVendido){
        uasort($juegoMasVendido, 'juegosVendidosOrdenados');
        print_r($juegoMasVendido);
        /**
         * La utilizacion del print_r aca es para visualizar el arreglo despues de
         * aplicarle el orden.
         * Lo bueno del print_r es que te permite que se visualice TODO el contenido
         * de un arreglo sin necesidad de por ejemplo, crear un foreach (
         * Aunque si es necesario un foreach para que lo muestre mas detallado cada cosa)
         * Usarlo me permitio saber cuando empece a crear el programa que no me estaba 
         * precargando los arreglos y evitar que odiara PHP
         * En general, print_r lo que hace es mostrar informacion legible para los humanos
         * en arreglos, como mencione antes, permite saber si un arreglo es vacio o
         * ver detalladamente que variables contiene en su interior
         */
    }

    function menuOpciones (){
        /**
         * La idea de usar un switch es para tener un mejor control
         * de las repetitivas sin recaer en un if / else
         * Estaba viendo en la teoria y no lo vieron esto (O por lo menos
         * yo no lo encontre). Si esta ""mal"" se puede cambiar por
         * las alternativas, pero quedaria un codigo mas largo
         */
        
        $juegoMasVendido = array();
        $tickets = array();
        $aux = array(
            "nombre" => "",
            "cantTickets" => 0,
            "precioTicket" => 0,
            "total" => 0,
            "Update" => false
            /** Declaro a update con valores booleanos para saber si usarlo para actualizar
             * juegos y tickets o solo tickets
             */
        );
        $juegoMasVendido = preCargaArray();
        $tickets = preCargaMes($juegoMasVendido);
         do{
            echo "1 - Ingresar una Venta \n";          
            echo "2 - Mostrar Mes con mayor monto de ventas \n";         
            echo "3 - Mes que supera un monto de ventas \n";         
            echo "4 - Informacion de un mes \n";
            echo "5 - Juegos mas Vendidos Ordenadamente \n";
            echo "0 - Salir \n";
            $opcion = trim(fgets(STDIN));
            switch($opcion){
                case 1: 
                    echo "Ingrese el mes \n";
                    $mes = solicitarMes($tickets);
                    $aux = IngresarVentas($aux, $mes, $tickets);
                    if($aux["Update"] == 1){
                        $juegoMasVendido = actualizarJuegos($juegoMasVendido, $mes, $aux);
                        $tickets = actualizarMonto($tickets,$mes,$aux);
                        echo "Datos Actualizados \n";
                    }else{
                        $tickets = actualizarMonto($tickets, $mes, $aux);
                        echo "Solo se actualizo el monto \n";
                    }               
                break;
                case 2:
                     mesMayorVentas($juegoMasVendido, $tickets); 
                break;
                case 3: 
                    echo "Ingrese el monto maximo \n";
                    $monto = trim(fgets(STDIN));   
                    mejorVentaMes($juegoMasVendido, $tickets, $monto);
                 break;
                case 4: 
                    echo "Ingrese el mes \n";
                    do{
                    $mes = solicitarMes($tickets);
                    mostrarInfoMes($mes , $tickets, $juegoMasVendido);
                    }while($mes < 0);
                 break;
                case 5:                  
                    mesesOrdenados($juegoMasVendido);
                 break;
            }
        }while($opcion != 0);
    }
   
    menuOpciones();
?>