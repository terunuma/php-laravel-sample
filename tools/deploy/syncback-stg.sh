#!/usr/bin/env bash

function sync_back()
{
    local owner=cadox
    local script_dir=$(cd $(dirname $0); pwd)
    local target_dir=${script_dir}/../../
    local base_dir=/home/sdl/devel/sidebizz/
    rsync -azv \
        --exclude '.git' \
        ${base_dir} ${target_dir}

    echo "chown files..."
    chown -R ${owner}:${owner} ${target_dir}
}

sync_back

