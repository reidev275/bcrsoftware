
            <div class="footer">
                 <p class="pull-right">© BCR Software <?php echo date("Y") ?></p>
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
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


        <script>
            $('*').css("opacity", 0)
                .animate({ opacity: 1 });
        </script>
    </body>
</html>