<?php


 function autoload_31070fbaff740350a0b47874a1a54cde($class)
{
    $classes = array(
        'DemVisualizzaPrescritto' => __DIR__ .'/DemVisualizzaPrescritto.php',
        'VisualizzaPrescrittoRichiesta' => __DIR__ .'/VisualizzaPrescrittoRichiesta.php',
        'VisualizzaPrescrittoRicevuta' => __DIR__ .'/VisualizzaPrescrittoRicevuta.php',
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

spl_autoload_register('autoload_31070fbaff740350a0b47874a1a54cde');

// Do nothing. The rest is just leftovers from the code generation.
{
}
