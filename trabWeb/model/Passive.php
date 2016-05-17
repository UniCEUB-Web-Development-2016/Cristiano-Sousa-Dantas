<?php
class Passive
{
	private $passiveName;
	private $pvalue;
	
	public function __construct($passiveName, $pvalue)
	{
		$this->passiveName = $passiveName;
		$this->pvalue = $value;
	
    /**
     * Gets the value of passiveName.
     *
     * @return mixed
     */
    public function getPassiveName()
    {
        return $this->passiveName;
    }

    /**
     * Sets the value of passiveName.
     *
     * @param mixed $passiveName the passive name
     *
     * @return self
     */
    private function _setPassiveName($passiveName)
    {
        $this->passiveName = $passiveName;

        return $this;
    }

    /**
     * Gets the value of pvalue.
     *
     * @return mixed
     */
    public function getPvalue()
    {
        return $this->pvalue;
    }

    /**
     * Sets the value of pvalue.
     *
     * @param mixed $pvalue the pvalue
     *
     * @return self
     */
    private function _setPvalue($pvalue)
    {
        $this->pvalue = $pvalue;

        return $this;
    }
}