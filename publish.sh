#!/bin/bash

PAGES="index about info calendar contact yorkindoors09"
FOLDERS="images css documents js"
LAST_UPDATED_FILE="lastupdated.txt"

OUTPUT_DIR="./pub"

[ -e $OUTPUT_DIR ] || mkdir $OUTPUT_DIR

echo `date` "-->" $LAST_UPDATED_FILE
date > $LAST_UPDATED_FILE

for file in $PAGES ; do
	phpfile="./""$file"".php";
	dest="$OUTPUT_DIR""/""$file"".html";
	echo "$phpfile" "--php-->" "$dest";
	php -q < "$phpfile" | sed "s/href=\"\([^\"/]*\)\.php/href=\"\\1.html/g" > $dest
done;

for folder in $FOLDERS ; do
	dest="$OUTPUT_DIR""/";
	echo "./""$folder" "-->" "$dest""$folder";
	rm -rf "$dest""/""$folder";
	cp -rf "./$folder" "$dest""/""$folder";
done;

chmod -R o+r "$OUTPUT_DIR"
find pub -type d -exec chmod o+x '{}' \;
