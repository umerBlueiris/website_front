<?php
	@include './includes/header.php'
?>
<section id="contact-page">
	<div id="contact-pageCarousel" data-bs-interval="50000" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner" role="listbox">
			<!-- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(assets/img/slide/contactus.jpg)">
				<div class="carousel-container"></div>
			</div>
		</div>
	</div>
</section><!-- End Hero -->
<main id="main">
	<section id="contact" class="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3><b>Contact Us</b></h3>
				</div>
				<div class="col-md-6">
					<form role="form" id="contactForm" class="php-email-form">
						<div class="form-group mt-3">
							<input type="text" name="name" class="form-control" id="firstname" placeholder="Full Name" required>
						</div>
						
						<div class="form-group mt-2">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
						<div class="form-group mt-2">
							<!-- Country names and Phone Code -->
							<select class="form-select" id="countryCode" name="countryCode" required>
								<option value="">Country Code</option>
								<option value="United Arab Emirates: 00971">United Arab Emirates: +971</option>
								<option value="Saudi Arabia: 00966">Saudi Arabia: +966</option>
								<option value="India: 0091">India: +91</option>
								<option value="Pakistan: 0092">Pakistan: +92</option>
								<option value="Jordan: 00962">Jordan: +962</option>
								<option value="United Kingdom: 0044">United Kingdom: +44</option>
								<option value="Egypt: 0020">Egypt: +20</option>
								<option value="Syria: 00963">Syria: +963</option>
								<option value="United: States 001">United States: +1</option>
								<option value="Kuwait: 00965">Kuwait: 00965</option>
								<option value="Iran: 0098">Iran: 0098</option>
								<option value="Iraq: 00964">Iraq: 00964</option>
								<option value="Afghanistan: 0093">Afghanistan: 0093</option>
								<option value="Albania: 00355">Albania: 00355</option>
								<option value="Algeria: 00213">Algeria: 00213</option>
								<option value="American Samoa: 001684">American Samoa: 001684</option>
								<option value="Andorra: 00376">Andorra: 00376</option>
								<option value="Angola: 00244">Angola: 00244</option>
								<option value="Anguilla: 001264">Anguilla: 001264</option>
								<option value="Antarctica: 00672">Antarctica: 00672</option>
								<option value="Antigua and Barbuda: 001268">Antigua and Barbuda: 001268</option>
								<option value="Argentina: 0054">Argentina: 0054</option>
								<option value="Armenia: 00374">Armenia: 00374</option>
								<option value="Aruba: 00297">Aruba: 00297</option>
								<option value="Australia: 0061">Australia: 0061</option>
								<option value="Austria: 0043">Austria: 0043</option>
								<option value="Azerbaijan: 00994">Azerbaijan: 00994</option>
								<option value="Bahamas: 001242">Bahamas: 001242</option>
								<option value="Bahrain: 00973">Bahrain: 00973</option>
								<option value="Bangladesh: 00880">Bangladesh: 00880</option>
								<option value="Barbados: 001246">Barbados: 001246</option>
								<option value="Belarus: 00375">Belarus: 00375</option>
								<option value="Belgium: 0032">Belgium: 0032</option>
								<option value="Belize: 00501">Belize: 00501</option>
								<option value="Benin: 00229">Benin: 00229</option>
								<option value="Bermuda: 001441">Bermuda: 001441</option>
								<option value="Bhutan: 00975">Bhutan: 00975</option>
								<option value="Bolivia: 00591">Bolivia: 00591</option>
								<option value="Bosnia and Herzegovina: 00387">Bosnia and Herzegovina: 00387</option>
								<option value="Botswana: 00267">Botswana: 00267</option>
								<option value="Brazil: 0055">Brazil: 0055</option>
								<option value="British Indian Ocean Territory: 00246">British Indian Ocean Territory: 00246</option>
								<option value="British Virgin Islands: 001284">British Virgin Islands: 001284</option>
								<option value="Brunei: 00673">Brunei: 00673</option>
								<option value="Bulgaria: 00359">Bulgaria: 00359</option>
								<option value="Burkina Faso: 00226">Burkina Faso: 00226</option>
								<option value="Burundi: 00257">Burundi: 00257</option>
								<option value="Cambodia: 00855">Cambodia: 00855</option>
								<option value="Cameroon: 00237">Cameroon: 00237</option>
								<option value="Cape Verde: 00238">Cape Verde: 00238</option>
								<option value="Cayman Islands: 001345">Cayman Islands: 001345</option>
								<option value="Central African Republic: 00236">Central African Republic: 00236</option>
								<option value="Chad: 00235">Chad: 00235</option>
								<option value="Chile: 0056">Chile: 0056</option>
								<option value="China: 0086">China: 0086</option>
								<option value="Christmas Island: 0061">Christmas Island: 0061</option>
								<option value="Cocos Islands: 0061">Cocos Islands: 0061</option>
								<option value="Colombia: 0057">Colombia: 0057</option>
								<option value="Comoros: 00269">Comoros: 00269</option>
								<option value="Cook Islands: 00682">Cook Islands: 00682</option>
								<option value="Costa Rica: 00506">Costa Rica: 00506</option>
								<option value="Croatia: 00385">Croatia: 00385</option>
								<option value="Cuba: 0053">Cuba: 0053</option>
								<option value="Curacao: 00599">Curacao: 00599</option>
								<option value="Cyprus: 00357">Cyprus: 00357</option>
								<option value="Czech Republic: 00420">Czech Republic: 00420</option>
								<option value="Democratic Republic of Congo: 00243">Democratic Republic of Congo: 00243</option>
								<option value="Denmark: 0045">Denmark: 0045</option>
								<option value="Djibouti: 00253">Djibouti: 00253</option>
								<option value="Dominica: 001767">Dominica: 001767</option>
								<option value="Dominican Republic: 001809">Dominican Republic: 001809</option>
								<option value="Dominican Republic: 001829">Dominican Republic: 001829</option>
								<option value="Dominican Republic: 001849">Dominican Republic: 001849</option>
								<option value="East Timor: 00670">East Timor: 00670</option>
								<option value="Ecuador: 00593">Ecuador: 00593</option>
								<option value="El Salvador: 00503">El Salvador: 00503</option>
								<option value="Equatorial Guinea: 00240">Equatorial Guinea: 00240</option>
								<option value="Eritrea: 00291">Eritrea: 00291</option>
								<option value="Estonia: 00372">Estonia: 00372</option>
								<option value="Ethiopia: 00251">Ethiopia: 00251</option>
								<option value="Falkland Islands: 00500">Falkland Islands: 00500</option>
								<option value="Faroe Islands: 00298">Faroe Islands: 00298</option>
								<option value="Fiji: 00679">Fiji: 00679</option>
								<option value="Finland: 00358">Finland: 00358</option>
								<option value="France: 0033">France: 0033</option>
								<option value="French Polynesia: 00689">French Polynesia: 00689</option>
								<option value="Gabon: 00241">Gabon: 00241</option>
								<option value="Gambia: 00220">Gambia: 00220</option>
								<option value="Georgia: 00995">Georgia: 00995</option>
								<option value="Germany: 0049">Germany: 0049</option>
								<option value="Ghana: 00233">Ghana: 00233</option>
								<option value="Gibraltar: 00350">Gibraltar: 00350</option>
								<option value="Greece: 0030">Greece: 0030</option>
								<option value="Greenland: 00299">Greenland: 00299</option>
								<option value="Grenada: 001473">Grenada: 001473</option>
								<option value="Guam: 001671">Guam: 001671</option>
								<option value="Guatemala: 00502">Guatemala: 00502</option>
								<option value="Guernsey: 00441481">Guernsey: 00441481</option>
								<option value="Guinea: 00224">Guinea: 00224</option>
								<option value="Guinea-Bissau: 00245">Guinea-Bissau: 00245</option>
								<option value="Guyana: 00592">Guyana: 00592</option>
								<option value="Haiti: 00509">Haiti: 00509</option>
								<option value="Honduras: 00504">Honduras: 00504</option>
								<option value="Hong Kong: 00852">Hong Kong: 00852</option>
								<option value="Hungary: 0036">Hungary: 0036</option>
								<option value="Iceland: 00354">Iceland: 00354</option>
								<option value="Indonesia: 0062">Indonesia: 0062</option>
								<option value="Ireland: 00353">Ireland: 00353</option>
								<option value="Isle of Man: 00441624">Isle of Man: 00441624</option>
								<option value="Israel: 00972">Israel: 00972</option>
								<option value="Italy: 0039">Italy: 0039</option>
								<option value="Jamaica: 001">Jamaica: 001</option>
								<option value="Japan: 0081">Japan: 0081</option>
								<option value="Jersey: 00441534">Jersey: 00441534</option>
								<option value="Kazakhstan: 007">Kazakhstan: 007</option>
								<option value="Kenya: 00254">Kenya: 00254</option>
								<option value="Kiribati: 00686">Kiribati: 00686</option>
								<option value="Kosovo: 00383">Kosovo: 00383</option>
								<option value="Kyrgyzstan: 00996">Kyrgyzstan: 00996</option>
								<option value="Laos: 00856">Laos: 00856</option>
								<option value="Latvia: 00371">Latvia: 00371</option>
								<option value="Lesotho: 00266">Lesotho: 00266</option>
								<option value="Liberia: 00231">Liberia: 00231</option>
								<option value="Libya: 00218">Libya: 00218</option>
								<option value="Liechtenstein: 00423">Liechtenstein: 00423</option>
								<option value="Lithuania: 00370">Lithuania: 00370</option>
								<option value="Luxembourg: 00352">Luxembourg: 00352</option>
								<option value="Macao: 00853">Macao: 00853</option>
								<option value="Macedonia: 00389">Macedonia: 00389</option>
								<option value="Madagascar: 00261">Madagascar: 00261</option>
								<option value="Malawi: 00265">Malawi: 00265</option>
								<option value="Malaysia: 0060">Malaysia: 0060</option>
								<option value="Maldives: 00960">Maldives: 00960</option>
								<option value="Mali: 00223">Mali: 00223</option>
								<option value="Malta: 00356">Malta: 00356</option>
								<option value="Marshall Islands: 00692">Marshall Islands: 00692</option>
								<option value="Mauritania: 00222">Mauritania: 00222</option>
								<option value="Mauritius: 00230">Mauritius: 00230</option>
								<option value="Mayotte: 00262">Mayotte: 00262</option>
								<option value="Mexico: 0052">Mexico: 0052</option>
								<option value="Micronesia: 00691">Micronesia: 00691</option>
								<option value="Moldova: 00373">Moldova: 00373</option>
								<option value="Monaco: 00377">Monaco: 00377</option>
								<option value="Mongolia: 00976">Mongolia: 00976</option>
								<option value="Montenegro: 00382">Montenegro: 00382</option>
								<option value="Montserrat: 001664">Montserrat: 001664</option>
								<option value="Morocco: 00212">Morocco: 00212</option>
								<option value="Mozambique: 00258">Mozambique: 00258</option>
								<option value="Myanmar: 0095">Myanmar: 0095</option>
								<option value="Namibia: 00264">Namibia: 00264</option>
								<option value="Nauru: 00674">Nauru: 00674</option>
								<option value="Nepal: 00977">Nepal: 00977</option>
								<option value="Netherlands: 0031">Netherlands: 0031</option>
								<option value="Netherlands Antilles: 00599">Netherlands Antilles: 00599</option>
								<option value="New Caledonia: 00687">New Caledonia: 00687</option>
								<option value="New Zealand: 0064">New Zealand: 0064</option>
								<option value="Nicaragua: 00505">Nicaragua: 00505</option>
								<option value="Niger: 00227">Niger: 00227</option>
								<option value="Nigeria: 00234">Nigeria: 00234</option>
								<option value="Niue: 00683">Niue: 00683</option>
								<option value="Northern Mariana Islands: 001670">Northern Mariana Islands: 001670</option>
								<option value="North Korea: 00850">North Korea: 00850</option>
								<option value="Norway: 0047">Norway: 0047</option>
								<option value="Oman: 00968">Oman: 00968</option>
								<option value="Palau: 00680">Palau: 00680</option>
								<option value="Palestine:970">Palestine:970</option>
								<option value="Panama: 00507">Panama: 00507</option>
								<option value="Papua New Guinea: 00675">Papua New Guinea: 00675</option>
								<option value="Paraguay: 00595">Paraguay: 00595</option>
								<option value="Peru: 0051">Peru: 0051</option>
								<option value="Philippines: 0063">Philippines: 0063</option>
								<option value="Pitcairn: 0064">Pitcairn: 0064</option>
								<option value="Poland: 0048">Poland: 0048</option>
								<option value="Portugal: 00351">Portugal: 00351</option>
								<option value="Puerto Rico: 001787">Puerto Rico: 001787</option>
								<option value="Puerto Rico: 001939">Puerto Rico: 001939</option>
								<option value="Qatar: 00974">Qatar: 00974</option>
								<option value="Republic of the Congo: 00242">Republic of the Congo: 00242</option>
								<option value="Reunion: 00262">Reunion: 00262</option>
								<option value="Romania: 0040">Romania: 0040</option>
								<option value="Russia: 007">Russia: 007</option>
								<option value="Rwanda: 00250">Rwanda: 00250</option>
								<option value="Saint Barthelemy: 00590">Saint Barthelemy: 00590</option>
								<option value="Saint Helena: 00290">Saint Helena: 00290</option>
								<option value="Saint Kitts and Nevis: 001869">Saint Kitts and Nevis: 001869</option>
								<option value="Saint Lucia: 001758">Saint Lucia: 001758</option>
								<option value="Saint Martin: 00590">Saint Martin: 00590</option>
								<option value="Saint Pierre and Miquelon: 00508">Saint Pierre and Miquelon: 00508</option>
								<option value="Saint Vincent and the Grenadines: 001784">Saint Vincent and the Grenadines: 001784</option>
								<option value="Samoa: 00685">Samoa: 00685</option>
								<option value="San Marino: 00378">San Marino: 00378</option>
								<option value="Sao Tome and Principe: 00239">Sao Tome and Principe: 00239</option>
								<option value="Senegal: 00221">Senegal: 00221</option>
								<option value="Serbia: 00381">Serbia: 00381</option>
								<option value="Seychelles: 00248">Seychelles: 00248</option>
								<option value="Sierra Leone: 00232">Sierra Leone: 00232</option>
								<option value="Singapore: 0065">Singapore: 0065</option>
								<option value="Sint Maarten: 001721">Sint Maarten: 001721</option>
								<option value="Slovakia: 00421">Slovakia: 00421</option>
								<option value="Slovenia: 00386">Slovenia: 00386</option>
								<option value="Solomon Islands: 00677">Solomon Islands: 00677</option>
								<option value="Somalia: 00252">Somalia: 00252</option>
								<option value="South Africa: 0027">South Africa: 0027</option>
								<option value="South Korea: 0082">South Korea: 0082</option>
								<option value="South Sudan: 00211">South Sudan: 00211</option>
								<option value="Spain: 0034">Spain: 0034</option>
								<option value="Sri Lanka: 0094">Sri Lanka: 0094</option>
								<option value="Suriname: 00597">Suriname: 00597</option>
								<option value="Svalbard and Jan Mayen: 0047">Svalbard and Jan Mayen: 0047</option>
								<option value="Swaziland: 00268">Swaziland: 00268</option>
								<option value="Sweden: 0046">Sweden: 0046</option>
								<option value="Switzerland: 0041">Switzerland: 0041</option>
								<option value="Taiwan: 00886">Taiwan: 00886</option>
								<option value="Tajikistan: 00992">Tajikistan: 00992</option>
								<option value="Tanzania: 00255">Tanzania: 00255</option>
								<option value="Thailand: 0066">Thailand: 0066</option>
								<option value="Togo: 00228">Togo: 00228</option>
								<option value="Tokelau: 00690">Tokelau: 00690</option>
								<option value="Tonga: 00676">Tonga: 00676</option>
								<option value="Trinidad and Tobago: 001">Trinidad and Tobago: 001</option>
								<option value="Tunisia: 00216">Tunisia: 00216</option>
								<option value="Turkey: 0090">Turkey: 0090</option>
								<option value="Turkmenistan: 00993">Turkmenistan: 00993</option>
								<option value="Turks and Caicos Islands: 001649">Turks and Caicos Islands: 001649</option>
								<option value="Tuvalu: 00688">Tuvalu: 00688</option>
								<option value="U.S. Virgin Islands: 001340">U.S. Virgin Islands: 001340</option>
								<option value="Uganda: 00256">Uganda: 00256</option>
								<option value="Ukraine: 00380">Ukraine: 00380</option>
								<option value="Uruguay: 00598">Uruguay: 00598</option>
								<option value="Uzbekistan: 00998">Uzbekistan: 00998</option>
								<option value="Vanuatu: 00678">Vanuatu: 00678</option>
								<option value="Vatican: 00379">Vatican: 00379</option>
								<option value="Venezuela: 0058">Venezuela: 0058</option>
								<option value="Vietnam: 0084">Vietnam: 0084</option>
								<option value="Wallis and Futuna: 00681">Wallis and Futuna: 00681</option>
								<option value="Western Sahara: 00212">Western Sahara: 00212</option>
								<option value="Yemen: 00967">Yemen: 00967</option>
								<option value="Zambia: 00260">Zambia: 00260</option>
								<option value="Zimbabwe: 00263">Zimbabwe: 00263</option>
								<option value="Palestine: 00970">Palestine: 00970</option>
								<option value="Ivory Coast: 00225">Ivory Coast: 00225</option>
								<option value="French Guiana: 00594">French Guiana: 00594</option>
								<option value="U.S. Minor Outlying Islands: 00246">U.S. Minor Outlying Islands: 00246</option>
								<option value="Trinidad and Tobago: 001868">Trinidad and Tobago: 001868</option>
								<option value="Jamaica: 001876">Jamaica: 001876</option>
								<option value="Martinique: 00596">Martinique: 00596</option>
								<option value="Guadeloupe: 00590">Guadeloupe: 00590</option>
								<option value="Cote d Ivoire: 00225">Cote d Ivoire: 00225</option>
								<option value="Cote d Ivoire: 002250">Cote d Ivoire: 002250</option>
								<option value="Republic of Sierra Leone: 00232">Republic of Sierra Leone: 00232</option>
								<option value="Moldova (Republic of): 00373">Moldova (Republic of): 00373</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<input type="text" class="form-control" name="mobileNo" id="Mobile" placeholder="Mobile" required>
						</div>
						<!--
							<div class="form-group mt-2">
							<textarea class="form-control" name="message" rows="5" placeholder="Comments" required></textarea>
							</div>
						-->
						<div class="my-2">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<div class="col-sm-12">
							<div class="col-sm-7" style="float: left; line-height:1.2">
								<span class="contactaccept">By Accepting and providing my personal information.i am consenting Anax Development <a href="#">Privacy Policy</a> as well as the data applicable data protection laws </span>
							</div>
							<div class="col-sm-5" style="float: right; text-align:right">
								<button type="submit" id="send_contact" class="btn btn-warning bt-color">Send</button>
								<button type="button" id="waiting"  class="btn btn-warning bt-color">
								<span class="spinner-border spinner-border-sm text-warning"></span>Sending ..</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="row contact-cust-padding">
						<div class="col-md-5 subhead font-weight-400">
							<img src="assets/img/contact/mail.png" class="img-fluid" alt="Phone">&nbsp;&nbsp;Email:
						</div>
						<div class="col-md-7 subhead font-weight-600">
							sales@anaxdevelopments.com
						</div>
						<div class="col-md-5 subhead font-weight-400 mt-4">
							<img src="assets/img/contact/time.png" class="img-fluid" alt="Phone">&nbsp;&nbsp;Monday - Thursday:
						</div>
						<div class="col-md-7 subhead font-weight-600 mt-4">
							8:00AM to 5:00PM
						</div>
						<div class="col-md-5 subhead font-weight-400 mt-4">
							<img src="assets/img/contact/location.png" class="img-fluid" alt="Phone">&nbsp;&nbsp;Location:
						</div>
						<div class="col-md-7 subhead font-weight-600 mt-4">
							27, Aspin Commercial Tower,<br />Sheikh Zayed Road, Dubai, UAE
						</div>
						<div class="col-md-5 subhead font-weight-400 mt-4">
							&nbsp;&nbsp;&nbsp;&nbsp;Follow us:
						</div>
						<div class="col-md-7 subhead font-weight-600 mt-4 social_links">
							<a href="mailto:mailto:sales@anaxdevelopments.com" class="mail"><img src="assets/img/contact/mail.png" class="" alt="Mail"></a>
							<a href="https://www.instagram.com/anax_developments?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr" class="instagram" target="_blank"><img src="assets/img/contact/instagram.png" class="" alt="instagram"></a>
							<a href="https://twitter.com/anaxdevelopment/status/1730928462230106391?s=46" class="twitter" target="_blank"><img src="assets/img/contact/twitter.png" class="" alt="twitter"></a>
							<a href="https://www.facebook.com/anaxrealestate?mibextid=YMEMSu" class="facebook" target="_blank"><img src="assets/img/contact/facebook.png" class="" alt="facebook"></a>
							<a href="https://www.linkedin.com/company/anax-real-estate/" class="linkedin" target="_blank"><img src="assets/img/contact/linkedin.png" class="" alt="linkedin"></a>
							<a href="https://www.youtube.com/@AnaxDevelopments-sw1hc" class="youtube" target="_blank"><img src="assets/img/contact/youtube.png" class="" alt="youtube"></a>
						</div>
					</div>
				</div>
			</div>
			<div class="container" data-aos="fade-up">
				<div class="row mt-5">
					<div class="col-12">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14439.316836283!2d55.26219863786793!3d25.20898155744943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f428853023db3%3A0x6e63a9fe6b2d7cfe!2sAspin%20Commercial%20Tower%20-%20106%20Sheikh%20Zayed%20Rd%20-%20Trade%20Centre%20-%20Trade%20Centre%201%20-%20Dubai!5e0!3m2!1sen!2sae!4v1703231291795!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
			</div>
			
		</div>
	</section><!-- End Contact Section -->
	
</main><!-- End #main -->
<?php
	@include './includes/footer.php';
	
?>

<script>
	// function submitForm() {
	$(document).ready(function() {
		
		$('#waiting').hide();

		$("#contactForm").submit(function(event) {
		// $("#send_contact").on("click", function() {
			// Serialize form data
			event.preventDefault();
			var formData = $("#contactForm").serialize();
			$('#send_contact').hide();
			$('#waiting').show();
			$.ajax({
				type: "POST",
				url: "num.php", // Replace with your PHP script URL
				data: formData,
				crossDomain: true,
				// Specify that the expected response is JSON
				success: function(response) {

					if (response.status == 'error') {
						$('#waiting').hide();
						toastr.error('Please Fill The Form Correctly')
						$('#send_contact').show();

					} else {
						toastr.success('Your message has been sent. Thank you!');
						$('#waiting').hide();
						$('#send_contact').show();

						$(':input').val('');
					}
					// Handle the JSON response from the server
					// Here, 'response' is already a JavaScript object
					//$("#result").html("Server says: " + response.message);
				},

			});
		})
	})
	// }
</script>