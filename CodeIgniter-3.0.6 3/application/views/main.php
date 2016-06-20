<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

    .header{
         color: #ffffff;
         background-color: #000000;
         font-size: 100%;

    }

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
	    color:  #ffffff;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		color:  #ffffff;
		background-color: #490624;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
	    color: #fffff
	    background-color: #000000
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
	    color:  #ffffff;
	    background-color: #490624;
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
<div class="header">

        <h1>Welcome to EMA where we have your employment needs </h1>

</div>
<!--add employee to data base-->
<div id="container">


	<div id="body">
		<form method="post" action="<?php echo site_url('Welcome/update'); ?>">
		    <table>
		       <tr>
		           <td>First Name</td>
		           <td><input type="text" name="fname" ></td>
		       </tr>

		        <tr>
                     <td>Last Name:</td>
                	 <td><input type="text" name="lname" ></td>
                </tr>

		       <tr>
    		       <td>Department:</td>
    		       <td><input type="text" name="department" ></td>
    		    </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" ></td>
                </tr>

                 <tr>
      		       <td>Phone:</td>
      		       <td><input type="text" name="phone"></td>
      		     </tr>

                 <tr>
                     <input type="submit"  value="Save" name="submit">
                 </tr>
		    </table>
        </form>
        <table border="1">
            <thead>
                    <th>userid</th>
                    <th>fname</th>
                    <th>lname</th>
                    <th>department</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Action</th>

            </thead>
        </table>
        <tbody>
            <?php
                foreach($this->m->gettable() as $row)
                {
                   echo "<tr>
                              <td>$row->userid</td>
                              <td>$row->fname</td>
                              <td>$row->lname</td>
                              <td>$row->department</td>
                              <td>$row->email</td>
                              <td>$row->phone</td>
                              <td><a href='".site_url()."'>Edit</a> |
                                  <a href='".site_url('')."'>Delete</a>
                              </td>
                        </tr>";
                }

            ?>
        </tbody>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

