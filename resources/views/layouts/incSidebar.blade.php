<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
	<!-- Sidebar user panel -->
	<div class="user-panel">
		<div class="pull-left image">
			{{ Html::image('public/images/default-avatar.png', 'alt=avatar', array('class'=>'img-circle')) }}
		</div>
		<div class="pull-left info">
			<p>Alexander Pierce</p>
			<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	</div>
	<!-- search form
	<form action="#" method="get" class="sidebar-form">
		<div class="input-group">
			<input type="text" name="q" class="form-control" placeholder="Search...">
			<span class="input-group-btn">
				<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
			</span>
		</div>
	</form> -->
<!-- /.search form -->
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu" data-widget="tree">
		<li class="header" style="font-size:1em;color:#fff;">เมนูหลัก</li>
		<li class="treeview {{ active_check('dbd') }} {{ active_check('/') }}" >
			<a href="#">
				<i class="fa fa-tachometer step size-18" aria-hidden="true"></i> <span>Dashboard</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ active_check('dbd') }} {{ active_check('/') }}"><a href="{{ route('dbd') }}"><i class="fa fa-circle-o text-red"></i> รวม</a></li>
				<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> เทศบาล</a></li>
			</ul>
		</li>
		<li class="treeview {{ active_check('population') }}">
			<a href="#">
				<i class="fa fa-list-ol step size-18" aria-hidden="true"></i></span> <span>รายการข้อมูล</span>
				<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
			<ul class="treeview-menu">
				<?php
					$current_year =  (isset($_GET['year']))? $_GET['year']: date('Y');
					/* Current Year */
					$already_selected_value = (int)date('Y');
					/* Start Year */
					$earliest_year = 2012;
					foreach (range($already_selected_value, $earliest_year) as $x) {
						 $year_th = ($x+543);
						 echo '<li '.($x === (int)$current_year ? 'class="active"' : '').'><a href="'.route('population').'?year='.$x.'"><i class="fa fa-circle-o"></i>'.$year_th.'</a></li>';
					}
				?>
			</ul>
		</li>
		<li class="treeview {{ Active::check('export-csv') }} {{ Active::check('export-population') }}">
			<a href="#">
				<i class="fa fa-cloud-download step size-18"></i> <span>ส่งออกข้อมูล</span>
				<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ Active::check('export-csv') }}"><a href="{{ route('export.form') }}?year=<?php echo $current_year; ?>"><i class="fa fa-circle-o text-red"></i> รายโรค</a></li>
				<li class="{{ Active::check('export-population') }}"><a href="{{ route('export-population.main') }}"><i class="fa fa-circle-o text-aqua"></i> ประชากร</a></li>
			</ul>
		</li>
		<li class="treeview {{ Active::check('top10DsPt') }} {{ Active::check('onePage') }} {{ Active::check('export-patient') }}">
			<a href="#">
				<i class="fa fa-pie-chart step size-18"></i>
				<span>รายงาน</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu">
				<li class="{{ Active::check('top10DsPt') }}">
					<a href="{{ route('top10DsPt') }}"><i class="fa fa-circle-o text-red"></i> 10 อันดับโรคที่มีอัตราป่วยสูงสุด</a>
				</li>
				<li class="{{ Active::check('onePage') }}">
					<a href="{{ route('onePage') }}"><i class="fa fa-circle-o text-yellow"></i> One page report</a>
				</li>
				<li class="{{ Active::check('export-patient') }}">
					<a href="{{ route('export-patient-data.main') }}"><i class="fa fa-circle-o text-aqua"></i> รายงานข้อมูลผู้ป่วย </a>
				</li>
			</ul>
		</li>
	</ul>
</section>
<!-- /.sidebar -->
