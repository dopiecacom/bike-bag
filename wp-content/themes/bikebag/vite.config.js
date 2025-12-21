import { v4wp } from '@kucrut/vite-for-wp';
import tailwindcss from '@tailwindcss/vite'

export default {
    plugins: [
        v4wp({
            input: 'assets/js/scripts.js',
            outDir: 'assets/public',
        }),
       tailwindcss(),
    ],
    server: {
        host: '0.0.0.0',
        hmr: { host: 'bike.local' },
        cors: true,
    },
};