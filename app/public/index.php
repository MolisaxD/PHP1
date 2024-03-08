<?php
/**
 * Aplicação em PHP 2
 * @author: Melissa Souza Borges <melissa.borges2012@gmail.com>
 * @version: 20240308.1
 * 
 */

?>

<!-- header -->
<?php require 'header.phtml' ?>

<!-- navbar -->
<?php require 'navbar.phtml' ?>

<!-- carousel -->
<?php require 'carousel.phtml' ?>

<!-- contents -->
<!-- about -->
<div class="container content"> 
    <h1 class="h1-titulo">Monster Hunter World: Iceborne</h1>
    <hr>
    <div class="row">
        <div class="column">
            <p>Monster Hunter: World (モンスターハンター：ワールド Monsutā Hantā: Wārudo?) é um jogo de RPG eletrônico de ação desenvolvido e publicado pela Capcom. 
            O jogo faz parte da série Monster Hunter, foi lançado mundialmente em 26 de janeiro de 2018 para PlayStation 4 e Xbox One e em 9 de agosto de 2018 para Windows. 
            No jogo, o jogador assume o papel de um Caçador, encarregado de caçar e matar ou atrapalhar monstros que vagam em um dos vários espaços ambientais. 
            Se for bem sucedido, o jogador é recompensado através de pilhais constituídos por partes do monstro e outros elementos que são usados para fabricar armas e armaduras, 
            entre outros equipamentos. O loop principal do jogo faz com que o jogador crie equipamentos adequados para poder caçar monstros mais difíceis, 
            que por sua vez fornecem peças que levam a uma engrenagem mais poderosa. Os jogadores podem caçar sozinhos ou podem caçar em grupos cooperativos 
            de até quatro jogadores através dos serviços on-line do jogo.</p>
        </div>
        <div class="column">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/OotQrKEqe94?si=41suieO-af4Ya8_r" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    <!-- event cards -->

    <h1 class="h1-titulo"> Eventos </h1>
    <hr>
    <div class="row">
        <div class="col">
            <div class="card" style="width: 24rem;">
                <img src="/img/kulve.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Kulve Taroth</h5>
                    <p class="card-text">Dragão ancião envolvido em um manto dourado. Quebrar seus chifres requer um enorme esforço.</p>
                    <a href="#" class="btn btn-primary btn-card">Visualizar evento</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 24rem;">
                <img src="/img/safi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Safi Jiiva</h5>
                    <p class="card-text">A forma adulta de Xeno'jiiva. Absorve energia do ambiente para se curar e mudar o ecossistema.</p>
                    <a href="#" class="btn btn-primary btn-card">Visualizar evento</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 24rem;">
                <img src="/img/fatalis.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fatalis</h5>
                    <p class="card-text">Fatalis apareceu nas ruínas do Castelo Schrade. Reúna uma equipe e parta no serviço especial "O Dragão Sombrio" para encarar esse inimigo lendário!</p>
                    <a href="#" class="btn btn-primary btn-card">Visualizar evento</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- footer -->
<?php require 'footer.phtml' ?>