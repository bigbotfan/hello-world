<!DOCTYPE html>
<html>
 
<head>
<title>HNG Intern Page</title>
<style>
	
	body {
    		background-color: #f0f5f5;
	}

	.container {
    		position: relative;	
	}

	.container img { 
    		width: 100%;
    		height: auto;
    		opacity: 1;
        }

	div.clock {
		position: fixed;
   		bottom: 10px;
    		right: 10px;
    		width: 170px;
		height: 60px;
    		border: 1px solid gray;
    		border-radius: 3px;
    		background-color: white;	
	}
	
	profile-image {
		width: 20%;
		height: 20%;
		padding: 1px;
		border: 1px solid gray;
		border-radius: 8px;	
	}
	
	div.profile-card{
		position: -webkit-sticky; /* Safari */
    		position: sticky;
    		top: 3px;
    		width: 250px;
		height: 150px;
		padding: 2px;
		border: 1px solid grey;
		border-radius: 3px;	
		background-color: #ffffff;
	}
	
	div.profile-info{
    		position: absolute;
    		top: 1px;
		left: 1px;
    		width: 100px;
		height: 145px;
		padding: 2px;
		border: 1px solid grey;
		border-radius: 3px;	
		background-color: #ffffff;
		text-align: center;
	}
	
	div.profile-meta{
    		position: absolute;
    		top: 0;
		right: 0;
    		width: 140px;
		height: auto;
		padding: 2px;		
		border-radius: 3px;	
		background-color: #ffffff;
		text-align: left;
	}
	
	
	div.body{
		position: relative;
		left: 20%;
		width: 60%;
		text-align: center;
	}
	
	p {
    		font-family: "Lucida Console";
		font-size: 1.5em
		}
	
	h1 {
    		font-family: "Lucida Console";
		font-size: 2em
		}
	
</style>
</head>
 
<body>
	
	<div class="container">
		<div class="header-image">
			<img src="http://headerart.weebly.com/uploads/5/7/5/7/5757212/eye-catching-colorful-paints-art-header_orig.jpg" alt="Norway" width="1000" height="300">
		</div>
	</div>
	
	
	<div class="profile-card">	
		<div class="profile-info">
			<img class="profile-image" src="https://pbs.twimg.com/profile_images/553449833667637249/4i9cRJfQ.jpeg" alt="Profile image" width="100" height="100" >
			</br> HNG Intern
			</br> Monty Carlo 
		</div>
	
		<div class="profile-meta">
			Welcome to your profile, coder!</br></br>
			What do you hope to acheive this
			<?php echo Date("l") . "</br></br>" . Date("d F, Y"); ?>
		</div>
	</div>
	
	<div class="body">
		<h1 font-size: 40px;>Here's Your First Task</h1>
		<p >You need to do this to complete stage 1</p>
 
		<p >
		</br> 1. Design a very simple page in Figma
		</br></br> 2. Implement it in html/css (this design should have space showing the current time)
		</br></br> 3. Setup docker
		</br></br> 4. Get php to run in docker
		</br></br> 4. Make your app work on your local browser
		</br></br> 5. Your app must show properly
		</br></br> 6. You will need to submit a screenshot to pass to Stage 2
		</br></br></br> If you dont understand anything, be sure to ask
		</p>
	</div>


	<div class="clock">
		<?php 
			date_default_timezone_set('Africa/Lagos');
			echo "<h1>" . Date("g:i a", time()) . "</h1>";
		?>
	</div>
 
</body>
</html>
