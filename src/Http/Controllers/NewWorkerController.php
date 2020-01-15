<?php

namespace Selene\Modules\NewWorkerModule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Selene\Modules\NewWorkerModule\Mail\NewWorkerMail;
use Selene\Modules\NewWorkerModule\NewWorkerModule;

class NewWorkerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('NewWorkerModule::index');
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function send(Request $request)
    {
        try {
            Mail::to(NewWorkerModule::newWorkerSendTo())->send(NewWorkerMail::buildMailFromRequest($request));
            $request->session()->flash('alert-success', 'Mail z danymi nowego pracowanika został wysłany do ' . NewWorkerModule::newWorkerSendTo());
        } catch(\Exception $e) {
            report($e);
            $request->session()->flash('alert-danger', 'Mail nie mógł zostać wysłany skontaktuj się z działem programistów');
        }

        return redirect()->back();
    }
}
