<?php

namespace App\ViewModels;

use Spatie\ViewModels\ViewModel;
use Carbon\Carbon;

class TvShowViewModel extends ViewModel
{
    public  $tvshow;
    public  $trailer;
    public  $trailerUrl;
    public  $trailerEmbed;


    public function __construct($tvshow, $trailer, $trailerUrl, $trailerEmbed)
    {
        $this->tvshow =$tvshow;
        $this->trailer =$trailer;
        $this->trailerUrl =$trailerUrl;
        $this->trailerEmbed =$trailerEmbed;
    }

    public function tvshow()
    {
        return collect($this->tvshow)->merge([
            'poster_path' => 'https://image.tmdb.org/t/p/w500/'.$this->tvshow['poster_path'],
            'vote_average' => round($this->tvshow['vote_average'] * 10) . '%',
            'first_air_date' => Carbon::parse($this->tvshow['first_air_date']) ->format('M d, Y' ),
            'genres' => collect($this->tvshow['genres'])->pluck('name')->flatten()->implode(', '),
            'crew' => collect($this->tvshow['credits']['crew'])->take(2),
            'cast' => collect($this->tvshow['credits']['cast'])->take(5)->map(function($cast)
            {
                return collect($cast)->merge([
                    'profile_path' =>$cast['profile_path'] ?'https://image.tmdb.org/t/p/w300'.$cast['profile_path'] :'https://via.placeholder.com/300x450',
                ]);
            }),
            'images' => collect($this->tvshow['images']['backdrops'])->take(6),
        ])->only([
            'poster_path','id','genres','name', 'vote_average','overview','first_air_date','credits', 'videos', 'images', 'crew', 'cast', 'created_by'
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
