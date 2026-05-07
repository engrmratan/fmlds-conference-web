# Project Structure

This project keeps only the main site entry point in the root directory. Public content pages are organized in `pages/` and routed by `.htaccess`.

## Runtime Layout

- `index.php`: main public site entry point.
- `pages/`: public content pages routed through clean URLs.
- `.htaccess`: clean URL routing, caching, compression, and directory listing rules.
- `assets/`: public CSS, JavaScript, images, and video files.
- `config/`: application configuration. Direct browser access is blocked.
- `includes/`: shared PHP layout and helper files. Direct browser access is blocked.
- `uploads/`: public upload folders with directory listing disabled.
- `storage/logs/`: private runtime logs. Direct browser access is blocked.
- `docs/`: project notes and maintenance documentation.

## Notes

A deeper app/public/MVC folder structure would be the next step if the site grows into a larger application.
