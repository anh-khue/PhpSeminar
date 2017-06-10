<?php

/**
 * Created by PhpStorm.
 * User: Thien
 * Date: 4/18/2017
 * Time: 3:14 PM
 */
class InputErrors
{
    private $nameInvalid = "";
    private $emailInvalid = "";
    private $yearInvalid = "";

    /**
     * @return string
     */
    public function getNameInvalid()
    {
        return $this->nameInvalid;
    }

    /**
     * @param string $nameInvalid
     */
    public function setNameInvalid($nameInvalid)
    {
        $this->nameInvalid = $nameInvalid;
    }

    /**
     * @return string
     */
    public function getEmailInvalid()
    {
        return $this->emailInvalid;
    }

    /**
     * @param string $emailInvalid
     */
    public function setEmailInvalid($emailInvalid)
    {
        $this->emailInvalid = $emailInvalid;
    }

    /**
     * @return string
     */
    public function getYearInvalid()
    {
        return $this->yearInvalid;
    }

    /**
     * @param string $yearInvalid
     */
    public function setYearInvalid($yearInvalid)
    {
        $this->yearInvalid = $yearInvalid;
    }

    public function checkNoError() {
        if (empty($this->getNameInvalid())
            && empty($this->getEmailInvalid())
            && empty($this->getYearInvalid())
        ) {
            return true;
        }else return false;
    }
}