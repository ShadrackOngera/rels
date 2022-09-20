<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\MailingList;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PagesController extends Controller
{
    public function contactPage(){
        //show Contact page

        return view('pages.contact');
    }

    public function usersPage(){

        //create role
        $adminRole = Role::create(['name' => 'admin']);
        $moderatorRole = Role::create(['name' => 'moderator']);
        $sellerRole = Role::create(['name' => 'seller']);

        //create permission
        $createPostPermission = Permission::create(['name' => 'create post']);
        $editPostPermission = Permission::create(['name' => 'edit post']);
        $deletePostPermission = Permission::create(['name' => 'delete post']);
        $publishPostPermission = Permission::create(['name' => 'publish post']);


        $adminRole->givePermissionTo($createPostPermission);
        $adminRole->givePermissionTo($editPostPermission);
        $adminRole->givePermissionTo($deletePostPermission);
        $adminRole->givePermissionTo($publishPostPermission);

        $moderatorRole->givePermissionTo($publishPostPermission);
        $moderatorRole->givePermissionTo($editPostPermission);


        $sellerRole->givePermissionTo($createPostPermission);
        $sellerRole->givePermissionTo($editPostPermission);



        $user = User::where('id', '1')->first();
        $user->assignRole('admin');

//        show Users page
        $users = User::orderBy('updated_at', 'DESC')->paginate(15);

        return view('pages.users')->with('users', $users);
    }



    public function aboutPage(){
        //show About page

        return view('pages.about');
    }
    public function storeEmails(Request $request){
        //store Mailing list
        $request->validate([
            'email' => 'required'
        ]);

        $mailinglist = MailingList::create([
            'email' => $request->input('email'),
        ]);

        return redirect('/');
    }

    public function storeContact(Request $request){
        //store contact Get in Touch Message

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => ['required']
        ]);

        $contacts = Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back();
    }
}
