<?php

namespace App\Interfaces;

interface PodcastSource
{
    public function getPodcasts(string $userId): array;
}
