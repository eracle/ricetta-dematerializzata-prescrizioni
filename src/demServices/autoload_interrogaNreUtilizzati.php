<?php


 function autoload_c62704238a39ecb1475b69539b4c804f($class)
{
    $classes = array(
        'DemInterrogaNreUtilizzati' => __DIR__ .'/DemInterrogaNreUtilizzati.php',
        'InterrogaNreUtilRichiesta' => __DIR__ .'/InterrogaNreUtilRichiesta.php',
        'InterrogaNreUtilRicevuta' => __DIR__ .'/InterrogaNreUtilRicevuta.php',
        'elencoNreUtilRecordType' => __DIR__ .'/elencoNreUtilRecordType.php',
        'nreUtilRecordType' => __DIR__ .'/nreUtilRecordType.php',
        'elencoErroriRicetteType' => __DIR__ .'/elencoErroriRicetteType.php',
        'erroreRicettaType' => __DIR__ .'/erroreRicettaType.php',
        'elencoComunicazioniType' => __DIR__ .'/elencoComunicazioniType.php',
        'comunicazioneType' => __DIR__ .'/comunicazioneType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c62704238a39ecb1475b69539b4c804f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
