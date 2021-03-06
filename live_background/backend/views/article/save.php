<div class="main-content">
	<div class="breadcrumbs" id="breadcrumbs">

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>
			<li class="active">Article</li>
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
				Article
				<small>
					<i class="icon-double-angle-right"></i>
					save
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<form action="?r=article/save_do" class="form-horizontal" role="form" method="post">
					<input type="hidden" name="article_id" value="<?= $artList['article_id']?>">
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 文章标题 </label>

						<div class="col-sm-9">
							<div class="col-xs-12 col-sm-15">
								<input name="article_title" value="<?= $artList['article_title']?>" v-model="name" placeholder=" 文章标题 " class="col-xs-10 col-sm-12" type="text">
							</div>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 文章作者 </label>

						<div class="col-sm-9">
							<div class="col-xs-12 col-sm-15">
								<input name="article_name" value="<?= $artList['article_name']?>" v-model="name" placeholder=" 文章作者 " class="col-xs-10 col-sm-12" type="text">
							</div>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 文章内容 </label>

						<div class="col-sm-9">
							<div class="col-xs-12 col-sm-15">
								<textarea name="article_content" id="myEditor"><?= $artList['article_content']?></textarea>
							</div>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 文章排序 </label>

						<div class="col-sm-9">
							<div class="col-xs-12 col-sm-15">
								<input name="article_sort" value="<?= $artList['article_sort']?>" v-model="name" placeholder=" 文章排序 " class="col-xs-10 col-sm-12" type="text">
							</div>
						</div>
					</div>

					<div class="space-4"></div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 是否头条 </label>

						<div class="col-sm-9">
							<div class="col-xs-12 col-sm-15">
								<input name="article_header" type="radio" value="1" <?php if($v['article_header']==1) echo("checked");?>>是
								<input name="article_header" type="radio" value="0" <?php if($v['article_header']==0) echo("checked");?>>否
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
<script type="text/javascript" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/ueditor/ueditor.all.js"></script>
<script type="text/javascript">
    UE.getEditor('myEditor');
</script>