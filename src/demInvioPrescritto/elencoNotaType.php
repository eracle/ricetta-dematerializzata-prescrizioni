<?php

class elencoNotaType
{

    /**
     * @var notaType[] $Nota
     */
    protected $Nota = null;

    /**
     * @param notaType[] $Nota
     */
    public function __construct(array $Nota)
    {
      $this->Nota = $Nota;
    }

    /**
     * @return notaType[]
     */
    public function getNota()
    {
      return $this->Nota;
    }

    /**
     * @param notaType[] $Nota
     * @return elencoNotaType
     */
    public function setNota(array $Nota)
    {
      $this->Nota = $Nota;
      return $this;
    }

}
