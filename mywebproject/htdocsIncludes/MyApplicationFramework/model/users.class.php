<?php

	class User
	{

	/**********************************************************/
	/*Description:                                            */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/


	/**********************************************************/	
	/*Class variables                                         */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/
	private $firstName;
	private $lastName;
	private $email;
	private $password;
	private $displayName;


	/**********************************************************/	
	/*Constructors and Destructors                            */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/

	function __construct() {

	}

	function __destuct(){

	}

	/**********************************************************/	
	/*Getter function_exists                                  */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/

	public function getFirstName() {
		return $this->firstName;
	}

	public function getLastName() {
		return $this->lastName;
	}

	public function getEmail() {
		return $this->email;
	}

	public function getPassword() {
		//this function has been intentionally crippled it.
		//exposing the password is a security risk.
		return '';
	}

	public function getDisplayName() {
		return $this->displayName;
	}



	/**********************************************************/	
	/*Setter function_exists                                  */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/

	public function setFirstName($new_firstName = '') {
		$this->firstName = $new_firstName;
	}

	public function setLastName($new_lastName = '') {
		$this->lastName = $new_lastName;
	}

	public function setEmail($new_email = '') {
		$this->email= $new_email;
	}

	public function setPassword($new_password) {
		$this->password = $new_password;
	}

	public function setDisplayName($new_displayName) {
		$this->displayName = $new_displayName;
	}

	/**********************************************************/	
	/*Private Functions                                       */
	/*                                                        */
	/*		                                                  */
	/*                                                        */
	/*                                                        */
	/**********************************************************/
}

?>