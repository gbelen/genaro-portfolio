# genaro.com.do: portfolio

Source code for my portfolio site, **genaro.com.do**. It's a WordPress site built from scratch:

- **Custom block theme** (Full Site Editing, `theme.json`); no base theme or page builder.
- **Custom block plugin** for case studies, built with `@wordpress/scripts`.
- **CI/CD with GitHub Actions**: linting and build on every push, deploy to my own Ubuntu VPS over SSH.

> 🚧 Work in progress. This repository is being built step by step, in public.

## Stack

| Area | Tools |
| --- | --- |
| CMS | WordPress, PHP 8.3 |
| Local environment | [`@wordpress/env`](https://www.npmjs.com/package/@wordpress/env) (Docker) |
| Front end | Block theme, `theme.json`, custom blocks (React) |
| Quality | PHPCS (WordPress Coding Standards), ESLint |
| Deploy | GitHub Actions → VPS (Caddy, PHP-FPM, MySQL) |

## Run it locally

Requirements: Docker Desktop and Node.js 22+.

```bash
npm install
npm run env:start
```

The site runs at <http://localhost:8888> (admin at `/wp-admin`). To stop it:

```bash
npm run env:stop
```

Port busy? Create a `.wp-env.override.json` file (it's git-ignored) with another port, e.g. `{ "port": 8890 }`.

## Structure (planned)

```
theme/                      Custom block theme
plugins/case-study-block/   Custom block plugin
.github/workflows/          CI/CD pipelines
.wp-env.json                Local environment (PHP 8.3, same as production)
```

## License

[GPL-2.0-or-later](LICENSE), like WordPress itself.
