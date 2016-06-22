<?php

echo '
<div class="navbar navbar-fixed-top">
<style>

    .cor {
    color: #6A5C5C;
    font-size: .7em;
    background-color: #FFFDFD;
    border: 1px solid #E3DDDD;
}

</style>
<nav role="navigation" class="navbar menu-ac">
        <ul class="list-inline nav-justified color">
            <li role="presentation"><a accesskey="1" href="'.$linkirConteudo.'"> '.$idioma['nav']['irconteudo'].' (Alt+1)</a></li>
            <li role="presentation"><a href="'.$linkirMenu.'"> '.$idioma['nav']['irparamenu'].' (Alt+2)</a></li>
            <li role="presentation"><a id="biggerFont" href="javascript:mudaTamanho(\'texto\', 1);">A+</a></li>
            <li role="presentation"><a accesskey="2" href="javascript:mudaTamanho(\'texto\', -1);">A-</a></li>
            <li role="presentation"><a accesskey="3" href="'.$acess.'">'.$idioma['nav']['acessibilidade'].' (Alt+3)</a></li>
            <li role="presentation"><a accesskey="4" href="'.$sitemap.'">'.$idioma['nav']['mapadosite'].' (Alt+4)</a></li>
            <li role="presentation">
               <a href="javascript:mudaParaEscuro(\''.$imgSrc.'\');">
                    <div class="circle"></div>
               </a>
            </li>
            <li role="presentation">
                <a href="javascript:mudaParaClaro(\''.$imgSrc.'\');">
                    <div class="circle circle-w"></div>
               </a>
            </li>
            <li>
               <form method="post" action="">
                    <input class="btn-idioma cor" value="pt" name="idioma" type="submit">                    
                    <input class="btn-idioma cor" value="en" name="idioma" type="submit">
                    <input class="btn-idioma cor" value="es" name="idioma" type="submit">
               </form>
            </li>
        </ul>
    </nav>

    <nav role="navigation" class="nav navbar menu-ac2"">
        <ul class="list-inline nav-justified">
            <li><img src="'.$imglogo.'" class="LogoNav" alt="Logotipo do site"></li>
            <li class="borda" role="presentation"><a href="'.$temaA.'">'.$idioma['nav']['temaA'].'</a></li>
            <li class="borda" role="presentation"><a href="'.$temaB.'">'.$idioma['nav']['temaB'].'</a></li>
            <li class="borda" role="presentation"><a href="'.$temaC.'">'.$idioma['nav']['temaC'].'</a></li>
            <li class="borda" role="presentation"><a href="'.$temaX.'">'.$idioma['nav']['temaX'].'</a></li>
            <li class="borda" role="presentation"><a href="'.$temaY.'">'.$idioma['nav']['temaY'].'</a></li>
            <li class="borda" role="presentation"><a href="'.$temaZ.'">'.$idioma['nav']['temaZ'].'</a></li>
        </ul>
    </nav>
</div>';
     ?>
