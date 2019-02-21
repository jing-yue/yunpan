# OLAINDEX

转自[WangNingkai/OLAINDEX](https://github.com/WangNingkai/OLAINDEX),本人只是在这基础上稍加一些小功能。


## 简介

一款 `OneDrive` 目录文件索引应用，基于优雅的 `PHP` 框架 `Laravel5.7` 搭建，并通过 `Microsoft Graph` 接口获取数据展示，支持多类型帐号登录，多种主题显示，简单而强大。

## 预览

![预览](http://wx4.sinaimg.cn/large/5a5977d4gy1g0dzxhh4c0j21gb0u0dmd.jpg)
 
## 演示地址

- [guaosi的个人网盘](https://cloud.guaosi.com)

## 功能
- OneDrive 目录查看索引分页查看；
- 支持代码、图片、文本文件即时预览、图片列表栏展示；
- 支持音视频播放（兼容大部分格式），视频播放采用 Plyr.js，音乐播放采用 Aplayer；
- `支持在线视频字幕播放功能(仅VTT格式字幕)`
- 支持自定义创建文件夹、文件夹加密、文件/文件夹删除、文件/文件夹的复制与移动；
- 支持文件搜索、文件上传、文件直链分享与删除、文件直链一键下载；
- 支持管理 readme/head 说明文件；
- 支持图床（国内不太稳低）；
- 支持命令行操作；
- 支持文件离线下载（个人版）；
- 后台基本显示管理，多主题管理，文件预览管理等等（清理缓存后及时生效）；
- 支持世纪互联（一键切换）；
- 支持多种缓存系统（Redis、Memcached等）；
- 配置文件化，不依赖数据库；
- 支持 Heroku 搭建（亲测地址：`http://imwnk-olaindex.herokuapp.com`）。
- 更多功能欢迎亲自尝试。

**注：** 部分功能需登录。

## 安装

> 本项目基于 Laravel 开发，新手建议查看 laravel 的环境要求再进行部署。

```
composer install
chmod -R 755 *
chown -R www:www *
```