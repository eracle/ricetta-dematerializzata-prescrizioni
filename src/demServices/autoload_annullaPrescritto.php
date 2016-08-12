<?php


 function autoload_ed116d913a1203fbdf0ffe938e7b5d2b($class)
{
    $classes = array(
        'DemAnnullaPrescritto' => __DIR__ .'/DemAnnullaPrescritto.php',
        'AnnullaPrescrittoRichiesta' => __DIR__ .'/AnnullaPrescrittoRichiesta.php',
        'AnnullaPrescrittoRicevuta' => __DIR__ .'/AnnullaPrescrittoRicevuta.php',
        'elencoErroriRicetteType' => __DIR__ .'/elencoErroriRicetteType.php',
        'erroreRicettaType' => __DIR__ .'/erroreRicettaType.php',
        'elencoComunicazioniType' => __DIR__ .'/elencoComunicazioniType.php',
        'comunicazioneType' => __DIR__ .'/comunicazioneType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ed116d913a1203fbdf0ffe938e7b5d2b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
