<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contents;
use App\about;
use App\services;
use App\features;
use App\portfolio;
use App\team;
use App\qestion;
use App\contact;
use App\contact_detail;
use App\footar;
use App\footar_mail;
class add_details extends Controller
{
    function add(Request $req)
    {
    	$add_data = new contents;
    	$add_data->title=$req->heading;
    	$add_data->des=$req->des;
    	echo $add_data->save();
    	return redirect('admin/add_header');

    }
    function show(Request $req)
    {
    	$data = contents::all();
    	return view('admin/show_header',compact('data'));
    }
    


    function add_about(Request $req)
    {
        $add_about = new about;
        //$add_about->image = $req->photo;
        $add_about->heading_one = $req->h1;
        $add_about->des_one = $req->d1;
        $add_about->heading_two = $req->h2;
        $add_about->des_two = $req->d2;
        $add_about->heading_three = $req->h3;
        $add_about->des_three = $req->d3;
        $add_about->heading_four = $req->h4;
        $add_about->des_four = $req->d4;
        $add_about->heading_five = $req->h5;
        $add_about->des_five = $req->d5;

       if($req->hasFile('photo'))
        {
            $file = $req->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $path = $req->file('photo')->storeAs('public/cover_images', $filename);
            $add_about->image =$filename;
        }
        /*else
        {
            return $req;
            $add_about->image='';
        }*/
         $add_about->save();
         return redirect('admin/view_about');

    }


    function show_about(Request $req)
    {
        $data = about::all();
        return view('admin/view_about',compact('data'));
    }
    
    function add_services(Request $req)
    {
        $add_services = new services;
        $add_services->heading = $req->heading;
        //$add_services->image_one = $req->photo_one;
        $add_services->title_one = $req->t_one;
        
        if($req->hasFile('photo_one'))
        {
            $file = $req->file('photo_one');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $path = $req->file('photo_one')->storeAs('public/cover_images2', $filename);
            $add_services->image_one =$filename;
        }
        $add_services->save();
        return redirect('admin/view_services');
    }

    function show_services(Request $req)
    {
        $data = services::all();
        return view('admin/view_services',compact('data'));
    }

    function add_features(Request $req)
    {
        $add_fea = new features;
        $add_fea->h_one = $req->one;
        //$add_fea->image = $req->image_one;
        $add_fea->h_two = $req->two;
        $add_fea->h_three = $req->three;
        $add_fea->h_four = $req->four;
        $add_fea->h_five = $req->five;
        if($req->hasFile('photo_one'))
        {
            $file = $req->file('photo_one');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'. $extension;
            $path = $req->file('photo_one')->storeAs('public/cover_features', $filename);
            $add_fea->image =$filename;
        }
        $add_fea->save();
        return redirect('admin/view_features');
    }

    function show_features(Request $req)
    {
        $data = features::all();
        return view('admin/view_features',compact('data'));
    }


    function add_portfolio(Request $req)
    {
        $add_port = new portfolio;
        $add_port->dec = $req->dec;
      //$add_port->image =$req->photo;

        if($req->hasFile('photo'))
        {
             $file = $req->file('photo');
             $extension = $file->getClientOriginalExtension();
             $filename =time().'.'. $extension;
             $path = $req->file('photo')->storeAs('public/cover_portfolio',$filename);
             $add_port->image =$filename;
        }
        $add_port->save();
        return redirect('admin/view_portfolio');
    }

    function show_portfolio(Request $req)
    {
        $data = portfolio::all();
        return view('/admin/view_portfolio',compact('data'));        
    }


    function add_team(Request $req)
    {
        $add_team = new team;
      //$add_team->image = $req->photo;
        $add_team->name = $req->name;
        $add_team->post = $req->post;

        if($req->hasFile('photo'))
        {
            $file =$req->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename =time().'.'. $extension;
            $path = $req->file('photo')->storeAs('public/cover_team',$filename);
            $add_team->image = $filename;
        }
        $add_team->save();
        return redirect('admin/view_team');
    }
    function show_team(Request $req)
    {
        $data = team::all();
        return view('/admin/view_team',compact('data'));
    }

    function add_qestion(Request $req)
    {
        $add_qes = new qestion;
        $add_qes->qestion = $req->qes; 
        $add_qes->answer = $req->ans;
        $add_qes->save();
        return redirect('admin/view_qes');
    }
    function show_qes(Request $req)
    {
        $data = qestion::all();
        return view('admin/view_qes',compact('data'));
    }

    function add_contact_form(Request $req)
    {
        $add_form = new contact;
        $add_form->name = $req->name;
        $add_form->email = $req->email;
        $add_form->subject = $req->subject;
        $add_form->message = $req->message;
        $add_form->save();
        return redirect('/');
    }
    function show_contact_form(Request $req)
    {
        $data = contact::all();
        return view('admin/view_contact_form',compact('data'));
    }
    function add_contact(Request $req)
    {
        $add_con = new contact_detail;
        $add_con->address = $req->address;
        $add_con->email = $req->mail;
        $add_con->call = $req->call;
        $add_con->save();
        #return redirect('admin/view_contact'); 
    }
    function show_contact(Request $req)
    {
        $data = contact_detail::all();
        return view('admin/view_contact',compact('data'));   
    }
    function add_footar(Request $req)
    {
        $add_foot = new  footar;
        $add_foot->title = $req->title;
        $add_foot->dec = $req->des;
        $add_foot->save();
        return redirect('admin/view_footar');
    }
    function show_footar(Request $req)
    {
        $data = footar::all();
        return view('admin/view_footar',compact('data'));
    }

    function add_footar_mail(Request $req)
    {
        $add_mail = new footar_mail;
        $add_mail->email = $req->email;
        $add_mail->save();
        return redirect('/');
    }
    function show_footar_mail(Request $req)
    {
        $data =footar_mail::all();
        return view('admin/view_footar_mail',compact('data'));
    }




}
