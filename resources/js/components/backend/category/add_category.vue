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
                          <form @submit.prevent="addCategory">
                            <div class="card-body">
                            <div class="form-group">
                                <label for="name">Category</label>
                                <input type="text" class="form-control" id="name" name="name" v-model="form.name" placeholder="Enter Category">
                                <div v-if="form.errors.has('name')" v-html="form.errors.get('name')" />
                            </div>
                            <div class="form-group">
                                <label for="parent_category">Parent Category</label>
                                <select class="form-control" id="parent_category" name="parent_category" v-model="form.parent_category">
                                    <option value="Main Category">Main Category</option>
                                    <option value="Main Categry">Main Category</option>
                                </select>
                                <div v-if="form.errors.has('parent_category')" v-html="form.errors.get('parent_category')" />
                            </div>
                            <div class="form-group">
                                <label for="url">Url</label>
                                <input type="text" class="form-control" id="url" name="url" v-model="form.url" placeholder="Enter Url">
                                <div v-if="form.errors.has('url')" v-html="form.errors.get('url')" />
                            </div>
                            <div class="form group">
                              <label for="status">Status</label>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" id="active" name="status" value="1" v-model="form.status">
                                <label class="form-check-label">Active</label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" id="inactive" name="status"  value="0" v-model="form.status" >
                                <label class="form-check-label">Inactive</label>
                              </div>
                              <div v-if="form.errors.has('status')" v-html="form.errors.get('status')" />
                            </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary" :disabled="form.busy">Save</button>
                            <button type="reset" class="btn btn-danger float-right">Cancel</button>
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
    name:'add_category',
    data:function(){
        return{
          form: new Form({
            name: null,
            parent_category: null,
            url: null,
            status:null,
          })
        }
    },

    methods:{
        addCategory:function(){
            let reset = this;
            this.form.post('/add-category')
            .then(function(data){
                Toast.fire({
                icon: 'success',
                title: 'Category successfully added'
                })
                // reset form
                //  reset.$router.push('categories');
                reset.form.name = '';
                reset.form.parent_category = '';
                reset.form.url = '';
                reset.form.status = '';
            })
            .catch(function(err) {
                console.log(err)
            })
        }
    },

}
</script>

<style>

</style>