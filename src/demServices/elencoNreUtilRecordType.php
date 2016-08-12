<?php

class elencoNreUtilRecordType
{

    /**
     * @var nreUtilRecordType[] $NreUtilRecord
     */
    protected $NreUtilRecord = null;

    /**
     * @param nreUtilRecordType[] $NreUtilRecord
     */
    public function __construct(array $NreUtilRecord)
    {
      $this->NreUtilRecord = $NreUtilRecord;
    }

    /**
     * @return nreUtilRecordType[]
     */
    public function getNreUtilRecord()
    {
      return $this->NreUtilRecord;
    }

    /**
     * @param nreUtilRecordType[] $NreUtilRecord
     * @return elencoNreUtilRecordType
     */
    public function setNreUtilRecord(array $NreUtilRecord)
    {
      $this->NreUtilRecord = $NreUtilRecord;
      return $this;
    }

}
