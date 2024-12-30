																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																
<style>
	.qrcode{
		height:35px;
		width:35px;
		border:2px solid #f437aa;
	}
</style>

<table class="voucher" style=" width: 185px; height:90px; padding-right:5px " >
  <tbody >
<!-- Logo Hotspotname -->
		  <tr>
      <td style="text-align: left;  font-size: 12px; font-weight:bold; color:black; display:block">
		  <!--
		  <img src="<?= $logo; ?>" alt="logo" style="height:30px; width:20%;;border:0; ">
			-->
		  <?= $hotspotname; ?>  
			
		  <span style="padding-right: 5px" id="num" width:50%;><?= "[$num]"; ?></span>  
		</td>
	
    </tr>
    
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 185px; height:118px padding-right:5px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td style="font-size:12px; color: #545c03">Voucher Code</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold; font-size:12px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
<!-- Check QR  -->
<?php if ($qr == "yes") { ?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} else { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
}
} ?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td>
	<!--<?= $qrcode ?> -->
      </td>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 1px solid black; margin-right:2px; font-weight:bold; background-color: #c1d111;color: white; margin-bottom:5px; font-size:12px"><?= $validity; ?> <?= $timelimit; ?> <?= $datalimit; ?> <!-- <?= $price; ?> --> </td>
<!-- /  -->
    </tr>
	  <!--
    <tr>
      
      <td colspan="2" style="font-weight:bold; font-size:12px">Login: http://<?= $dnsname; ?></td>

    </tr>
	-->
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        