<?php

namespace App\Services;

use App\Interfaces\PodcastSource;

class AppleMusicPodcastSource implements PodcastSource
{
    public function getPodcasts(string $userId): array
    {
        // Implement logic to fetch podcasts from Apple Music API
        return [
            // Sample podcast data
            ['title' => 'Podcast 1', 'url' => 'https://apple.com/podcast1'],
            ['title' => 'Podcast 2', 'url' => 'https://apple.com/podcast2'],
        ];
    }
}
