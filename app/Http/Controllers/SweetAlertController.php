<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SweetAlertController extends Controller
{
    public function notification($type)
    {
        switch ($type) {
            case 'alert':
                Alert::alert('Welcome', 'To My Life', 'Anjay');
                break;

            case 'info':
                Alert::info('Mail Sent','Info');
                break;

            case 'success':
                Alert::success('Your message has been successfully sent', 'Success');
                break;

            case 'error':
                Alert::error('Something went wrong','Error');
                break;

            case 'warning':
                Alert::warning('Please activate your account','Warning');
                break;

            default:
                break;
        }
        return view('sweetalert');
    }
}
