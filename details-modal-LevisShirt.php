<div class="modal fade details-7" id="details-7" tableindex="-1" role="dialog" aria-labelledby="details-7" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <div class="modal-header">
     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
   <h4 class="modal-title text-center">Levis Shirt For Men</h4>
   </div>
   <div class="modal-body">
     <div class="container-fluid">
       <div class="row">
         <div class="col-sm-6">
           <div class="center-block">
               <img src="images/shirt.jpg" alt="levis jeans" id="details img-responsive"/>
           </div>
         </div>
         <div class="col-sm-6">
           <h4 class="modal-title text-center">Details</h4>
           <p>White and black checked casual shirt, has a spread collar, button placket, long sleeves, curved hem
            </p>
            <hr/>
            <p>Price: $17</p>
            <p>Brand: Levis</p>
            <!--form starts here -->
            <form action="add_cart.php" method="post">
              <div class="form-group">
                <div class="col-xs-3">
                  <label for="quantity" id="quantity-label">Quantity</label>
                  <input type="text" class="form-control" id="quantity" name="quantity"/>
                </div>
                <br/><br/>
                <div class="form-group">
                  <label for="size" id="select">size:</label>
                  <select name="size" id="size" class="form-control">
                    <option value=""></option>
                    <option value="30">30</option>
                    <option value="32">32</option>
                    <option value="34">34</option>
                  </select>
                </div>
              </div>
            </form>
            <!--form Ends -->
         </div>
       </div>
     </div>
   </div>
   <div class="modal-footer">
     <button class="btn btn-default" data-dismiss="modal">Close</button>
     <button class="btn btn-warning" type="submit" ><span class="glyphicon glyphicon-shopping-cart"></span>Add To Cart</button>
   </div>
   </div>
  </div>
</div>
