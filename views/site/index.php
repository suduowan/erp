<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = '通力峰达(南京)有限公司 - Driven Toward Perfection';
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
</style>
<div class="row">
    <div class="col-lg-9 col-xl-9">
        <div class="jumbotron">
            <h2>通力峰达(南京)有限公司!</h2>
            <h3>热诚与诚意，为了无法计算的价值！</h3>
        </div>
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