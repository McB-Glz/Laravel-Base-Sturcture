var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

// elixir(function(mix) {
//     mix.sass('app.scss');
// });

elixir.config.sourcemaps = true;


// Less

elixir(function(mix) {
    mix.less('main.less');
});

// JS Files

var jsFileList = [

	'../../bower_components/bootstrap/js/transition.js',
	'../../bower_components/bootstrap/js/alert.js',
	'../../bower_components/bootstrap/js/button.js',
	'../../bower_components/bootstrap/js/carousel.js',
	'../../bower_components/bootstrap/js/collapse.js',
	'../../bower_components/bootstrap/js/dropdown.js',
	'../../bower_components/bootstrap/js/modal.js',
	'../../bower_components/bootstrap/js/tooltip.js',
	'../../bower_components/bootstrap/js/popover.js',
	'../../bower_components/bootstrap/js/scrollspy.js',
	'../../bower_components/bootstrap/js/tab.js',
	'../../bower_components/bootstrap/js/affix.js',
	'../../bower_components/jquery-placeholder/jquery.placeholder.min.js',
	'../../bower_components/velocity/velocity.min.js',
	'../../bower_components/velocity/velocity.ui.min.js',
]

elixir(function(mix) {
    mix.scripts(jsFileList, 'public/js/app.js')
       .scripts(['base.js'], 'public/js/base.js');
});

//Versioning

elixir(function(mix) {
    mix.version(['css/main.css', 'js/app.js', 'js/base.js']);
});

// Copy Files

elixir(function(mix) {
    mix.copy('resources/bower_components/jquery/dist/jquery.min.js', 'public/js/vendor/jquery.min.js');
});

elixir(function(mix) {
    mix.copy('resources/bower_components/modernizr/modernizr.js', 'public/js/vendor/modernizr.js');
});