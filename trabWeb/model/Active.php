<?php
class Active
{
	private $activeName;
	private $avalue;
	
	public function __construct($activeName, $avalue)
	{
		$this->activeName = $activeName;
		$this->avalue = $avalue;
	
    /**
     * Gets the value of activeName.
     *
     * @return mixed
     */
    public function getActiveName()
    {
        return $this->activeName;
    }

    /**
     * Sets the value of activeName.
     *
     * @param mixed $activeName the active name
     *
     * @return self
     */
    private function _setActiveName($activeName)
    {
        $this->activeName = $activeName;

        return $this;
    }

    /**
     * Gets the value of avalue.
     *
     * @return mixed
     */
    public function getAvalue()
    {
        return $this->avalue;
    }

    /**
     * Sets the value of avalue.
     *
     * @param mixed $avalue the avalue
     *
     * @return self
     */
    private function _setAvalue($avalue)
    {
        $this->avalue = $avalue;

        return $this;
    }
}
	