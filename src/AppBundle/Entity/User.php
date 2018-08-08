<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User {
	/**
	 * @var int
	 *
	 * @ORM\Column(name="idUser", type="integer")
	 * @ORM\Id
	 */
	public $id;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="userName", type="string", length=60)
	 */
	public $userName;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="userEmail", type="string", length=30)
	 */
	public $userEmail;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="userPhone", type="string", length=9)
	 */
	public $userPhone;

	/**
	 * Set id
	 *
	 * @param int $id
	 *
	 * @return User
	 */
	public function setId($id) {
		$this->id = $id;
		return $this;
	}

	/**
	 * Set userName
	 *
	 * @param string $userName
	 *
	 * @return User
	 */
	public function setUserName($userName) {
		$this->userName = $userName;

		return $this;
	}

	/**
	 * Set userEmail
	 *
	 * @param string $userEmail
	 *
	 * @return User
	 */
	public function setUserEmail($userEmail) {
		$this->userEmail = $userEmail;

		return $this;
	}

	/**
	 * Set userPhone
	 *
	 * @param string $userPhone
	 *
	 * @return User
	 */
	public function setUserPhone($userPhone) {
		$this->userPhone = $userPhone;

		return $this;
	}

}
