# phalcon-wechat
phalcon 微信接口实现
最近看到phalcon这个框架，性能确实不错，就想着写点东西来熟悉下，这个框架。所以就结合比较流行的微信来实现一些微信接口吧。
phalcon这个框架比较灵活，可以自由组织项目结构。本项目中，分了两层，分别为frontend和backend。当然你也可以pull下来自己重新进行结构分层。
本项目持续更新维护，希望对phalcon或者对微信开发感兴趣的小伙伴可以一起交流学习，如有不好的地方，还请指正，在此先行感谢🙏

简单介绍：
使用phalcon实现了一个简单的番茄时钟效果，结合微信jssdk实现了微信获取用户高级信息接口，微信转发分享，以及自定义菜单，自动回复文字，图片，语音，视频等消息接口。

项目结构：
pwechat
   |--apps
   |---|---backend
   |---|-----|---controllers
   |---|-----|---models
   |---|-----|---config
   |---|-----|----views
   |---|-----|----Module.php
   |---|
   |---|---common
   |---|
   |---|---frontend
   |---|-----|---controllers
   |---|-----|---models
   |---|-----|---config
   |---|-----|----views
   |---|-----|----Module.php
   |---|
   |---|---services
   |---|
   |---config
   |---public
   |---.htaccess
   |---.htrouter.php
   
