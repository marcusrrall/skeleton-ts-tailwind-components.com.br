const mix = require('laravel-mix');

// Processa o CSS com TailwindCSS
mix.postCss(
  'wp-content/themes/my-theme/resources/css/theme.css',
  'wp-content/themes/my-theme/public/css/template.min.css',
  [require('tailwindcss')],
);

// Combina estilos de bibliotecas externas
mix.styles(
  [
    'node_modules/hover.css/css/hover.css',
    'node_modules/slick-carousel/slick/slick.css',
  ],
  'wp-content/themes/my-theme/public/css/libs.min.css',
);

// Combina scripts de bibliotecas externas
mix.scripts(
  [
    'node_modules/wowjs/dist/wow.js',
    'node_modules/slick-carousel/slick/slick.min.js',
  ],
  'wp-content/themes/my-theme/public/js/template.min.js',
);

// Compila arquivos TypeScript
mix.ts(
  'wp-content/themes/my-theme/resources/ts/theme.ts',
  'wp-content/themes/my-theme/public/js/template.min.js',
);

// Adiciona opções adicionais se necessário
mix.options({
  processCssUrls: false,
});
