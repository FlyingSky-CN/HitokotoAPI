# 一言 API (Hitokoto/ヒトコト)
基于 PHP 的一言 API (Hitokoto/ヒトコト)，非使用数据库（不依赖任何在线API和本地数据库调用一言）。
> 以下内容均来源于 [一言 API (Hitokoto/ヒトコト) - OWUcat](https://owucat.top/archives/167) 。
## 什么是一言
动漫也好、小说也好、网络也好，不论在哪里，我们总会看到有那么一两个句子能穿透你的心。「一言」就好似一个公开的摘抄本，我们在此记录那些让人一眼就有所感触的短句，并通过公共 API 的形式使你能够在自己的项目中调用它们。
## 调用方法
`GET`
## 参数说明
参数名|类型|含义|默认
-|-|-|-
charset|string|返回字符集，支持 utf-8 / gbk|utf-8
encode|string|返回数据格式|空
### 数据格式说明
参数值|含义
-|-
json|返回 JSON 格式数据
js|返回函数名为 hitokoto 的 JavaScript 脚本
空|返回纯文本
## 响应数据
下面是实际请求一次 index.php?encode=json 的结果：
```
{
"hitokoto":"扎古不论怎么化妆都不可能变成高达的。"
}
```
# 另
## 参与人员
### FlyingSky
编写 / [发布](https://github.com/FlyingSky-CN/HitokotoAPI/)
> 个人博客：[FlyingSky's Blog](https://blog.flyingsky.ml/)
### OWUcat
测试 / [公共API](https://owucat.top/archives/167)
> 个人博客：[OWUcat](https://OWUcat.top/)
