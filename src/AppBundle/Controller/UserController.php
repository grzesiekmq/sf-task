<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller {
	/**
	 * @Route("/user", name="user")
	 */
	public function createAction() {

		$em = $this->getDoctrine()->getManager();
		$user = new User();
		$user->setId(1)
			->setUserName('John')
			->setUserEmail('john@gmail.com')
			->setUserPhone('799449595');

		$em->persist($user);

		if (!$user->id) {
			$em->flush();
		}
		$userData = $em->find('AppBundle:User', $user->id);
		$json = array('user' => $userData);

		return $this->json($json);
	}

}
