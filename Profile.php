<?php
/**
 * typical profile for an eCommerce site; one line description of the class
 *
 * this Profile is an abbreviated example of data collected and stored about a user for eCommerce purposes; this can
 * be extended to include more info such as email, phone number, etc; more
 * detailed description of the class
 *
 * @author Jack Reuter <djreuter45@gmail.com>
 **/

class Profile {
	/**
	 * id for this profile; this is the primary key
	 **/
	private $profileId;
	/**
	 * id for the user who owns this profile; this is a foreign key
	 **/
	private $userId;
	/**
	 * first name of this person
	 */
	private $firstName;
	/**
	 * last name of this person
	 **/
	private $lastName;

	/**
	 * constructor for this Profile
	 *
	 * @param int $newProfile new profile id
	 * @param int $newUserId new user id
	 * @param string $newFirstName new first name
	 * @param string $newLastName new last name
	 * @throws UnexpectedValueException if any of the parameters are invalid
	 **/
	public function __construct($newProfileId, $newUserId, $newFirstName, $newLastName) {
		try {
			$this->setProfileId($newProfileId);
			$this->setUserId($newUserId);
			$this->setFirstName($newFirstName);
			$this->setLastName($newLastName);
		} catch(UnexpectedValueException $exception) {
			// rethrow to the caller
			throw(new UnexpectedValueException("Unable to construct Profile", 0, $exception));
		}
	}

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return ($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws UnexpectedValueException if $newProfileId is not an integer
	 **/
	public function setProfileId($newProfileId) {
		// verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId === false) {
			throw(new UnexpectedValueException("profile id is not a valid integer"));
		}

		//convert and store the profile id
		$this->profileId = intval($newProfileId);
	}

	/**
	 * accessor method for user id
	 *
	 * @return int value of user id
	 **/
	public function getUserId() {
		return($this->userId);
	}

	/**
	 * mutator method for user id
	 *
	 * @param int $newUserId new value of profile id
	 * @throws UnexpectedValueException if $newUserId is not an integer
	 **/
		public function setUserId($newUserId) {
		// verify new user id is valid
		$newUserId = filter_var($newUserId, FILTER_VALIDATE_INT);
		if($newUserId === false) {
			throw(new UnexpectedValueException("user id is not a valid integer"));
		}
		// convert and store the profile id
		$this->userId = intval($newUserId);
	}

	/**
	 * accessor method for first name
	 *
	 * @return string value of first name
	 **/
	public function getFirstName() {
		return($this->firstName);
	}

	/**
	 * mutator method for first name
	 *
	 * @param string $newFirstName new value of first name
	 * @throws UnexpectedValueException if $newFirstName is not valid
	 **/
	public function setFirstName($newFirstName) {
		// verify the first name is valid
		$newFirstName = filter_var($newFirstName, FILTER_SANITIZE_STRING);
		if($newFirstName === false) {
			throw(new UnexpectedValueException("first name is not a valid string"));
		}
		// store the first name
		$this->firstName = $newFirstName;
	}
	/**
	 * accessor method for last name
	 *
	 * @return string value of last name
	 **/
	public function getLastName() {
		return($this->lastName);
	}

	/**
	 * mutator method for last name
	 *
	 * @param string $newLastName new value of last name
	 * @throws UnexpectedValueException if $newLastName is not valid
	 **/
	public function setLastName($newLastName) {
		// verify the last name is valid
		$newLastName = filter_var($newLastName, FILTER_SANITIZE_STRING);
		if($newLastName === false) {
			throw(new UnexpectedValueException("last name is not a string"));
		}

		// store the last name
		$this->lastName = $newLastName;
	}
}


