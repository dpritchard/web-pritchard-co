# web-pritchard-co

Source files for [pritchard.co](https://pritchard.co) — a static site built with [Jigsaw](https://jigsaw.tighten.com/), [Vite](https://vite.dev/), and [Tailwind CSS](https://tailwindcss.com/).

## Stack

- **Jigsaw** — static site generator, Blade templates, Markdown content
- **Vite** — asset bundling (CSS/JS)
- **Tailwind** — utility-first styling

## Local development

With [Laravel Herd](https://herd.laravel.com/) installed, the site is available at
`http://web-pritchard-co.test` automatically.

First-time setup:

```bash
composer install
npm install
```

Then run Vite to watch and rebuild assets on changes:

```bash
npm run dev
```

Edits to `source/` are reflected automatically — no manual Jigsaw build needed.

## Production deployment

Push to `main` — GitHub Actions builds the site and pushes `build_production/` to the `deploy` branch.
