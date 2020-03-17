<?php


namespace Sd404\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'This is a joke',
        'Chuck Norris got Coronavirus. Now the Coronavirus is in isolation.',
        'Chuck Norris can kill your imaginary friends.'
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes){
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}