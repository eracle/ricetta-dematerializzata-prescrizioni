<?php


 function autoload_04cecb1857d8b766451cab844aae586e($class)
{
    $classes = array(
        'DemInvioPrescritto' => __DIR__ .'/DemInvioPrescritto.php',
        'InvioPrescrittoRichiesta' => __DIR__ .'/InvioPrescrittoRichiesta.php',
        'InvioPrescrittoRicevuta' => __DIR__ .'/InvioPrescrittoRicevuta.php',
        'elencoDettagliPrescrizioniType' => __DIR__ .'/elencoDettagliPrescrizioniType.php',
        'dettaglioPrescrizioneType' => __DIR__ .'/dettaglioPrescrizioneType.php',
        'elencoErroriRicetteType' => __DIR__ .'/elencoErroriRicetteType.php',
        'erroreRicettaType' => __DIR__ .'/erroreRicettaType.php',
        'elencoComunicazioniType' => __DIR__ .'/elencoComunicazioniType.php',
        'comunicazioneType' => __DIR__ .'/comunicazioneType.php',
        'elencoNotaType' => __DIR__ .'/elencoNotaType.php',
        'notaType' => __DIR__ .'/notaType.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_04cecb1857d8b766451cab844aae586e');

// Do nothing. The rest is just leftovers from the code generation.
{
}
