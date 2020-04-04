<!DOCTYPE html>
<html>
    <head>
        <title>Escalar Orçamento</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    </head>

    <body>
        <form method="POST">
        <header>
            <h1>Orçamento Midia Indoor por Licença</h1>
            <p></p>
        </header>
        <main>    
            <section class="form">         
                <h5><span>Quantidade</span><span>TVs</span><span>Valor Unitario</span><span>Valor Total</span></h5>
                    <section class="TVS">
                            <input
                            class="qtd"
                            type="number"
                            name="qtd32Pol"
                            placeholder="0"
                            >
                            <h6>TV 32 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit32Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv32 = filter_input(INPUT_POST, 'qtd32Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val32 = filter_input(INPUT_POST, 'val_unit32Pol');
                                if($tv32&&$val32){
                                $parce32 = $tv32*$val32;
                                echo '<h5> R$'.number_format($parce32,2,',','.').'</h5>';
                                }else{
                                    $parce32 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                            
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd40Pol"
                            placeholder="0"
                            >
                            <h6>TV 40 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit40Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv40 = filter_input(INPUT_POST, 'qtd40Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val40 = filter_input(INPUT_POST, 'val_unit40Pol');
                                if($tv40&&$val40){
                                $parce40 = $tv40*$val40;
                                echo '<h5> R$'.number_format($parce40,2,',','.').'</h5>';
                                }else{
                                    $parce40 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                           
                        
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd43Pol"
                            placeholder="0"
                            >
                            <h6>TV 43 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit43Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv43 = filter_input(INPUT_POST, 'qtd43Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val43 = filter_input(INPUT_POST, 'val_unit43Pol');
                                if($tv43&&$val43){
                                $parce43 = $tv43*$val43;
                                echo '<h5> R$'.number_format($parce43,2,',','.').'</h5>';
                                }else{
                                    $parce43 =0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>
                                                  
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd49Pol"
                            placeholder="0"
                            >
                            <h6>TV 49 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit49Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv49 = filter_input(INPUT_POST, 'qtd49Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val49 = filter_input(INPUT_POST, 'val_unit49Pol');
                                if($tv49&&$val49){
                                $parce49 = $tv49*$val49;
                                echo '<h5> R$'.number_format($parce49,2,',','.').'</h5>';
                                }else{
                                    $parce49 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                        
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd50Pol"
                            placeholder="0"
                            >
                            <h6>TV 50 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit50Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv50 = filter_input(INPUT_POST, 'qtd50Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val50 = filter_input(INPUT_POST, 'val_unit50Pol');
                                if($tv50&&$val50){
                                $parce50 = $tv50*$val50;
                                echo '<h5> R$'.number_format($parce50,2,',','.').'</h5>';
                                }else{
                                    $parce50 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                        
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd55Pol"
                            placeholder="0"
                            >
                            <h6>TV 55 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit55Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv55 = filter_input(INPUT_POST, 'qtd55Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val55 = filter_input(INPUT_POST, 'val_unit55Pol');
                                if($tv55&&$val55){
                                $parce55 = $tv55*$val55;
                                echo '<h5> R$'.number_format($parce55,2,',','.').'</h5>';
                                }else{
                                    $parce55 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                        
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd58Pol"
                            placeholder="0"
                            >
                            <h6>TV 58 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit58Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv58 = filter_input(INPUT_POST, 'qtd58Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val58 = filter_input(INPUT_POST, 'val_unit58Pol');
                                if($tv58&&$val58){
                                $parce58 = $tv58*$val58;
                                echo '<h5> R$'.number_format($parce58,2,',','.').'</h5>';
                                }else{
                                    $parce58 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                        
                        
                            <input
                            class="qtd"
                            type="number"
                            name="qtd65Pol"
                            placeholder="0"
                            >
                            <h6>TV 65 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit65Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv65 = filter_input(INPUT_POST, 'qtd65Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val65 = filter_input(INPUT_POST, 'val_unit65Pol');
                                if($tv65&&$val65){
                                $parce65 = $tv65*$val65;
                                echo '<h5> R$'.number_format($parce65,2,',','.').'</h5>';
                                }else{
                                    $parce65 =0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                        
                    
                            <input
                            class="qtd"
                            type="number"
                            name="qtd75Pol"
                            placeholder="0"
                            >
                            <h6>TV 75 Polegadas</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unit75Pol"
                            placeholder="0.00"
                            >
                            <?php 
                                $tv75 = filter_input(INPUT_POST, 'qtd75Pol', FILTER_SANITIZE_NUMBER_INT);
                                $val75 = filter_input(INPUT_POST, 'val_unit75Pol');
                                if($tv75&&$val75){
                                $parce75 = $tv75*$val75;
                                echo '<h5> R$'.number_format($parce75,2,',','.').'</h5>';
                                }else{
                                    $parce75 = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                            
                            ?>
                                            
                    
                            <input
                            class="qtd"
                            type="number"
                            name="Monitor"
                            placeholder="0"
                            >
                            <h6>Monitor LFD(tamanho definido por projeto)</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unitMonitor"
                            placeholder="0.00"
                            >
                            <?php 
                                $LFD = filter_input(INPUT_POST, 'Monitor', FILTER_SANITIZE_NUMBER_INT);
                                $valLFD = filter_input(INPUT_POST, 'val_unitMonitor');
                                if($LFD&&$valLFD){
                                $parceLFD = $LFD*$valLFD;
                                echo '<h5> R$'.number_format($parceLFD,2,',','.').'</h5>';
                                }else{
                                    $parceLFD = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>
                                            
                    
                            <input
                            class="qtd"
                            type="number"
                            name="MonitorVideoWall"
                            placeholder="0"
                            >
                            <h6>Monitor de Video Wall</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unitMVW"
                            placeholder="0.00"
                            >
                            <?php 
                                $WALL = filter_input(INPUT_POST, 'MonitorVideoWall', FILTER_SANITIZE_NUMBER_INT);
                                $valWALL = filter_input(INPUT_POST, 'val_unitMVW');
                                if($WALL&&$valWALL){
                                $parceWALL = $WALL*$valWALL;
                                echo '<h5> R$'.number_format($parceWALL,2,',','.').'</h5>';
                                }else{
                                    $parceWALL = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>


                            <p></p>
                            <h3>Valor Total das TVs:</h3>
                            <?php
                            $totalTVS = $parce32+$parce40+$parce43+$parce49+$parce50+$parce55+$parce58+$parce65+$parce75+$parceLFD+$parceWALL;
                                echo '<h3> R$'.number_format($totalTVS,2,',','.').'</h3>';
                            ?>
                    </section>
                <h5><span>Quantidade</span><span>Players</span><span>Valor Unitario</span><span>Valor Total</span></h5>
                    <section class="Players">
                            <input
                            class="qtd"
                            type="number"
                            name="Player_alpha"
                            placeholder="0"
                            >
                            <h6>Player Alphasignage</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unitPlayer_alpha"
                            placeholder="0.00"
                            >
                            <?php 
                                $PlayerA = filter_input(INPUT_POST, 'Player_alpha', FILTER_SANITIZE_NUMBER_INT);
                                $valPlayerA = filter_input(INPUT_POST, 'val_unitPlayer_alpha');
                                if($PlayerA&&$valPlayerA){
                                $parcePlayerA = $PlayerA*$valPlayerA;
                                echo '<h5> R$'.number_format($parcePlayerA,2,',','.').'</h5>';
                                }else{
                                    $parcePlayerA = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>

                            <input
                            class="qtd"
                            type="number"
                            name="Player_alpha_secundario"
                            placeholder="0"
                            >
                            <h6>Player Alphasignage Secundario</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unitPlayer_alpha_secundario"
                            placeholder="0.00"
                            >
                            <?php 
                                $PlayerAS = filter_input(INPUT_POST, 'Player_alpha_secundario', FILTER_SANITIZE_NUMBER_INT);
                                $valPlayerAS = filter_input(INPUT_POST, 'val_unitPlayer_alpha_secundario');
                                if($PlayerAS&&$valPlayerAS){
                                $parcePlayerAS= $PlayerAS*$valPlayerAS;
                                echo '<h5> R$'.number_format($parcePlayerAS,2,',','.').'</h5>';
                                }else{
                                    $parcePlayerAS = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>
                            
                            <input
                            class="qtd"
                            type="number"
                            name="TV_Box"
                            placeholder="0"
                            >
                            <h6>TV Box</h6>
                            <input
                            class="val_unit"
                            type="text"
                            name="val_unitTV_Box"
                            placeholder="0.00"
                            >
                            <?php 
                                $TVBOX = filter_input(INPUT_POST, 'TV_Box', FILTER_SANITIZE_NUMBER_INT);
                                $valTVBOX = filter_input(INPUT_POST, 'val_unitTV_Box');
                                if($TVBOX&&$valTVBOX){
                                $parceTVBOX= $TVBOX*$valTVBOX;
                                echo '<h5> R$'.number_format($parceTVBOX,2,',','.').'</h5>';
                                }else{
                                    $parceTVBOX = 0;
                                    echo '<h5>Não Solicitado</h5>';
                                }
                        
                            ?>


                            <p></p>
                            <h3>Valor Total dos Players:</h3>
                            <?php
                                $totalPlayers = $parcePlayerA+$parcePlayerAS+$parceTVBOX;
                                echo '<h3> R$'.number_format($totalPlayers,2,',','.').'</h3>';              
                            ?>
                    </section>
                <h5><span>Mão de Obra Da Instalação</span></h5>
                    <section class="MDO">
                        <input
                        type="text"
                        name="val_install"
                        placeholder="Digite aqui o valor da instalação"
                        >
                        <?php 
                                $vallinstall = filter_input(INPUT_POST, 'val_install');
                                if($vallinstall){
                                $parcevallinstall = $vallinstall;
                                }else{
                                    $parcevallinstall = 0;
                                }
                            ?>

                    </section>
                <h5><span>Formas de Pagamento</span></h5>
                     <section class="Forma_Pagamento">
                                <select name="Forma_pgt" class="pgt">
                                    <option value="ini">Selecione uma opção</option>
                                    <option value="year">Anual</option>
                                    <option value="month">Mensal</option>
                                </select>
                     </section>
                <h5><span>Quantidade De Licenças</span></h5>
                    <section class="QTL">
                            <select name="QTD" class="qtd">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="60">60</option>
                                <option value="80">80</option>
                                <option value="100">100</option>
                            </select>
                    </section>
                <h5><span>Planos</span></h5>
                    <section class="Plan">
                            <select name="Plano" class="planos">
                                <option value="select">Selecionar Plano</option>
                                <option value="Bronze">Plano Bronze</option>
                                <option value="Prata">Plano Prata</option>
                                <option value="Ouro">Plano Ouro</option>
                                <option value="Diamante">Plano Diamante</option>
                            </select>
                    </section>
             <button class="consulta" type="button">Consultar 🔍</button>
        </main>
        <footer>
            <section class="orc hide">
                <h2><span>Orçamento</span></h2>
                <section class="orcamento">
                        <h3><span>Investimento Inicial</span><span>Mensalidade</span></h3>
                        <p></p>
                        <?php
                        require('CalculoPlanos.php');
                        $parceTotal = $totalTVS+$totalPlayers+$parcevallinstall+$PlanSelect;
                        
                            echo'<h4><span>R$'.number_format($parceTotal,2,',','.').'</span>';
                            echo'<span>R$'.number_format($PlanSelect,2,',','.').'</span></h4>';
                        ?>  
                </section>
                <button class="Fazer" type="submit">Fazer Orçamento</button>
            </section>
        </footer>
        <script src="scripts.js"></script>
        </form>   
    </body>
    </html>