<?php
	include "parts/header.php";
?>
<div class="clearfix">&nbsp;</div>
<h1 class="col-12">helske-sk</h1>
<div class="row">
<div class="col-12 col-md-7">
    <div class="card-box">
        <h2 class="m-t-0 header-title">Stránky webu</h2>
        <p class="text-muted font-14 m-b-20">
            Seznam <code>obsahových</code> stránek webu
        </p>

        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Název</th>
                <th>Obsahuje</th>
                <th>Odkaz</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
			$fileList = glob("*");
			$counter = 1;
			foreach($fileList as $filename){
			    if(is_file($filename) and $filename<>"config.codekit3" and $filename<>"index.php"){
				    echo '
				    <tr>
		                <th scope="row">'.$counter.'</th>
		                <td>'.str_replace(".php", "", $filename).'</td>
		                <td>--</td>
		                <td><a href="'.$filename.'">Zobrazit</a></td>
		            </tr>
				    ';
				    $counter++;
			    }   
			}
			?>
            </tbody>
        </table>
    </div>
</div>

<div class="col-12 col-md-5">
    <div class="card-box">
        <h2 class="m-t-0 header-title">Prvky webu</h2>
        <p class="text-muted font-14 m-b-20">
            Seznam jednotlivých <code>bloků/prvků</code> webu
        </p>

        <table class="table table-bordered mb-0 table-condensed">
            <thead>
            <tr>
                <th>#</th>
                <th>Název</th>
            </tr>
            </thead>
            <tbody>
            
            <?php
			$fileList = glob("parts/*");
			$counter = 1;
			foreach($fileList as $filename){
			    if(is_file($filename) and $filename<>"config.codekit3" and $filename<>"index.php"){
				    
				    echo '
				    <tr>
		                <th scope="row">'.$counter.'</th>
		                <td>'.$filename.'</td>
		            </tr>
				    ';
				    $counter++;
			    }   
			}
			?>
            </tbody>
        </table>
    </div>
</div>           
</div>