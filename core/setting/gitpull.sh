if [ ! -d "/home/wwwroot" ]; then
    mkdir /home/wwwroot;
fi;
if [ ! -d "/home/wwwbackup" ]; then
    mkdir /home/wwwbackup;
fi;
zip -r /home/wwwbackup/larele.zip /home/wwwroot/larele/*


if [ ! -d "/home/wwwsrc" ]; then
    mkdir /home/wwwsrc;
fi;

if [ ! -d "/home/wwwsrc/larele" ]; then
    cd /home/wwwsrc;
    git clone https://github.com/fkb159357/larele.git;
else
    cd /home/wwwsrc/larele;
    git pull;
fi

if [ ! -d "/home/wwwroot/larele" ]; then
    mkdir /home/wwwroot/larele;
fi

if [ ! -d "/home/wwwroot/larele/core" ]; then
    mkdir /home/wwwroot/larele/core;
fi

if [ ! -d "/home/wwwroot/larele/core/data" ]; then
    mkdir /home/wwwroot/larele/core/data;
fi

# 业务相关，暂时保留
if [ ! -d "/home/wwwroot/larele/core/data" ]; then
    mkdir /home/wwwroot/larele/res/tmp;
fi

mv /home/wwwroot/larele /home/wwwroot/larele.trash;
cp /home/wwwsrc/larele -r /home/wwwroot/larele;
rm /home/wwwroot/larele/.git -rf
rm /home/wwwroot/larele/core/data -rf
cp -r /home/wwwroot/larele.trash/core/data /home/wwwroot/larele/core/
chmod -R 767 /home/wwwroot/larele/core/data
chmod -R 767 /home/wwwroot/larele/res/tmp
chmod +x /home/wwwroot/larele/core/setting/gitpull.sh
rm -f -r /home/wwwroot/larele.trash

cd /home/wwwroot

service nginx restart
service php-fpm reload
