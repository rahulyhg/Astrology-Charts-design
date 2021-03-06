<!DOCTYPE html>
<html>
	<head>
		<title>East</title>
		<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
		<script src='js/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
		<script src='js/html2canvas.min.js'></script>
		<link href="css/style.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="south_box" id="kundali_chart">
			<div class="south_box_cointainer">
				<table class="chart_table">
					<tr>
						<td>
							<div class="second_incline">
								<div class="sign_up">12</div>
								<div class="sign_down">11</div>
							</div>
							
						</td>
						<td>
							1
						</td>
						<td>
							<div class="first_incline">
								<div class="sign_up">2</div>
								<div class="sign_down">3</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>10</td>
						<td> Gimini</td>
						<td>4</td>
					</tr>
					<tr>
						<td>
							<div class="first_incline">
								<div class="sign_up">9</div>
								<div class="sign_down">8</div>
							</div>
							
						</td>
						<td>7</td>
						<td>
							<div class="second_incline">
								<div class="sign_up">5</div>
								<div class="sign_down">6</div>
							</div>
							
						</td>
					</tr>
					
				</table>
			</div>
		</div>

		<button id="convert">
		                Convert to image
		        </button>

		        <div class="image_result">
		            <div id="result">
		            <!-- Result will appear be here -->
		            </div>
		        </div>

		<script type="text/javascript">
			
			//convert table to image
            function convertToImage() {

              html2canvas(document.querySelector("#kundali_chart")).then(canvas => {
                    //document.body.appendChild(canvas)
                    var img = canvas.toDataURL("image/png");
                    document.getElementById("result").innerHTML = '<img id="image" src="'+img+'"/>';
                });

            }

            //click event
            var convertBtn = document.getElementById("convert");
            convertBtn.addEventListener('click', convertToImage);

		</script>
	</body>
</html>