<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php require_once(APPPATH . 'views/cebudirectories/header.php'); ?>   

    <div id="cd-content" style="padding-top: 20px;">
  		
        <div id="cd-menus" class="left">
        	<div id="controller">
                <div class="header-top center title"></div>
                <ul>
                    <li><a href="#" class="jFlowControl">About</a></li>
                    <li><a href="#" class="jFlowControl">Ad Specifications</a></li>
                    <li><a href="#" class="jFlowControl">Ad Placement</a></li>
                    <li><a href="#" class="jFlowControl">Pricing</a></li>
                    <li><a href="#" class="jFlowControl">Inquiry</a></li>
                </ul>
                <div class="header-bottom"></div>
            </div>
        </div>
        
        <div class="right" style="border-left: 1px solid #CCCCCC; width: 720px; padding: 0px 15px;">
        <div id="slides">
        	<div>
                <h1>Advertise with Cebu Directories</h1>
                
                <img src="<?php echo url::base(); ?>images/services/advertising.jpg" align="left" class="borderized"/>
                
                <p class="medium">
                We at Cebu Directories offers an ideal advertising unit to build your 
                company's brand. We ensure that your Business is always visible.
                </p>
                
                <p class="medium">
                By advertising on Cebu Directories, we help you create more awareness 
                for your company by improving your Business popularity.  Unlocking the 
                potential to reach more consumers and engage your target audience on a 
                variety of levels in a cost-effective way.
                </p>
            </div>
            
            <div>
                <h2>Ad Specs</h2>
                
                <p class="medium">
                Ad Specifications or Ad Specs are requirements for an Ad.  We have 
                different specifications for each of the ad placement.  Your ad could be 
                of image or text only.
                </p>
                
                <table id="adspecs">
                <thead>
                <tr>
                	<td width="20%">Ad Type</td>
                    <td width="50%">Requirements</td>
                    <td width="30%">Description</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td>PRIME Ad Banner <br /><a href="<?php echo url::base(); ?>images/advertising/ads-prime.jpg" class="thickbox" >view</a></td>
                    <td>
                    Image Dimension <br />
					<b>Width</b>: 960 Pixels<br />
					<b>Height</b>: 250 Pixels<br />
					<b>Link</b>: Must be of domain name and not an IP Address
                    </td>
                    <td>Requirements</td>
                </tr>
                <tr>
                	<td>Text Ad <br /><a href="<?php echo url::base(); ?>images/advertising/ads-text.png" class="thickbox" >view</a></td>
                    <td>
                    <b>Title</b>: 40 Characters<br />
					<b>Caption</b>: 110 Characters
                    </td>
                    <td>Requirements</td>
                </tr>
                <tr>
                	<td>Text & Image Ad <br /><a href="<?php echo url::base(); ?>images/advertising/ads-image-text.png" class="thickbox" >view</a></td>
                    <td>
                    <b>Title</b>: 40 Characters<br />
                    <b>Caption</b>: 110 Characters<br />
                    Image Dimension <br />
					<b>Width</b>: 80 Pixels<br />
					<b>Height</b>: 60 Pixels<br />
					<b>Link</b>: Must be of domain name and not an IP Address
                    </td>
                    <td>Requirements</td>
                </tr>
                <tr>
                	<td>Image Ad - A <br /><a href="<?php echo url::base(); ?>images/advertising/ads-200-by-100.png" class="thickbox" >view</a></td>
                    <td>
                    Image Dimension <br />
					<b>Width</b>: 200 Pixels<br />
					<b>Height</b>: 100 Pixels<br />
					<b>Link</b>: Must be of domain name and not an IP Address
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td>Image Ad - B <br /><a href="<?php echo url::base(); ?>images/advertising/ads-200-by-200.png" class="thickbox" >view</a></td>
                    <td>
                    Image Dimension <br />
					<b>Width</b>: 200 Pixels<br />
					<b>Height</b>: 200 Pixels<br />
					<b>Link</b>: Must be of domain name and not an IP Address
                    </td>
                    <td></td>
                </tr>
                <tr>
                	<td>Image Ad - C <br /><a href="<?php echo url::base(); ?>images/advertising/ads-200-by-400.png" class="thickbox" >view</a></td>
                    <td>
                    Image Dimension <br />
					<b>Width</b>: 200 Pixels<br />
					<b>Height</b>: 400 Pixels<br />
					<b>Link</b>: Must be of domain name and not an IP Address
                    </td>
                    <td></td>
                </tr>
                </tbody>
                </table>
                
			</div>
            
            <div>
                <h2>Ad Placement</h2>
                
                <p align="center">
                <img src="<?php echo url::base(); ?>images/advertising/cebudirectories-ads-tour.png" width="450"/>
                </p>
                
                <p class="medium">
                Cebu Directories is the next leading Cebu Directory site for 
                Cebu Businesses, Establishments and Talents. We provide comprehensive 
                contents, resources for small, medium and large companies.
                </p>
                
			</div>
            
			<div>
                <h2>Pricing</h2>
                
                <p class="medium">
                Cebu Directories is the next leading Cebu Directory site for 
                Cebu Businesses, Establishments and Talents. We provide comprehensive 
                contents, resources for small, medium and large companies.
                </p>
                
                <p align="center">
                <table id="pricing">
                <thead>
                <tr>
                	<td width="30%">Ad Spec</td>
                    <td width="18%">Monthly<br /><img src="<?php echo url::base(); ?>images/monthly.png" alt="Monthly" /></td>
                    <td width="17%">Quarterly<br /><img src="<?php echo url::base(); ?>images/quarterly.png" alt="Quarterly" /></td>
                    <td width="18%">Semi-Annually<br /><img src="<?php echo url::base(); ?>images/semi-annual.png" alt="Semi-Annual" /></td>
                    <td width="17%">Annually<br /><img src="<?php echo url::base(); ?>images/annual.png" alt="Annually" /></td>
                </tr>
                </thead>
                <tbody>
                <tr>
                	<td class="type">Prime Banner</td>
                    <td class="monthly">Php 3,000</td>
                    <td class="quarterly">Php 8,550</td>
                    <td class="semi">Php 16,200</td>
                    <td class="yearly">Php 30,600</td>
                </tr>
                <tr>
                	<td class="type">Text Ad</td>
                    <td class="monthly">Php 300</td>
                    <td class="quarterly">Php 855</td>
                    <td class="semi">Php 1,620</td>
                    <td class="yearly">Php 3,060</td>
                </tr>
                <tr>
                	<td class="type">Text & Image Ad</td>
                    <td class="monthly">Php 500</td>
                    <td class="quarterly">Php 1,425</td>
                    <td class="semi">Php 2,700</td>
                    <td class="yearly">Php 5,100</td>
                </tr>
                <tr>
                	<td class="type">Image Ad - A</td>
                    <td class="monthly">Php 750</td>
                    <td class="quarterly">Php 2,138 </td>
                    <td class="semi">Php 4,050</td>
                    <td class="yearly">Php 7,650</td>
                </tr>
                <tr>
                	<td class="type">Image Ad - B</td>
                    <td class="monthly">Php 1,000</td>
                    <td class="quarterly">Php 2,850</td>
                    <td class="semi">Php 5,400</td>
                    <td class="yearly">Php 10,200</td>
                </tr>
                <tr>
                	<td class="type">Image Ad - C</td>
                    <td class="monthly">Php 1,500</td>
                    <td class="quarterly">Php 4,275</td>
                    <td class="semi">Php 8,100</td>
                    <td class="yearly">Php 15,300</td>
                </tr>
                </tbody>
               	<tfoot>
                
                </tfoot>
                </table>
                </p>
                
            </div>

			<div>            
                <h2>Inquiry</h2>
                <p class="medium">
                Cebu Directories is the next leading Cebu Directory site for 
                Cebu Businesses, Establishments and Talents. We provide comprehensive 
                contents, resources for small, medium and large companies.
                </p>
                
                <p class="medium">
                We at Cebu Directories offer an ideal sponsorship or advertising unit 
                to build your company's brand. To advertise services or products, click 
                on the Advertise link located on the left pane, right pane, top and bottom 
                area on all listing pages including the home page. We ensure that your 
                company is always visible. Sponsorship and advertising are important to us 
                and we know that these are very relevant to our influencial guests.
                </p>
        	</div>
        </div>
        </div>
        
        <div class="clear"></div>
        
    </div>

<?php require_once(APPPATH . '/views/cebudirectories/footer.php'); ?>