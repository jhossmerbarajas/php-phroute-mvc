<?php 

namespace App\Controllers\Contacts;
use App\Controllers\Controller;

use App\Models\Contact;

class ContactController extends Controller
{
	function index () {
		$contacts = Contact::all()->toArray();
		return $this->view('contact.index', compact('contacts'));
	}

	function store() {
		Contact::create($_POST);
		return $this->redirect("/");
	}
}