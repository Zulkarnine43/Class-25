
<!DOCTYPE html>
<html>
<head>
	<title>dropdown</title>
	<style>
		.container ul{
			list-style: none;
		}
		.container ul li {
			background-color:red;
			width: 150px;
			border: :1px solid white;
			height:50px;
			line-height: 50px;
			text-align: center;
			float: left;
			color: white;
			font-size: 18px;
			position: relative;
		}
		.container ul li:hover {
			background-color: green
		}
		.container ul ul{
			display: none;
		}
		.container ul li:hover > ul{
			display: block;
		}
		.container ul ul ul{
			margin-left: 100px;
			top: 0px;
			position: absolute;
		}


	</style>
</head>
<body>
	<div class="container">
<ul>
	<li>home</li>
	<li>blog</li>
	<li>movie</li>
	<li>entertainment
     <ul>
     	<li>hollywood</li>
     	<li>bollywood
             <ul>
             	<li>movies</li>
             	<li>natoks</li>
             </ul>

     	</li>
     	<li>dhollywood</li>
     </ul>
	</li>

</ul>
</div>


</body>
</html>