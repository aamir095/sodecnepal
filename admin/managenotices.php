		<?php include 'layouts/header.php'; ?>

		<div class="main-container" id="main-container">
		<script type="text/javascript">
		try{ace.settings.check('main-container' , 'fixed')}catch(e){}
		</script>

		<div class="main-container-inner">
		<a class="menu-toggler" id="menu-toggler" href="#">
		<span class="menu-text"></span>
		</a>

		<?php include 'layouts/sidebar.php'; ?>

		<div class="main-content">
		<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
		try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
		<li>
		<i class="icon-home home-icon"></i>
		Home
		</li>

		<li>
		Notices
		</li>
		<li class="active">Manage Notices
		</ul><!-- .breadcrumb -->

		<!-- #nav-search -->
		</div>

		<div class="page-content">
		<div class="page-header">
		

		<div class="hr hr-18 dotted hr-double"></div>

		<div class="row">
		<div class="col-xs-12">
		<?php displayMsg();  ?>
		
		<div class="table-header">
		All Notices
		</div>

		<div class="table-responsive">
		<table id="sample-table-2" class="table table-striped table-bordered table-hover">
		<thead>
		<tr>
		<th class="center">
			S.No
		</th>
		<th>Notice Title</th>
		
		<th class="hidden-480">Notice Description</th>
		<th>Image</th>
		<th>Date</th>
		<th class="hidden-480">Status</th>
		
		
		<th>Action</th>
		</tr>
		</thead>

		<tbody>
	   <?php $users = getAllNotices($conn);
	   	if($users):
	   	foreach ($users as $key => $user):
	   	?>		
		<tr>
		<td class="center">
			<?php  echo ++$key; ?>
		</td>

		<td>
			<?php echo $string=substr($user['tv_title'],0,100)."....."; ?>
		</td>
		
		<td class="hidden-480"><?php echo $string=substr($user['tv_description'],0,80)."....."; ?></td>
		<?php if(!empty($user["image_path"])): ?> 
		<td><img src="uploads/<?php echo $user['image_path'] ?>" height=50 px, width=100 px></td>

		<?php else: ?>
			<td>No Image Found</td>
	
		<?php endif; ?>	
		<td>
			<?php  echo $user['created_date'];?>
		</td>
		
		<td class="hidden-480">
			<?php if($user['status']=='active'): ?>
			<span class="label label-sm label-success">Active</span>
			<?php else: ?>
			<span class="label label-sm label-danger">Inactive</span>
			<?php endif; ?>	
		</td>

			


		<td>
			<div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
				

				<a class="green" href="updatenotice.php?ref=<?php echo $user['id']; ?>">
					<i class="icon-pencil bigger-130"></i>
				</a>

				<a class="red" href="deletenotice.php?ref=<?php echo $user['id']; ?>" onclick="return confirm('Are You Sure to Delete ?');">
					<i class="icon-trash bigger-130"></i>
				</a>
			</div>

			<div class="visible-xs visible-sm hidden-md hidden-lg">
				<div class="inline position-relative">
					<button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown">
						<i class="icon-caret-down icon-only bigger-120"></i>
					</button>

					<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
						<li>
							<a href="#" class="tooltip-info" data-rel="tooltip" title="View">
								<span class="blue">
									<i class="icon-zoom-in bigger-120"></i>
								</span>
							</a>
						</li>

						<li>
							<a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
								<span class="green">
									<i class="icon-edit bigger-120"></i>
								</span>
							</a>
						</li>

						<li>
							<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
								<span class="red">
									<i class="icon-trash bigger-120"></i>
								</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</td>
		</tr>

		<?php endforeach; else: ?>
			<tr>
				<td colspan="8">No Data Found</td>
			</tr>
		<?php endif; ?>	
		</tbody>
		</table>
		</div>

	
		</div>
		</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
		</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
		</div><!-- /.row -->
		</div><!-- /.page-content -->
		</div><!-- /.main-content -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script type="text/javascript">
		window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		<![endif]-->

		<script type="text/javascript">
		if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
		jQuery(function($) {
		var oTable1 = $('#sample-table-2').dataTable( {
		"aoColumns": [
		{ "bSortable": false },
		null, null,null, null, null,
		{ "bSortable": false }
		] } );


		$('table th input:checkbox').on('click' , function(){
		var that = this;
		$(this).closest('table').find('tr > td:first-child input:checkbox')
		.each(function(){
		this.checked = that.checked;
		$(this).closest('tr').toggleClass('selected');
		});

		});


		$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
		function tooltip_placement(context, source) {
		var $source = $(source);
		var $parent = $source.closest('table')
		var off1 = $parent.offset();
		var w1 = $parent.width();

		var off2 = $source.offset();
		var w2 = $source.width();

		if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
		return 'left';
		}
		})
		</script>
		</body>

		<!-- Mirrored from 198.74.61.72/themes/preview/ace/tables.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 28 Feb 2014 17:45:47 GMT -->
		</html>
