# change file permissions to 644
find ./ -type f -exec chmod 664 {***REMOVED*** \;
find ./ -type d -exec chmod 751 {***REMOVED*** \;
chmod +x setfilepermissions.sh
