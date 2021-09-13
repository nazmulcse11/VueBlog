<template>
  <div>
      <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Add Category</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
       </section>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
                  <div class="card">
                      <div class="card-header">
                          <router-link to="categories" class="btn btn-primary">Categories</router-link> 
                      </div>
                      <div class="card-body">
                          <form>
                            <div class="card-body">
                            <div class="form-group">
                                <label for="name">Category</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Category">
                            </div>
                            <div class="form-group">
                                <label for="parent_category">Parent Category</label>
                                <select class="form-control" id="parent_category">
                                    <option value="Main Category">Main Category</option>
                                    <option value="Main Category">Main Category</option>
                                    <option value="Main Category">Main Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" id="url" placeholder="Enter Url">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="status">
                                <label class="form-check-label" for="status">Status</label>
                            </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default {
    name:'dashboard'
}
</script>

<style>

</style>