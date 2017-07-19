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
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
	return($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws unexpectedValueException if $newProfileId is not an integer
	 **/

}

?>