<?php include('_header.php');?>




<div class="row">

    <div class="col-md-9">
        <h3>Connect to a live technician</h3>
        <form class="form-inline" role="form" name="logmeinsupport" action="https://secure.logmeinrescue.com/Customer/Code.aspx" method="post">
            <div class="form-group">
                <label class="sr-only" for="pin">6-digit PIN</label>
                <input type="text" class="form-control" id="pin" placeholder="6-digit PIN">
            </div>

            <button type="submit" class="btn btn-primary">Connect to technician</button>

	        <input type="hidden" name="tracking0" maxlength="64" value=""> <!-- optional -->
	        <input type="hidden" name="language" maxlength="5" value=""> <!-- optional -->
	        <input type="hidden" name="hostederrorhandling" value=""> <!-- optional -->
        </form>
    </div>
    <div class="col-md-3">
        <address>
            <strong><?php echo $name ?></strong><br>
            <?php echo $address ?><br>
            <?php echo $cityStateZip ?><br>
            <abbr title="Phone">P:</abbr> <?php echo $phone ?><br>
            <abbr title="Fax">F:</abbr> <?php echo $fax ?><br>
            <a href="<?php echo $email ?>"><?php echo $email ?></a>
        </address>
    </div>
</div>


<?php include('_footer.php');?>