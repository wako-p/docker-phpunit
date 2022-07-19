# PHPの公式イメージがベース
FROM php:8.0-cli

# パッケージを更新して、
# PHPUnitのインストールに必要なzipとunzipをインストール
RUN apt-get update && \
    apt-get -y install zip unzip

# php:8.0-cliにComposerが含まれていて？
# そこから/usr/bin/composerをコピーしてる？
COPY --from=composer /usr/bin/composer /usr/bin/composer

# 作業ディレクトリの指定
# WORKDIR /var/www/html