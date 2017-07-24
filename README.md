# AHSU BLOG 2017.7
#### 注意： 本项目为规范流程项目，不是造轮子。 :high_brightness:     
### 需求->原型->开发->测试->发布  
### Requirements -> Prototypes -> Development -> Test -> Deploy   

## 1.需求 Discovery Phase  
a. 这个项目是个人全栈开发项目，目的是开发一个类似于wordpress的中英文多用户Blog系统。    
b. 文章可以转发到第三方平台（FB,WEIBO,TWITTER, 微信等等）。      
c. 管理员有专用后台，用来进行文章管理，文件管理和数据分析等。    
d. 有数据分析(接入谷歌分析系统)。    
e. V2期有微信公众号关联功能，用户可用微信登录，可以管理同步微信文章和管理微信粉丝      
f. 可以有email订阅功能。  


## 2.设计 Design Phase ( Wireframing, Prototype 原型)  
[Tool: figma.com](https://www.figma.com/file/BXiiSfVIOegWJNLUEZkWL5Un/ashublog-prototype)    

## 3.开发 Development   
### 3.1 Technology stack:     

a.代码库，服务器   
b.前后端框架   
````   
 - Laravel5.4 + Vue.js 2 + Inspinia Admin Theme  
 ````  
  
c. ER-Diagram Design 数据库设计  [Design Tool：OmniGraffle](https://www.omnigroup.com/omniGraffle/)    
### 3.2.开发计划 （按模块->前后端同步）  
功能列表    
````  
  Todo
````  
开发计划     
````  
  Todo
````  
### e.项目管理 [Tool: trello.com](http://trello.com)    


## 4.测试 QA / Testing  
（Todo）  

## 5.发布 Deployment  
  
总结（Todo）  

## :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: - :deciduous_tree: 

## 资源(感谢以下开源作者的无私奉献)           
#### 前端资源：  
- [CoreUI: Bootstrap Admin Template](http://coreui.io)  
- [Vue Router](https://router.vuejs.org/zh-cn/)    
  
#### 后端资源：  
- [Laravel 5.1 LTS CheatSheet](https://cs.laravel-china.org/)  
- [下载量最高的 100 个 Laravel 扩展包推荐](https://laravel-china.org/topics/2530/the-highest-amount-of-downloads-of-the-100-laravel-extensions-recommended)   
- [PB Blog](https://github.com/jcc/blog)   
- [多语言支持：Laravl locale](https://mydnic.be/post/laravel-5-and-his-fcking-non-persistent-app-setlocale)     
注意用户体验: session还未定义时，需要检测客户端浏览器语言来初始化默认语言。
- [Laratrust: Handle roles and permissions in Laravel](https://github.com/santigarcor/laratrust)    
  
#### 其他资源：  
- [list of emoji markdown for github](https://gist.github.com/rxaviers/7360908)     
- [PJ Blog](https://github.com/jcc/blog)    
- [DevMarketer: Advanced CMS Series in Laravel 5.4](https://www.youtube.com/watch?v=rzxNpfiLHSg&index=1&list=PLwAKR305CRO_cukAejlt5kz3pTtDMW_Cd)  
- [Buefy: UI components for Vue based on Bulma](https://buefy.github.io/#/)    
- [FontAwesome](http://fontawesome.io/cheatsheet/)      
- [Material Design icons](https://material.io/icons/)    
- [Responsive Design Cheatsheet](https://www.codeply.com/responsive-design-cheatsheet.html)    

## 踩坑记录    
- 修改.env后，需要执行清理缓存： 
````  
php artisan config:cache    
````  
  

## About Author 
The project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).  

wechat: ashucn  
email: ashucn@gmail.com    
