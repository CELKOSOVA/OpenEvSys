<script type="text/javascript" src="res/jquery/datatables/jquery.dataTables.js"></script>
<script type="text/javascript" src="res/js/adv-search.js"></script>
<style>
@media screen
  {
  .print_report_header {display:none;}
  }
  </style>
<?php
global $conf;
if($conf['print_report_header']){
    echo "<div class='row-fluid print_report_header'><div class='span12'>".$conf['print_report_header']."</div></div>";
}
?>
<h2><?php echo "Advanced Search Report"?></h2>
<br />
<a style="float:left;" class="btn" href='JavaScript:window.print();' ><i class="icon-print"></i>  <?php echo _t('PRINT_THIS_PAGE')?></a>
<a style="float:right; margin-right: 20px;" class="btn" href="<?php echo get_url('analysis','adv_search',null, array('query'=>$val = htmlspecialchars($_GET['query']))); ?>"><i class="icon-chevron-left"></i> <?php echo _('BACK'); ?></a>
<br /><br />
<div id="browse">
<?php
	if($columnValues != null){		
		shn_form_get_html_table($columnNames, $columnValues,false);		
	}
?>
<br />
</div>
