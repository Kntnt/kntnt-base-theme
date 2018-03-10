# Kntnt's base theme for Beaver Themer

Minimalitic WordPress theme for *[Beaver Themer](https://www.wpbeaverbuilder.com/beaver-themer/)* and *[Beaver Builder](https://www.wpbeaverbuilder.com/)*.

## Description

*Kntnt's base theme for Beaver Themer* is based on Automattic's thorough and well-made starter theme *[_s](https://github.com/Automattic/_s)* (pronounced *underscores*).

While *_s* is intended as a starting point for building theme by hand, Kntnt base theme is intended as a starting point for building theme by using Beaver Themer and Beaver Builder.

## Rationale

Beaver Themer is a great tool that allows you to build a theme by using Beaver Builder. But to work, Beaver Themer requires a [supporting theme](https://kb.wpbeaverbuilder.com/article/428-beaver-themer-supported-themes).

Many of them comes with bells and whistles which are unnecessary since you can and often do override them with Beaver Themer. That holds true even for themes which are supposedly light-weight, including *[Beaver Theme](https://www.wpbeaverbuilder.com/wordpress-framework-theme/)* and *[Astra](https://wpastra.com/)*.

*Kntnts Base Theme* is missing all bells and whistles. With Beaver Themer installed, you will not see any headers or footers, nor a sidebar. It is just a clean slate.

But Kntnt Base Theme is not too simplistic. To ensure basic features and best practice it is built on _s which provides ["a thousand hour head start"](https://themeshaper.com/2012/02/13/introducing-the-underscores-theme/). _s is created by Automattic — the company behind WordPress — and is used as the starting point for many of their themes, including recent themes bundled with WordPress (e.g. Twenty Seventeen).

## Installation

Install [the usually way](https://codex.wordpress.org/Themes).

## Get started

Your site will look really crappy after installing and activating Kntnt Base Theme. Don't panic. That is intentional. Your next step would be to create layouts for header, footer, posts/pages, archives and a 404-page. It takes just a few minutes to get a really beautiful theme which then can modify as you please. This is whart you need to do:

1. Visit your sites backend at `/wp-admin`.
2. Install and activate *[Beaver Themer](https://www.wpbeaverbuilder.com/beaver-themer/)* and *[Beaver Builder](https://www.wpbeaverbuilder.com/)*.
3. Select *Builder* » *Themer Layouts* in the admin menu.
4. Create a header layout:
   1. Click on *Add New*-button near the top of the screen.
   2. Enter `Header` in the *Title*-field, select `Header` from the *Layout*-dropdown, and click on the *Add Themer Layout*-button.
   3. Select `Entire Site` as *Location* on the next screen, and click on the *Publish*-button.
5. Create a footer layout:
   1. Click on *Add New*-button near the top of the screen.
   2. Enter `Footer` in the *Title*-field, select `Footer` from the *Layout*-dropdown, and click on the *Add Themer Layout*-button.
   3. Select `Entire Site` as *Location* on the next screen, and click on the *Publish*-button.
6. Create a post and page layout:
   1. Click on *Add New*-button near the top of the screen.
   2. Enter `Singular` in the *Title*-field, select `Singular` from the *Layout*-dropdown, and click on the *Add Themer Layout*-button.
   3. Select `All Singular` as *Location* on the next screen, and click on the *Publish*-button.
7. Create an archive layout:
   1. Click on *Add New*-button near the top of the screen.
   2. Enter `Archive` in the *Title*-field, select `Archive` from the *Layout*-dropdown, and click on the *Add Themer Layout*-button.
   3. Select `All Archives` as *Location* on the next screen, and click on the *Publish*-button.
8. Create an "page not found" layout:
   1. Click on *Add New*-button near the top of the screen.
   2. Enter `Page not found (404)` in the *Title*-field, select `404` from the *Layout*-dropdown, and click on the *Add Themer Layout*-button.
   3. Select `All Users` as *Users* on the next screen, and click on the *Publish*-button.
9. Go to the front of your site and enjoy!

## Styling

The only stylesheet used by the theme is `style.css`.

You can leave it as it is, and make all your styling through Beaver Builder. Things you cannot modify directly through Beaver Builder's user interface, can be modify by [adding custom CSS in Beaver Builder](https://kb.wpbeaverbuilder.com/article/94-where-to-put-custom-css-code).

You can also modify and extend `style.css` as you wish.

## Sass

You can re-generate `style.css` from [Sass](https://sass-lang.com/)-files found in the `sass`-directory. To do that you need [Node.js](https://nodejs.org/en/) and follow these steps:

1. Open a terminal and change working directory to the theme's directory (where you find `style.css`).
2. Install [node-sass-chokidar](https://www.npmjs.com/package/node-sass-chokidar) by following command: `npm install`.
3. Re-generate `style.css` with following command: `npm run build`.

Run `npm run build` every time you you want to re-generate style.css.

You can also automate the re-generation by starting `npm run watch` and let it run in the background. `style.css` will automatically be re-generated every time a file in the `sass`-directory is changed. When you are done with your adjustments of the sass-files, turn off the automatic re-generation by simply stopping the background process started with `npm run watch`.

## Updating

The purpose of _s is not to be a basic theme, but to be a starting point for developers to create their own theme. However, it makes it difficult to incorporate bug fixes and improvements made to _s.

*Kntnt Base Theme* therefore leave files originating from _s as untouched as possible. Inevitable modifications are made so that it is easy to create an apprehensible patch file with `diff` and apply it to later versions of _s.

## Future plans

Plans for future versions of the theme includes options in the customizer to set global colors and fonts (including fonts from Gooogle Fonts).

## Changelog

### 1.0

Initial release.
