<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use App\Interfaces\PodcastSource;
use App\Http\Controllers\Controller;

class PodcastController extends Controller
{
    protected PodcastSource $podcastSource;

    public function __construct(PodcastSource $podcastSource)
    {
        $this->podcastSource = $podcastSource;
    }

    public function index(Request $request): View
    {
        $userId = $request->user()->id;
        $podcasts = $this->podcastSource->getPodcasts($userId);

        return view('podcasts/index', compact('podcasts'));
    }
}
