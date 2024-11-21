<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index(): View
    {
        $events = Event::latest()->paginate(10);
        return view('admin.events.index', compact('events'));
    }
}
