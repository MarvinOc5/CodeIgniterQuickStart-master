
    <div id="templatemo_main">
    	<h1>Contact Information</h1>
        <div class="col_2 float_r">
            <h4>Send us a message now!</h4>
            <div id="contact_form">
                <form method="post" name="contact" action="#">
                        
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner h10"></div>
                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner h10"></div>
                        
						<label for="subject">Subject:</label> <input type="text" name="subject" id="subject" class="input_field" />

						<div class="cleaner h10"></div>
        
                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner h10"></div>
                        
                        <input type="submit" value="Send" id="submit" name="submit" class="submit_btn float_l" />
						<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_r" />
                        
            	</form>
            </div> 
        </div>
        <div class="col_2 float_l">
        
        	<h4>Mailing Address</h4>
            <h6><strong>The Philippine Newlong Corporation</strong></h6>
         	Ground Floor, Philippine New Long Corporation Building,<br />
           	No. 3590 Davila Street Brgy. Sta. Cruz,<br />
            Makati City 1205<br /><br />
				
			<strong>Phone:</strong> Telefax: 896-4876, 896-1266 (Accounting) 896-2234 (Admin)<br />
            <strong>Email:</strong> <a href="mailto:info@company.com">info@philnewlong.com</a>  <br />
            <div class="cleaner h20"></div>                    
            <h4>Our Location</h4>
			<?php echo $map['html']; ?>
            
        </div>
        
		<br class="cleaner" />
    </div> <!-- end of main -->