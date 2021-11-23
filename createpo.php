<style type="text/css">
    .offset {
        float: right!important;
    }
</style>

<style >
	
.heading{
	margin-right: 455px;
}

	 .secbody{
  height: 100%;

  width: 100%;
  margin: 0;
  padding: 0;
  left: 0;
  top: 0;
  font-size: 100%;
}
* {
  font-family: "Lato", "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
  color: #333447;
  line-height: 1.5;
}
/* TYPOGRAPHY */

.h11 {
  font-size: 2.5rem;
}
.h21 {
  font-size: 2rem;
}
.h31 {
  font-size: 1.375rem;
}
.h41 {
  font-size: 1.125rem;
}
.h51 {
  font-size: 1rem;
}
.h61 {
  font-size: 0.875rem;
}
.sub{
    text-align: center;
}
.p1 {
  font-size: 1.125rem;
  font-weight: 200;
  line-height: 1.8;
}
.font-light1 {
  font-weight: 300;
}
.font-regular1 {
  font-weight: 400;
}
.font-heavy1 {
  font-weight: 700;
}
/* POSITIONING */

.left {
  text-align: left;
}
.right{
  float: right;
  text-align: right;
}
.center {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

.cont{
        margin-bottom: -16px;
}
.justify {
  text-align: justify;
}
/** standard padding**/

.no-padding1 {
  padding: 0px;
}
.standard-padding1 {
  padding: 20px;
}
.standard-padding-right1 {
  padding-right: 20px;
}
.standard-padding-left1 {
  padding-left: 20px;
}
.standard-padding-right1 {
  padding-left: 20px;
}
.standard-padding-top1 {
  padding-top: 20px;
}
.standard-padding-bottom1 {
  padding-bottom: 20px;
}

.sub-title{
	font-size: 9px !important;
	font-family: 'roboto';
}




/*.container1 {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}*/
.row1 {
  position: relative;
  width: 100%;
}
.row1 [class^="col"] {
  float: left;
  margin: 0.5rem 2%;
  min-height: 0.125rem;
}
.row1::after {
  content: "";
  display: table;
  clear: both;
}
.hidden-sm {
  display: none;
}
.invoice-box1 {
  background: #ffffff;
 /* max-width: 900px;*/
  margin: 60px auto;
  padding: 30px;
  border: 1px solid #002336;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
  font-size: 16px;
  line-height: 24px;
  color: #002336;
}
.title1 {
  margin-bottom: 0px;
  padding-bottom: 0px;
  margin-left: 10px;
  margin-right: 10px;
  font-weight: bold;
  border-bottom: 1px solid #8B8B8B;
  margin-bottom: 4px;
}
.infoblock {
  margin-left: 10px;
  margin-right: 10px;
  margin-top: 0px;
  padding-top: 0px;
}
.titles1 {
  padding-top: 4px;
  margin-top: 20px;
  background: #DCDCDC;
  font-weight: bold;
}
</style>

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Material Inward</a>

                                <li class="breadcrumb-item active">Add Material
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrumb-right">

                    <a  class="btn btn-warning" href="<?php echo base_url(); ?>raw-mat-list">Material List</a>

                </div>
            </div>


        </div>



        <div class="  content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <!--  <h6 class="card-title">To</h6> -->
                        </div>
                        <div class="card-body">
                         


                           
                               <div class="row">
                               	<div class="col-md-3">
                               		    <div class="form-group">
                                    	
                                        <label for="" ><b>Invoice To</b></label>
                                  
                                   
                                        <select class="form-select select2" id="select-country1" required="" name="Invoice To">
                                            <option value="">Select Invoice</option>
                                            <option value="Company1">Invoice A</option>
                                            <option value="Company2">Invoice B</option>
                                            <option value="Company3">Invoice C</option>
                                            <option value="Company4">Invoice D</option>
                                            <option value="Company5">Invoice E</option>
                                        </select>

                                    </div>
                               	</div>
                               	<div class="col-md-3">
                               		  <div class="form-group">
                                        <label for=""><b>Consignce to</b></label>
                                        <select class="form-select select2" id="select-country21" required="" name="Consignce to">
                                            <option value="">Select Consignce</option>
                                             <option value="Company1">Company 1</option>
                                            <option value="Company2">Company 2</option>
                                            <option value="Company3">Company 3</option>
                                            <option value="Company4">Company 4</option>
                                            <option value="Company5">Company 5</option>
                                        </select>

                                    </div>
                                   
                                
                               	</div>
                               	<div class="col-md-3">
                               		   <div class="form-group">
                                        <label for=""><b>Supplier (Bill Form) </b></label>
                                        <select class="form-select select2" id="select-country22" required="" name="supplier">
                                            <option value="">Select Supplier</option>
                                            <option value="Supplier1">Supplier 1</option>
                                            <option value="Supplier2">Supplier 2</option>
                                            <option value="Supplier3">Supplier 3</option>
                                            <option value="Supplier4">Supplier 4</option>
                                            <option value="Supplier5">Supplier 5</option>
                                        </select>

                                    </div>  
                               	</div>
                               	<div class="col-md-3">
                               		  <div class="form-group">
                                        <label for=""><b>Voucher No</b></label>
                                        <select class="form-select select2" id="select-country23" required="" name="supplier">
                                            <option value="1">Select Voucher</option>
                                            <option value="2"> A</option>
                                            <option value="3"> B</option>
                                            <option value="4"> C</option>
                                            <option value="5"> D</option>
                                            <option value="6"> E</option>
                                        </select>

                                    </div>
                               	</div>
                               </div>

                               <div class="row">
                               	  <div class="col-md-3">
                               	  	       <div class="form-group">
                                        <label for=""><b>Referance No</b></label>
                                        <select class="form-select select2" id="select-country25" required="" name="supplier">
                                            <option value="11">Select Referance</option>
                                            <option value="21"> A</option>
                                            <option value="31"> B</option>
                                            <option value="41"> C</option>
                                            <option value="51"> D</option>
                                            <option value="61"> E</option>
                                        </select>

                                    </div>
                               	  </div>
                                     <div class="col-md-3">
                               	  	 <div class="form-group">
                                        <label for=""><b>Created Date</b></label>
                                         <input type="date" class="form-control" id="basicInput" placeholder="Enter Date">

                                    </div>
                               	  </div>
                               	   <div class="col-md-3">
                               	  	 


                                           <div class="form-group">
                                        <label for="basicInput"><b>Document Upload</b></label>
                                        <input type="file" class="form-control" id="basicInput" placeholder="Document Upload">
                                    </div>



                               	  </div>
                               	   <div class="col-md-3">
                               	  	
                               	  </div>
                               </div>




                             
                            </div>
                        </div>
                    </div>


              
                </div>
            </div>




        <div class="  content-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <!--  <h6 class="card-title">To</h6> -->
                        </div>
                        <div class="card-body">
                         


                           
                               <div class="row">
                               	<div class="col-md-3">
                               		    <div class="form-group">
                                    	
                                        <label for="" ><b>Ship To</b></label>
                                  
                                   
                                        <select class="form-select select2" id="select-country1" required="" name="Invoice To">
                                            <option value="">Select Invoice</option>
                                            <option value="Company1">Invoice A</option>
                                            <option value="Company2">Invoice B</option>
                                            <option value="Company3">Invoice C</option>
                                            <option value="Company4">Invoice D</option>
                                            <option value="Company5">Invoice E</option>
                                        </select>

                                    </div>
                               	</div>
                               	<div class="col-md-3">
                               		  <div class="form-group">
                                        <label for=""><b>Bill to</b></label>
                                        <select class="form-select select2" id="select-country21" required="" name="Consignce to">
                                            <option value="">Select Consignce</option>
                                             <option value="Company1">Company 1</option>
                                            <option value="Company2">Company 2</option>
                                            <option value="Company3">Company 3</option>
                                            <option value="Company4">Company 4</option>
                                            <option value="Company5">Company 5</option>
                                        </select>

                                    </div>
                                   
                                
                               	</div>
                             <!--   	<div class="col-md-3">
                               		   <div class="form-group">
                                        <label for=""><b>Supplier (Bill Form) </b></label>
                                        <select class="form-select select2" id="select-country22" required="" name="supplier">
                                            <option value="">Select Supplier</option>
                                            <option value="Supplier1">Supplier 1</option>
                                            <option value="Supplier2">Supplier 2</option>
                                            <option value="Supplier3">Supplier 3</option>
                                            <option value="Supplier4">Supplier 4</option>
                                            <option value="Supplier5">Supplier 5</option>
                                        </select>

                                    </div>  
                               	</div> -->
                              <!--  	<div class="col-md-3">
                               		  <div class="form-group">
                                        <label for=""><b>Voucher No</b></label>
                                        <select class="form-select select2" id="select-country23" required="" name="supplier">
                                            <option value="1">Select Voucher</option>
                                            <option value="2"> A</option>
                                            <option value="3"> B</option>
                                            <option value="4"> C</option>
                                            <option value="5"> D</option>
                                            <option value="6"> E</option>
                                        </select>

                                    </div>
                               	</div> -->
                               </div>

                               <div class="row">
                               	  <div class="col-md-3">
                               	  	       <div class="form-group">
                                        <label for=""><b>Invoice No</b></label>
                                      <input type="text" class="form-control" id="basicInput" placeholder="Enter Invoice No">

                                    </div>
                               	  </div>
                                     <div class="col-md-3">
                               	  	 <div class="form-group">
                                        <label for=""><b>Eway Bill No</b></label>
                                         <input type="text" class="form-control" id="basicInput" placeholder="Enter Bill No">

                                    </div>
                               	  </div>
                               	   <div class="col-md-3">
                               	  	 


                                           <div class="form-group">
                                        <label for="basicInput"><b>Date</b></label>
                                        <input type="date" class="form-control" id="basicInput" placeholder="Enter Date">
                                    </div>



                               	  </div>
                               	   <div class="col-md-3">
                               	  	
                               	  </div>
                               </div>





                               <div class="row">
                               
                                     <div class="col-md-3">
                               	  	 <div class="form-group">
                                        <label for=""><b>Reference No</b></label>
                                         <input type="text" class="form-control" id="basicInput" placeholder="Enter Reference No">

                                    </div>
                               	  </div>
                               	   <div class="col-md-3">
                               	  	 


                                           <div class="form-group">
                                        <label for="basicInput"><b>Reference Date</b></label>
                                        <input type="date" class="form-control" id="basicInput" placeholder="Enter Date">
                                    </div>



                               	  </div>
                               	   <div class="col-md-3">
                               	  	
                               	  </div>
                               </div>



                               <div class="row">
                               
                                     <div class="col-md-3">
                               	  	 <div class="form-group">
                                        <label for=""><b>Buyer Order No</b></label>
                                         <input type="text" class="form-control" id="basicInput" placeholder="Enter Buyer Order No">

                                    </div>
                               	  </div>
                               	   <div class="col-md-3">
                               	  	 


                                           <div class="form-group">
                                        <label for="basicInput"><b> Dated</b></label>
                                        <input type="date" class="form-control" id="basicInput" placeholder="Enter Date">
                                    </div>



                               	  </div>
                               	   <div class="col-md-3">
                               	  	
                                           <div class="form-group">
                                        <label for="basicInput"><b> Vehicle No</b></label>
                                        <input type="text" class="form-control" id="basicInput" placeholder="Enter  Vehicle No">
                                    </div>

                               	  </div>

                               	    <div class="col-md-3">
                               	  	
                                           <div class="form-group">
                                        <label for="basicInput"><b> Delivery Note</b></label>
                                        <textarea type="text" class="form-control" >
                                        	

                                        </textarea>
                                       
                                    </div>

                               	  </div>
                               </div>

                             
                            </div>
                        </div>
                    </div>


              
                </div>
            </div>
            </section>

<!-- bill -->

<section class="">
	

  <div class="invoice-box1">
    <div class="container-fluid container1">
    	   <div class="row">
        	
         <div class="col-md-6">
         	<div class="row sub-title">
         		<div class="col-md-4">
         			<img src="app-assets/images/logo/vasantlogo.png" alt="img">
         		</div>
         		<div class="col-md-8">
         			<p class="subhead">
         				<b class="heading">MITTAL PRECISION HITESH STEELS PVT LTD</b>  
         				Plot No :-B-17 MIDC phase 1 chakan,
         				Village Nighoje Chakan Tal Khed 

         			</p>
         		</div>
         	</div>
         		<div class="row sub-title">
         		<div class="col-md-12">
         			<p class="subhead">Consignee (Ship to)<br>
         				<b class="">TECHPERT PROCESS INDUSTRIES</b><br>
         				Gate No 1535,<br>
         				SONAWANE WASTI<br>
         				CHIKHALI<br>
         				PUNE<br>
         				State Name  : Maharashtra code 27<br>
         				Buyer (Bill to)</p>
         				<b class="">TECHPERT PROCESS INDUSTRIES</b>
         				<p class="subhead">PUSHPAK BBUSINESS HUB,<br>
         				OFFICE NO-302 SR NO , 103/4B+5A WAKAD<br>
         				NEW MUMBAI BENGULURU HIGHWAY<br>
         				PUNE<br>
         				GSTIN/UIN : 27AAOFT699L1ZB<br>
         			    State Name : Maharashtra Code : 27
         			</p>





         		</div>
         	
         	</div>
         </div>

         <div class="col-md-6">
         	<div class="row sub-title">
         		<div class="col-md-4">
         			<label>
         				<b>Invoice No</b>
         			</label><br>
           <label>
         				<b>212201023</b><hr>
         			</label><br>
         			<p>Delivery Note<hr>

         			
         				Reference No & Date
         			</p>
         			<b>212201023 dt. 25-Sep-21</b><hr>
         			<p>Buyer's Order No.</p>
         			<b>2122142</b><hr>
         			<p>Dispatch Doc No.<hr>
         			Dispatched through<hr>
         			Bill of Landing<hr>
         			Terms of Delivery</p>
         		</div>
              
           

 <div class="col-md-4">
         		<label>
         				<b>e-Way Bill No </b>
         			</label>
         			<b>22134198539</b>
           <hr>

         		</div>





 <div class="col-md-4">
         			<label>
         				<b>Dated</b>
         			</label>
         			<p><b>25-Sep-21</b></p><hr>
                Mode/Terms of payment <hr>
                Other References <hr>
                Dated
                <b>21-Sep-21</b><hr>
                Delivery Note Date <hr>
                Destination <hr>
            Motor Vehicle No </p>

         		</div>

         	</div>

         </div>


        </div>
    
      


        <div class="row row1 sub-title" style="margin-top:20px;">
       
         
          <table class="table">
            <tr class="titles1">
              <th>Sr No </th>
              <th>No & Kind of Pkgs</th>
              <th>Description of goods</th>
              <th>HSN/SAC</th>
              <th>Quantity</th>
              <th>Rate</th>
              <th>per Disc %</th>
              <th>Amount</th>
            </tr>
            <tr class="item1" id="ProductList">
              <td id="Product"><span id="ProuductName">1<span></span></span></td>
              <td><span id="ProductNumUnits">01-NOS<span></span></span></td>
              <td><span id="ProductUnit"><b>FG-SS-30-102</b><span></span></span></td>
              <td><span id="ProductUnitPrice">730877</span></td>
              <td><span id="ProductDiscount"><b>7.000 KGS</b></span></td>
            
              <td><span id="ProductCost">275.00</span></td>
                <td><span id="ProductTax">20%</span></td>
                 <td><span id="ProductTax"><b>1,925.00</b></span></td>
            </tr>
            <tr class="item">
              <td><span id="ProuductName">2<span></span></span></td>
              <td><span id="ProductNumUnits">01-NOS<span></span></span></td>
              <td><span id="ProductUnit"><b>FG-SS-30-102</b><span></span></span></td>
              <td><span id="ProductUnitPrice">730877</span></td>
              <td><span id="ProductDiscount"><b>7.000 KGS</b></span></td>
             
              <td><span id="ProductCost">275.00</span></td>
               <td><span id="ProductTax">20%</span></td>
                <td><span id="ProductTax"><b>1,925.00</b></span></td>
            </tr>
          <!--   <tr class="item">
              <td><span id="ProuductName">Medium Hosting<span></span></span></td>
              <td><span id="ProductNumUnits">6<span></span></span></td>
              <td><span id="ProductUnit">KG<span></span></span></td>
              <td><span id="ProductUnitPrice">300kr</span></td>
              <td><span id="ProductDiscount">Rabatt</span></td>
              <td><span id="ProductTax">20</span>%</td>
              <td><span id="ProductCost">900</span> <span id="InvoiceCurrency">KR</span></td>
            </tr>
            <tr class="item">
              <td><span id="ProuductName">Soup<span></span></span></td>
              <td><span id="ProductNumUnits">6 <span></span></span></td>
              <td><span id="ProductUnit">Liter <span></span></span></td>
              <td><span id="ProductUnitPrice">300kr</span></td>
              <td><span id="ProductDiscount">90%</span></td>
              <td><span id="ProductTax">20%</span></td>
              <td><span id="ProductCost">900 KR</span></td>
            </tr> -->
          </table>
        </div>

  







        <div class="row row1">
  
          <div class="center">
            <a href="https://sequra.no" style="text-decoration:none;color:#000;"><b>CGST 9% </b></a>
            <br>
                        <a href="https://sequra.no" style="text-decoration:none;color:#000;"><b>SGST 9% </b></a>

          </div>
        </div>








    <div class="row sub-title">
        
    <h6>Amount Chargeable (in words)</h6><br>
   
    </div>
         <div class="row sub-title">
        
  
    <h6><b>INR Three Lakh Two Hundres Thirteen and Twenty Four Paise Only
    </b></h6>

    </div>
     <div class="row row1 sub-title" style="margin-top:20px;">
       
         
          <table class="table" style="width:100%;">
            <tr class="titles1">
            
              <th col span="1" style="width: 30%;" class="text-center">HSN/SAC</th>
              <th col span="1" style="width: 5%;">Taxable value</th>
              <th col span="1" style="width: 7%;">Central Tax Rate Amount</th>
              <th col span="1" style="width: 5%;">State Tax Rate Amount</th>
              <th col span="1" style="width: 6%; float: center;">Total Tax Amount</th>
            </tr>
            <tr class="item1" id="ProductList">
              <td id="Product"><span id="ProuductName">730976<span></span></span></td>
              <td><span id="ProductNumUnits">01-NOS<span></span></span></td>
              <td><span id="ProductUnit"><b>FG-SS-30-102</b><span></span></span></td>
              <td><span id="ProductUnitPrice">730877</span></td>
              <td><span id="ProductDiscount"><b>7.000 KGS</b></span></td>
            
              
            
            </tr>
            <tr class="item">
              <td><span id="ProuductName">730976<span></span></span></td>
              <td><span id="ProductNumUnits">01-NOS<span></span></span></td>
              <td><span id="ProductUnit"><b>FG-SS-30-102</b><span></span></span></td>
              <td><span id="ProductUnitPrice">730877</span></td>
              <td><span id="ProductDiscount"><b>7.000 KGS</b></span></td>
             
             
             
            </tr>
          <!--   <tr class="item">
              <td><span id="ProuductName">Medium Hosting<span></span></span></td>
              <td><span id="ProductNumUnits">6<span></span></span></td>
              <td><span id="ProductUnit">KG<span></span></span></td>
              <td><span id="ProductUnitPrice">300kr</span></td>
              <td><span id="ProductDiscount">Rabatt</span></td>
              <td><span id="ProductTax">20</span>%</td>
              <td><span id="ProductCost">900</span> <span id="InvoiceCurrency">KR</span></td>
            </tr>
            <tr class="item">
              <td><span id="ProuductName">Soup<span></span></span></td>
              <td><span id="ProductNumUnits">6 <span></span></span></td>
              <td><span id="ProductUnit">Liter <span></span></span></td>
              <td><span id="ProductUnitPrice">300kr</span></td>
              <td><span id="ProductDiscount">90%</span></td>
              <td><span id="ProductTax">20%</span></td>
              <td><span id="ProductCost">900 KR</span></td>
            </tr> -->
          </table>
        </div>






<div class="row sub-title">
        
    <h6>Tax Amount (in words):   <b>INR Three Lakh Two Hundres Thirteen and Twenty Four Paise Only
    </b></h6>
   
   
    </div>
       
<div class="row sub-title">
        
    <h6>Company's PAN  :  <b>AACCUUJ6778S</b>
        <p>Declaration</p></h6>
   
    </div>
         











 





















  
  </div>

</div>

<!-- 
  end bill -->












</section>






















            <!-- Basic Horizontal form layout section end -->

        </div>
    </div>
</div>
<!-- END: Content-->




<script>

    $(".gr_wt").keyup(function () {
        var netval = $("#net_wt_val").val();

        var grwt = $(".gr_wt").val();
        var grw = parseFloat(grwt - netval).toFixed(3);
        ;
        if (grw > 100) {
            $("#wt_response").html("Gross Wt & Net Wt Diffrence must be less than 100").css("color", "red");
            $("#btnSubmit").attr("disabled", true);
        } else {
            $('#btnSubmit').removeAttr("disabled");
            $("#wt_response").html("");
        }
        $(".rec_wt").val(grwt);
    });

    function addPanel(obj) {
        var htmlStr = "";
        var part = $(obj).val();
        $(".workOrder").find('tbody').empty();
        for (let i = 1; i <= part; i++) {
            htmlStr += "<tr>\n\\n\
                        <td class='srno'>\n\
                        </td>\n\\n\
                        <td>\n\
                        <input type='text' class='form-control' name='coil_no[]'>\n\
                        </td>\n\
                        <td>\n\
                        <input type='text' class='form-control' name='product_name[]'>\n\
                        </td>\n\
                        <td>\n\
                        <input type='text' class='form-control' name='quantity[]'>\n\
                        </td>\n\
                        <td>\n\
                        <input type='number' name='weight[]' class='number addwt form-control' autocomplete='off' onkeyUp='chkCalculation()'>\n\
                        </td>\n\
                        <td>\n\
\n\ <button class='btn btn-icon btn-danger waves-effect waves-float waves-light' type='button' data-repeater-create='' onclick='deleterow(this)'><span>X</span></button>\n\
                        </td>\n\</tr>"
        }
        htmlStr += "<tr>\n\
                        <td class='srno'>\n\
                        </td>\n\
                        <td colspan='3'>\n\
                        <label>Scrap Weight</b></label>\n\
                        </td>\n\
                        <td>\n\
                        <input type='number' name='weight[]' class='number addwt form-control' autocomplete='off' onkeyUp='chkCalculation()'>\n\
                        </td>\n\
                        <td>\n\
\n\ <button class='btn btn-icon btn-danger waves-effect waves-float waves-light' type='button' data-repeater-create='' onclick='deleterow(this)'><span>X</span></button>\n\
                        </td>\n\</tr>"
        $(".workOrder").find('tbody').append(htmlStr);
        setIndex();
    }


    function deleterow(obj) {
        $(obj).closest('tr').css('background', 'tomato').remove();
        chkCalculation();
        setIndex();
    }

    function chkCalculation() {
        var totalWt = 0;
        $(".addwt").each(function (index, element) {
            if ($(this).val()) {
                totalWt += parseFloat($(this).val());
            }
        });
        $(".total_wt").val(totalWt);
        setIndex();
    }

    function setIndex() {
        var cnt = 1;
        $(".srno").each(function (index, element) {
            $(this).html(cnt);
            cnt++;
        });
        //set part value when deleted
        cnt = cnt - 2;
        if (cnt <= 0) {
            cnt = 0;
        }
        $(".partcls").val(cnt);
    }
</script>