<?php
require_once('header.php');
require_once('navbar.php');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sx-12 text-right">
            <div class="row text-center statistics">
                <div class="col-sm-5 col-xs-12">
                    <h3><i class="fa fa-upload"></i> UPLOAD</h3>
                    <h4>110</h4>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <h3><i class="fa fa-download"></i> DOWNLOAD</h3>
                    <h4>110</h4>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <h3><i class="fa fa-star"></i> Rate (2 / 5)</h3>
                    <h4 class="fa fa-star" style="color:yellow;"></h4>
                    <h4 class="fa fa-star" style="color:yellow;"></h4>
                    <h4 class="fa fa-star"></h4>
                    <h4 class="fa fa-star"></h4>
                    <h4 class="fa fa-star"></h4>
                </div>
                <div class="col-sm-5 col-xs-12">
                    <h3><i class="fa fa-comment"></i> COMMENTS</h3>
                    <h4>110</h4>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sx-12 text-capitalize user-info">
            <div class="col-xs-12 text-center">
            <img src="img/default.png">
            </div>
            <div class="col-sm-6 col-xs-12">
                Name:
            </div>
            <div class="col-sm-6 col-xs-12">
                Hatem Elsheref
            </div>
            <div class="col-sm-6 col-xs-12">
                Email :
            </div>
            <div class="col-sm-6 col-xs-12">
                hatemelsheref99@gmail.com
            </div>
            <div class="col-sm-6 col-xs-12">
                Phone:
            </div>
            <div class="col-sm-6 col-xs-12">
                01090703457
            </div>
            <div class="col-sm-6 col-xs-12">
                Location :
            </div>
            <div class="col-sm-6 col-xs-12">
                Egypt , Tanta , Kotour , MahalitMisir
            </div>
            <div class="col-sm-6 col-xs-12">
                Status :
            </div>
            <div class="col-sm-6 col-xs-12">
                Active <i class="fa fa-circle" style="color:green;"></i>
            </div>
            <div class=" col-xs-12 text-center">
                <br>
                <button class="btn btn-success"><i class="fa fa-edit"></i> Edit Profile Account</button>
            </div>
        </div>
    </div>
    
    <div class="panel panel-default control-panel">
        <div class="panel-body">
           Control Panel
        </div>
    </div>
    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Published Date</th>
                <th>Author</th>
                <th>Controlers</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
                <td class="controlers">
                    <a href="#"><i class="fa fa-edit"></i></a>
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
                <td class="controlers">
                    <a href="#"><i class="fa fa-edit"></i></a>
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
                <td class="controlers">
                    <a href="#"><i class="fa fa-edit"></i></a>
                    <a href="#"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
                <td class="controlers">
                    <a href="#" title="edit"><i class="fa fa-edit"></i></a>
                    <a href="#" title="remove"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="panel panel-default control-panel">
        <div class="panel-body">
           Downloaded Books Details
        </div>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Published Date</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
            </tr>
            <tr>
                <td>1</td>
                <td>PHP</td>
                <td>10-5-2019</td>
                <td>TOMAS LERDOF</td>
            </tr>
        </tbody>
    </table>


</div>
<?php
require_once('footer.php');