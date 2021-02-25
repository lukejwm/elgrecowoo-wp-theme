#!/usr/bin/bash

# simple script to go through all css files and add semi-colons to all lines that are missing them

readarray -d '' CSS_FILES < <(find . -name '*.css' -print0)

for file in "${CSS_FILES[@]}"; do
	sed -i.bak 's/.*[^;{}]\s*$/& ;/g' $file
	# should be balnk if the above worked
	grep -B 1 '}' $file | grep '.*[^;{}]\s*$'
done
