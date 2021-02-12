/*
|-------------------------------------------------------------------------------
| Tailwind – The Utility-First CSS Framework
|-------------------------------------------------------------------------------
|
| Documentation at https://tailwindcss.com
|
*/

/**
 * Global Styles Plugin
 *
 * This plugin modifies Tailwind’s base styles using values from the theme.
 * https://tailwindcss.com/docs/adding-base-styles#using-a-plugin
 */

/**
 * Configuration
 */
module.exports = {
  purge: [],
  darkMode: false,
  theme: {
    fontFamily: {
      sans: ['Montserrat', 'sans-serif'],
    },
    extend: {
      letterSpacing: {
        two: '2px',
        two1: '2.25px',
        three: '3px',
      },
      screens: {
        '3xl': '1820px',
      },
      maxWidth: {
        'max-w-screen-3xl': '1820px',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
