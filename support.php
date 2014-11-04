<?php include('_header.php');?>

<h3>Connect to a live technician</h3>
<form class="form-horizontal" role="form" name="logmeinsupport" action="https://secure.logmeinrescue.com/Customer/Code.aspx" method="post">
    <div class="form-group">
        <label for="pin" class="col-sm-2 control-label">6-digit PIN code:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="pin" placeholder="6-digit PIN">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Connect to technician</button>
        </div>
    </div>
	<input type="hidden" name="tracking0" maxlength="64" value=""> <!-- optional -->
	<input type="hidden" name="language" maxlength="5" value=""> <!-- optional -->
	<input type="hidden" name="hostederrorhandling" value=""> <!-- optional -->
</form>


<?php include('_footer.php');?>