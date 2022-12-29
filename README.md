# Docksal Powered WordPress Installation

Features:

- Vanilla WordPress 6

## Setup instructions

1. Clone this repo into your Projects directory

    ```
    git clone git@github.com:gcordner/gpc-wp-boilerplate.git
    cd wordpress
    ```

1. Initialize the site

    This will initialize local settings and install the site via `wp-cli`

    ```
    fin init
    ```

1. Point your browser to

    ```
    http://wordpress.docksal
    ```
    
## For the Twenty Twenty theme:

### Set up using wpgulp
[https://github.com/ahmadawais/WPGulp](https://github.com/ahmadawais/WPGulp)

From within the theme, run:
```
# 1— Install WPGulp in your WordPress theme/plugin.
npx wpgulp
# 2— Now configure variables inside the `wpgulp.config.js` file.
# 3— Start your npm build workflow.
npm start
```
## For the Undergpc theme:
This theme is based on automattic's _s
To set up composer and npm, read [this](https://github.com/Automattic/_s#setup).

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
