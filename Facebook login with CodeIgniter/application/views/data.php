
        <!-- Flash messages -->
        <?php if($this->session->flashdata('user_registered')) :?>
          
           <?php echo '<p style="margin-bottom: 0;margin-top: 20px;">'.$this->session->flashdata('user_registered').'</p>'; ?>
           
        <?php endif;?>

        <?php if($this->session->flashdata('user_already')) :?>
          
           <?php echo '<p style="margin-bottom: 0;margin-top: 20px;">'.$this->session->flashdata('user_already').'</p>'; ?>
           
        <?php endif;?>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<div>
	<table>
		<tr>
	      <th>Name</th>
	      <th>Email</th>
	      <th>Gender</th>
	    </tr>
       <?php foreach($users as $user) : ?>
	    <tr>
		    <td><?php echo $user['first_name']; ?> <?php echo $user['last_name'];?></td>
		    <td><?php echo $user['email'];?></td>
		    <td><?php echo $user['gender'];?></td>
		</tr>
	   <?php endforeach; ?>
	</table>
	<?php if(!$this->session->userdata()) : ?>
	   <a href="<?php echo site_url('signin/logout'); ?>">Logout</a>
	<?php endif; ?>
</div>

