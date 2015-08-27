<h1>Add picture</h1>

<form action="" class="col-sm-5" method="POST" enctype="multipart/form-data">

    <label for="image" class="control-label">Image</label>
    <input type="file" name="image" id="image" class="form-control">

    <label for="description" class="control-label">Description</label>
    <input type="text" name="description" id="description" class="form-control">

    <label for="category" class="control-label">Category</label>
    <!-- <input type="text"  name="category" id="category" class="form-control" > -->
    <select size="2" name="category" id="category" class="form-control">
    <option disabled>Выберите категорию</option>
    <option selected value="one">one</option>
    <option value="two">two</option>
    <option value="tree">tree</option>
   
   </select>


    </select>
	
	<br>
    <input type="submit" value="Upload" class="btn btn-success">
	

</form>