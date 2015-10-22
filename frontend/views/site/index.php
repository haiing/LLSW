<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>你若盛开,清风自来</h1>

        <p class="lead">聪明人是快乐的，自以为聪明的才烦恼。帮助别人减轻三分烦恼，自己就会享受七分快乐。</p>
        <br/>
        <p>
            <a class="btn btn-lg btn-success" href="">
                <!-- <span class="glyphicon glyphicon-plus"></span> --> 新增一笔订单
            </a>
        </p>
    </div>

    <div class="body-content">

        <div class="row moreinfo">
            <div class="col-lg-4 borderline">
                <h2>销售管理</h2>

                <br/>
                <div class="row">
                    <span class="col-lg-4">今日销售总额:</span>
                    <span class="col-lg-4"><strong>0.00 元</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">今日销售单数:</span>
                    <span class="col-lg-4"><strong>0 笔</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">增加应收欠款:</span>
                    <span class="col-lg-4"><strong>0 笔</strong></span>
                </div>
                <br/>

                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-search"></span> 历史订单查询 &raquo;</a></p>
                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-yen"></span> 欠款到账 &raquo;</a></p>
            </div>

            <div class="col-lg-4 borderline">
                <h2>客户管理</h2>

                <br/>
                <div class="row">
                    <span class="col-lg-4">今日新增客户:</span>
                    <span class="col-lg-4"><strong>0 人</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">当前客户总数:</span>
                    <span class="col-lg-4"><strong>0 人</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">未到账客户数:</span>
                    <span class="col-lg-4"><strong>0 人</strong></span>
                </div>
                <br/>

                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-search"></span> 客户信息查询 &raquo;</a></p>
                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-plus"></span> 新增客户 &raquo;</a></p>
            </div>

            <div class="col-lg-4 borderline">
                <h2>商品管理</h2>

                <br/>
                <div class="row">
                    <span class="col-lg-4">库存不足预警:</span>
                    <span class="col-lg-4"><strong>无</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">零库存商品:</span>
                    <span class="col-lg-4"><strong>0 种</strong></span>
                </div>
                <div class="row">
                    <span class="col-lg-4">近期出售最多:</span>
                    <span class="col-lg-4"><strong>无记录</strong></span>
                </div>
                <br/>

                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-search"></span> 商品信息查询 &raquo;</a></p>
                <p><a class="btn btn-default" href=""><span class="glyphicon glyphicon-plus"></span> 进货入库 &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
