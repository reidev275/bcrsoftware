<?php include('_header.php');?>

<div class="row">

    <div class="col-md-9">
        <p>Since 1998, BCR Software has offered ideal solutions to your accounting/inventory management needs, the highest quality support, and (most importantly) peace of mind in knowing you are making a movement in the right direction for your growing business.</p>
        <p>Our software is native Windows and results oriented. This is a state-of-the-art, 21st century product that has virtually no limitations. In fact, it has even been called ''A Wholesaler's dream come true.'' That's because in the development of our product, we've listened to what business owners in more than 50 different industries have had to say.</p>
        <p>BCR specializes in small to medium wholesale distribution companies, offering them features and functions large companies enjoy with much more costly software. And BCR gives clients something many software vendors don't - affordable support from people you know on a first name basis. Plus BCR is willing to enhance Titan to meet customer's needs without making them customized "orphans."</p>
        <p>So you are a larger distributor? No problem! Titan's client server database will handle hundreds of users.</p>    
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

<script>
    $("p").blur();
</script>