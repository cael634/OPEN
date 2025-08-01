<?php 


		
		$sql="SELECT * FROM `chat` WHERE chat=1";

		$query = mysqli_query($conn,$sql);
?>
<style>
  h2{
color:black;
  }

  .navbar-inverse {
    background-color: #3b173da8;
    border-color: #3b173da8;
    display: none;
}
h1 {
    font-size: 28px;
    font-weight: 100;
    margin: 18px 0px 20px 0px;
    color: black;
}
.message {
    background-color: #d0cfcd;
    color: black;
    border-radius: 5px;
    width: 50%;
    padding: 5px;
    margin-bottom: 3%;
}
  label{
color:black;
  }
  .form-control:valid, .form-control.is-valid, .form-control:invalid, .form-control.is-invalid {
    background-image: none;
    width: 100%;
    height: 74%;
}
  span{
	 
	  font-weight:bold;
  }
  .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    padding-right: 0px;
    padding-left: 15px;
}
  .btn-primary {
    background-color: green!important;
        border: green;
}
  .container {
    margin-top: 0%;
    width: 100%;
   
    padding-right:0%;
    padding-left:0%;
  }
  .btn-primary {
    background-color: white;
	}
	.form-group {
    margin-bottom: 1.125rem;
    display: flex;
}
	.display-chat{
		max-height: 570px;
		background-color:white;
		margin-bottom:1%;
		overflow:auto;
		padding:15px;
		    border: 2px solid;
	}
	.form-control:valid, .form-control.is-valid, .form-control:invalid, .form-control.is-invalid {
    background-image: none;
    width: 100%;
}
	.message{
		background-color:#d0cfcd;
		color: black;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 3%;

	}
	.form-row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin: 11px;
    margin-left: -5px;
}
  </style>

<meta http-equiv="refresh" content="20">



<div class="container">


<center><h1> Chat Gaseosas vea</h1></center>

  </center>
   <div class="display-chat" id = "display-chat" >
<?php
	if(mysqli_num_rows($query)>0)
	{
		while($row= mysqli_fetch_assoc($query))	
		{
			if($row['name']==$_SESSION['id_cliente']){
?>
		<div class="message" style="
		background-color: #5ad0d0;
		color: black;
		border-radius: 5px;
		padding: 5px;
		margin-bottom: 2%;
		height: 47px;
		width: 180px;
		font-size: 13px;">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
<?php
}else{
	?>
	<div class="message"	style="width: 220px;
	border-radius: 5px;
	padding: 5px;
    position: inherit;
    margin: 0px 29px 14px 160px;
    background: #ffc107;
    height: 47px;
		width: 180px;
		font-size: 13px;">
			<p>
				<span><?php echo $row['name']; ?> :</span>
				<?php echo $row['message']; ?>
			</p>
		</div>
	<?php
}
		}
	}
	else
	{
?>
<div class="message">
			<p>
				No hay ninguna conversación previa.
			</p>
</div>
<?php
	} 
?>
<a name="abajo"></a>
  </div>


  
  <form class="form-horizontal" method="post" action="?p=sendMessage">
    <div class="form-group">
      <div class="col-sm-10">          
        <textarea name="msg" class="form-control" placeholder="Ingresa tu mensaje acá..."></textarea>
      </div>
	         
      <div class="col-sm-2">
        <button type="submit" class="btn btn-primary" >Enviar</button>
      </div>

    </div>
  </form>
</div>


</body>
</html>
