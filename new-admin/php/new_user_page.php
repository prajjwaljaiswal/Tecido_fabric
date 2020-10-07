<?php

echo '
                <form id="add_user_form">
                <h2 class="mb-3">Add New User</h2>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Name" id="name" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" id="email" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="number" name="number" placeholder="Mobile Number" id="number" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea id="address" name="address" cols="5" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" id="password" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="name_client">Name Client (Brand)</label>
                    <input type="text" name="name_client" placeholder="Name Client" class="form-control" id="name_client" />
                </div>

                <button type="submit" class="btn btn-danger px-4 py-2">Create</button>
            </form>
';

?>