<?
session_start();
unset($_SESSION[admin]);
unset($_SESSION[access]);
?>
<script>
	window.location.replace('/admin/');
</script>