#!/usr/bin/env bash

function deploy()
{
    local script_dir=$(cd $(dirname $0); pwd)
    local base_dir=/home/sdl/devel/
    rsync -azv \
        --exclude '.git' \
        ${script_dir}/../../ ${base_dir}sidebizz/

    echo "chown files..."
    chown -R www-data:www-data ${base_dir}sidebizz/
}

deploy

