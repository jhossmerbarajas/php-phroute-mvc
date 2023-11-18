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

	function show ($id) {
		$contact = Contact::find($id);
		return $this->view('contact.show', compact('contact'));
	}

	function update($id) {
		$contact = Contact::find($id);
		$contact->update($_POST);

		return $this->redirect('/');
	}
}