#!/bin/bash

for i in $(find $1 -name '*.svg'); do sed -i 's/https:\/\/0x8.ch\/HackersCardgame3/https:\/\/0x8.ch\/HackersCardgame5/g' "$i"; done
