Sluggler
========

Cyrillic slugs made easy!

Installation
=======
You should install this package through Composer.

Edit your project's `composer.json` file to require `meshkov/sluggler`.

	"require": {
		"laravel/framework": "4.0.*",
		"meshkov/sluggler": "dev-master"
	},
	"minimum-stability" : "dev"

Next, update Composer from the Terminal:
    `composer update`

Once this operation completes, the final step is to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

  `'Meshkov\Sluggler\SlugglerServiceProvider',`
  
Usage
=====
Just call static method `Sluggler::make($your-text)` anywhere in your app.
