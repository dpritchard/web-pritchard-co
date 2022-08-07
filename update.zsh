#!/bin/zsh
composer update
npm update
./vendor/bin/jigsaw build production
npm run production
git add build_production && git commit -m "Build for deploy"
git subtree push --prefix build_production origin gh-pages