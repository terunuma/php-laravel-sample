#!/usr/bin/env bash

function backup_code()
{
    local owner=cadox
    local script_dir=$(cd $(dirname $0); pwd)
    local target_dir=${script_dir}/../../../sidebizz.$(date +%Y%m%d_%H%M%S)/
    local base_dir=/home/sdl/devel/sidebizz/
    rsync -azv \
        --exclude '.git' \
        ${base_dir}* ${target_dir}

    echo "backup staging code files..."
    chown -R ${owner}:${owner} ${target_dir}
}

backup_code

