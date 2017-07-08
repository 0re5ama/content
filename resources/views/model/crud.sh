#!/usr/bin/sh
find . -type d -exec touch {}/create.blade.php \;
find . -type d -exec touch {}/edit.blade.php \;
