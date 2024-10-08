<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

use App\Interfaces\PodcastSource;
use App\Services\AppleMusicPodcastSource;
use App\Services\SpotifyPodcastSource;

use Exception;

class PodcastServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PodcastSource::class, function ($app) {
            $user = Auth::user();
            $preferredPodcastSource = $user->podcast_source;

            switch ($preferredPodcastSource) {
                case 'apple-music':
                    return new AppleMusicPodcastSource();
                case 'spotify':
                    return new SpotifyPodcastSource();
                default:
                    throw new Exception('Invalid podcast source');
            }
        });
    }
}
