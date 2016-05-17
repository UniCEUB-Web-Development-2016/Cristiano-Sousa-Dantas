<?php
class Releases
{
	private $rdate;
	private $value;

	public function __construct($rdate, $value)
	{
		$this->rdate = $rdate;
		$this->value = $value;
	}
	
	public function getRdate()
    {
        return $this->rdate;
    }

    /**
     * Sets the value of first_name.
     *
     * @param mixed $first_name the first name
     *
     * @return self
     */
    private function _setRdate($rdate)
    {
        $this->rdate = $rdate;

        return $this;
    }
public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value of first_name.
     *
     * @param mixed $first_name the first name
     *
     * @return self
     */
    private function _setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}