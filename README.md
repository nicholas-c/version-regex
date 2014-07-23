Version control regex validation

Will validate "version numbers" using regex and preg_match. 

Examples (With or without 'v') 
v1
v1.1
v1.132.1

Allows "unlimited" length MAJOR version
Followed by (but not required) up to 2 addition "." - MINOR, PATCH
Followed by (vut not required) "-" followed by "pre|beta|b|RC|alpha|a|pl|p" followed by -#
