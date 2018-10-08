<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '通力峰达(南京)软件科技有限公司 - Driven Toward Perfection';
$this->registerMetaTag(['name' => 'keywords', 'content' => '通力峰达,南京通力峰达,软件开发,金融,道路救援']);
$this->registerMetaTag(['name' => 'description', 'content' => '这是我用Yii做的很酷的网站!'], 'description');
$this->registerLinkTag([
    'title' => '2333',
    'rel'   => '',
    'type'  => 'text/css',
    'href'  => '/public/css/index.css',
]);
?>
<style>
    .jumbotron{
        padding: 1rem;
        border: rgba(0,0,0,0.125) solid 1px;
        background-color: #f8f9fa;
        text-align: left;
    }
    .w-50{
        width: 50%;
    }
    .sign-in{
        width: 100%;
        margin-bottom: 1.5rem;
    }
    .sign-in .btn{
        text-align: center;
    }
    .sign-in p{
        margin: 0px;
    }
    .sign-tip{
        display: inline-block;
    }
    .ioc-sign-in{
        font-size: 33px
    }
    .online-msg{
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,0.125);
        border-radius: .25rem;
    }
    .header-title{
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: rgba(0,0,0,0.03);
        border-bottom: 1px solid rgba(0,0,0,0.125);
    }
    .header-title h3{
        margin: 0px;
    }
    .float-right {
        float: right !important;
    }
    .feed{
        padding-right: 0px;
    }
    .online-msg-group{
        padding-top: 16px;
        padding-left: 16px;
    }
    .online-msg-group .form-control,.online-msg-group .btn-success{
        height: 4.3rem;
        resize:none;
    }
    .msg-list-group{
        margin-top: 15px;
        overflow:scroll;
        width:100%;
        height:400px;
        overflow-x: hidden;
        transition-timing-function: cubic-bezier(0.1, 0.57, 0.1, 1);
        transition-duration: 0ms;
        transform: translate(0px, 0px) translateZ(0px);
    }
    .msg-list-group .msg-item{
        border-bottom: 1px solid #ccc;
        margin-bottom: 15px;
        padding-bottom: 5px;
    }
    /*滚动条样式*/
    .msg-list-group::-webkit-scrollbar {/*滚动条整体样式*/
        width: 6px;     /*高宽分别对应横竖滚动条的尺寸*/
        height: 5px!important;
    }
    .msg-list-group::-webkit-scrollbar-thumb {/*滚动条里面小方块*/
        border-radius: 5px;
        -webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);
        /*background: rgba(0,0,0,0.2);*/
        background: #6c757d;
    }
    .msg-list-group::-webkit-scrollbar-track {/*滚动条里面轨道*/
        /*-webkit-box-shadow: inset 0 0 5px rgba(0,0,0,0.2);*/
        /*border-radius: 0;*/
        /*background: rgba(0,0,0,0.1);*/
        background: #fff;
    }
    .head-img{
        display: block;
        width: 38px;
        height: 38px;
        margin-right: 0.5em;
        float: left;
    }
    .head-img img{
        width: 38px;
        height: 38px;
        border-radius: .25rem !important;
    }
    .msg-info{
        display: block;
        float: left;
        width: 185px;
        text-align: justify;
    }
    .media-footer{
        color: #939ba2;
    }
    .clear{
        clear: both;
    }
    .fast{color: #dc3545;}
    .secure {color: #28a745;}
    .professional {color: #007bff;}
    .mr-auto svg{
    	width: 20px;
    	height: 20px;
    }
    .jumbotron .btn {
	    font-size: 21px;
	    padding: 5px 10px;
	}
	.fa-2x {
	    font-size: 2em;
		width: 25px;
		height: 25px;
	}
	.svg-inline--fa.fa-fw {
	    width: 1.25em;
	}
	.card ul {
	    padding-left: 0;
	    margin-bottom: 0;
	    list-style: none;
	}
	.svg-inline--fa.fa-w-16 {
	    width: 1em;
	}
	.svg-inline--fa {
	    display: inline-block;
	    font-size: inherit;
	    height: 1em;
	    overflow: visible;
	    vertical-align: -.125em;
	}
	.card .card-header {
	    padding: .5rem 1rem;
	}
	.card-header:first-child {
	    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
	}
	.card-header {
	    padding: .75rem 1.25rem;
	    margin-bottom: 0;
	    background-color: rgba(0,0,0,0.03);
	    border-bottom: 1px solid rgba(0,0,0,0.125);
	}
	.mb-3, .my-3 {
	    margin-bottom: 1rem !important;
	}
	.card {
	    position: relative;
	    display: -ms-flexbox;
	    display: flex;
	    -ms-flex-direction: column;
	    flex-direction: column;
	    min-width: 0;
	    word-wrap: break-word;
	    background-color: #fff;
	    background-clip: border-box;
	    border: 1px solid rgba(0,0,0,0.125);
	    border-radius: .25rem;
	}
	.card .card-header h2, .card h2.card-header {
	    font-size: 2rem;
	    line-height: 33px;
	    margin: 0;
	    display: inline-block;
	}
	h2 {
	    font-size: 1.5rem;
	}
	h2, .h2 {
	    font-size: 2rem;
	}
	h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
	    margin-bottom: .5rem;
	    font-family: inherit;
	    font-weight: 500;
	    line-height: 1.2;
	    color: inherit;
	}
	.card ul.post-list li {
	    line-height: 2.25rem;
	    overflow: hidden;
	    text-overflow: ellipsis;
	    white-space: nowrap;
	}
	.ups, .fa-lock, .fa-times-circle, .additional .hint, .media .hint, .media .media-body .media-footer, .media .media-body h2 small, .media .media-body h2, .card ul.post-list li, .card .table td {
	    color: #939ba2;
	}
	.d-flex {
	    display: -ms-flexbox !important;
	    display: flex !important;
	}
	.svg-inline--fa {
	    display: inline-block;
	    font-size: inherit;
	    height: 1em;
	    overflow: visible;
	    vertical-align: -.125em;
	}
</style>
<div class="row">
    <div class="col-lg-9 col-xl-9">
    	<!-- 业务内容精简 Start -->
        <div class="jumbotron">
            <h2>
            	<span class="fast">金融</span>、
            	<span class="fast">道路救援</span>、
            	<span class="professional">智能餐饮</span>专注解决方案
            </h2>
            <h3>热诚与诚意，为了无法计算的价值！</h3>
            <h4>Yii 是一个 高性能 的，适用于开发 WEB 2.0 应用的 PHP 框架。</h4>
            <h5>Yii 自带了 <a href="#">丰富的功能</a>，包括 MVC，DAO/ActiveRecord，I18N/</h5>
            <h6>L10N，缓存，身份验证和基于角色的访问控制，脚手架，测试等，可显著缩短开发时间。</h6>
			<div class="d-flex">
                <div class="mr-auto">
                    <div class="btn-toolbar" role="toolbar">
                        <div class="btn-group mr-2">
                            <a class="btn btn-danger" href="/video">
                            	<svg class="svg-inline--fa fa-video fa-w-18 fa-fw" aria-hidden="true" data-prefix="fas" data-icon="video" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                            		<path fill="currentColor" d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"></path>
                            	</svg>视频教程
                            </a>
                    	</div>
                        <div class="btn-group mr-2">
                            <a class="btn btn-success" href="/doc"><svg class="svg-inline--fa fa-book fa-w-14 fa-fw" aria-hidden="true" data-prefix="fas" data-icon="book" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M448 360V24c0-13.3-10.7-24-24-24H96C43 0 0 43 0 96v320c0 53 43 96 96 96h328c13.3 0 24-10.7 24-24v-16c0-7.5-3.5-14.3-8.9-18.7-4.2-15.4-4.2-59.3 0-74.7 5.4-4.3 8.9-11.1 8.9-18.6zM128 134c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm0 64c0-3.3 2.7-6 6-6h212c3.3 0 6 2.7 6 6v20c0 3.3-2.7 6-6 6H134c-3.3 0-6-2.7-6-6v-20zm253.4 250H96c-17.7 0-32-14.3-32-32 0-17.6 14.4-32 32-32h285.4c-1.9 17.1-1.9 46.9 0 64z"></path></svg><!-- <i class="fa-fw fas fa-book"></i> --> 中文文档</a>                        </div>
                        <div class="btn-group d-none d-sm-block">
                            <a class="btn btn-primary" href="/download"><svg class="svg-inline--fa fa-download fa-w-16 fa-fw" aria-hidden="true" data-prefix="fas" data-icon="download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg><!-- <i class="fa-fw fas fa-download"></i> --> 下载框架</a>                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jumbotron">
	        <div class="row">
	            <div class="col-lg-4 col-md-4">
	                <h2 class="fast d-flex align-items-center"><svg class="svg-inline--fa fa-clock fa-w-16 fa-2x mr-2 " aria-hidden="true" data-prefix="fas" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path class="fa-2x" fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm57.1 350.1L224.9 294c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h48c6.6 0 12 5.4 12 12v137.7l63.5 46.2c5.4 3.9 6.5 11.4 2.6 16.8l-28.2 38.8c-3.9 5.3-11.4 6.5-16.8 2.6z"></path></svg><!-- <i class="fa-2x mr-2 fas fa-clock"></i> --> 快速</h2>
	                <p>Yii 仅加载您需要的功能，具有强大的缓存支持，通过尽可能少的开销提供最大化的功能。</p>
	            </div>
	            <div class="col-lg-4 col-md-4">
	                <h2 class="secure d-flex align-items-center"><svg class="svg-inline--fa fa-shield-alt fa-w-16 fa-2x mr-2" aria-hidden="true" data-prefix="fas" data-icon="shield-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M496 128c0 221.282-135.934 344.645-221.539 380.308a48 48 0 0 1-36.923 0C130.495 463.713 16 326.487 16 128a48 48 0 0 1 29.539-44.308l192-80a48 48 0 0 1 36.923 0l192 80A48 48 0 0 1 496 128zM256 446.313l.066.034c93.735-46.689 172.497-156.308 175.817-307.729L256 65.333v380.98z"></path></svg><!-- <i class="fa-2x mr-2 fas fa-shield-alt"></i> --> 安全</h2>
	                <p>Yii 的标准是安全的，健全的默认设置和内置工具可帮助您编写更加稳定和安全的代码。</p>
	            </div>
	            <div class="col-lg-4 col-md-4">
	                <h2 class="professional d-flex align-items-center"><svg class="svg-inline--fa fa-briefcase fa-w-16 fa-2x mr-2" aria-hidden="true" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M320 288h192v144c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V288h192v20c0 6.627 5.373 12 12 12h104c6.627 0 12-5.373 12-12v-20zm192-112v80H0v-80c0-26.51 21.49-48 48-48h80V80c0-26.51 21.49-48 48-48h160c26.51 0 48 21.49 48 48v48h80c26.51 0 48 21.49 48 48zM320 96H192v32h128V96z"></path></svg><!-- <i class="fa-2x mr-2 fas fa-briefcase"></i> --> 专业</h2>
	                <p>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。</p>
	            </div>
	        </div>
		</div>
        <!-- 业务内容精简 END -->
        <!-- 公司公告Start -->
		<div class="card mb-3">
            <div class="card-header">
                <h2><svg class="svg-inline--fa fa-history fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="history" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path></svg><!-- <i class="fas fa-history"></i> --> 最新动态</h2>
                <a class="btn float-right" href="/news">更多»</a>
			</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="post-list">
                                                        <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/181">Auth Client 扩展 2.1.6 版本发布了</a>                                <span class="time ml-auto">2018-09-06</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/180">更换论坛软件，转到 Discourse</a>                                <span class="time ml-auto">2018-09-03</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/179">新成员加入 Yii 团队作为主要的 Yii 3.0 开发成员</a>                                <span class="time ml-auto">2018-08-31</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/178">Yii 1.1.20 发布了</a>                                <span class="time ml-auto">2018-07-06</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/177">Yii 自 3.0.0 版本开始采用 SemVer</a>                                <span class="time ml-auto">2018-06-17</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/176">Queue 扩展 2.1.0 发布了</a>                                <span class="time ml-auto">2018-05-23</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/175">Gii 扩展 2.0.7 版本发布了</a>                                <span class="time ml-auto">2018-05-03</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/173">Smarty 扩展 2.0.7 版本发布了</a>                                <span class="time ml-auto">2018-04-25</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/174">Swiftmailer 扩展 2.1.1 版本发布了</a>                                <span class="time ml-auto">2018-04-25</span>
                            </li>
                            </ul></div><div class="col-lg-6 d-none d-lg-block"><ul class="post-list">                                                        <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/172">MongoDB 扩展 2.1.7 版本发布了</a>                                <span class="time ml-auto">2018-03-30</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/170">Shell 扩展 2.0.1 版本发布了</a>                                <span class="time ml-auto">2018-03-26</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/169">新版 Yiiframework.com 网站最后的发布</a>                                <span class="time ml-auto">2018-03-22</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/168">Yii 2.0.15 和 数据库扩展的安全补丁发布了</a>                                <span class="time ml-auto">2018-03-20</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/167">Imagine 扩展 2.1.1 版本发布了</a>                                <span class="time ml-auto">2018-02-22</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/165">Yii 2.0.14 发布了</a>                                <span class="time ml-auto">2018-02-19</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/166">Faker 扩展 2.0.4 版本发布了</a>                                <span class="time ml-auto">2018-02-19</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/164">Bootstrap 扩展 2.0.8 版本发布了</a>                                <span class="time ml-auto">2018-02-16</span>
                            </li>
                                                                                    <li class="d-flex">
                                <svg class="svg-inline--fa fa-chevron-right fa-w-10 fa-fw align-self-center" aria-hidden="true" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg><!-- <i class="fa-fw align-self-center fas fa-chevron-right"></i> --> <a class="text-truncate" href="/news/161">Http 客户端扩展 2.0.6 版本发布了</a>                                <span class="time ml-auto">2018-02-13</span>
                            </li>
                                                                                </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- 公司公告END -->
    </div>
    <div class="col-lg-3 col-xl-3">
        <div class="btn-group sign-in">
            <a href="" class="btn btn-success w-50">
                <span class="glyphicon glyphicon-bookmark ioc-sign-in"></span>
                <div class="sign-tip">
                    <p>点此出签到</p>
                    <p>签到有好礼</p>
                </div>
            </a>
            <a href="" class="btn btn-primary w-50">
                <p>2018年09月28日</p>
                <p>已有133人签到</p>
            </a>
        </div>
        <div class="online-msg">
            <div class="header-title">
                <h3><span class="glyphicon glyphicon-pencil"></span> 大家正在说…<a class="btn float-right feed" href="/feed">更多»</a></h3>
            </div>
            <div class="online-msg-group">
                <div class="sen-msg">
                    <div class="input-group">
                        <textarea name="" class="form-control" placeholder="文明上网，理性发言！" aria-required="true"></textarea>
                        <span class="input-group-btn">
                            <button class="btn btn-success" type="button">发布</button>
                        </span>
                    </div>
                </div>
                <div class="msg-list-group">
                    <div class="msg-item">
                        <a href="" class="head-img">
                            <img src="/public/img/29_avatar_small.jpg" alt="">
                        </a>
                        <div class="msg-info">
                            <div class="content">
                                <a href="">优酱</a>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。
                            </div>
                            <div class="media-footer">6小时前 
                                <span class="float-right">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    1&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="msg-item">
                        <a href="" class="head-img">
                            <img src="/public/img/29_avatar_small.jpg" alt="">
                        </a>
                        <div class="msg-info">
                            <div class="content">
                                <a href="">优酱</a>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。
                            </div>
                            <div class="media-footer">6小时前 
                                <span class="float-right">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    1&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="msg-item">
                        <a href="" class="head-img">
                            <img src="/public/img/29_avatar_small.jpg" alt="">
                        </a>
                        <div class="msg-info">
                            <div class="content">
                                <a href="">优酱</a>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。
                            </div>
                            <div class="media-footer">6小时前 
                                <span class="float-right">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    1&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="msg-item">
                        <a href="" class="head-img">
                            <img src="/public/img/29_avatar_small.jpg" alt="">
                        </a>
                        <div class="msg-info">
                            <div class="content">
                                <a href="">优酱</a>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。
                            </div>
                            <div class="media-footer">6小时前 
                                <span class="float-right">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    1&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="msg-item">
                        <a href="" class="head-img">
                            <img src="/public/img/29_avatar_small.jpg" alt="">
                        </a>
                        <div class="msg-info">
                            <div class="content">
                                <a href="">优酱</a>Yii 使用简单但功能强大的 API 和代码生成功能，让您在更短的时间内编写更多代码。
                            </div>
                            <div class="media-footer">6小时前 
                                <span class="float-right">
                                    <span class="glyphicon glyphicon-comment"></span>
                                    1&nbsp;&nbsp;
                                    <span class="glyphicon glyphicon-thumbs-up"></span>
                                    2
                                </span>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="site-index">

    <div class="jumbotron">
        <h1>通力峰达(南京)有限公司!</h1>

        <p class="lead">同一共同价值观，热诚与诚意！</p>

        <p><a class="btn btn-lg btn-success" href="<?=Url::toRoute('site/about');?>" >关于我们</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h2>解决方案</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>新闻动态</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h2>联系我们</h2>
                <p>************************************
                ************************************
                ************************************
                ************************************
                ***********************　　　　　　</p>
                <p><a class="btn btn-default" href="#">查看 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
 -->