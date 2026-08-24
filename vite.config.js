import tailwindcss from '@tailwindcss/vite';
import laravel from 'laravel-vite-plugin';
import { defineConfig } from 'vite';

export default defineConfig({
  plugins: [
    // Точка входа это css, а не js: своего кода на клиенте у блога нет. Бандл
    // существовал ради javascript Bootstrap и @rails/ujs, и ушёл вместе с ними.
    laravel(['resources/css/app.css']),
    tailwindcss(),
  ],
  server: {
    host: '0.0.0.0'
  },
});
