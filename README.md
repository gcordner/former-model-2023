# Docksal Powered WordPress Installation

Features:

- Vanilla WordPress 6

## Setup instructions

1. Clone this repo into your Projects directory

    ```
    git clone git@github.com:gcordner/former-model-2023.git
    cd former-model-2023
    ```

1. Initialize the site

    This will initialize local settings and install the site via `wp-cli`

    ```
    fin init
    ```

1. Point your browser to

    ```
    http://former-model-2023.docksal
    ```
    
## For the understrap-child theme:
This theme is a child theme of understrap. 

## NPM and build process:
This theme uses npm as manager for dependency packages like Bootstrap and Underscores. Make sure you have npm running, and start by running
 ```
 npm install
 ```

To work and compile your Sass files on the fly start, (without browser sync):
```
npm run watch
```


###Available cli commands:
```
_s comes packed with CLI commands tailored for WordPress theme development :

composer lint:wpcs : checks all PHP files against PHP Coding Standards.
composer lint:php : checks all PHP files for syntax errors.
composer make-pot : generates a .pot file in the languages/ directory.
npm run compile:css : compiles SASS files to css.
npm run compile:rtl : generates an RTL stylesheet.
npm run watch : watches all SASS files and recompiles them to css when they change.
npm run lint:scss : checks all SASS files against CSS Coding Standards.
npm run lint:js : checks all JavaScript files against JavaScript Coding Standards.
npm run bundle : generates a .zip archive for distribution, excluding development and system files.
```


## Register Menus
See [https://developer.wordpress.org/themes/functionality/navigation-menus/](https://developer.wordpress.org/themes/functionality/navigation-menus/)
