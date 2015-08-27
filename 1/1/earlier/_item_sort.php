    



<div class="container">
	<div class="navbar navbar-default" role="navigation">
		<form action="" class="col-md-4 col-md-offset-4">
			<label class="control-label" for="available">Есть в наличии:</label>
			<input type="checkbox" class="form-control" id="available" name="available"  <?= isset($_GET['available']) ? 'checked' : '' ?> >
			
			<label class="control-label" for="desc">Фильтровать по убыванию:</label>
			<input type="checkbox" class="form-control" id="desc" name="desc"  <?= isset($_GET['desc']) ? 'checked' : '' ?> >
			
			<br>	

			<label class="control-label" for="type">Type:</label>
			<select name="type" class="form-control" id="type">
				<option <?php if(isset($_GET['type']) && $_GET['type']=='phone') echo 'selected'; ?> value="phone">phone</option>
				<option <?php if(isset($_GET['type']) && $_GET['type']=='tv') echo 'selected'; ?> value="tv">tv</option>
				<option <?php if(isset($_GET['type']) && $_GET['type']=='') echo 'selected'; ?> value="">ALL</option>
				
			
				
					
			</select>
		
			<label class="control-label" for="">Price:</label>
			<div class="input-group">
				<div class="input-group-addon">$</div>
				<input type="text" name="price"  class="form-control" value="<?php if(isset($_GET['price'])) echo $_GET['price'] ?>">
			</div>
		
			<label class="control-label" for="">Sort:</label>
			<select name="sort"  class="form-control form-group">
				<option value="id">id</option>
				<option value="price">price</option>
				<option value="name">name</option>
			</select>
		
			<input type="submit" value="submit"  class="btn-primary form-control form-group">

		</form>
	</div>
</div>