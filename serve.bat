@echo OFF
set port=7999
:incrPort
Set /A port=port+1
netstat -an | findstr /r /c:"^  [TU][CD]P  *[^ ]*:%port% " >nul && goto incrPort
set chemin=%~dp0
cd %chemin%/public
php -S 0.0.0.0:%port%
