FROM registry.cn-hangzhou.aliyuncs.com/donny-zzk/fomo-app:v1.0.0

LABEL maintainer="Donny Zhang <zhikaiz89@gmail.com>"

COPY . /var/www/

WORKDIR /var/www

CMD ["php", "/var/www/engineer", "server:start"]

EXPOSE 8000 80
