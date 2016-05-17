<?php
class User
{
	private $first_name;
	private $last_name;
	private $age;
	private $gender;
	private $country;
	private $city;
	private $job;
	private $salary;
	private $email;
	public function __construct($first_name, $last_name,
	$age, $gender, $country, $city, $job, $salary, $email)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->age = $age;
		$this->gender = $gender;
		$this->country = $country;
		$this->city = $city;
		$this->job = $job;
		$this->salary = $salary;
		$this->email = $email;
	}
	

    /**
     * Gets the value of first_name.
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Sets the value of first_name.
     *
     * @param mixed $first_name the first name
     *
     * @return self
     */
    private function _setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Gets the value of last_name.
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Sets the value of last_name.
     *
     * @param mixed $last_name the last name
     *
     * @return self
     */
    private function _setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Gets the value of age.
     *
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets the value of age.
     *
     * @param mixed $age the age
     *
     * @return self
     */
    private function _setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets the value of gender.
     *
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets the value of gender.
     *
     * @param mixed $gender the gender
     *
     * @return self
     */
    private function _setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets the value of country.
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets the value of country.
     *
     * @param mixed $country the country
     *
     * @return self
     */
    private function _setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Gets the value of city.
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the value of city.
     *
     * @param mixed $city the city
     *
     * @return self
     */
    private function _setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Gets the value of job.
     *
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Sets the value of job.
     *
     * @param mixed $job the job
     *
     * @return self
     */
    private function _setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Gets the value of salary.
     *
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * Sets the value of salary.
     *
     * @param mixed $salary the salary
     *
     * @return self
     */
    private function _setSalary($salary)
    {
        $this->salary = $salary;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    private function _setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}