# 🖌 Craft Starter
Our default Craft project starter.

## 🧰 Tools
- [Alpine](https://github.com/alpinejs/alpine)
- [ESBuild](https://esbuild.github.io/)
- [React](https://reactjs.org/)
- [Tailwind](https://tailwindcss.com/)

... and probably some other stuff we're forgetting to mention.

## ⭐️ Requirements
- Composer 2
- Laravel Valet
- MySQL 5.7
- NVM
- PHP@8.1

## 🛠 Getting Started
1. Clone repo to machine
2. Create `.env` file and use `.env.example` as starting point
3. Run `valet link {sitename}` to configure Valet to serve the site
   1. Example: `valet link example` -> http://example.test
4. Run `valet use php@8.1` to link proper PHP version if not using already
5. Run `composer install` to install php dependencies
6. Create database and import database from production/staging/etc
7. Run `nvm use` to use proper node version
8. Run `npm i` to install dependencies
9. Run `npm run dev` to fire up dev server and watchers!

## 🐞 Debugging
Craft Starter comes with [Ray](https://plugins.craftcms.com/craft-ray) enabled. If you need something beyond Craft's `dump` and `dd` methods consider installing Ray on your machine and using the `ray()` function. Ray comes with a litany of [useful API methods](https://spatie.be/docs/ray/v1/usage/reference) to help you debug.

**Note**: Ray can be enabled and disabled in your `RAY_ENABLED` environment variable. Make sure this is disabled in the production `.env` file!

## 🤔 When Should I Use {{ x }}?
We recognize this starter provides many tools to tackle a wide range of problems, and that is by design! Our goal with the starter is to make the [easy things easy and the hard possible](https://www.quora.com/What-is-the-story-behind-Alan-Kay-s-adage-Simple-things-should-be-simple-complex-things-should-be-possible/answer/Alan-Kay-11)

Here is a non-exhaustive list of when to use which tool in this starter:
- For simple reactive state use Alpine!
  - Accordions
  - Modals
  - Mobile Navigation
- For larger-scale data-driven UI's, use React!
  - Dynamic listing pages with filters/search
  - Multi-step forms with lots of user interaction

As a last resort, always feel free to reach out to a Senior Developer to make a recommendation on which tool is the best fit for a task!
