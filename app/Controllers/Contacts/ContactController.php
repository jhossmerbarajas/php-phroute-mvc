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
		$contactNumer = Contact::where("phone", $_POST["phone"])->exists();
		if($contactNumer) return "Numero ya registrado";
		var_dump($_POST);
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

	function destroy($id) {
		$contact = Contact::find($id);
		$contact->delete();
		return $this->redirect('/');
	}
}