<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		//Your quesiton title goes here
		$data['questionTitle'] = 'This is the title of my question';
		$data['question'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc metus tellus, mollis a tincidunt vel, pulvinar vel tellus";
		$data['timeUploaded'] = "today";
		$data['username'] = "Kenny Sisboyfriend";

		$data['pastorName'] = "Holy Father";
		$data['answer'] = "Sed iaculis arcu at libero convallis sit amet rutrum orci condimentum. Etiam egestas felis id metus tempus in tempus eros varius. Ut eu lectus ut lacus condimentum tincidunt. Aenean nulla velit, faucibus a pretium quis, interdum a elit. Quisque a egestas velit. Vivamus suscipit mi vel elit sodales non sollicitudin mi tincidunt. Nunc semper tempor blandit.";
		$data['timeAnswered'] = "today";
				
		$this->load->view('homePage_view',$data);
	}
}
