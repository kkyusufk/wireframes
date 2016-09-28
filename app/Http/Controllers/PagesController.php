<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagescontroller extends Controller
{
    public function welcome()
     {
    return view('welcome');
	 }

	  public function home()
     {
     	$pagetype = "home";
    return view('pages.home')->with(['pagetype'=>$pagetype]);
	 }

	 public function details()
     {
     	$pagetype = "details";
    return view('pages.details')->with(['pagetype'=>$pagetype]);;
	 }

	 public function checkout()
     {
     	$pagetype = "checkout";
    return view('pages.checkout')->with(['pagetype'=>$pagetype]);;
	 }

	 public function forgotpassword()
     {
     	$pagetype = "forgotpassword";
    return view('pages.forgotpassword')->with(['pagetype'=>$pagetype]);;
	 }

	 public function newpassword()
     {
     	$pagetype = "newpassword";
    return view('pages.newpassword')->with(['pagetype'=>$pagetype]);;
	 }

	 public function product()
     {
     	$pagetype = "product";
    return view('pages.product')->with(['pagetype'=>$pagetype]);;
	 }

	 public function signin()
     {
     	$pagetype = "signin";
    return view('pages.signin')->with(['pagetype'=>$pagetype]);;
	 }

	  public function signup()
     {
     	$pagetype = "signup";
    return view('pages.signup')->with(['pagetype'=>$pagetype]);;
	 }
	  public function confirmation()
     {
     	$pagetype = "confirmation";
    return view('pages.confirmation')->with(['pagetype'=>$pagetype]);;
	 }
}

