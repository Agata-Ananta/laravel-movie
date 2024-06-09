<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class MovieViewModel extends ViewModel
{
    public  $movie;
    public  $trailer;
    public  $trailerUrl;
    public  $trailerEmbed;


    public function __construct($movie, $trailer, $trailerUrl, $trailerEmbed)
    {
        $this->movie =$movie;
        $this->trailer =$trailer;
        $this->trailerUrl =$trailerUrl;
        $this->trailerEmbed =$trailerEmbed;
    }

    public function movie()
    {
        return collect($this->movie)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$this->movie['poster_path'],
            'vote_average' => round($this->movie['vote_average'] * 10) . '%',
            'release_date' => Carbon::parse($this->movie['release_date']) ->format('M d, Y' ),
            'genres' => collect($this->movie['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->movie['credits']['crew'])->take(2),
            'cast' => collect($this->movie['credits']['cast'])->take(5),
            'images' => collect($this->movie['images']['backdrops'])->take(6),
        ]);
    }

    public function trailer()
    {
        return $this->trailer;
    }

    public function trailerUrl()
    {
        return $this->trailerUrl;
    }

    public function trailerEmbed()
    {
        return $this->trailerEmbed;
    }
}
