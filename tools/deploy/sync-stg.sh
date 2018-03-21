#!/usr/bin/env bash

function deploy()
{
    local owner=www-data
    local script_dir=$(cd $(dirname $0); pwd)
    local target_dir=${script_dir}/../../
    local base_dir=/home/sdl/devel/sidebizz/
    rsync -azv \
        --exclude '.git' \
        ${target_dir} ${base_dir}

    echo "chown files..."
    chown -R ${owner}:${owner} ${base_dir}
}

deploy

