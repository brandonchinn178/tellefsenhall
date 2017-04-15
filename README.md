# Website for Tellefsen Hall

This code sets up a Wordpress site for Tellefsen Hall, the home of the California Marching Band, located in Berkeley, CA.

Code located at http://github.com/brandonchinn178/tellefsenhall.

## Installation

1. `git clone` this repository
1. Install Virtualbox, Vagrant, and Node.js
1. `npm install` to install grunt
1. `sudo npm install -g grunt-cli` to allow you to run grunt commands. You may have to use sudo (for OSX, *nix, BSD etc) or run your command shell as Administrator (for Windows) to do this.
1. Install ruby and sass. For Ubuntu users you can run 'sudo apt-get install rubygems-integration', and then run 'sudo gem install sass'.

## Building
1. `vagrant up` to install Wordpress, PHP, MySQL, and other dependencies on the Vagrant server
1. `grunt build` to compile the SASS code into the CSS files needed for the HTML pages

## Running
1. Go to `http://localhost:8888`
