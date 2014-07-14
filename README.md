# PHP Project Boilerplate

A complete list of all files and directories in the boilerplate.

* document_root
  * javascripts
    * coffee
      * base.coffee
    * vendor
      * jquery-1.11.0.min.js
      * modernizr-2.8.0.min.js
  * stylesheets
    * scss
      * base.scss
      * icons.scss
      * mixins.scss
      * modules.scss
      * skins.scss
      * structures.scss
      * ui-elements.scss
      * z_responsive.scss
    * src
    * vendor
      * reset.css
  * images
    * icons
    * ui
  * includes
    * _footer.php
    * _header.php
    * functions.php
  * Gruntfile.js
  * humans.txt
  * index.php
  * package.json
  * robots.txt
  
## Prerequisites

You must have installed locally:

* node.js
* npm
* CoffeeScript
* SASS

Follow these instructions to install node.js, npm and CoffeeScript: 

[CoffeeScript; Getting Started and Never Looking Back](http://sparkmasterflex.com/coffeescript-getting-started-and-never-looking-back/)

To install SASS:

<pre>
  $ gem install sass
</pre>

> NOTE: This requires that Ruby and RubyGems are installed

To use the [livereload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?hl=en) functionality of this boiler plate you must have this installed in Google Chrome. If you are using another browser you will need to research how to do so.
  
## Installation

Get the project from [github.com/Sparkmasterflex/php_boilerplate](https://github.com/Sparkmasterflex/php_boilerplate):

<pre>
  $ git clone https://github.com/Sparkmasterflex/php_boilerplate.git &lt;project-name>
  $ cd &lt;project-name>
  $ npm install
</pre>

This will clone the boiler plate to your local machine and install all needed plugins for your project.

To start the Grunt task runner simply run:

<pre>$ grunt</pre>


> For more information and instructions please read my post on this boilerplate: [Sparkmasterflex's PHP Project Boiler Plate](http://sparkmasterflex.com/php-project-boiler-plate/)

