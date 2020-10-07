<?php

echo '
	<form id="add_user_form">
                <h2 class="mb-3">Add Products</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" id="name" class="form-control" />
                </div>

                 <div class="form-group">
                    <label for="select">Select Category</label>
                    <select class="form-control">
                    	<option>Select Category</option>
                    	<option>Dayble Fabrics</option>
                    	<option>Nylon</option>
                    	<option>Viscos</option>
                    	<option>Chanderi</option>
                    	<option>Premium </option>
                    	<option>Pure Silk </option>
                    	<option>Cotton</option>
                    	<option>Embroading Fabrics</option>
                    	<option>Imported Fabrics</option>
                    	<option>Velvet Collection</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" rows="5"></textarea>
                </div>



                <div class="form-group">
                    <label for="full-description">Full Description</label>
                    <textarea class="form-control" id="full-description" rows="8"></textarea>
                </div>

                <div class="form-group">
                    <label for="fabric-description">Fabric Description</label>
                    <textarea class="form-control" id="fabric-description" rows="8"></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" placeholder="Price" id="price" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="banner-img">Upload Banner</label>
                    <input type="file" accept="image/*" id="banner-img" class="form-control" />
                </div>

                <button class="btn btn-primary px-4 mt-2" type="submit">Upload </button>
      </form>
';


?>