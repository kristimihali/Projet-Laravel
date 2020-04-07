<?php

namespace App\Http\Controllers;

use App\Newsletters;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class NewslettersController extends Controller
{
	public function save(PostRequest $request)
	{
        $this->validate($request, [
            'newsletters_email' => 'required',
        ]);

        $newsletters = new Newsletters;
        $newsletters->setAttribute('newsletters_email', $request->newsletters_email);
        $newsletters->save();
        return redirect()->back()->withErrors(['Updated successfully.']);
	}
}
