# BaseImage
FROM mysql:8.0.17
# mysql:8.0.17の内容
# OS : Debian にMySQL 8.0.17をインストールしてあるイメージ


# MySQLの設定ファイルをコピー
COPY my.cnf /etc/mysql/conf.d/


# 日本語環境
RUN apt-get update -qq ;\
  apt-get install -y locales ;\
  locale-gen ja_JP.UTF-8
ENV LANG ja_JP.UTF-8
ENV LC_CTYPE ja_JP.UTF-8
RUN localedef -f UTF-8 -i ja_JP ja_JP.utf8
ENV LC_ALL ja_JP.UTF-8
RUN cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime
# 日本語環境が不要であれば不要


# ターミナル画面を見やすく変更
RUN echo 'export PS1="\n\[\033[35m\]\u@\h\[\033[00m\]:\[\033[36m\]\w\[\033[00m\]\n[db] \$ "' >> ~/.bashrc
# 慣れてきたら不要
