#!/usr/bin/env bash
# custom build
# TODO: move to fruit setup command - both standalone symlinks (setup-custom-admin.sh) and custom build (setup-admin.sh)
rm -rf resources/admin
cp -r vendor/kiwi-suite/admin-frontend resources/admin
rm -rf resources/admin/.git
rm -rf resources/admin/.idea
rm -rf resources/admin/.travis.yml
rm -rf resources/admin/composer.json
rm -rf resources/admin/node_modules
rm -rf resources/admin/projects
cd public
mkdir assets
cd assets
ln -s ../../resources/admin/build admin
