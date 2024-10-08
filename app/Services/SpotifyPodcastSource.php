<?php

namespace App\Services;

use App\Interfaces\PodcastSource;

class SpotifyPodcastSource implements PodcastSource
{
    public function getPodcasts(string $userId): array
    {
        // Implement logic to fetch podcasts from Spotify API
        return [
            // Sample podcast data
            ['title' => 'Podcast 3', 'url' => 'https://spotify.com/podcast3'],
            ['title' => 'Podcast 4', 'url' => 'https://spotify.com/podcast4'],
        ];
    }
}
