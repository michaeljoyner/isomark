<?php namespace App\Http\Controllers\Admin;

use App\Commands\Contacts\CreateAddressCommand;
use App\Commands\Contacts\CreatePersonCommand;
use App\Commands\Contacts\CreatePhoneNumberCommand;
use App\Commands\Contacts\EditAddressCommand;
use App\Commands\Contacts\EditPersonCommand;
use App\Commands\Contacts\EditPhoneNumberCommand;
use App\Contacts\Address;
use App\Contacts\Person;
use App\Contacts\PhoneNumber;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactsController extends Controller {


    public function index()
    {
        $addresses = Address::all();
        $phoneNumbers = PhoneNumber::all();
        $people = Person::all();
        return view('admin.contacts.index')->with(compact('addresses', 'phoneNumbers', 'people'));
    }

    public function createAddress()
    {
        $address = new Address();
        return view('admin.contacts.createaddress')->with(compact('address'));
	}

    public function storeAddress(Request $request)
    {
        $this->dispatch(new CreateAddressCommand($request->all()));
        flash()->message('Address created successfully!');
        return redirect('admin/contacts/show');
    }

    public function editAddress($id)
    {
        $address = Address::findOrFail($id);
        return view('admin.contacts.editaddress')->with(compact('address'));
    }

    public function updateAddress($id, Request $request)
    {
        $this->dispatch(new EditAddressCommand($id, $request->all()));
        flash()->message('Address updated successfully');
        return redirect('admin/contacts/show');
    }

    public function deleteAddress($id)
    {
        $address = Address::findOrFail($id);
        $address->delete();
        flash()->message('Address deleted.');
        return redirect('admin/contacts/show');
    }

    public function createPerson()
    {
        $person = new Person();
        return view('admin.contacts.createperson')->with(compact('person'));
    }

    public function storePerson(Request $request)
    {
        $this->dispatch(new CreatePersonCommand($request->all()));
        flash()->message('Contact person added!');
        return redirect('admin/contacts/show');
    }

    public function editPerson($id)
    {
        $person = Person::findOrFail($id);
        return view('admin.contacts.editperson')->with(compact('person'));
    }

    public function updatePerson($id, Request $request)
    {
        $this->dispatch(new EditPersonCommand($id, $request->all()));
        flash()->message('Changes have been saved!');
        return redirect('admin/contacts/show');
    }

    public function deletePerson($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        flash()->message('Contact person removed!');
        return redirect('admin/contacts/show');
    }

    public function createPhoneNumber()
    {
        $phoneNumber = new PhoneNumber();
        return view('admin.contacts.createnumber')->with(compact('phoneNumber'));
    }

    public function storePhoneNumber(Request $request)
    {
        $this->dispatch(new CreatePhoneNumberCommand($request->all()));
        flash()->message('Contact number added!');
        return redirect('admin/contacts/show');
    }

    public function editPhoneNumber($id)
    {
        $phoneNumber = PhoneNumber::findOrFail($id);
        return view('admin.contacts.editnumber')->with(compact('phoneNumber'));
    }

    public function updatePhoneNumber($id, Request $request)
    {
        $this->dispatch(new EditPhoneNumberCommand($id, $request->all()));
        flash()->message('Contact number updated');
        return redirect('admin/contacts/show');
    }

    public function deletePhoneNumber($id)
    {
        $phoneNumber = PhoneNumber::findOrFail($id);
        $phoneNumber->delete();
        flash()->message('Contact number removed!');
        return redirect('admin/contacts/show');
    }

}
