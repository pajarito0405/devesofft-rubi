<!-- FOOTER -->
<?php 
    //echo $path_id. " hola mundo";

    if($path_id == "" ){?>

<div class="footerbg ">
    <div class="container">
        <footer>
            <div class="footer">
                <a href="#" class="social1b"><img src="<?=base_url();?>assets/images/icon-facebook.png" alt=""/></a>
                <a href="#" class="social2b"><img src="<?=base_url();?>assets/images/icon-twitter.png" alt=""/></a>
                <a href="#" class="social3b"><img src="<?=base_url();?>assets/images/icon-gplus.png" alt=""/></a>
                <a href="#" class="social4b"><img src="<?=base_url();?>assets/images/icon-youtube.png" alt=""/></a>
                <br/><br/> Copyright &copy; 2013 <a href="#" class="font_black">Travel Agency</a> All rights reserved. <a href="http://titanicthemes.com" class="font_black">TitanicThemes.com</a>
                <br/><br/>
                <a href="#top" id="gotop2" class="gotop"><img src="<?=base_url();?>assets/images/spacer.png" alt=""/></a>
            </div>
        </footer>
    </div>
</div>

<?php }else{?>
<div class="footerbgblack ">
    <div class="container row">
        <div class="col-md-3">
            <span class="ftitleblack font_black">Lets socialize</span>
            <div class="scont">
                <a href="#" class="social1b"><img src="<?=base_url();?>assets/images/icon-facebook.png" alt=""/></a>
                <a href="#" class="social2b"><img src="<?=base_url();?>assets/images/icon-twitter.png" alt=""/></a>
                <a href="#" class="social3b"><img src="<?=base_url();?>assets/images/icon-gplus.png" alt=""/></a>
                <a href="#" class="social4b"><img src="<?=base_url();?>assets/images/icon-youtube.png" alt=""/></a>
                <br/><br/><br/>
                <a href="#"><img src="<?=base_url();?>assets/images/logosmal2.png" alt="" /></a><br/>
                <span class="grey2">&copy; 2013  |  <a href="#" class="font_black">Privacy Policy</a><br/>
					All Rights Reserved </span>
                <br/><br/>

            </div>
        </div>
        <!-- End of column 1-->

        <div class="col-md-3">
            <span class="ftitleblack font_black">Travel Specialists</span>
            <br/><br/>
            <ul class="footerlistblack">
                <li><a href="#">Golf Vacations</a></li>
                <li><a href="#">Ski & Snowboarding</a></li>
                <li><a href="#">Disney Parks Vacations</a></li>
                <li><a href="#">Disneyland Vacations</a></li>
                <li><a href="#">Disney World Vacations</a></li>
                <li><a href="#">Vacations As Advertised</a></li>
            </ul>
        </div>
        <!-- End of column 2-->

        <div class="col-md-3">'.
            <span class="ftitleblack font_black">Travel Specialists</span>
            <br/><br/>
            <ul class="footerlistblack">
                <li><a href="#">Weddings</a></li>
                <li><a href="#">Accessible Travel</a></li>
                <li><a href="#">Disney Parks</a></li>
                <li><a href="#">Cruises</a></li>
                <li><a href="#">Round the World</a></li>
                <li><a href="#">First Class Flights</a></li>
            </ul>
        </div>
        <!-- End of column 3-->

        <div class="col-md-3 grey">
            <span class="ftitleblack font_black">Newsletter</span>
            <div class="relative">
                <input type="email" class="form-control fccustom2black" id="exampleInputEmail1" placeholder="Enter email">
                <button type="submit" class="btn btn-default btncustom">Submit<img src="<?=base_url();?>assets/images/arrow.png" alt=""/></button>
            </div>
            <br/><br/>
            <span class="ftitleblack font_black">Customer support</span><br/>
            <span class="pnr">1-866-599-6674</span><br/>
            <span class="grey2">office@travel.com</span>
        </div>
        <!-- End of column 4-->
    </div>
</div>
<div class="footerbg3black">
    <div class="container center grey">
        <a href="#">Home</a> |
        <a href="#">About</a> |
        <a href="#">Last minute</a> |
        <a href="#">Early booking</a> |
        <a href="#">Special offers</a> |
        <a href="#">Blog</a> |
        <a href="#">Contact</a>
        <a href="#top" class="gotop scroll"><img src="<?=base_url();?>assets/images/spacer.png" alt=""/></a>
    </div>
</div>

<?php } ?>





</div>

</body>

</html>
