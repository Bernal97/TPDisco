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
        $pos = 0;
        foreach($tickets as $key => $value){
            if(strtolower($value["Mes"]) == strtolower($mes)){
                $pos = $key;
                return $pos;
            }
        }
        $pos = 12;
        return $pos;
    }
    
    function ingresarVentas($juegoMasVendido, $mes, $tickets){
        /**
         * recorro el arreglo buscando la posicion que sea igual al mes
         * ingresado (Se puede hacer tambien con el obtenerMes, pero ya lo habia
         * construido antes de hacer dicha funcion)
         * Cuando encuentra la equivalencia con el mes (Use strtolower asi no 
         * hay problemas con las mayusculas), le pide al usuario que ingrese toda la informacion
         * Hay un detalle que no note en el practico que no dice si tambien se actualizaria el nombre
         * del juego, asi que lo que hice fue que, (partiendo tambien del uso del strtolower) si 
         * se ingresaba un nombre distinto al almacenado, no se actualizaria la informacion
         * y mostraria por pantalla que no se ha actualizado nada
         */
        foreach($tickets as $key => $value){
            if(strtolower($value["Mes"]) == strtolower($mes)){
                echo "Ingrese la informacion de la venta del juego \n";
                echo "Nombre del juego: ";
                $name = trim(fgets((STDIN)));
                echo "ingrese el precio del ticket: ";
                $price = trim(fgets(STDIN));
                echo "Ingrese la cantidad de tickets vendidos: ";
                $cant = trim(fgets(STDIN));
                $total = $price * $cant;
                if ($total > $value["Monto"]){
                    $juegoMasVendido = actualizarJuegos($juegoMasVendido, $key, $name ,$price, $cant);
                    
                    break;
                }else{
                    echo "El monto no ha superado al ya almacenado, no se han hecho cambios \n";
                    break;
                }

            
            }
        /**
         * Aca creamos un foreach que recorra los tickets
         * buscando la posicion del mes y verificando si
         * el monto es mayor al establecido asi se actualiza el valor de juegosMasVendidos
         */
        }
        return $juegoMasVendido;
    }
    

    function actualizarJuegos($juegoMasVendido, $val, $name ,$price, $cant){
        /**
         * Uso la funcion strcmp para hacer la comparacion entre el nombre
         * del juego en la posicion para determinar si es el mismo que el del
         * mes correspondiente (Tengo entendido que no se modifica el nombre
         * del juego mas vendido de ese mismo mes)
         * Uso strtolower para evitar conflictos con mayusculas y minusculas
         * En otras funciones uso el == directamente, pero vi que no influia en nada
         * o hace exactamente lo mismo, asi que hay variaciones, pero la funcionalidad
         * de comparacion es la misma)
         */
            if  (strcmp(strtolower($juegoMasVendido[$val]["juego"]), strtolower($name)) == 0){
                $juegoMasVendido[$val]["precioTicket"] = $price;
                $juegoMasVendido[$val]["cantTickets"] = $cant;
                echo "Datos Actualizados \n";
                return $juegoMasVendido;
            }else{
                echo "El juego no es correcto, no se han actualizado datos \n";
            } 
    }
    function actualizarMonto($juegoMasVendido, $tickets, $key){
        /**
         * Usando el obtenerMes, tenemos la posicion para actualizar el monto total
         * del tickets de ese mes
         * Se haya o no actualizado la informacion, se hace igual como una de precaucion
         * ya que al no cambiarse los valores de $juegosMasVendidos, se cargara los valores que
         * esten en dicho mes
         */
        $tickets[$key]["Monto"] = $juegoMasVendido[$key]["precioTicket"] * $juegoMasVendido[$key]["cantTickets"];
        return $tickets;
    }

    function mostrarMesMayorVentas($juegoMasVendido, $tickets){
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
        echo "<" . $tickets[$pos]["Mes"] . "> \n";
        echo "Juego con mayor monto de venta: " . $juegoMasVendido[$pos]["juego"] . "\n";
        echo "Precio de cada Ticket: " . $juegoMasVendido[$pos]["precioTicket"] . "\n";
        echo "Numero de Tickets Vendidos: " . $juegoMasVendido[$pos]["cantTickets"] . "\n";
        echo "Venta total de tickets: $" . $tickets[$pos]["Monto"] . "\n";
    }


    function mejorVentaMes($juegoMasVendido, $tickets, $monto){
        /**
         * Es igual a la funcion mostrarMesMayorVenta, pero con la particularidad
         * de que dejara de recorrer los arreglos en el momento que encuentre un monto
         * de tal mes que supere lo anteriormente ingresado y mostrando toda su informacion antes
         * de regresar al menu
         */
        foreach($tickets as $key => $value){
            if ($value["Monto"] > $monto){
                 echo "<" . $tickets[$key]["Mes"] . "> \n";
                 echo "Juego con mayor monto de venta: " . $juegoMasVendido[$key]["juego"] . "\n";
                 echo "Precio de cada Ticket: " . $juegoMasVendido[$key]["precioTicket"] . "\n";
                 echo "Numero de Tickets Vendidos: " . $juegoMasVendido[$key]["cantTickets"] . "\n";
                 echo "Venta total de tickets del mes: $" . $tickets[$key]["Monto"] . "\n";
                 return;
            }
        }
    }

    function mostrarInfoMes($mes, $tickets, $juegoMasVendido){
        /**
         * Esta funcion lo que hace es ir recorriendo los valores Mes
         * de cada arreglo hasta encontrarlo y mostrar su informacion por pantalla
         * Al no encontrarlo, se pedira al usuario que vuelva a seleccionarlo o que directamente
         * regrese atras si no desea seguir buscandolo
         * Uso una funcion toLower asi hace indiferente si es con mayusculas o minusculas
         */
        do{
        foreach($tickets as $key => $value){
            if (strtolower($value["Mes"]) == strtolower($mes)){
                echo "<" . $tickets[$key]["Mes"] . "> \n";
                echo "Juego con mayor monto de venta: " . $juegoMasVendido[$key]["juego"] . "\n";
                echo "Precio de cada Ticket: $" . $juegoMasVendido[$key]["precioTicket"] . "\n";
                echo "Numero de Tickets Vendidos: " . $juegoMasVendido[$key]["cantTickets"] . "\n";
                echo "Venta total de tickets del mes: $" . $tickets[$key]["Monto"] . "\n";
                return;
            }
        }
        echo "El mes no existe, por favor, vuelva a ingresar otro o escriba 0 para volver atras \n";
        $mes = trim(fgets(STDIN));
    }while($mes != 0);
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
                    $mes = trim(fgets(STDIN));
                    $juegoMasVendido = IngresarVentas($juegoMasVendido, $mes, $tickets);
                    $pos = obtenerMes($tickets, $mes);
                    if ($pos < 12){
                    $tickets = actualizarMonto($juegoMasVendido, $tickets, $pos);
                    }else {
                        echo "El mes no existe, no se han hecho cambios \n";
                    }
                break;
                case 2:

                     mostrarMesMayorVentas($juegoMasVendido, $tickets); 
                break;
                case 3: 
                    echo "Ingrese el monto maximo \n";
                    $monto = trim(fgets(STDIN));   
                    mejorVentaMes($juegoMasVendido, $tickets, $monto);
                 break;
                case 4: 
                    echo "Ingrese el mes \n";
                    $mes = trim(fgets((STDIN)));
                    mostrarInfoMes($mes , $tickets, $juegoMasVendido);
                 break;
                case 5:                  
                    mesesOrdenados($juegoMasVendido);
                 break;
            }
        }while($opcion != 0);
    }
   
    menuOpciones();
?>