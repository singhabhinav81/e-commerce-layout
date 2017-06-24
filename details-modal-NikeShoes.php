<div class="modal fade details-5" id="details-5" tableindex="-1" role="dialog" aria-labelledby="details-5" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
   <div class="modal-header">
     <button class="close" type="button" data-dismiss="modal" aria-label="Close">
     <span aria-hidden="true">&times;</span>
   </button>
   <h4 class="modal-title text-center">Nike shoes for Men</h4>
   </div>
   <div class="modal-body">
     <div class="container-fluid">
       <div class="row">
         <div class="col-sm-6">
           <div class="center-block">
               <img src="images/nike.jpg" alt="levis jeans" id="details img-responsive"/>
           </div>
         </div>
         <div class="col-sm-6">
           <h4 class="modal-title text-center">Details</h4>
           <p>
             A pair of blue running shoes, has central lace-ups
   Synthetic Breath Tech upper, strategically placed foam in the collar hugs the Achilles for
   comfortable lockdown
   Cushioned footbed
   Co-molded midsole
   Textured and waffle patterned outsole with flex grooves, has rubber pods and contoured heel</p>
            <hr/>
            <p>Price: $30.00</p>
            <p>Brand: Nike</p>
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
