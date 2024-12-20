import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';
const { addDynamicIconSelectors } = require('@iconify/tailwind');

/** @type {import('tailwindcss').Config} */
export default {
  content: {
    relative: true,
    transform: (content) => content.replace(/taos:/g, ''),
    files: [
      './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
      './vendor/laravel/jetstream/**/*.blade.php',
      './storage/framework/views/*.php',
      './resources/views/**/*.blade.php',
      './src/**/*.{html,js}',
      './app/Livewire/**/*Table.php',
      './vendor/power-components/livewire-powergrid/resources/views/**/*.php',
      './vendor/power-components/livewire-powergrid/src/Themes/Tailwind.php',
      './node_modules/flyonui/dist/js/*.js',
      './node_modules/flyonui/dist/js/accordion.js',
      './src/*.html',
      'html.js :where([class*="taos:"]:not(.taos-init))',
    ],
  },

  safelist: [
    '!duration-[0ms]',
    '!delay-[0ms]',
    'html.js :where([class*="taos:"]:not(.taos-init))',
  ],

  flyonui: {
    themes: ['light'],
  },

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
    },
  },

  plugins: [
    forms,
    typography,
    require('flyonui'),
    require('flyonui/plugin'),
    addDynamicIconSelectors(),
    require('taos/plugin'),
  ],
};
