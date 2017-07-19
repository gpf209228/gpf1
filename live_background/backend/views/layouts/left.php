<?php
use yii\helpers\Url;
?>
<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="<?php echo Url::to(['cat/index']) ?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li class="">
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" style="display: none;">

								<li>
									<a href="<?php echo Url::to(['user/admin']) ?>" class="dropdown-toggle">
										<i class="double-angle-right"></i>
										<i class="icon-eye-open"></i>
											管理员
									</a>
								</li>
								<li>
									<a href="<?php echo Url::to(['user/plain']) ?>" class="dropdown-toggle">
										<i class="double-angle-right"></i>
										<i class="icon-eye-open"></i>
											普通用户
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" class="dropdown-toggle">
										<i class="double-angle-right"></i>
										<i class="icon-eye-open"></i>
											主播
										<b class="arrow icon-angle-down"></b>
									</a>
									<ul class="submenu">
										<li>
											<a href="<?php echo Url::to(['user/wait']) ?>">
												<i class="icon-eye-open"></i>
												待审核列表
											</a>
										</li>
										<li>
											<a href="<?php echo Url::to(['user/start']) ?>">
												<i class="icon-eye-open"></i>
												已审核列表
											</a>
										</li>
									</ul>
								</li>


								<!-- <li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
								
										普通用户
										<b class="arrow icon-angle-down"></b>
									</a>
								
									<ul class="submenu">
										<li>
											<a href="#">
												<i class="icon-leaf"></i>
												第一级
											</a>
										</li>
								
										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>
								
												第四级
												<b class="arrow icon-angle-down"></b>
											</a>
								
											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>
								
												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li> -->
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 导航管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo Url::to(['nav/add']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-plus"></i>
										导航添加
									</a>
								</li>
								<li>
									<a href="<?php echo Url::to(['nav/list']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-eye-open"></i>
										导航列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 栏目管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo Url::to(['column/add']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-plus"></i>
										栏目添加
									</a>
								</li>
								<li>
									<a href="<?php echo Url::to(['column/list']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-eye-open"></i>
										栏目列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 礼物管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="<?php echo Url::to(['gift/add']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-plus"></i>
										礼物添加
									</a>
								</li>
								<li>
									<a href="<?php echo Url::to(['gift/list']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-eye-open"></i>
										礼物列表
									</a>
								</li>
								<li>
									<a href="<?php echo Url::to(['send/list']) ?>">
										<i class="icon-double-angle-right"></i>
										<i class="icon-eye-open"></i>
										礼物赠送记录
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				<!-- /.main-content -->

				
