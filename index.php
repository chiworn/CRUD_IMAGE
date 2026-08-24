<?php include "./includes/header.html"; ?>



<div class="container col-9  mt-5">
    <div class="w-100 d-flex  justify-content-between align-items-center">
        <h3 class="text-primary">Product Dashbaord</h3>
        <a href="./from_insert.php" class="btn btn-success">Add product + </a>
    </div>
    <div class="w-100 ">
        <table class="table align-middle">
            <thead>
                <th>ID</th>
                <th>NAME_PRODUCT</th>
                <th>PRICE</th>
                <th>QTY</th>
                <th>DISCRIPTION</th>
                <th>IMAGE</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <tr>
                <td>1001</td>
                <td>COCA_COLA</td>
                <td>12.00$</td>
                <td>100</td>
                <td>Lorem, ipsum.</td>
                <td> <img class="imagepro" src="https://i.pinimg.com/736x/ee/e6/da/eee6dac4bef1091e6dbc75a281ed697e.jpg" alt=""> </td>
                <td>
                    <button class="btn btn-warning">EDIT </button>
                    <button class="btn btn-danger">DELETE</button>
                     </td>

                </tr>
                 <tr>
                <td>1001</td>
                <td>COCA_COLA</td>
                <td>12.00$</td>
                <td>100</td>
                <td>Lorem, ipsum.</td>
                <td> <img class="imagepro" src="https://i.pinimg.com/736x/ee/e6/da/eee6dac4bef1091e6dbc75a281ed697e.jpg" alt=""> </td>
                <td>
                    <button class="btn btn-warning">EDIT </button>
                    <button class="btn btn-danger">DELETE</button>
                     </td>

                </tr>
              
            </tbody>
        </table>

    </div>
</div>


<?php include "./includes/footer.html"; ?>