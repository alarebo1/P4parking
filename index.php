<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.5.8/cleave.min.js"></script>
    <title>Parking Lot</title>
</head>

<body style="background-color:rgb(202, 173, 230);">
   
    
    <header class="shadow">
        <div class="header-content d-flex justify-content-center p-2">
            <img src="./Images/t7Rental.png" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">T7 Parking</div>
        </div>
    </header> 
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
        <li><a data-toggle="tab" href="#cart">View Cart</a></li>
        <li><a data-toggle="tab" href="#price">Menu 2</a></li>
    </ul>
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="form-container mt-5">
                    <form class="w-50 mx-auto" id="entryForm">
                        <h5 class="text-center">Add Car to Parking Lot</h5>
                        <div class="form-group">
                            <label for="Customer">Name:</label>
                            <input type="text" class="form-control rounded-0 shadow-sm" id="Customer" placeholder="Customer">
                        </div>
                        <div class="form-group">
                            <label for="parkslot"> Parking Sections: </label>
                            <select name="parkslots" id="parkslots" size="11" required>
                                <option value="p1">P1 Section 1</option>
                                <option value="p2">P1 Section 2</option>
                                <option value="p3">P1 Section 3</option>
                                <option value="p4">P1 Section 4</option>
                                <option value="p5">P1 Section 5</option>
                                <option value="p6">P1 Section 6</option>
                                <option value="p7">P1 Section 7</option>
                                <option value="p8">P1 Section 8</option>
                                <option value="p9">P1 Section 9</option>
                                <option value="p10">P1 Section 10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="car">Car:</label>
                            <input type="text" class="form-control rounded-0 shadow-sm" id="car" placeholder="Car">
                        </div>
                        <div class="form-group">
                            <label for="licensePlate">License Plate:</label>
                            <input type="text" class="form-control rounded-0 shadow-sm" id="licensePlate" placeholder="NN-NN-LL,NN-LL-NN,....etc">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="entryDate">Entry Date:</label>
                                <input type="datetime-local" class="form-control rounded-0 shadow-sm" id="entryDate">
                            </div>
                            <div class="col-6">
                                <label for="exitDate">Exit Date:</label>
                                <input type="datetime-local" class="form-control rounded-0 shadow-sm" id="exitDate">
                            </div>
                        </div>
                        <button type="submit" value="addcar" name= "addcar" class="btn mx-auto d-block mt-5 rounded-0 shadow" id="btnOne">Add Car</button>
                    </form>
                </div>
                

            
        
        </div>
        <div id= cart class="tab-pane fade">
            <div class="table-container mt-5 mb-5 w-75 mx-auto" >
                <h5 class="text-center mb-3">List of Cars in Parking Lot</h5>
                <input type="text" class="w-100 mb-3" id="searchInput" placeholder="Search...">
                <table class="table table-striped shadow " id="parkingTable">
                    <thead class="text-white" id="tableHead">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Car</th>
                            <th scope="col">License Plate</th>
                            <th scope="col">Entry Date</th>
                            <th scope="col">Exit Date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Parking Slot</th>
                            <th scope="col">Actions</th>    
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    
                    </tbody>
                </table>
                
                <div class="creditCardForm">
                    <div class="heading">
                        <h1>Confirm Purchase</h1>
                    </div>
                    <div class="payment">
                        <form>
                            <div class="form-group Customer">
                                <label for="Customer">Customer</label>
                                <input type="text" class="form-control" id="Customer">
                            </div>
                            <div class="form-group CVV">
                                <label for="cvv">CVV</label>
                                <input type="text" class="form-control" id="cvv">
                            </div>
                            <div class="form-group" id="card-number-field">
                                <label for="cardNumber">Card Number</label>
                                <input type="text" class="form-control" id="cardNumber">
                            </div>
                            <div class="form-group" id="expiration-date">
                                <label>Expiration Date</label>
                                <select>
                                    <option value="01">January</option>
                                    <option value="02">February </option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                                <select>
                                    <option value="16"> 2021</option>
                                    <option value="17"> 2022</option>
                                    <option value="18"> 2023</option>
                                    <option value="19"> 2024</option>
                                    <option value="20"> 2025</option>
                                    <option value="21"> 2026</option>
                                </select>
                            </div>
                            <input type="hidden" id="custname" value=" ">
                            <input type="hidden" id="pslot" value=" ">
                            <input type="hidden" id="price" value=" ">
                            <input type="hidden" id="plate" value=" ">
                            <input type="hidden" id="exitday" value=" ">
                            <input type="hidden" id="enteryday" value=" ">
                            <div class="form-group" id="credit_cards">
                                <img src="./Images/visa.jpg" id="visa">
                                <img src="./Images/mastercard.jpg" id="mastercard">
                                <img src="./Images/amex.jpg" id="amex">
                            </div>
                            <div class="form-group" id="pay-now">
                                <button type="submit" class="btn btn-default" id="confirm-purchase">Confirm</button>
                            </div>

                        </form>
                        <h3>Dummy Credit Card numbers</h3>
                        <table class="ddata">
                            <header>
                                <tr>
                                    <th scope="col">amex</th>
                                    <th scope="col">Visa</th>
                                    <th scope="col">mastercard</th>    
                                </tr>
                            </header>
                            <tbody>
                                <tr>
                                    <td> 344511112046512</td>
                                    <td> 4188415419331299</td>
                                    <td> 5121297817475606</td>
                                </tr>
                                <tr>
                                    <td> 349208437315764</td>
                                    <td> 4185126935301111</td>
                                    <td> 5136028068398137</td>
                                </tr>
                            </tbody>
                        </table>
                       
                    </div>
                </div>
                    
            </div>
            
        </div>
        <script src="./JS/jquery.payform.min.js" charset="utf-8"></script>
        <script src="./JS/script.js"></script>
        <script src="./JS/bootstrap.min.js"></script>       
        <script src="./JS/core.js"></script>
    </div>
</body>        
</html>
    
