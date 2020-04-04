<?php



    $forma_Pagamento = filter_input(INPUT_POST, 'Forma_pgt');
    $licencas = filter_input(INPUT_POST, 'QTD');
    $planos = filter_input(INPUT_POST, 'Plano');

    $PlanSelect=0;

    if($planos=='select'){
        $PlanSelect=0;
    }else{
        if($forma_Pagamento=='year' && $planos=='Bronze'){
            $bronzeA=15.90;
            $PlanSelect=$bronzeA;
            }elseif($forma_Pagamento=='year' && $planos=='Prata'){
                $prataA=19.60;
                $PlanSelect=$prataA;
            }elseif($forma_Pagamento=='year' && $planos=='Ouro'){
                $ouroA=23.01;
                $PlanSelect=$ouroA;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==1){
                $diamanteA1=26.91;
                $PlanSelect=$diamanteA1;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==10){
                $diamanteA10=26.67;
                $PlanSelect=$diamanteA10;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==15){
                $diamanteA15=26.50;
                $PlanSelect=$diamanteA15;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==20){
                $diamanteA20=26.17;
                $PlanSelect=$diamanteA20;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==30){
                $diamanteA30=25.83;
                $PlanSelect=$diamanteA30;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==40){
                $diamanteA40=25.50;
                $PlanSelect=$diamanteA40;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==60){
                $diamanteA60=24.90;
                $PlanSelect=$diamanteA60;
            }elseif($forma_Pagamento=='year' && $planos=='Diamante' && $licencas==100){
                $diamanteA100=24.50;
                $PlanSelect=$diamanteA100;
            }elseif ($forma_Pagamento=='month' && $planos=='Bronze'){
                $bronzeM=39.00;
                $PlanSelect=$bronzeM;
            }elseif($forma_Pagamento=='month' && $planos=='Prata'){
                $prataM=49.00;
                $PlanSelect=$prataM;
            }elseif($forma_Pagamento=='month' && $planos=='Ouro'){
                $ouroM=59.00;  
                $PlanSelect=$ouroM; 
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==1){
                $diamanteM1=69.00;
                $PlanSelect=$diamanteM1;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==10){
                $diamanteM10=59.00;
                $PlanSelect=$diamanteM10;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==15){
                $diamanteM15=57.00;
                $PlanSelect=$diamanteM15;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==20){
                $diamanteM20=55.00;
                $PlanSelect=$diamanteM20;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==30){
                $diamanteM30=53.00;
                $PlanSelect=$diamanteM30;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==40){
                $diamanteM40=51.00;
                $PlanSelect=$diamanteM40;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==60){
                $diamanteM60=45.00;
                $PlanSelect=$diamanteM60;
            }elseif($forma_Pagamento=='month' && $planos=='Diamante' && $licencas==100){
                $diamanteM100=39.00;
                $PlanSelect=$diamanteM100;
            }else{
                $totalPlano=0;
            }
        }
