# Chuck Norris Jokes

Add Chuck Norris Jokes.

## Installation

Require the package using composer :

```bash
composer require sd-404/chuck-norris-jokes
```

## Usage

```php
use Sd404\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)
