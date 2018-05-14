#!/usr/bin/env bash
# standalone symlinks
# TODO: move to fruit setup command - both standalone symlinks (setup-custom-admin.sh) and custom build (setup-admin.sh)
cd resources/admin
ln -s ../../vendor/kiwi-suite/admin-frontend/build ./build
cd ../../public
mkdir assets
cd assets
ln -s ../../resources/admin/build ./admin
