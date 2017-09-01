
<?php
// We change the headers of the page so that the browser will know what sort of file is dealing with. Also, we will tell the browser it has to treat the file as an attachment which cannot be cached.
 
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=company_list.xls");
$query = db_select('cmo_donation_table', 'n')
              
        ->fields ('n', array (
                'nid',
                'name',
				'i_am',
                'pancard',
                'tinnumber',
				'mobile',
				'email',
				'amount',
                'payment_mode'
				
            ));
			
	$result = $query->execute();
	
?>
<table >

            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
				<th>Registered as</th>
				<th>Pancard No.</th>
                <th>Tin Number</th>
                <th>Mobile Number</th>
                <th>Email</th>
                <th>Amount</th>
				<th>Payment mode</th>
				
                
		    </tr>
            </thead>
            <tbody>
			<?php $j=1; foreach($result as $a){
				
				//print_r($zill_list_results);
				?>
               <tr>
			   <td><?php echo $j;?></td>
				<td><?php echo $a->name;?></td>
			   <td><?php echo $a->i_am;?></td>
			   <td><?php echo $a->pancard;?></td>
			   <td><?php echo $a->tinnumber;?></td>
			   <td><?php echo $a->mobile;?></td>
			   <td><?php echo $a->email;?></td>
			   <td><?php echo $a->amount;?></td>
			   <td><?php echo $a->payment_mode;?></td>
			 
			  
			   </tr>
			<?php $j++;}?>
            </tbody>
          </table>