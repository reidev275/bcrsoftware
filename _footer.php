
            <div class="footer">
                <div class="row">
                    <div class="col-md-4">
                        <address>
                            <strong><?php echo $name ?></strong><br>
                            <?php echo $address ?><br>
                            <?php echo $cityStateZip ?><br>
                            <abbr title="Phone">P:</abbr> <?php echo $phone ?><br>
                            <abbr title="Fax">F:</abbr> <?php echo $fax ?><br>
                            <a href="<?php echo $email ?>"><?php echo $email ?></a>
                        </address>
                    </div>
                    <div class="col-md-4">
                        <strong>Links</strong><br>

                        <?php foreach ($title_links as $link) {
                          echo "<a href='", $link[1], "'>", $link[0], "</a><br>";
                        } ?>			    
                    </div>
                    <div class="col-md-4">
                        <p>© BCR Software <?php echo date("Y") ?></p>
                    </div>

                    
                </div>
            </div>
        </div>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>


        <script>
            $('body').css("opacity", 0)
                .animate({ opacity: 1 });
            $('.shadow').css("opacity", 0.2);
            
        </script>
    </body>
</html>