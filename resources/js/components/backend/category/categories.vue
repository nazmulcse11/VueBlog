<template>
 <div>
      <div>
      <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Categories</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Category</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
       </section>
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                         <router-link to="add-category" class="btn btn-primary">Add Category</router-link> 
                      </div>
                      <div class="card-body">
                          <table class="table table-bordered">
                              <thead>
                                  <tr>
                                      <th>Name</th>
                                      <th>Status</th>
                                      <th>Created Date</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Science</td>
                                      <td>Active</td>
                                      <td>12 Mar 2021</td>
                                      <td>edit delete</td>
                                  </tr>
                                  <tr>
                                      <td>Science</td>
                                      <td>Active</td>
                                      <td>12 Mar 2021</td>
                                      <td>edit delete</td>
                                  </tr>
                                  <span>{{ something }}</span>
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
 </div>
</template>

<script>
export default {
  name:'categories',
  computed:{
     something(){
        return this.$store.getters.count;
     }
  }
}
</script>

<style>

</style>