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
    
## TwentyTwenty will be the foundation for our new theme.

## Set up using wpgulp
[https://github.com/ahmadawais/WPGulp](https://github.com/ahmadawais/WPGulp)

From within the theme, run:
```
# 1— Install WPGulp in your WordPress theme/plugin.
npx wpgulp
# 2— Now configure variables inside the `wpgulp.config.js` file.
# 3— Start your npm build workflow.
npm start
```

## Register Menus
See [https://developer.wordpress.org/themes/functionality/navigation-menus/](https://developer.wordpress.org/themes/functionality/navigation-menus/)
