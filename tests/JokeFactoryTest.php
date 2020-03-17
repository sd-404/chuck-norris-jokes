<?php

namespace Sd404\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Sd404\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'This is a joke',
            'Chuck Norris got Coronavirus. Now the Coronavirus is in isolation.',
            'Chuck Norris can kill your imaginary friends.'
        ];

        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}