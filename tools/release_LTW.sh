#!/bin/sh

version=$1

# Go to LTW folder
echo Go to LTW folder

cd /var/www/html/ltw/dev/leadtowin
git checkout master
git pull origin master

# Create release_branch
git checkout -B release_$1

# Change Version_number
sed -i 's/[[:digit:]].[[:digit:]].[[:digit:]]/'"$1"'/g' src/sites/all/themes/leadtowin_v2/templates/footer.tpl.php

echo changed Version_number

# Push release_branch
git add src/sites/all/themes/leadtowin_v2/templates/footer.tpl.php
git commit -m "Change version number to $1"
git push -u origin release_$1

echo done

curl --data ":zoro::slack: LeadToWin $1 has been released successfully to staging server. Please help to check, QA team @cp2-robin :slack::zoro:" $'https://cp5.slack.com/services/hooks/slackbot?token=FygFxWmqyyLYUEdbxjsbz4Nn&channel=%23releases'

echo Successfully
exit 1