<?php
	function generateRow(){
		$contents = '';
		include_once('book_form.php');
		$sql = "SELECT * FROM book_form";

		//use for MySQLi OOP
		$query = $connection->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['email']."</td>
				<td>".$row['phone']."</td>
				<td>".$row['address']."</td>
				<td>".$row['location']."</td>
				<td>".$row['guests']."</td>
				<td>".$row['arrivals']."</td>
				<td>".$row['leaving']."</td>
						
			</tr>
			";
		}
		////////////////

		//use for MySQLi Procedural
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
		
		return $contents;
	}

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Generated PDF using TCPDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">Generated PDF using TCPDF</h2>
      	<h4>Members Table</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="5%">ID</th>
				<th width="8%">name</th>
				<th width="25%">email</th>
				<th width="13%">phone</th> 
				<th width="10%">Address</th> 
				<th width="10%">location</th> 
				<th width="8%">guests</th> 
				<th width="13%">arrivals</th> 
				<th width="13%">leaving</th> 
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
	ob_end_clean();
    $pdf->Output('book_form.pdf', 'I');
	

?>