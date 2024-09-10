<?php
//Para redireccionar pagina
function  redireccionar($pagina)
{
    header('localhost' . RUTA_URL . $pagina);
}