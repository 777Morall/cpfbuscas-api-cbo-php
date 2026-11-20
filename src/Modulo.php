<?php
declare(strict_types=1);

/** Monta parâmetros; não realiza chamadas de rede. */
function prepararConsulta(array $args): array
{
    if (($args[0] ?? '')!=='cbo') throw new InvalidArgumentException('Use cbo CODIGO_CBO.');
    $cbo=str_replace(['-',' '],'',$args[1] ?? '');
    if (!preg_match('/^[0-9]{6}$/D',$cbo)) throw new InvalidArgumentException('Este exemplo aceita código CBO de seis dígitos.');
    return ['cbo',['cbo'=>$cbo]];
}
