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
                                  
                                  <tr v-for="category in categoriesDetails">
                                      <td>{{ category.name }}</td>
                                      <td><span class="btn badge" :class="statusColor(category.status )">{{ categoryStatus(category.status ) }}</span></td>
                                      <td>{{ category.created_at }}</td>
                                      <td>
                                          <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
                                          <a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></a>
                                      </td>
                                  </tr>
                                  
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
     categoriesDetails(){
        return this.$store.getters.categories;
     }
  },
  mounted() {
      this.$store.dispatch('getCategories');
  },
  methods:{
      categoryStatus: function(status){
          let data = {1:'Active',0:'Inactive'};
          return data[status];
      },
      statusColor: function(status){
          let data = {1:'bg-success',0:'bg-danger'};
          return data[status];
      },
  }
}
</script>
