<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">Home</a>
            </li>
            <li class="active">Nav</li>
        </ul><!-- .breadcrumb -->

        <div class="nav-search" id="nav-search">
            <form class="form-search">
								<span class="input-icon">
									<input placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" type="text">
									<i class="icon-search nav-search-icon"></i>
								</span>
            </form>
        </div><!-- #nav-search -->
    </div>

    <div class="page-content">
        <div class="page-header">
            <h1>
                Nav
                <small>
                    <i class="icon-double-angle-right"></i>
                    add
                </small>
            </h1>
        </div><!-- /.page-header -->

        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <form class="form-horizontal" role="form" method="post" action="?r=gift/save" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物名称 </label>
                        <input type="hidden" name="gift_id" value="<?php echo $gift['gift_id'] ?>"/>
                        <div class="col-sm-9">
                            <div class="col-xs-12 col-sm-3">
                                <input id="form-field-1" v-model="name" name="gift_name" value=" <?php echo $gift['gift_name'] ?> "  class="col-xs-10 col-sm-12" type="text">
                            </div>
                        </div>
                    </div><div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right"  for="form-field-1"> 价格 </label>

                        <div class="col-sm-9">
                            <div class="col-xs-12 col-sm-3">
                                <input id="form-field-1" v-model="name" name="gift_money" value="<?php echo $gift['gift_money'] ?>"  class="col-xs-10 col-sm-12" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 礼物动图 </label>

                        <div class="col-sm-9">
                            <div class="col-xs-12 col-sm-3">
                                <input type="file" name="file"/>
                                <img src="<?php echo $gift['gift_path'] ?>" alt="加载失败" width="120" height="90"/>
                            </div>
                        </div>
                    </div>

                    <div class="space-4"></div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-2 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                修改
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>




                </form>



                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div>