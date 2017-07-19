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
									list
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								


								<div class="row">
									<div class="col-xs-12">

										<div class="table-responsive">
											<div id="sample-table-2_wrapper" class="dataTables_wrapper" role="grid"><div class="row"><div class="col-sm-6"><div id="sample-table-2_length" class="dataTables_length"><label>Display <select size="1" name="sample-table-2_length" aria-controls="sample-table-2"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records</label></div></div><div class="col-sm-6"><div class="dataTables_filter" id="sample-table-2_filter"><label>Search: <input aria-controls="sample-table-2" type="text"></label></div></div></div><table id="sample-table-2" class="table table-striped table-bordered table-hover dataTable" aria-describedby="sample-table-2_info">
												<thead>
													<tr role="row">
														<th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 61px;" aria-label="">
															<label>
																<input class="ace" type="checkbox">
																<span class="lbl"></span>
															</label>
														</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 170px;" aria-label="id: activate to sort column ascending">
															id
														</th>
														<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 126px;" aria-label="name: activate to sort column ascending">
															name
														</th>
														<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 174px;" aria-label="">
														</th>
													</tr>
												</thead>

												
											<tbody role="alert" aria-live="polite" aria-relevant="all">
												<tr class="odd" v-for="(nav,index) in navs">
														<td class="center  sorting_1">
															<label>
																<input class="ace" type="checkbox">
																<span class="lbl"></span>
															</label>
														</td>
														<td class=" ">{{nav.id}}</td>
														<td class=" ">{{nav.name}}</td>
														<td class=" ">
															<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
																<button class="green">
																	<i class="icon-pencil bigger-130"></i>
																</button>
																<button class="red">
																	<i class="icon-trash bigger-130"></i>
																</button>
															</div>
														</td>
													</tr>
												</tbody>
												</table>
												<div class="row"><div class="col-sm-6"><div class="dataTables_info" id="sample-table-2_info">Showing 1 to 10 of 23 entries</div></div><div class="col-sm-6"><div class="dataTables_paginate paging_bootstrap"><ul class="pagination"><li class="prev disabled"><a href="#"><i class="icon-double-angle-left"></i></a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li class="next"><a href="#"><i class="icon-double-angle-right"></i></a></li></ul></div></div></div></div>
										</div>
									</div>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>